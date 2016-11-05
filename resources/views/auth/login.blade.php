@extends('layouts.auth')

@section('content')
      <form class="form-signin thumbnail" role="form" method="POST" action="{{ url('/login') }}" class="">
          {{ csrf_field() }}
          <img src="{{url("/resources/assets/img/icon_avatar.png")}}" alt="" class="img_login"/>
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="icon-addon addon-lg">
              <input type="email" id="email" class="form-control" placeholder="Email" required="" autofocus="" name="email" value="{{ old('email') }}">
              <label for="email" class="glyphicon glyphicon-user" rel="tooltip" title="email"></label>
            </div>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>

          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="icon-addon addon-lg">
              <input type="password" id="password" class="form-control" name="password" placeholder="Senha" required="">
              <label for="password" class="glyphicon glyphicon-certificate" rel="tooltip" title="password"></label>
            </div>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
            <a href="{{url('/register')}}" class="btn btn-lg btn-success btn-block">Registrar</a>

          <!--<a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>-->
      </form>
    </div> <!-- /container -->
    @endsection
