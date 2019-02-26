<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KyBaoCao;
use Illuminate\Support\Facades\DB;
use Redirect;


class DanhMucKyBaoCaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kybaocao = KyBaoCao::all();
        return view('danhmuckybaocao', compact('kybaocao'));
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
          'tenky' => 'required',
          'thoigianbatdau' => 'required',
          'thoigianketthuc' => 'required',
        ],[
        'tenky.required' => 'Chưa nhập tên kỳ',
        'thoigianbatdau.required' => 'Chưa nhập thời gian bắt đầu',
        'thoigianketthuc.required' => 'Chưa nhập thời gian kết thúc',
        ]);
        $kybaocao = new KyBaoCao;
        $kybaocao->tenky = $request->tenky;
        $kybaocao->thoigianbatdau = date('Y-m-d', strtotime($request->thoigianbatdau));
        $kybaocao->thoigianketthuc = date('Y-m-d', strtotime($request->thoigianketthuc));
        $kybaocao->save();
        return Redirect::back()->with('success','Thêm kỳ báo cáo thành công!');
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
    public function editkbc(Request $req)
    {
        $kybaocao = KyBaoCao::find($req->id);
        $kybaocao->tenky = $req->tenky;
        $kybaocao->thoigianbatdau = date('Y-m-d', strtotime($req->ngaybatdau));
        $kybaocao->thoigianketthuc = date('Y-m-d', strtotime($req->ngayketthuc));
        $kybaocao->save();
        return response()->json($kybaocao);
    }
    public function deletekbc(Request $req) {
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
