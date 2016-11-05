@extends('layouts.painel_app')

@section('content')
  @if(Session::has('insert_ok'))
    <div class="alert alert-success">{{Session::get('insert_ok')}}</div>
  @endif
<table class="table">
  <thead>
    <tr>
      <th>
        Permission
      </th>
      <th>
        Data
      </th>
    </tr>
  </thead>
  <tbody>
    @foreach ($permissions as $permission)
      <tr>
        <td>
          {{$permission->label}}
        </td>
        <td>
          {{$permission->created_at}}
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection
