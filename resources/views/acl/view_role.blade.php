@extends('layouts.painel_app')

@section('content')
    <h3><span class="glyphicon glyphicon-tower"></span> {{$label}}</h3>
  <div class="row">
    <div class="col-md-6">
        <h3>Permissions</h3>
        <ul class="list-view">
          @foreach ($permissions as $permission)
            <li class="item-view">{{$permission->label}}</li>
          @endforeach
        </ul>
    </div>
    <div class="col-md-6">
          <div class="divisa-esquerda">
            {!! Form::open(['url' => 'acl/role_permissions']) !!}
            <h3>Selecionar Permissions</h3>
            <input type="hidden" name="role_id" value="{{$role_id}}">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th width='50px'></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
            @foreach ($pers_cadastro as $per)
              @foreach ($permissions as $permission)
                @if ($per->id == $permission->id)
                  <tr>
                  <td align='right'><input type="checkbox" name="permissions[]" value="{{$per->id}}" checked></td>
                    <td> {{$per->name}}</td>
                    </tr>
                  @php
                    $permission_numb = $per->id;
                    break;
                  @endphp
                @endif
              @endforeach
              @if ($per->id != $permission_numb)
                <tr>
                <td align='right'><input type="checkbox" name="permissions[]" value="{{$per->id}}"></td>
                <td> {{$per->name}}</td>
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
