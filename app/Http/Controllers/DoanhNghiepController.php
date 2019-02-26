<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DoanhNghiep;
use Illuminate\Support\Facades\DB;
use Redirect;

class DoanhNghiepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doanhnghiep = DoanhNghiep::all();
        return view('doanhnghiep', compact('doanhnghiep'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doanhnghiep = new DoanhNghiep;
        $doanhnghiep->ten = $request->ten;
        $doanhnghiep->nganhsanxuat = $request->nganhsanxuat;
        $doanhnghiep->loaihinh = $request->loaihinh;
        $doanhnghiep->coquanquanly = $request->coquanquanly;
        $doanhnghiep->diachi = $request->diachi;
        $doanhnghiep->sodienthoai = $request->sodienthoai;
        $doanhnghiep->loaihinhcoso = $request->loaihinhcoso;
        $doanhnghiep->maloaihinh = $request->maloaihinh;
        $doanhnghiep->linhvucsanxuat = $request->linhvucsanxuat;
        $doanhnghiep->malinhvuc = $request->malinhvuc;
        $doanhnghiep->save();
        return Redirect::back()->with('success','Thêm nhóm thuộc tính thành công!');
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
