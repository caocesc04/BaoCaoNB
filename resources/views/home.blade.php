@extends('layouts.NBCPL01.admin_design')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Phụ Lục 01</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a>Báo Cáo</a>
                </li>
                <li class="active">
                    <strong>Phụ Lục 01</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Tùy Chọn</h5>
                        </div>
                        <div class="ibox-content col-xs-12" >
                            <div class="col-xs-6" style="background-color: #fff !important;border:none">
                                <b><p>Doanh Nghiệp</p> </b>
                                <select class="form-control m-b" name="Kho" style="border-radius: 10px;">
                                    @foreach($doanhnghiep as $dn)
                                    <option value="{{$dn->id}}">{{$dn->ten}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xs-6" style="background-color: #fff !important;border:none">
                                <b><p>Kỳ Báo Cáo</p> </b>
                                <select class="form-control m-b" name="Kho" style="border-radius: 10px;">
                                    @foreach($kybaocao as $kbc)
                                    <option value="{{$kbc->id}}">{{$kbc->tenky}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Báo Cáo Phụ Lục 01</h5>
                        </div>
                        <div class="ibox-content" >
                            <form id="form" action="#" >
                                @foreach($ntts as $ntt)
                                <h1>{{$ntt->tennhom}}</h1>
                                <fieldset style="float: left;width: 100%;height: 100%;padding: 0%;background: #fff; ">
                                    <table class="table table-bordered" >
                                        <thead>
                                            <tr>
                                                <th class="col-md-1">TT</th>
                                                <th class="col-md-9">Các Chi Tiêu Trong Kỳ Báo Cáo</th>
                                                <th class="col-md-1">ĐVT</th>
                                                <th class="col-md-1">Số Liệu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($pl01s as $pl01)
                                                @if($ntt->id == $pl01->id_nhom) 
                                                    <tr>
                                                        <td></td>
                                                        <td>+ {{$pl01->tenthuoctinh}}</td>
                                                        <td>{{$pl01->donvitinh}}</td>
                                                        <td><input type="text" placeholder="1000" class="form-control">
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </fieldset>
                                @endforeach
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
