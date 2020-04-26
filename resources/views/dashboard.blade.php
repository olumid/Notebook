<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container-fluid">
    @include('layout.header')
    <section >
        <div class="top">
        <h2>Your Notebook</h2>
        <button type="submit" class="btn btn-primary " style="background-color: #262626; border: none; padding:10px; float: right;margin-top: -50px"> <a href="{{ route('add-note') }}">New NoteBook+</a> <button>
        </div>

        <div class="group" style="margin-left: 30px">
            @foreach($notebooks as $notebook)
            <div class="icon" >
                <a style="font-size:20px; text-align: center" href="{{route('show', $notebook->id)}}">{{$notebook->name}}</a>
                <img src="{{asset('images/images.jpg')}}" style="width: 220px; height: 200px; margin-top: 10px; margin-bottom: 10px">
                <a href="{{route('edit', $notebook->id)}}" style="font-size: 18px">Edit Notebook</a>
                <form method="post" action="{{ route('delete', $notebook->id) }}">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}

                    <button type="submit" class="btn btn-danger" style=" border: none; padding:7px; float: right; margin-top: -25px">Delete</button>
                </form>

            </div>
             @endforeach
        </div>

    </section>
</div >
</body>
</html>