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
      if (!(window.confirm("Tem certeza que deseja excluir esse role?")))
      e.returnValue = false;
    }
  </script>
<table class="table">
  <thead>
    <tr>
      <th>
        Name
      </th>
      <th>
        Label
      </th>
      <th>
        Data
      </th>
      <th>
        Permissions
      </th>
      <th>
        Deletar
      </th>
    </tr>
  </thead>
  <tbody>
    @foreach ($roles as $role)
      <tr>
        <td>
          {{$role->name}}
        </td>
        <td>
          {{$role->label}}
        </td>
        <td>
          {{$role->created_at}}
        </td>
        <td>
          <a href="role_view/{{$role->id}}" class="btn btn-info"><span class="glyphicon glyphicon-link"></span> Permissions</a>
        </td>
        <td>
          <a href="role_delete/{{$role->id}}" class="btn btn-danger" onclick="return deletardados(event)"><span class="glyphicon glyphicon-remove"></span> Deletar</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection
