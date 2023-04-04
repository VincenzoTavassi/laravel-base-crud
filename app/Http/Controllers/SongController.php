<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Song::all();
        return view('songs.index', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('songs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // VALIDATION
        $this->validate($request, [
            'title' => 'required|max:150',
            'album' => 'max:100',
            'author' => 'max:100',
            'editor' => 'max:100',
            'length' => 'required|integer'
        ], [
            'title' => "Il titolo è un campo obbligatorio.",
            'album' => ":attribute - Massimo :max caratteri",
            'author' => ":attribute - Massimo :max caratteri",
            'editor' => ":attribute - Massimo :max caratteri",
            'length' => "La durata in secondi deve essere presente ed essere un numero valido"
        ]);


        // EXECUTION
        $data = $request->all();
        $song = new Song;
        $song->fill($data);
        $song->save();
        return redirect()->route('songs.show', $song);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        return view('songs.show', compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        return view('songs.edit', compact('song'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        // VALIDATION
        $this->validate($request, [
            'title' => 'required|max:150',
            'album' => 'max:100',
            'author' => 'max:100',
            'editor' => 'max:100',
            'length' => 'required|integer'
        ], [
            'title' => "Il titolo è un campo obbligatorio.",
            'album' => ":attribute - Massimo :max caratteri",
            'author' => ":attribute - Massimo :max caratteri",
            'editor' => ":attribute - Massimo :max caratteri",
            'length' => "La durata in secondi deve essere presente ed essere un numero valido"
        ]);

        // EXECUTION
        $data = $request->all();
        $song->update($data);
        return redirect()->route('songs.show', $song);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
