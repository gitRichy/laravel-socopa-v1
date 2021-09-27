@extends('layouts.auth')

@section('title')
    | Inscription
@endsection

@section('content')
<!-- Main Wrapper -->
<div class="main-wrapper">
    <div class="account-content">
        <div class="container">
        
            <!-- Account Logo -->
            <div class="account-logo">
                <a href="{{ route('home') }}"><img src="{{ asset('img/socopa.png') }}" style="width: 15%"  alt="Scoops SOCOPA"></a>
            </div>
            <!-- /Account Logo -->
            
            <div class="account-box mt-5">
                <div class="account-wrapper">
                    
                    <!-- Account Form -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('matricule') is-invalid @enderror" name="matricule"
                                        value="{{ old('matricule') }}" required name="matricule"  pattern="[A-Z]{3}[0-9]{3}" placeholder="SOC-001">
                                    @error('matricule')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="nom" class="form-control @error('nom') is-invalid @enderror" name="nom"
                                        value="{{ old('nom') }}" required autocomplete="nom" placeholder="Nom & Prénoms">
                                    @error('nom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control @error('login') is-invalid @enderror" name="login" value="{{ old('login') }}"
                                        required autocomplete="login" placeholder="Login">
                                    @error('login')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}"
                                required autocomplete="password" placeholder="Mot de passe">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password"  name="password_confirmation" placeholder="Confirmer">
                        </div>
                        <div class="form-group text-center mt-5">
                            <button class="btn btn-warning btn-block btn-lg" type="submit">S'enregistrer</button>
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