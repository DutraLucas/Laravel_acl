<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $fillable = [
        'name', 'label',
    ];
    public function permissions()
    {
      return $this->belongsToMany(Permission::class);
    }
    public function assign(Permission $permission)
    {
      return $this->permissions()->save($permission);
    }
}
