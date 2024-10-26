@extends('layouts.app')
@section('title', 'Login')
@section('extra_css')
    <style>
        .card {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }
        .container {
            background-image: url('{{ asset('img/cover-photo.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
        }
    </style>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center align-content-center" style="height: 100vh;">
        <div class="col-md-4">
          <div class="text-center">
            {{-- <img src="{{ asset('image/logo.png') }}" alt="HR Management System"> --}}
          </div>
            <div class="card">
                <h3 class="card-header text-center text-main-color py-4">HR Management System</h3>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                      @csrf
                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                          <input type="text" pattern="^\d{10}$" placeholder="Enter your 10-digit phone number" id="form2Example1" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus/>
                          <label class="form-label" for="form2Example1">Phone</label>
                        </div>

                        @error('phone')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                          <input type="password" id="form2Example2" class="form-control" name="password"/>
                          <label class="form-label" for="form2Example2">Password</label>
                        </div>

                        <!-- 2 column grid layout for inline styling -->
                        <div class="row mb-4">
                          <div class="col d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
                              <label class="form-check-label" for="form2Example34"> Remember me </label>
                            </div>
                          </div>

                          <div class="col">
                            <!-- Simple link -->
                            <a href="#!">Forgot password?</a>
                          </div>
                        </div>

                        <!-- Submit button -->
                        <button data-mdb-ripple-init type="submit" class="btn btn-theme btn-block mb-4">Sign in</button>

                        <!-- Register buttons -->
                        <div class="text-center">
                          <p>Not a member? <a href="#!">Register</a></p>
                          <p>or sign up with:</p>
                          <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                            <i class="fab fa-facebook-f"></i>
                          </button>

                          <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                            <i class="fab fa-google"></i>
                          </button>

                          <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                            <i class="fab fa-twitter"></i>
                          </button>

                          <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                            <i class="fab fa-github"></i>
                          </button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
