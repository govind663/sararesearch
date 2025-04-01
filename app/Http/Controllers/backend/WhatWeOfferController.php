<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\Backend\WhatWeOfferRequest;
use App\Models\WhatWeOffer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class WhatWeOfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $what_we_offers = WhatWeOffer::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view('backend.what_we_offer.index', [
            'what_we_offers' => $what_we_offers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.what_we_offer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WhatWeOfferRequest $request)
    {
        $request->validated();

        try {

            $what_we_offer = new WhatWeOffer();

            $what_we_offer->title = $request->title;
            $what_we_offer->description = $request->description;
            $what_we_offer->inserted_at = Carbon::now();
            $what_we_offer->inserted_by = Auth::user()->id;
            $what_we_offer->save();

            return redirect()->route('what-we-offer.index')->with('success','What we offer has been successfully created.');

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
        $what_we_offer = WhatWeOffer::findOrFail($id);

        return view('backend.what_we_offer.edit', [
            'what_we_offer' => $what_we_offer
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WhatWeOfferRequest $request, string $id)
    {
        $request->validated();

        try {

            $what_we_offer = WhatWeOffer::findOrFail($id);

            $what_we_offer->title = $request->title;
            $what_we_offer->description = $request->description;
            $what_we_offer->modified_at = Carbon::now();
            $what_we_offer->modified_by = Auth::user()->id;
            $what_we_offer->save();

            return redirect()->route('what-we-offer.index')->with('success','What we offer has been successfully updated.');

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

            $what_we_offer = WhatWeOffer::findOrFail($id);
            $what_we_offer->update($data);

            return redirect()->route('what-we-offer.index')->with('success','What we offer has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
