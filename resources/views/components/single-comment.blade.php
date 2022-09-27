@props(['comment'])
<x-card-wrapper>
    <img src="{{$comment->author->avatar}}" alt="" class="rounded-circle" width="40" height="40">
    <h4>{{$comment->author->name}}</h4>
    <span>{{$comment->created_at->diffForHumans()}}</span>
    <br>
    <p>
        {{$comment->body}}
    </p>
</x-card-wrapper>
