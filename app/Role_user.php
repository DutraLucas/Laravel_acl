<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Role_user extends Model
{
    protected $table = 'role_user';

    static public function roles($user_id)
    {
      return $roles = DB::table('role_user')->where('user_id', $user_id)->get();
    }

    static public function remove_roles_nocheck($user_id, $roles)
    {
      $users = DB::table('role_user')->where('user_id', $user_id)->get();
      $r_id = 0;
      foreach ($users as $user) {
        foreach ($roles as $role) {
          if ($user->role_id == $role) {
            $r_id = $role;
            break;
          }
        }
        if ($r_id != $user->role_id) {
          return DB::table('role_user')->where('id', $user->id)->delete();
        }
      }
    }
}
