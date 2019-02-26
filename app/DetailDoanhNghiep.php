<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailDoanhNghiep extends Model
{
    protected $table = "detail_doanhnghiep";
    protected $primaryKey = 'id';

    public function detaildn() {
        return $this->belongsTo('App\DetailDN','id_detail','id');
    }
    public function doanhnghiep() {
        return $this->belongsTo('App\DoanhNhiep','id_doanhnghiep','id');
    }
}
