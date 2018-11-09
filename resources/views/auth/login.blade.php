@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row card-panel">

        {{-- Start login form section --}}
         <div class="col m4 s12 offset-m2">       
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate" name="email" required autofocus>
                            <label for="email">Email</label>
                        </div>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate" name="password" required>
                            <label for="password">Password</label>
                        </div>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <label class="col s12">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="filled-in col s12" checked="checked"> 
                            <span>Remember Me</span>
                        </label>          
                    </div>
                </div>

                <div class="form-group">        
                    <button type="submit" class="waves-effect waves-light btn">Login</button>
                    <a href="{{ route('password.request') }}" class="forgot-password">Forgot Your Password?</a>       
                </div>
                
            </form>
        </div>
        {{-- End login form --}}

        <div class="vertical-divider hide-on-med-and-down"></div>

        {{-- Start social login section --}}
        <div class="col m4 s12 social-login-container">       
                    
            <a href="{{url('/redirect/twitter')}}" class="waves-effect waves-light btn" style="background-color:#32A8F4;text-transform: lowercase;
"><i class="fab fa-twitter"></i> Login with Twitter</a>
                
    
            <a href="{{url('/redirect/facebook')}}" class="waves-effect waves-light btn" style="background-color:#4456A3;text-transform: lowercase;
"><i class="fab fa-facebook-f"></i> Login with Facebook</a>
                   
         
        </div>
    </div>
</div>
@endsection
{{-- 
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                
                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div> --}}
{{-- 
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div> --}}