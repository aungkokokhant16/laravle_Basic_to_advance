<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>{{$title}}</title>
    <style>
        .bg-yellow{
            background: yellow;
        }
    </style>
</head>
<body>
    <x-nav/>
    {{$slot}}
</body>
</html>