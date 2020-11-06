<?php

namespace App\Http\Controllers;

use App\Http\Requests\NotebookCreateRequest;
use App\Notebook;
use Illuminate\Http\Request;

class NotebookController extends Controller
{
    /**
     * Assigning Auth Middleware.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Displaying Notebook Dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('notebooks.dashboard');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notebooks = auth()->user()->notebooks;
        return view('notebooks.index', compact('notebooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notebooks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NotebookCreateRequest $request)
    {
        $user_id = auth()->user()->id;
        $request['user_id'] = $user_id;
        $data = $request->all();
        Notebook::create($data);
        return redirect(route('notebooks.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Notebook $notebook)
    {
        $notes = $notebook->notes;
        return view('notes.index', compact('notes','notebook'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Notebook $notebook)
    {
        $notebook = auth()->user()->notebooks->find($notebook);
        return view('notebooks.edit', compact('notebook'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NotebookCreateRequest $request, Notebook $notebook)
    {
        $notebook = auth()->user()->notebooks->find($notebook);
        $notebook->update(['name' => $request->name]);
        return redirect(route('notebooks.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Notebook $notebook)
    {
        $notebook = auth()->user()->notebooks->find($notebook);
        $notebook->delete();
        return redirect(route('notebooks.index'));
    }
}
