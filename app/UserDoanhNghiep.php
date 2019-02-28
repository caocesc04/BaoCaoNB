<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDoanhNghiep extends Model
{
    protected $table = "user_doanhnghiep";
    protected $primaryKey = 'id';

    public function doanhnghiep() {
        return $this->belongsTo('App\DoanhNghiep','id_doanhnghiep','id');
    }
    public function user() {
        return $this->belongsTo('App\User','id_user','id');
    }
}
