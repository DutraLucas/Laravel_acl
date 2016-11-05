<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;
use App\Role;
use App\User;
use App\Permission_role;
use App\Http\Requests;
use Redirect;
use Gate;

class Permissions_rolesController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function roles()
  {
    if (Gate::allows('View_role')) {
    $dados = array(
      'titulo' => 'Roles',
      'roles' => Role::all()
    );
    return view('acl.roles', $dados);
    }
    else {
      return Redirect::to('dashboard');
    }
  }

  public function cadastrar_role()
  {
    if (Gate::allows('Insert_role')) {
    $dados = array('titulo' => 'Adicionar Role');
    return view('acl.formulario', $dados);

    }
    else {
      return Redirect::to('dashboard');
    }
  }
  public function insert_role(Request $request)
  {
    $role = new Role();
    $role = $role->create($request->all());
    \Session::flash('insert_ok', 'Role cadastrado com sucesso!');
    return Redirect::to('acl/roles');
  }
  public function deletar_role($id)
  {
    if (Gate::allows('Delete_role')) {
    $role = Role::findOrFail($id);
    $role->delete();
    \Session::flash('delete_ok', 'Role excluido com sucesso!');
    return Redirect::to('acl/roles');

    }
    else {
      return Redirect::to('dashboard');
    }
  }

  public function view_role($id)
  {
    if (Gate::allows('Role_permission')) {
    $role = Role::find($id);
    $dados = array(
      'titulo' => $role->name,
      'label' => $role->label,
      'role_id' => $role->id,
      'permissions' => $role->permissions,
      'pers_cadastro' => Permission::all(),
      'permission_numb' => 0,
      'per_numb' => 0
    );
    return view('acl.view_role', $dados);

    }
    else {
      return Redirect::to('dashboard');
    }
  }

  public function role_permissions(Request $request)
  {
    $input = $request->all();
    $role = Role::find($input['role_id']);
    $db_permissions = Permission_role::permissions($input['role_id']);
    $delete_permissions = Permission_role::delete_nocheck($input['role_id'], $input['permissions']);
    $i = 0;
    foreach ($input['permissions'] as $permissions) {
      foreach ($db_permissions as $per) {
        if ($per->permission_id == $permissions) {
          $i = $permissions;
          break;
        }
      }
      if ($permissions != $i) {
        $permission = Permission::find($permissions);
        $role->assign($permission);
      }
    }
    \Session::flash('permission_role_ok', 'Permissions do '.$role->label.' alteradas com sucesso!');
    return Redirect::to('acl/roles');
  }

  public function permissions()
  {
    if (Gate::allows('View_permission')) {
    $dados = array(
      'titulo' => 'Permissions',
      'permissions' => Permission::all()
    );
    return view('acl.permissions', $dados);
    }
    else {
      return Redirect::to('dashboard');
    }
  }

  public function cadastrar_permission()
  {
    if (Gate::allows('Insert_permission')) {
    $dados = array('titulo' => 'Adicionar Permission');
    return view('acl.formulario', $dados);
    }
    else {
      return Redirect::to('dashboard');
    }
  }

  public function insert_permission(Request $request)
  {
    $permission = new Permission();
    $permission = $permission->create($request->all());
    \Session::flash('insert_ok', 'Permission cadastrado com sucesso!');
    return Redirect::to('acl/permissions');
  }

}
