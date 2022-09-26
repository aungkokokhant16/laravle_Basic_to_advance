@props(['comments'])
<!-- Main Body -->
<section>
    <div class="container">
        <div class="row">
            <div class="mx-auto col-md-8">
                <h5 class="my-3 text-secondary">Comments (3) </h5>
                {{-- single comment --}}

                @foreach ($comments as $comment )

                <x-single-comment :comment="$comment" />
                @endforeach

            </div>

        </div>
    </div>
</section>
