<x-layouts>
    <!-- singloe blog section -->
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto text-center">
          <img
            src="https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg"
            class="card-img-top"
            alt="..."
          />
          <h3 class="my-3">{{$blog->title}}</h3>
          <div> Author - <a href="/users/{{$blog->author->username}}">{{$blog->author->name}}</a></div>
          <div>
          <a href="/?category={{$blog->category->slug}}"><span class="badge bg-primary">{{$blog->category->name}}</a></span>
          </div>
          <div class="text-secondary">{{$blog->created_at->diffForHumans()}}</div>
          <p class="lh-md mt-3">
          {{$blog->body}}
        </p>
        <div>
           <button class="btn btn-warning">Subscribe</button>
        </div>
         </div>
      </div>
    </div>
    {{-- comments --}}
    <section>
        <div class="container">
        @auth
        <div class="col-md-8 mx-auto">
            <x-comment-form :blog="$blog"/>
        </div>
        @else
        <p class=" text-center  ">Please <a href="/login">login</a> to perticipate in this session</p>
        @endauth
        </div>

        <div>
        </div>
    </section>
    @if ($blog->comments->count())

    <x-comments :comments="$blog->comments()->latest()->paginate(3)" />
    @endif
    <!-- subscribe new blogs -->

    <x-blog-you-may-like-section :randomBlogs='$randomBlogs' />
</x-layouts>
