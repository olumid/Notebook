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
<form style="margin: 30px" method="post" action="{{route('notes.update', $note->id)}}">
    {{csrf_field()}}
    {{method_field('PUT')}}

    <div class="form-group">
        <label for="name">Note Title</label>
        <input class="form-control" type="text" name="title" value = "<?php echo $note->title ?>">

        <label for="name">Content</label>
        <textarea  class="form-control"  name="body" id="" cols="30" rows="10"> <?php echo $note->body ?></textarea>

    </div>
    <button class="btn btn-primary" type="submit" style="background-color: #262626;">Change </button>

</form>
</body>
</html>