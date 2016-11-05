@extends('layouts.painel_app')

@section('content')
  <div class="row">
    <div class="col-md-6">
      <ul class="list-view">
        <li class="item-view">Nome de usuario: {{$user->name}}</li>
        <li class="item-view">E-mail: {{$user->email}}</li>
        <li class="item-view">Criado em: {{$user->created_at}}</li>
        <li>Roles
          <ul class="list-view">
            @foreach ($roles_check as $role)
              <li class="item-view"><span class="glyphicon glyphicon-menu-right"></span> {{$role->label}}</li>
            @endforeach
          </ul>
        </li>
      </ul>
    </div>

    <div class="col-md-6">
      <div class="divisa-esquerda">
        {!! Form::open(['url' => 'users/user_role']) !!}
        <h3>Selecionar roles</h3>
        <input type="hidden" name="user_id" value="{{$user_id}}">
        <table class="table table-striped">
          <thead>
            <tr>
              <th width='50px'></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($roles as $r)
              @foreach ($roles_check as $role)
                @if ($r->id == $role->id)
                  <tr>
                    <td align='right'><input type="checkbox" name="roles[]" value="{{$r->id}}" checked></td>
                    <td>{{$r->name}}</td>
                  </tr>
                  @php
                  $role_id = $r->id;
                  break;
                  @endphp
                @endif
              @endforeach
              @if ($r->id != $role_id)
                <tr>
                  <td align='right'><input type="checkbox" name="roles[]" value="{{$r->id}}"></td>
                  <td>{{$r->name}}</td>
                </tr>
              @endif
            @endforeach
          </tbody>
          <tr>
            <td colspan="2">
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-link"></span> Alterar</button>
            </td>
          </tr>
        </table>
        {!! Form::close() !!}
      </div>
    </div>
  </div>

@endsection
