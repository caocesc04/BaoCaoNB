<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DanhMucPhuLuc04 extends Model
{
    protected $table = "danhmucphuluc04";
    protected $primaryKey = 'id';

    public function detaildn() {
        return $this->belongsTo('App\DetailDN','id_nhom','id');
    }
    public function baocaophuluc04() {
        return $this->hasMany('App\BaoCaoPhuLuc04','id_phuluc04','id');
    }
}

