<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Permission_role extends Model
{
  protected $table = 'permission_role';
    static public function permissions($role_id)
    {
      return $per_roles = DB::table('permission_role')->where('role_id', $role_id)->get();
    }

    static public function delete_nocheck($role_id, $permissions)
    {
      $roles = DB::table('permission_role')->where('role_id', $role_id)->get();
      $per_id = 0;
      foreach ($roles as $role) {
        foreach ($permissions as $permission) {
          if ($role->permission_id == $permission) {
            $per_id = $permission;
            break;
          }
        }
        if ($per_id != $role->permission_id) {
          return DB::table('permission_role')->where('id', $role->id)->delete();
        }
      }
    }
  }
