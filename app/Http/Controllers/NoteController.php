<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;


use App\Http\Requests;

class NoteController extends Controller
{
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $dataInput = $request->all();
        Note::create($dataInput);

        $notebookId = $request->notebook_id;

        return redirect()->route('show', compact('notebookId'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $note = Note::find($id);

        return view('showNote', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$notebook = $user-notebooks()->where('id',$id)->first();
        $note= Note::find($id);
        return view("editNote", compact('note'));

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
      $InputData = $request->all();
      $note = Note::find($id);

     $note->update($InputData);

     return redirect()->route('show', $note->notebook_id);

    }


    public function destroy($id)
    {
        Note::destroy($id);
        return back();

    }
        public function createNote($notebookId)
    {
       return view('newNote')->with('id', $notebookId);

    }
}
