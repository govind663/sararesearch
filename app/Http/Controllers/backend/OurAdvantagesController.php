<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\Backend\OurAdvantagesRequest;
use App\Models\OurAdvantages;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class OurAdvantagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advantages = OurAdvantages::orderBy("id", "desc")->whereNull('deleted_at')->get();

        return view('backend.our_advantages.index', [
            'advantages' => $advantages
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.our_advantages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OurAdvantagesRequest $request)
    {
        $request->validated();

        try {

            $advantages = new OurAdvantages();

            $advantages->title = $request->title;
            $advantages->description = $request->description;
            $advantages->advantages_title = json_encode($request->advantages_title);
            $advantages->advantages_description = json_encode($request->advantages_description);
            $advantages->inserted_by = Auth::user()->id;
            $advantages->inserted_at = Carbon::now();
            $advantages->save();

            return redirect()->route('our-advantages.index')->with('success', __('Our Advantages has been successfully created.'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', __('Something went wrong. Please try again.'));
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
        $advantages = OurAdvantages::findOrFail($id);
        if (!$advantages) {
            return redirect()->back()->with('error', __('Our Advantages not found.'));
        }

        // Decode JSON advantages_title data
        $advantages->advantages_title = json_decode($advantages->advantages_title, true);

        // Decode JSON advantages_description data
        $advantages->advantages_description = json_decode($advantages->advantages_description, true);

        return view('backend.our_advantages.edit', [
            'advantages' => $advantages,            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OurAdvantagesRequest $request, string $id)
    {
        $request->validated();

        try {

            $advantages = OurAdvantages::findOrFail($id);

            $advantages->title = $request->title;
            $advantages->description = $request->description;
            $advantages->advantages_title = json_encode($request->advantages_title);
            $advantages->advantages_description = json_encode($request->advantages_description);
            $advantages->modified_by = Auth::user()->id;
            $advantages->modified_at = Carbon::now();
            $advantages->save();

            return redirect()->route('our-advantages.index')->with('success', __('Our Advantages has been successfully updated.'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', __('Something went wrong. Please try again.'));
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
            
            $advantages = OurAdvantages::findOrFail($id);
            $advantages->update($data);
            
            return redirect()->route('our-advantages.index')->with('success', __('Our Advantages has been successfully deleted.'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', __('Something went wrong. Please try again.'));
        }
    }
}
