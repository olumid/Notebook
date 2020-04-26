<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<div class="container-fluid">
    @include('layout.header')
</div >
<h1 style="margin-left: 20px">Create Notebook</h1>
<form style="margin: 30px" method="post" action="{{ route('save-note') }}">
{{csrf_field()}}
    <div class="form-group">
        <label for="name">Notebook name</label>
        <input class="form-control" type="text" name="name">
    </div>
    <button class="btn btn-primary" type="submit" style="background-color: #262626;">Submit </button>

</form>
</body>
</html>