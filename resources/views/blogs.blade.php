<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Blog</title>
    <style>
        .bg-yellow{
            background: yellow;
        }
    </style>
</head>
<body>
    @foreach ($blogs as $blog)
        <div class={{$loop->odd ? 'bg-yellow' : ''}}>
            <h1><a href="blogs/{{$blog->slug}}">{{$blog->title}}</a></h1>
            <div>
            <p> published at - {{$blog->date}}</p>
            <p>{{$blog->title}}</p>
        </div>
        </div>
    @endforeach
</body>
</html>
