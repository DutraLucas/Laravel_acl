@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  @can('View_post')
                    <p>
                      Você pode ver posts
                    </p>
                  @endcan
                  @can('Edit_post')
                    <p>
                      Você pode editar posts
                    </p>
                  @endcan
                  @can('Delete_post')
                    <p>
                      Você pode excluir posts
                    </p>
                  @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
