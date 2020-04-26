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

        <div class="top" style="padding-bottom: 10px">
            <h2> Notes</h2>
            <a href="{{route('notes.createNote', $notebooks->id)}}">
            <button type="submit" class="btn btn-primary " style="background-color: #262626; border: none; padding:10px; float: right;margin-top: -40px">New Note+</button>
            </a>


        </div>


        <div>
            @foreach($notes as $note)
            <div style="box-shadow: 5px 5px 5px 5px rgba(0,0,0,.3); padding: 5px;margin-top: 10px;height: 200px; width: 400px; float: left; margin-right: 30px; margin-bottom: 20px">
                <a href="{{route('notes.show', $note->id)}}">
                <h3 style="color: mediumblue">{{$note->title}}</h3>
                </a>
                <p style="height:80px; margin-bottom: 50px; overflow: hidden; padding: 8px ">{{$note->body}}</p>
                <a href="{{route('notes.edit', $note->id)}}"><button type="submit" class="btn btn-primary" style="margin-top: -65px">Edit</button></a>

                <form action="{{route('notes.destroy', $note->id)}}" method="post" >
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger" style="float: right; margin-top: -65px">Delete</button>
                </form>

            </div>
            @endforeach



        </div>




    </section>
</div >
</body>
</html>