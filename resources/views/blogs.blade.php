{{--
<x-layouts>

    <x-slot name="title">
        All Blogs
    </x-slot>
    @foreach ($blogs as $blog) --}}
{{-- <div class={{$loop->odd ? 'bg-yellow' : ''}}> --}}
    {{-- <h1><a href="blogs/{{$blog->slug}}">{{$blog->title}}</a></h1>
    <h4>Author - <a href="/users/{{$blog->author->username}}">{{$blog->author->name}}</a> </h4>
    <div>
        <p>
            <a href="/categories/{{$blog->category->slug}}">{{$blog->category->name}}</a>
        </p>
    <p> published at - {{$blog->created_at->diffforHumans()}}</p>
    <p>{{$blog->title}}</p>
</div> --}}
{{-- </div> --}}
{{-- @endforeach
</x-layouts> --}}
<x-layouts>
    <x-hero/>
    <!-- blogs section -->
    <x-blog-section />
    {{-- Subscribe --}}
    <x-subscribe />
</x-layouts>


