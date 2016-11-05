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
    <script type="text/javascript">
      function deletardados(e) {
        if (!(window.confirm("Tem certeza que deseja excluir esse usuario?")))
        e.returnValue = false;
      }
    </script>
    <table class="table table-hover table-responsive table-condensed">
      <thead>
        <tr>
          <th>
            Titulo
          </th>
          <th>
            Descrição
          </th>
          <th>
            Autor
          </th>
          <th>
            Editar
          </th>
          <th>
            Deletar
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
          <tr>
            <td>
              {{$post->title}}
            </td>
            <td>
              {{$post->description}}
            </td>
            <td>
              {{$post->user->name}}
            </td>
            <td>
            @can('Edit_post')
              <a href="{{url('posts/editar/'.$post->id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Editar</a>
            @else
              No edit
            @endcan
            </td>
            <td>
              <a href="{{url('posts/deletar/'.$post->id)}}" class="btn btn-danger" onclick="return deletardados(event)"><span class="glyphicon glyphicon-remove"></span> Deletar</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    @endsection
