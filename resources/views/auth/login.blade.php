@extends('layouts.auth')

@section('title')
    | Connexion
@endsection

@section('content')	
<!-- Main Wrapper -->
<div class="main-wrapper">
    <div class="account-content">
        <div class="container">
        
            <!-- Account Logo -->
            <div class="account-logo">
                <a href="{{ route('home') }}"><img src="img/socopa.png" style="width: 15%" alt="SOCOPA"></a>
            </div>
            <!-- /Account Logo -->
            
            <div class="account-box mt-5">
                <div class="account-wrapper">
                    
                    <!-- Account Form -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control @error('login') is-invalid @enderror" name="login"
                                value="{{ old('login') }}" required autocomplete="login" placeholder="Login">
                            @error('login')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">	
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                required autocomplete="current-password" placeholder="Mot de passe">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group text-center mt-5">
                            <button class="btn btn-warning btn-block btn-lg" type="submit">Se connecter</button>
                        </div>
                    </form>
                    <!-- /Account Form -->
                    
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <div class="container mt-5">
        <div class="text-center">
            <small class="text-secondary">Copyright &copy; SoCOPA 2021</small>
        </div>
    </div>
    <!-- End of Footer -->
</div>
<!-- /Main Wrapper -->
@endsection
