
<x-layouts>

    <x-slot name="title">
        <title>All Blogs</title>
    </x-slot>
    @foreach ($blogs as $blog)
{{-- <div class={{$loop->odd ? 'bg-yellow' : ''}}> --}}
    <h1><a href="blogs/{{$blog->id}}">{{$blog->title}}</a></h1>
    <div>
    <p> published at - {{$blog->date}}</p>
    <p>{{$blog->title}}</p>
</div>
{{-- </div> --}}
@endforeach
</x-layouts>



