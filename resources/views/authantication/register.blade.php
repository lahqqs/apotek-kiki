@extends('layout.main-login')


@section('container')

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                    </div>
                    <form class="user" action="{{Route('register.authentication')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                                <input type="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email *">
                                @error('email')
                                <div id="email" class="invalid-feedback mb-3">
                                    {{$message}}
                                </div>
                                @enderror
                        </div>
                        <div class="form-group row">
                            <input type="text" value="{{old('nama')}}" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Nama *">
                            @error('nama')
                            <div id="nama" class="invalid-feedback mb-3">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password *">
                            @error('password')
                            <div id="password" class="invalid-feedback mb-3">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group row">
                        <select id="disabledSelect" class="form-control form-select-sm" name="level" id="level" >
                            <option selected>Pemilik</option>
                            <option>Apoteker</option>
                            <option>Gudang</option>
                            <option>Kasir</option>
                            </select>
                            @error('password')
                            <div id="password" class="invalid-feedback mb-3">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <button type="submit" class="btn btn-primary btn-block">
                                Register Account
                            </button>
                        </div>
                    </form>
                    <hr>

                    <div class="text-center">
                        <a class="small" href="{{Route('login')}}">Already have an account? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection