@extends('layouts.auth-master')

@section('content')
    <form method="post" action="{{ route('login.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        {{-- <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57"> --}}

        <h1 class="h3 mb-3 fw-normal" style="margin-top: 40px"> Easy Notes</h1>

        @include('layouts.partials.messages')

        <div class="form-group form-floating mb-3" style="padding:2rem 10rem;width:50%;height:25px;margin:auto;">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username"
                required="required" autofocus>
            <label for="floatingName" style="margin-top:33px; padding-left:17rem">Email or
                Username</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3" style="padding:2rem 10rem;width:50%;height:25px;margin:auto">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password"
                required="required">
            <label for="floatingPassword" style="margin-top:33px; padding-left:19rem;">Password</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>
        {{-- <div class="form-group mb-3" style="margin: 30px 0px">
            <label for="remember">Remember me</label>
            <input type="checkbox" name="remember" value="1">
        </div> --}}
        <button class="w-25 btn btn-lg btn-primary" type="submit" onclick="myFunction()">Login</button>

        @include('auth.partials.copy')
    </form>

    {{-- <script>
        function myFunction() {
            alert("Congratulations!! You are now part of Easy Notes Family.");
        }
    </script> --}}


@section('content')
