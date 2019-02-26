<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DanhMucPhuLuc01;
use App\NhomThuocTinh;
use Illuminate\Support\Facades\DB;
use Redirect;


class DanhMucPhuLuc01Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pl01s = DanhMucPhuLuc01::with('nhomthuoctinh')->get();
        $ntts = NhomThuocTinh::with('danhmucphuluc01')->where('tenphuluc', 'Phụ Lục 01')->get();
        return view('danhmucphuluc01', compact('ntts','pl01s'));
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
          'DonViTinh' => 'required',
        ],[
        'TenThuocTinh.required' => 'Chưa nhập tên thuộc tính',
        'DonViTinh.required' => 'Chưa nhập đơn vị tính',
        ]);
        $pl01 = new DanhMucPhuLuc01;
        $pl01->tenthuoctinh = $request->TenThuocTinh;
        $pl01->donvitinh = $request->DonViTinh;
        $pl01->id_nhom = $request->TenNhom;
        $pl01->save();
        return Redirect::back()->with('success','Thêm thuộc tính thành công!');
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
    public function EditModal(Request $req)
    {
        $pl01 = DanhMucPhuLuc01::find($req->id);
        $pl01->tenthuoctinh = $req->noidung;
        $pl01->donvitinh = $req->donvitinh;
        $pl01->save();

        return response()->json($pl01);

    }
    public function deleteItem(Request $req)
    {
        DanhMucPhuLuc01::find($req->id)->delete();

        return response()->json();
    }

}
