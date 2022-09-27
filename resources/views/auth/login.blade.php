<x-layouts>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <h3 class="text-primary text-center my-3">Login Form</h3>
                <div class="card p-4 my-3 shadow-sm">
                    <form method="POST">
                        @csrf


                        <div class="form-group mb-3">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" name="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('email')}}">
                          <x-error name="email" />
                        </div>
                        <div class="form-group mb-3">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" required name="password" class="form-control" id="exampleInputPassword1">
                          <x-error name="password" />
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
