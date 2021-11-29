@extends('layouts/main')

@section('template')
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 d-flex flex-column align-items-center justify-content-center">
             
            @if(session()->has('succesRegistration'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('succesRegistration') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('loginError') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

              <div class="card mb-3">
                <div class="row g-0">

                  <div class="col-md-6">
                    <img src="assets/img/login-register.png" class="img-fluid rounded-3" alt="...">
                  </div>

                  <div class="col-md-6 rounded-3">
                    <div class="card-body">
                      <div class="pt-4 pb-2 ">
                        <h5 class="card-title text-center pb-0 fs-4 ">Login to Your Account</h5>
                        <p class="text-center small">Enter your username & password to login</p>
                      </div>

                      <form action="/login" method="post" class="row g-3 needs-validation" novalidate>
                        @csrf

                        <div class="col-12">
                          <label for="yourEmail" class="form-label">Email</label>
                          <div class="input-group has-validation">
                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="yourEmail" required autofocus value="{{ old('name') }}">
                            @error('email') 
                              <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>

                        <div class="col-12">
                          <label for="yourPassword" class="form-label ">Password</label>
                          <input type="password" name="passwword" class="form-control" id="yourPassword" required>
                          <div class="invalid-feedback">Please enter your password!</div>
                        </div>

                        <div class="col-12">
                          <button class="btn btn-primary w-100 mt-4" type="submit">Login</button>
                        </div>
                        <div class="col-12 text-center">
                          <p class="small mb-0">Don't have account? <a href="register">Create an account</a></p>
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
