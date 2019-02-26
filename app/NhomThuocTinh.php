<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhomThuocTinh extends Model
{
    protected $table = "nhomthuoctinh";
    protected $primaryKey = 'id';

    public function danhmucphuluc01() {
        return $this->hasMany('App\DanhMucPhuLuc01','id_nhom','id');
    }
    public function danhmucphuluc04() {
        return $this->hasMany('App\DanhMucPhuLuc04','id_nhom','id');
    }
}
