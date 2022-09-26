@props(['comment'])
<div class="card card-body shadow-lg mt-4 text-justify float-left">
    <img src="https://i.pravatar.cc/300" alt="" class="rounded-circle" width="40" height="40">
    <h4>{{$comment->author->name}}</h4>
    <span>{{$comment->created_at->diffForHumans()}}</span>
    <br>
    <p>
        {{$comment->body}}
    </p>
</div>
