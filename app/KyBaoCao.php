<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KyBaoCao extends Model
{
    protected $table = "kybaocao";
    protected $primaryKey = 'id';

    public function baocaophuluc01() {
        return $this->hasMany('App\BaoCaoPhuLuc01','id_kybaocao','id');
    }
    public function baocaophuluc04() {
        return $this->hasMany('App\BaoCaoPhuLuc04','id_kybaocao','id');
    }
}
