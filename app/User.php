<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "user";
    protected $primaryKey = 'id';

    public function userdoanhnghiep() {
        return $this->hasMany('App\UserDoanhNghiep','id_user','id');
    }
}
