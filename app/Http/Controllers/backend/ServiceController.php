<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\Backend\ServiceRequest;
use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::orderBy("id", "desc")->whereNull('deleted_at')->get();

        return view('backend.services.index', [
            'services' => $services
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validated();

        try {

            $service = new Service();

            // ==== Upload (icon)
            if ($request->hasFile('icon')) {
                $image = $request->file('icon');
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/sara_research/service/icon'), $new_name);

                $image_path = "/sara_research/service/icon/" . $new_name;
                $service->icon = $new_name;
            } else {
                $service->icon = null; // Clear the icon if not uploaded
            }

            $service->name = $request->name;
            $service->slug = $request->slug;
            $service->description = json_encode($request->description);
            $service->status = $request->status;
            $service->inserted_at = Carbon::now();
            $service->inserted_by = Auth::user()->id;
            $service->save();

            return redirect()->route('service.index')->with('success','Banner has been successfully created.');

        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong  - '.$ex->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::findOrFail($id);

        // Decode JSON description data
        $description = json_decode($service->description, true) ?? [];

        return view('backend.services.edit', [
            'service' => $service,
            'description' => $description,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceRequest $request, string $id)
    {
        $request->validated();

        try {

            $service = Service::findOrFail($id);

            // ==== Upload (icon)
            if ($request->hasFile('icon')) {
                // Delete the old image if it exists
                if ($service->icon) {
                    $oldImagePath = public_path('/sara_research/service/icon/' . $service->icon);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath); // Delete the old image file
                    }
                }

                // Process the new image
                $image = $request->file('icon');
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/sara_research/service/icon'), $new_name);

                // Update the service object with the new image path
                $service->icon = $new_name;
            } else {
                $service->icon = $service->icon; // Keep the old image if not uploaded
            }

            $service->name = $request->name;
            $service->slug = $request->slug;
            $service->description = json_encode($request->description);
            $service->status = $request->status;
            $service->inserted_at = Carbon::now();
            $service->inserted_by = Auth::user()->id;
            $service->save();

            return redirect()->route('service.index')->with('success','Service has been successfully updated.');
        } catch(\Exception $ex){
            return redirect()->back()->with('error','Something Went Wrong  - '.$ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data['deleted_by'] =  Auth::user()->id;
        $data['deleted_at'] =  Carbon::now();
        try {

            $service = Service::findOrFail($id);
            $service->update($data);

            return redirect()->route('service.index')->with('success','Service has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
