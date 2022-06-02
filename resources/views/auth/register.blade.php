@extends('layouts.appAuth')

@section('title', 'Coffeeup | Sign Up')

@section('content')

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="wrap d-md-flex">                    
                    <div class="login-wrap p-4 p-md-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-4">Sign Up</h3>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('register') }}" class="signin-form">
                            @csrf

                            <div class="form-group mb-3">
                                <label class="label" for="name">Name</label>
                                <input type="text" class="form-control" placeholder="Nama" name="name" id="name" required value="{{ old('name') }}">
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="email">Email</label>
                                <input type="email" class="form-control" placeholder=Eemail" name="email" id="email" required value="{{ old('email') }}">
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="password">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="password-confirm">Password Confirmation</label>
                                <input type="password" class="form-control" placeholder="Confirm password" id="password-confirm" name="password_confirmation" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign Up</button>
                            </div>
                        </form>
                        <p class="text-center">Have account? <a data-toggle="tab" href="#signup">Sign In</a></p>
                    </div>
                    <div class="img" style="background-image: url({{asset('images/bg-1.jpg')}});"></div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
