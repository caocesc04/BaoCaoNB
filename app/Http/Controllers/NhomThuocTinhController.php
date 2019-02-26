<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NhomThuocTinh;
use Illuminate\Support\Facades\DB;
use Redirect;


class NhomThuocTinhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ntt = NhomThuocTinh::all();
        return view('nhomthuoctinh', compact('ntt'));
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
          'TenNhom' => 'required',
        ],[
        'TenNhom.required' => 'Chưa nhập nhóm thuộc tính',
        ]);
        $ntt = new NhomThuocTinh;
        $ntt->tennhom = $request->TenNhom;
        $ntt->tenphuluc = $request->TenPhuLuc;
        $ntt->save();
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
    public function editntt(Request $req)
    {
        $ntt = NhomThuocTinh::find($req->id);
        $ntt->tennhom = $req->tennhom;
        $ntt->tenphuluc = $req->tenphuluc;
        $ntt->save();
        return response()->json($ntt);
    }
    public function deletentt(Request $req) {
        KyBaoCao::find ( $req->id )->delete ();
        return response ()->json ();
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
