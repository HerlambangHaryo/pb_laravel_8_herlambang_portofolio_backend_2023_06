@extends('template.studio_v30.middleware')

@section('title', 'Login')

@section('content')  
 

    <div class="login-content">
        
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif 
 
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <h1 class="text-center">Sign In</h1>
            <div class="text-muted text-center mb-4">
                For your protection, please verify your identity.
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Email Address
                </label>
                <input 
                    class="form-control form-control-lg fs-15px" 
                    type="text" 
                    name="email" 
                    placeholder="username@address.com" 
                    required="required" />
            </div>
            <div class="mb-3">
                <div class="d-flex">
                    <label class="form-label">
                        Password
                    </label>
                    <a href="{{ route('password.request') }}" class="ms-auto text-muted">
                        {{ __('Lupa Password?') }}
                    </a>
                </div>
                <input 
                    class="form-control form-control-lg fs-15px" 
                    type="password" 
                    name="password" 
                    placeholder="Enter your password" 
                    required="required" 
                    autocomplete="current-password"/>
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="customCheck1" />
                    <label class="form-check-label fw-500" for="customCheck1">Remember me</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg d-block w-100 fw-500 mb-3">Sign In</button>
            <div class="text-center text-muted">
                Don't have an account yet? <a href="{{ route('register') }}">Sign up</a>.
            </div>
        </form>
    </div>

@endsection
