@extends('layouts.painel_app')

@section('content')
  <div class="row">
    <div class="col-sm-8">
      @if(Request::is('*/editar/*'))
        {!! Form::model($user, ['method' => 'PATCH', 'url' => 'users/update/'.$user->id]) !!}
      @else
        {!! Form::open(['url' => 'users/insert']) !!}
      @endif
        <div class="form-group">
          <label>Nome</label>
          <input type="text" class="form-control" id="name" name="name" @if(Request::is('*/editar/*')) value="{{$user->name}}" @endif required>
          <p class="help-block">Digite o nome do usuário.</p>
        </div>
        <div class="form-group">
          <label>E-mail</label>
          <input type="email" class="form-control" id="email" name="email" @if(Request::is('*/editar/*')) value="{{$user->email}}" @endif required>
          <p class="help-block">Digite o e-mail do usuario.</p>
        </div>
        <div class="form-group">
          <label>Senha</label>
          <input type="password" class="form-control" id="password" name="password" required>
          <p class="help-block">Digite a senha do usuario.</p>
        </div>
        <div class="form-group">
          <label>Confirmar a senha</label>
          <input type="password" class="form-control" id="password-confirm" name="password-confirm" required>
          <p class="help-block">Comfirme a senha.</p>
        </div>
      @if(Request::is('*/editar/*'))
        <button type="submit" class="btn btn-success">Alterar</button>
      @else
        <button type="submit" class="btn btn-success">Salvar</button>
      @endif
      {!! Form::close() !!}
    </div>
  </div>
@endsection
