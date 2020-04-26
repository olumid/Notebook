@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <section class="txt">
            <h2>Notebook</h2>
            <p style="color: snow; font-size: 18px"> store and organize your thought in notebook and Notebook web app makes this easier than ever </p>
            <button type="submit" class="btn btn-primary bt2" style="background-color: #262626; border: none; padding:10px"><a href="{{ route('display') }}" style="color: #f5f5f5">Your NoteBooks</a></button>
        </section>
    </div >
@endsection

