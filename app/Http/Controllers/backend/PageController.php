<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\Backend\PageRequest;
use App\Models\Page;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::orderBy("id","desc")->whereNull('deleted_at')->get();

        return view('backend.pages.index', [
            'pages' => $pages
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PageRequest $request)
    {
        $request->validated();

        try {

            $page = new Page();

            $page->title = $request->title;
            $page->inserted_at = Carbon::now();
            $page->inserted_by = Auth::user()->id;
            $page->save();

            return redirect()->route('page.index')->with('success','Page Name has been successfully created.');

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
        $page = Page::findOrFail($id);

        return view('backend.pages.edit', [
            'page' => $page
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PageRequest $request, string $id)
    {
        $request->validated();
        try {

            $page = Page::findOrFail($id);

            $page->title = $request->title;
            $page->modified_at = Carbon::now();
            $page->modified_by = Auth::user()->id;
            $page->save();

            return redirect()->route('page.index')->with('success', 'Page Name has been successfully updated.');

        } catch (\Exception $ex) {
            return redirect()->back()->with('error', 'Something went wrong while updating the page name. Please try again.');
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

            $page = Page::findOrFail($id);
            $page->update($data);

            return redirect()->route('page.index')->with('success','Page Name has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
