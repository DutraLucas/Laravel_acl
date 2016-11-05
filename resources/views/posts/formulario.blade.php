@extends('layouts.painel_app')

@section('content')
  <div class="row">
    <div class="col-sm-8">
      @if(Request::is('*/editar/*'))
      {!! Form::model($post, ['method' => 'PATCH', 'url' => 'posts/update/'.$post->id]) !!}
      @else
      {!! Form::open(['url' => 'posts/insert']) !!}
      @endif
      <div class="form-group">
        <label>Titulo</label>
        <input type="text" name="title" class="form-control" placeholder="" @if(Request::is('*/editar/*')) value="{{$post->title}}" @endif required="">
        <p class="help-block">Digite o titulo do post.</p>
      </div>
      <div class="form-group">
        <label>Descrição</label>
        <textarea name="description" rows="4" class="form-control"  required="">@if(Request::is('*/editar/*')) {{$post->description}} @endif</textarea>
        <p class="help-block">Digite a descrição do post.</p>
      </div>
      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
      @if(Request::is('*/editar/*'))
      <button type="submit" class="btn btn-success">Alterar</button>
      @else
      <button type="submit" class="btn btn-success">Salvar</button>
      @endif
      {!! Form::close() !!}
    </div>
  </div>
@endsection
