<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DanhMucPhuLuc04;
use App\NhomThuocTinh;
use Illuminate\Support\Facades\DB;
use Redirect;

class DanhMucPhuLuc04Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pl04s = DanhMucPhuLuc04::with('nhomthuoctinh')->get();
        $ntts = NhomThuocTinh::with('danhmucphuluc04')->where('tenphuluc', 'Phụ Lục 04')->get();
        return view('danhmucphuluc04', compact('ntts','pl04s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
          'TenThuocTinh' => 'required',
        ],[
        'TenThuocTinh.required' => 'Chưa nhập tên thuộc tính',
        ]);
        $pl04 = new DanhMucPhuLuc04;
        $pl04->tieuchithongke = $request->TenThuocTinh;
        $pl04->id_nhom = $request->TenNhom;
        $pl04->save();
        return Redirect::back()->with('success','Thêm thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
