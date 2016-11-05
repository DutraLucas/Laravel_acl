<!-- Sidebar -->
<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand sidebar-name">
          <img src="{{url("/resources/assets/img/icon_wolf.png")}}" alt="" class="img-site"/>
          <a href="#">Laravel 5 Acl</a>
        </li>
        <li class="item-list">
            <a href="{{url('/dashboard')}}"><span class="glyphicon glyphicon-th"></span> Dashboard</a>
        </li>
        <li class="item-list">
          <a href="javascript:;" data-toggle="collapse" data-target="#posts"><span class="glyphicon glyphicon-pencil"></span> Posts <span class="caret"></span></a>
          <ul id="posts" class="collapse">
            <li>
              <a href="{{url('/posts')}}"><span class="glyphicon glyphicon-th-list"></span> Listar posts</a>
            </li>
            <li>
              <a href="{{url('/posts/cadastrar')}}"><span class="glyphicon glyphicon-plus"></span> Adicionar post</a>
            </li>
          </ul>
        </li>
        <li class="item-list">
          <a href="javascript:;" data-toggle="collapse" data-target="#users"><span class="glyphicon glyphicon-user"></span> Usuários <span class="caret"></span></a>
          <ul id="users" class="collapse">
            <li>
              <a href="{{url('/users')}}"><span class="glyphicon glyphicon-th-list"></span> Listar usuários</a>
            </li>
            <li>
              <a href="{{url('/users/cadastrar')}}"><span class="glyphicon glyphicon-plus"></span> Adicionar usuário</a>
            </li>
          </ul>
        </li>
        <li class="item-list">
          <a href="javascript:;" data-toggle="collapse" data-target="#roles"><span class="glyphicon glyphicon-file"></span> Roles <span class="caret"></span></a>
          <ul id="roles" class="collapse">
            <li>
              <a href="{{url('/acl/roles')}}"><span class="glyphicon glyphicon-th-list"></span> Listar roles</a>
            </li>
            <li>
              <a href="{{url('/acl/role_cadastrar')}}"><span class="glyphicon glyphicon-plus"></span> Adicionar roles</a>
            </li>
          </ul>
        </li>
        <li class="item-list">
          <a href="javascript:;" data-toggle="collapse" data-target="#per"><span class="glyphicon glyphicon-warning-sign"></span> Permissions <span class="caret"></span></a>
          <ul id="per" class="collapse">
            <li>
              <a href="{{url('/acl/permissions')}}"><span class="glyphicon glyphicon-th-list"></span> Listar permissions</a>
            </li>
            <li>
              <a href="{{url('/acl/permission_cadastrar')}}"><span class="glyphicon glyphicon-plus"></span> Adicionar permissions</a>
            </li>
          </ul>
        </li>
        <li class="sidebar-brand sidebar-user">
          <img src="{{url("/resources/assets/img/user.jpg")}}" width="180px" alt="" class="img-user img-circle"/>
            <a href="#" class="user-font"><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->name }}</a>
            <a href="{{url('/logout')}}" class="user-font"><span class="glyphicon glyphicon-off"></span> Sair</a>
        </li>
    </ul>
</div>
<a href="#menu-toggle" class="btn btn-default btn-toggle" id="menu-toggle"><span class="glyphicon glyphicon-menu-left"></span></a>
<!-- /#sidebar-wrapper -->
