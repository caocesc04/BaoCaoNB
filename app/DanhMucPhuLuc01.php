<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DanhMucPhuLuc01 extends Model
{
    protected $table = "danhmucphuluc01";
    protected $primaryKey = 'id';
    
    public function nhomthuoctinh() {
        return $this->belongsTo('App\NhomThuocTinh','id_nhom','id');
    }
    public function baocaophuluc01() {
        return $this->hasMany('App\BaoCaoPhuLuc01','id_phuluc01','id');
    }
}
