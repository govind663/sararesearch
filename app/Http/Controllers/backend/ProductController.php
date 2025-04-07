<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\Backend\ProductRequest;
use App\Models\Product;
use App\Models\ProductPermission;
use App\Models\IndustryProducts;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy("id", "desc")->whereNull('deleted_at')->get(['id', 'name']);

        return view('backend.products.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $industries = IndustryProducts::orderBy("id", "desc")->whereNull('deleted_at')->get();
        return view('backend.products.create',[
            'industries' => $industries
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $request->validated();

        try {

            // Step 1: Store the Product
            $product = new Product();
            $product->name = $request->name;
            $product->slug = $request->slug;
            $product->inserted_by = Auth::user()->id;
            $product->inserted_at = Carbon::now();
            $product->save();

            // Step 2: Store Industry Permissions (if any selected)
            if ($request->has('permissions')) {
                foreach ($request->permissions as $industry_id => $permission) {
                    ProductPermission::create([
                        'product_id' => $product->id,
                        'industry_product_id' => $industry_id,
                        'view' => isset($permission['view']) ? 1 : 0, // Store 1 if checked, 0 otherwise
                        'inserted_by' => Auth::user()->id,
                        'inserted_at' => Carbon::now(),
                    ]);
                }
            }

            return redirect()->route('product.index')->with('success', __('Product has been successfully created.'));
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
        $product = Product::findOrFail($id);
        $industries = IndustryProducts::orderBy("id", "desc")->whereNull('deleted_at')->get();

        return view('backend.products.edit', [
            'product' => $product,
            'industries' => $industries
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, string $id)
    {
        $request->validated();

        try {

            $product = Product::findOrFail($id);

            $product->name = $request->name;
            $product->slug = $request->slug;
            $product->modified_by = Auth::user()->id;
            $product->modified_at = Carbon::now();
            $product->save();

            return redirect()->route('product.index')->with('success', __('Product has been successfully updated.'));
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
        $data['deleted_at'] = Carbon::now();

        try {

            $product = Product::findOrFail($id);
            $product->update($data);

            return redirect()->route('product.index')->with('success', __('Product has been successfully deleted.'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', __('Something went wrong. Please try again.'));
        }
    }
}
