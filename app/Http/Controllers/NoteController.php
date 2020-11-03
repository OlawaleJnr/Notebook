<?php

namespace App\Http\Controllers;

use App\Note;
use App\Notebook;
use Illuminate\Http\Request;

class NoteController extends Controller
{

    /**
     * Middleware Constructor
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Note::create($data);
        // Get the notbook id and send to the notebook show view
        $notebook = $request->notebook_id;
        return redirect(route('notebooks.show', compact('notebook')));
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
    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note)
    {
        $data = $request->all();
        $note->update($data);
        $notebook = $note->notebook_id;
        return redirect(route('notebooks.show', compact('notebook')));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        $note->delete();
        $notebook = $note->notebook_id;
        return redirect(route('notebooks.show', compact('notebook')));
    }

    /**
     * Show the form for creating a new note resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createNote(Notebook $notebook)
    {
        return view('notes.create', compact('notebook'));
    }
}
