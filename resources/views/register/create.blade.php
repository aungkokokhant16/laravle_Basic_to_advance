<x-layouts>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <h3 class="text-primary text-center my-3">Register Form</h3>
                <div class="card p-4 my-3 shadow-sm">
                    <form method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('name')}}">
                            @error('name')
                                <p class="text-danger">{{$message}} </p>
                            @enderror
                          </div>
                          <div class="form-group mb-3">
                            <label for="exampleInputEmail1">UserName</label>
                            <input type="text" name="username" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('username')}}">
                            @error('username')
                                <p class="text-danger">{{$message}} </p>
                            @enderror
                          </div>
                        <div class="form-group mb-3">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" name="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('email')}}">
                          @error('email')
                                <p class="text-danger">{{$message}} </p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" required name="password" class="form-control" id="exampleInputPassword1">
                          @error('password')
                                <p class="text-danger">{{$message}} </p>
                            @enderror
                        </div>

                        <ul>
                        @foreach ($errors->all() as  $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts>
