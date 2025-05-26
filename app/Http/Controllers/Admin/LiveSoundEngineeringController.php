<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\LiveSoundEngineering;

class LiveSoundEngineeringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $liveSoundEngineering = LiveSoundEngineering::all();
        return view('admin.liveSoundEngineeringDiploma.index', compact('liveSoundEngineering'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $liveSoundEngineering = LiveSoundEngineering::findOrFail($id);
        return view('admin.liveSoundEngineeringDiploma.edit', compact('liveSoundEngineering'));
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
        $request->validate([
            'content' => 'required|min:3',
        ]);

        $form_data = [
            'content' => $request->content
        ];

        LiveSoundEngineering::whereId($id)->update($form_data);

        return redirect('/admin/liveSoundEngineeringDiploma')->with('success', 'Content has been updated.');
    }
}
