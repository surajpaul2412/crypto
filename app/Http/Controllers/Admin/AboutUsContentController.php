<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AboutUsContent;

class AboutUsContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutUsContent = AboutUsContent::all();
        return view('admin.aboutUsContent.index', compact('aboutUsContent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.aboutUsContent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'heading'=> 'required|min:3|max:255',
            'content'=> 'required|min:3',
        ]);

        $aboutUsContent = new AboutUsContent();
        $aboutUsContent->heading = $request->heading;
        $aboutUsContent->content = $request->content;
        $aboutUsContent->save();
        return redirect('/admin/aboutUsContent')->with('success', 'Content has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aboutUsContent = AboutUsContent::findOrFail($id);
        return view('admin.aboutUsContent.edit', compact('aboutUsContent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $form_data = array(
            'heading' => $request->heading,
            'content' => $request->content,
        );

        AboutUsContent::whereId($id)->update($form_data);
        return redirect('/admin/aboutUsContent')->with('success', 'Content has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aboutUsContent = AboutUsContent::findOrFail($id);
        $aboutUsContent->delete();
        return redirect('/admin/aboutUsContent')->with('success', 'Content has been deleted successfully.');
    }
}
