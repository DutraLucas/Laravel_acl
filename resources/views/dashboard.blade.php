@extends('layouts.painel_app')

@section('content')
  <div class="row">
    <div class="col-md-8">
        <div class="row">
          <div class="col-md-6">
            <div class="panel panel-default">
              <div class="panel-body">
                <span class="glyphicon glyphicon-user gi-4x pull-left"></span><h2 class="text-center">Usuarios <span class="label label-info">{{$total_user}}</span></h2>
              </div>
              <div class="panel-footer text-center">
                <a href="{{url('/users')}}" class="link_chamada">Ver usuarios <span class="glyphicon glyphicon-circle-arrow-right"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="panel panel-default">
              <div class="panel-body">
                <span class="glyphicon glyphicon-pencil gi-4x pull-left"></span><h2 class="text-center">Posts <span class="label label-info">{{$total_posts}}</span></h2>
              </div>
              <div class="panel-footer text-center">
                <a href="{{url('/posts')}}" class="link_chamada">Ver posts <span class="glyphicon glyphicon-circle-arrow-right"></span></a>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="panel panel-default">
              <div class="panel-body">
                <span class="glyphicon glyphicon-check gi-4x pull-left"></span><h2 class="text-center">Permissions <span class="label label-info">{{$total_permissions}}</span></h2>
              </div>
              <div class="panel-footer text-center">
                <a href="{{url('acl/permissions')}}" class="link_chamada">Ver permissions <span class="glyphicon glyphicon-circle-arrow-right"></span></a>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="panel panel-default">
              <div class="panel-body">
                <span class="glyphicon glyphicon-file gi-4x pull-left"></span><h2 class="text-center">Roles <span class="label label-info">{{$total_roles}}</span></h2>
              </div>
              <div class="panel-footer text-center">
                <a href="{{url('acl/roles')}}" class="link_chamada">Ver roles <span class="glyphicon glyphicon-circle-arrow-right"></span></a>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>

@endsection
