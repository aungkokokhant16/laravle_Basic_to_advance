
<x-layouts>
    <x-slot name="title">
        {{$blog->title}}
    </x-slot>

    <article>
        <h1>{{$blog->title}}</h1>
       <p>
        {!! $blog->body !!}
       </p>
        <a href="/">go back</a>
    </article>

</x-layouts>










