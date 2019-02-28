<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoanhNghiep extends Model
{
    protected $table = "doanhnghiep";
    protected $primaryKey = 'id';

    public function detaildoanhnghiep() {
        return $this->hasMany('App\DetailDoanhNghiep','id_doanhnghiep','id');
    }
    public function baocaophuluc01() {
        return $this->hasMany('App\BaoCaoPhuLuc01','id_doanhnghiep','id');
    }
    public function userdoanhnghiep() {
        return $this->hasMany('App\UserDoanhNghiep','id_doanhnghiep','id');
    }
}
