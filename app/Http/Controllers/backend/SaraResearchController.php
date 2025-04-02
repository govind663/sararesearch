<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\Backend\SaraResearchRequest;
use App\Models\SaraResearch;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class SaraResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sararesearch = SaraResearch::orderBy("id","desc")->whereNull('deleted_at')->get();

        return view('backend.sara_research.index', [
            'sararesearch' => $sararesearch
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.sara_research.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaraResearchRequest $request)
    {
        $request->validated();

        try {

            $sararesearch = new SaraResearch();

            $sararesearch->title = $request->title;
            $sararesearch->description = $request->description;
            $sararesearch->inserted_at = Carbon::now();
            $sararesearch->inserted_by = Auth::user()->id;
            $sararesearch->save();

            return redirect()->route('sara-research.index')->with('success','Sara Research has been successfully created.');

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
        $sararesearch = SaraResearch::findOrFail($id);

        return view('backend.sara_research.edit', [
            'sararesearch' => $sararesearch
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SaraResearchRequest $request, string $id)
    {
        $request->validated();

        try {

            $sararesearch = SaraResearch::findOrFail($id);

            $sararesearch->title = $request->title;
            $sararesearch->description = $request->description;
            $sararesearch->modified_at = Carbon::now();
            $sararesearch->modified_by = Auth::user()->id;
            $sararesearch->save();

            return redirect()->route('sara-research.index')->with('success','Sara Research has been successfully updated.');

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

            $sararesearch = SaraResearch::findOrFail($id);
            $sararesearch->update($data);

            return redirect()->route('sara-research.index')->with('success','Sara Research has been successfully deleted.');

        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong  - '.$ex->getMessage());
        }
    }
}
