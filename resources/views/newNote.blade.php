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
</div >
<h1 style="margin-left: 20px">Create Notebook</h1>
<form style="margin: 30px" method="post" action="{{route('notes.store')}}">
    {{csrf_field()}}


    <div class="form-group">
        <label for="name">Title</label>
        <input class="form-control" type="text" name="title">
    </div>

    <div class="form-group">
        <label for="name">Content</label>
        <textarea class="form-control" name="body" id="" cols="30" rows="10"></textarea>
    </div>
    <!-- =====this is passing the id of the notebook -->
    <input type="hidden" name="notebook_id"  value="{{$id}}">

    <button class="btn btn-primary" type="submit" style="background-color: #262626;">Submit </button>

</form>
</body>
</html>