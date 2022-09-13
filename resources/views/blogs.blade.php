
<x-layouts>

    <x-slot name="title">
        <title>All Blogs</title>
    </x-slot>
    @foreach ($blogs as $blog)
{{-- <div class={{$loop->odd ? 'bg-yellow' : ''}}> --}}
    <h1><a href="blogs/{{$blog->slug}}">{{$blog->title}}</a></h1>
    <h4>Author - {{$blog->user->name}}</h4>
    <div>
        <p>
            <a href="/categories/{{$blog->category->slug}}">{{$blog->category->name}}</a>
        </p>
    <p> published at - {{$blog->created_at->diffforHumans()}}</p>
    <p>{{$blog->title}}</p>
</div>
{{-- </div> --}}
@endforeach
</x-layouts>



