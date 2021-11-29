@extends('layouts/main')

@section('template')

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 d-flex flex-column align-items-center justify-content-center">
                
                <div class="card mb-3">
                    <div class="row g-0">

                    <div class="col-md-6">
                        <img src="assets/img/login-register.png" class="img-fluid rounded-3 responsif" alt="...">
                    </div>

                    <div class="col-md-6 rounded-3">
                        <div class="card-body">
                            <div class="pt-2 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                <p class="text-center small">Enter your personal details to create account</p>
                            </div>

                            <form action="/register" method="post" class="row g-3 needs-validation" novalidate>
                                @csrf
                                <div class="col-12">
                                    <label for="yourName" class="form-label">Your Name</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"  id="yourName" required value="{{ old('name') }}">
                                    @error('name') 
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="yourEmail" class="form-label">Your Email</label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="yourEmail" required value="{{ old('email') }}">
                                    @error('email') 
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="yourPassword" class="form-label @error('password') is-invalid @enderror">Password</label>
                                    <input type="password" name="password" class="form-control" id="yourPassword" required>
                                    @error('password') 
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Create Account</button>
                                </div>
                                <div class="col-12">
                                    <p class="small mb-0 text-center">Already have an account? <a href="login">Log in</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>

@endsection