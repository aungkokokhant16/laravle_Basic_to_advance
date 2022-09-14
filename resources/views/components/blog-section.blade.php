@props(['blogs'])
{{-- အခြားသူကပေးတဲ့ data ကို porps အနေနဲ့ ချိန်းပေးတာ --}}
<section class="container text-center" id="blogs">


    <h1 class="display-5 fw-bold mb-4">Blogs</h1>
    <div class="">
        <div class="dropdown">
            <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown button
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div>
    </div>
    <form action="" class="my-3">
      <div class="input-group mb-3">
        <input
          type="text"
          autocomplete="false"
          class="form-control"
          placeholder="Search Blogs..."
        />
        <button
          class="input-group-text bg-primary text-light"
          id="basic-addon2"
          type="submit"
        >
          Search
        </button>
      </div>
    </form>
    <div class="row">
      @foreach ($blogs as $blog)
      <div class="col-md-4 mb-4">
        <x-blog-card :blog="$blog"/>
        </div>
      @endforeach


    </div>
  </section>
