<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>primi passi</title>

    <style>
        .title{
            text-align: center;
        }
        .subjects{
            text-align: center;
            list-style: none;
            padding-left: 0;
        }
        li > a {
            text-decoration: none;
            color: blue;
        }
    </style>
</head>

<body>
    
    <h1 class="title">Hello World! from {{ $name }} </h1>
    <p class="title">Learn some new technologies</p>
    <ul class="subjects">
        @foreach ($subjects as $subject)
        <li> <a href="{{$subject}}">Learn {{$subject}} </a> </li>
        @endforeach
    </ul>

</body>
</html>