<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaoCaoPhuLuc01 extends Model
{
    protected $table = "baocaophuluc01";
    protected $primaryKey = 'id';

    public function detaildoanhnghiep() {
        return $this->belongsTo('App\DetailDoanhNghiep','id_detail_dn','id');
    }
    public function kybaocao() {
        return $this->belongsTo('App\KyBaoCao','id_kybaocao','id');
    }
    public function danhmucphuluc01() {
        return $this->belongsTo('App\DanhMucPhuLuc01','id_phuluc01','id');
    }
}
