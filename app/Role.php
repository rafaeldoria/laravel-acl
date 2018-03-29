<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Permission;

class Role extends Model
{
    public function permission(Permission $permission)
    {
        return $this->belongsToMany($permission);
    }
}
