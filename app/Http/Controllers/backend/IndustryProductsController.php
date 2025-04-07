<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\Backend\IndustryProductsRequest;
use App\Models\IndustryProducts;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class IndustryProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $industries = IndustryProducts::orderBy("id", "desc")->whereNull('deleted_at')->get();

        return view('backend.industry_products.index', [
            'industries' => $industries
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.industry_products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(IndustryProductsRequest $request)
    {
        $request->validated();

        try {

            $industry = new IndustryProducts();

            $industry->name = $request->name;
            $industry->slug = $request->slug;
            $industry->inserted_by = Auth::user()->id;
            $industry->inserted_at = Carbon::now();
            $industry->save();

            return redirect()->route('industry-products.index')->with('success', __('Product by Industries has been successfully created.'));
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
        $industry = IndustryProducts::findOrFail($id);

        return view('backend.industry_products.edit', [
            'industry' => $industry
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(IndustryProductsRequest $request, string $id)
    {
        $request->validated();

        try {

            $industry = IndustryProducts::findOrFail($id);

            $industry->name = $request->name;
            $industry->slug = $request->slug;
            $industry->modified_by = Auth::user()->id;
            $industry->modified_at = Carbon::now();
            $industry->save();

            return redirect()->route('industry-products.index')->with('success', __('Product by Industries has been successfully updated.'));
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
            
            $industry = IndustryProducts::findOrFail($id);
            $industry->update($data);

            return redirect()->route('industry-products.index')->with('success', __('Product by Industries has been successfully deleted.'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', __('Something went wrong. Please try again.'));
        }
    }
}
