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
<h1 style="margin-left: 20px">Edit Notebook</h1>
<form style="margin: 30px" method="post" action="/dashboard/{{$notebook->id}}">
    {{csrf_field()}}
    {{method_field('PUT')}}

    <div class="form-group">
        <label for="name">Notebook name</label>
        <input class="form-control" type="text" name="name" value="<?php echo $notebook->name ?>">
    </div>
    <button class="btn btn-primary" type="submit" style="background-color: #262626;">Change </button>


</form>
</body>
</html>