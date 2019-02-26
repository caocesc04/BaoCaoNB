<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailDN extends Model
{
    protected $table = "detaildn";
    protected $primaryKey = 'id';

    public function detaildoanhnghiep() {
        return $this->hasMany('App\DetailDoanhNghiep','id_detail','id');
    }
}
