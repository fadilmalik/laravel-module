@extends('admin::layouts.main')

@section('content')

@if (session()->has('loginError'))
    <div class="alert alert-danger alert-dissmissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="CLose"></button>
    </div>
@endif

<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-signin">
        <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
        <form action="/login" method="POST">
            @csrf
        <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com">
            <label for="email" autofocus required value="{{ old('email') }}">Email address</label>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="password" placeholder="Password">
            <label for="password" required>Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        </form>
  </main>
    </div>
</div>

@endsection