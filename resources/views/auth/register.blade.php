@extends('layouts.auth')

@section('content')
  <form class="form-signin thumbnail" role="form" method="POST" action="{{ url('/register') }}">
    {{ csrf_field() }}
    <img src="{{url("/resources/assets/img/icon_avatar.png")}}" alt="" class="img_login"/>
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
      <div class="icon-addon addon-lg">
        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nome" required="" autofocus="">
        <label for="email" class="glyphicon glyphicon-user" rel="tooltip" title="Nome"></label>
      </div>
        @if ($errors->has('name'))
          <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
          </span>
        @endif
    </div>
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
      <div class="icon-addon addon-lg">
        <input type="email" id="email" class="form-control" placeholder="Email" required="" autofocus="" name="email" value="{{ old('email') }}">
        <label for="email" class="glyphicon glyphicon-inbox" rel="tooltip" title="email"></label>
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
    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
      <div class="icon-addon addon-lg">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar senha" required="">
        <label for="password" class="glyphicon glyphicon-certificate" rel="tooltip" title="password"></label>
      </div>
      @if ($errors->has('password_confirmation'))
        <span class="help-block">
          <strong>{{ $errors->first('password_confirmation') }}</strong>
        </span>
      @endif
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>
  </form>
@endsection
