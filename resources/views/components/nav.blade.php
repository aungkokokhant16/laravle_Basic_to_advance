<!-- navbar -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">Creative Coder</a>
      <div class="d-flex">
          <a href="/#blogs" class="nav-link">Blogs</a>

          @guest


          <a href="/register" class="nav-link">Register</a>
          <a href="/login" class="nav-link">Login</a>

          @else
          <a href="" class="nav-link">Welcome {{auth()->user()->name}}</a>
          <img src="{{auth()->user()->avatar}}" width="40" height="40" class=" rounded-circle" alt="">

          <form action="/logout" method="POST">
            @csrf
          <button href="" class="nav-link btn btn-link" type="submit">Logout</button>
          </form>
          @endguest


        <a href="#subscribe" class="nav-link">Subscribe</a>
      </div>
    </div>
  </nav>
