<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaoCaoPhuLuc04 extends Model
{
    protected $table = "baocaophuluc04";
    protected $primaryKey = 'id';

    public function detaildoanhnghiep() {
        return $this->belongsTo('App\DetailDoanhNghiep','id_detail_dn','id');
    }
    public function kybaocao() {
        return $this->belongsTo('App\KyBaoCao','id_kybaocao','id');
    }
    public function danhmucphuluc04() {
        return $this->belongsTo('App\DanhMucPhuLuc04','id_phuluc04','id');
    }
}
