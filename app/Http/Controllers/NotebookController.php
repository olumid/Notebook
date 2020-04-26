<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Notebook;
use Illuminate\Http\Request;


class NotebookController extends Controller
{
    public function index(){
        //$notebooks = Notebook::all();
        $user = Auth::user();
        //accessing the linking func
        $notebooks = $user->notebooks;
        return view('dashboard', compact('notebooks'));
    }

    public function create(){

        return view('createNote');
    }
    
    public function store(Request $request){

        $dataInput = $request->all();
        $user = Auth::user();
        $notebooks = $user->notebooks()->create($dataInput);
         //Notebook::create($dataInput);

        return redirect('/dashboard');
    }

    public function edit($id){
       //$notebook  = Notebook::where('id', $id)->first();
        $user = Auth::user();
        //$notebook = $user-notebooks()->where('id',$id)->first();
        $notebook = $user->notebooks()->find($id);
        return view('editTable')->with('notebook', $notebook);
    }

    public function update(Request $request, $id){
        //$notebook  = Notebook::where('id', $id)->first();
        //get the user
        $user = Auth::user();
        //find the notebook
        $notebook = $user->notebooks()->find($id);
        //update the notebook
        $notebook->update($request->all());

        return redirect('/dashboard');
    }


    public function del( $id){
       // $notebook  = Notebook::where('id', $id)->first();
        $user = Auth::user();

        $notebook = $user->notebooks()->find($id);
        $notebook->delete();

        return redirect('/dashboard');
    }


    public function show($id){
        $notebooks = Notebook::find($id);

        $notes = $notebooks->notes;

        return view('notes', compact('notes','notebooks'));
    }




}


