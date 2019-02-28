<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaoCaoPhuLuc01 extends Model
{
    protected $table = "baocaophuluc01";
    protected $primaryKey = 'id';
    protected $fillable = ['id','id_doanhnghiep','id_kybaocao','id_phuluc01','soluong'];


    public function doanhnghiep() {
        return $this->belongsTo('App\DoanhNghiep','id_doanhnghiep','id');
    }
    public function kybaocao() {
        return $this->belongsTo('App\KyBaoCao','id_kybaocao','id');
    }
    public function danhmucphuluc01() {
        return $this->belongsTo('App\DanhMucPhuLuc01','id_phuluc01','id');
    }
}
