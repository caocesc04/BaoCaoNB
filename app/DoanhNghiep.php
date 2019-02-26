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
}
