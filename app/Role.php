<?php

namespace easyHome;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function  users(){
        return $this->belongsToMany('easyHome\User', 'user_role', 'role_id', 'user_id');
    }
}
