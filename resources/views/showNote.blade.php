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
</div>
<div class="container">
   <div class="row">

       <h3 style="font-size: 28px; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif">
        {{$note->title}}
       </h3>
       <p>
           {{$note->body}}
       </p>
   </div>

</div>

</body>
</html>