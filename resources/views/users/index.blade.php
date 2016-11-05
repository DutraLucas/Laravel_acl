@extends('layouts.painel_app')

@section('content')

  @if(Session::has('insert_ok'))
    <div class="alert alert-success">{{Session::get('insert_ok')}}</div>
  @endif
  @if(Session::has('update_ok'))
    <div class="alert alert-success">{{Session::get('update_ok')}}</div>
  @endif
  @if(Session::has('delete_ok'))
    <div class="alert alert-success">{{Session::get('delete_ok')}}</div>
  @endif
  @if(Session::has('permission_role_ok'))
    <div class="alert alert-success">{{Session::get('permission_role_ok')}}</div>
  @endif
  <script type="text/javascript">
    function deletardados(e) {
      if (!(window.confirm("Tem certeza que deseja excluir esse usuario?")))
      e.returnValue = false;
    }
  </script>
  <table class="table">
    <thead>
      <tr>
        <th>
          Nome
        </th>
        <th>
          email
        </th>
        <th>
          Ver / Roles
        </th>
        <th>
          Editar
        </th>
        <th>
          Excluir
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
        <tr>
          <td>
            {{$user->name}}
          </td>
          <td>
            {{$user->email}}
          </td>
          <td>
            <a href="{{url('users/visualizar/'.$user->id)}}" class="btn btn-success"><span class="glyphicon glyphicon-eye-open"></span> visualizar</a>
          </td>
          <td>
            <a href="{{url('users/editar/'.$user->id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Editar</a>
          </td>
          <td>
            <a href="{{url('users/deletar/'.$user->id)}}" class="btn btn-danger" onclick="return deletardados(event)"><span class="glyphicon glyphicon-remove" ></span> Deletar</a>
          </td>
        </tr>

      @endforeach
    </tbody>
  </table>
@endsection
