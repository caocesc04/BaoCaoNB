<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DanhMucPhuLuc01;
use App\NhomThuocTinh;
use App\DoanhNghiep;
use App\KyBaoCao;
use App\BaoCaoPhuLuc01;
use Illuminate\Support\Facades\DB;
use Redirect;


class BaoCaoPhuLuc01Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doanhnghiep = DoanhNghiep::all();
        $kybaocao = KyBaoCao::all();
        $pl01s = DanhMucPhuLuc01::with('nhomthuoctinh')->get();
        $ntts = NhomThuocTinh::with('danhmucphuluc01')->where('tenphuluc', 'Phụ Lục 01')->get();
        return view('home', compact('pl01s','ntts','doanhnghiep','kybaocao'));
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
        $doanhnghiep = DoanhNghiep::find($request->doanhnghiep);
        $kybaocao = KyBaoCao::find($request->kybaocao);
        $idphuluc01 = $request->idpl01;
        $soluongs = $request->inputpl01;
        foreach($soluongs as $key=>$soluong) {
            $data = array(
                'id_doanhnghiep' =>$doanhnghiep->id,
                'id_kybaocao' =>$kybaocao->id,
                'id_phuluc01' => $idphuluc01[$key],
                'soluong' => $soluongs[$key],
            );
            BaoCaoPhuLuc01::create($data);
        }
        return Redirect::back()->with('success','Thêm báo cáo thành công!');
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
