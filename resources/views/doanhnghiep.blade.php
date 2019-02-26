@extends('layouts.DoanhNghiep.admin_design')

@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5 class="col-lg-10">Danh sách các nhóm thuộc tính</h5>
                <button class="btn btn-info" type="button" data-toggle="modal" data-target="#myModal1">
                    <i class="fa fa-paste"></i>  Thêm Mới
                </button>
            </div>
                <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example css-serial" >
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên doanh nghiệp</th>
                            <th>Ngành nghề sản xuất kinh doanh</th>
                            <th>Cơ quan quản lý</th>
                            <th>Địa chỉ</th>
                            <th>Điện thoại</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($doanhnghiep as $dn)
                            <tr class="item{{$dn->id}}">
                                <td></td>
                                <td>{{$dn->ten}}</td>
                                <td>{{$dn->nganhsanxuat}}</td>
                                <td>{{$dn->coquanquanly}}</td>
                                <td>{{$dn->diachi}}</td>
                                <td>{{$dn->sodienthoai}}</td>
                                <td style='text-align: center;'>
                                    <button class="btn btn-outline btn-success  dim edit-modal" data-id="{{$dn->id}}" data-ten="{{$dn->ten}}" data-nganhsanxuat="{{$dn->nganhsanxuat}}" data-loaihinh="{{$dn->loaihinh}}"data-coquanquanly="{{$dn->coquanquanly}}"data-diachi="{{$dn->diachi}}"data-sodienthoai="{{$dn->sodienthoai}}"data-loaihinhcoso="{{$dn->loaihinhcoso}}"data-maloaihinh="{{$dn->maloaihinh}}"data-linhvucsanxuat="{{$dn->linhvucsanxuat}}"data-malinhvuc="{{$dn->malinhvuc}}" style=" padding: 1px 9px;"><i class="fa fa-paint-brush"></i>Edit</button> 
                                    <button class="btn btn-outline btn-danger  dim delete-modal" data-id="{{$dn->id}}" data-noidung="{{$dn->ten}}" type="submit" style=" padding: 1px 9px;"><i class="fa fa-trash"></i>Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table> 
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<form method="post" action="{{route('doanhnghiep.store')}}" enctype="multipart/form-data">
{{csrf_field()}}
    <div class="modal inmodal fade" id="myModal1" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width: 1000px;margin: 30px auto;">
            <div class="modal-content"style="border: 3px solid transparent;border-radius: 10px;    -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);border-color: #1ab394;">
                <div class="modal-header"style="padding: 2px 6px;text-align: center;background-color: #1ab394;    border-color: #1ab394;">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title"style="color: #ffffff;">Thêm doanh nghiệp</h4>
                </div>
                <div class="modal-body"style="padding: 1px 30px 1px 30px;">
                    <div class="row show-grid">
                        <div class="col-xs-6" style="background-color: #fff !important;border:none">
                            <b><p>Tên Doanh Nghiệp</p></b>
                             <input style="border-radius: 5px; border: 1px solid #000;" type="text" class="form-control" name="ten" required="">
                        </div>
                        <div class="col-xs-6" style="background-color: #fff !important;border:none">
                            <b><p>Ngành Nghề Sản Xuất Kinh Doanh</p></b>
                             <input style="border-radius: 5px; border: 1px solid #000;" type="text" class="form-control" name="nganhsanxuat" required="">
                        </div>
                        <div class="col-xs-6" style="background-color: #fff !important;border:none">
                            <b><p>Loại Hình</p></b>
                             <input style="border-radius: 5px; border: 1px solid #000;" type="text" class="form-control" name="loaihinh" required="">
                        </div>
                        <div class="col-xs-6" style="background-color: #fff !important;border:none">
                            <b><p>Cơ Quan Cấp Trên Trực Tiếp Quản Lý</p></b>
                             <input style="border-radius: 5px; border: 1px solid #000;" type="text" class="form-control" name="coquanquanly" required="">
                        </div>
                        <div class="col-xs-6" style="background-color: #fff !important;border:none">
                            <b><p>Địa Chỉ: (Số nhà, đường phố, quận, huyện, thị xã)</p></b>
                             <input style="border-radius: 5px; border: 1px solid #000;" type="text" class="form-control" name="diachi" required="">
                        </div>
                        <div class="col-xs-6" style="background-color: #fff !important;border:none">
                            <b><p>Điện Thoại</p></b>
                             <input style="border-radius: 5px; border: 1px solid #000;" type="text" class="form-control" name="sodienthoai" required="">
                        </div>
                        <div class="col-xs-6" style="background-color: #fff !important;border:none">
                            <b><p>Thuộc Loại Hình Cơ Sở (doanh nghiệp)</p></b>
                             <input style="border-radius: 5px; border: 1px solid #000;" type="text" class="form-control" name="loaihinhcoso" required="">
                        </div>
                        <div class="col-xs-6" style="background-color: #fff !important;border:none">
                            <b><p>Mã Loại Hình Cơ Sở</p></b>
                             <input style="border-radius: 5px; border: 1px solid #000;" type="text" class="form-control" name="maloaihinh" required="">
                        </div>
                        <div class="col-xs-6" style="background-color: #fff !important;border:none">
                            <b><p>Lĩnh Vực Sản Xuất Chính Của Cở Sở</p></b>
                             <input style="border-radius: 5px; border: 1px solid #000;" type="text" class="form-control" name="linhvucsanxuat" required="">
                        </div>
                        <div class="col-xs-6" style="background-color: #fff !important;border:none">
                            <b><p>Mã Lĩnh Vực</p></b>
                             <input style="border-radius: 5px; border: 1px solid #000;" type="text" class="form-control" name="malinhvuc" required="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline btn-info" data-dismiss="modal"style="    margin-bottom: 0px;">Đóng</button>
                    <button type="submit" class="btn btn-success" data-style="zoom-in" > Lưu </button>
                </div>
            </div>
        </div>
    </div>
</form>
    <div class="modal inmodal fade" id="myModal" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width: 1000px;margin: 30px auto;">
            <div class="modal-content"style="border: 3px solid transparent;border-radius: 10px;-webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);border-color: #1ab394;">
                <div class="modal-header"style="padding: 2px 6px;text-align: center;background-color: #1ab394;    border-color: #1ab394;">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" style="color: #ffffff;"></h4>
                </div>
                <div class="modal-body" style="padding: 1px 30px 1px 30px;">
                    <form class="form-horizontal" role="form">
                    <div class="row show-grid">
                        <input type="hidden" class="form-control" id="fid" disabled>
                        <div class="row show-grid">
                            <div class="col-xs-6" style="background-color: #fff !important;border:none">
                            <b><p>Tên Doanh Nghiệp</p></b>
                             <input style="border-radius: 5px; border: 1px solid #000;" type="text" class="form-control" id="ten" required="">
                        </div>
                        <div class="col-xs-6" style="background-color: #fff !important;border:none">
                            <b><p>Ngành Nghề Sản Xuất Kinh Doanh</p></b>
                             <input style="border-radius: 5px; border: 1px solid #000;" type="text" class="form-control" id="nganhsanxuat" required="">
                        </div>
                        <div class="col-xs-6" style="background-color: #fff !important;border:none">
                            <b><p>Loại Hình</p></b>
                             <input style="border-radius: 5px; border: 1px solid #000;" type="text" class="form-control" id="loaihinh" required="">
                        </div>
                        <div class="col-xs-6" style="background-color: #fff !important;border:none">
                            <b><p>Cơ Quan Cấp Trên Trực Tiếp Quản Lý</p></b>
                             <input style="border-radius: 5px; border: 1px solid #000;" type="text" class="form-control" id="coquanquanly" required="">
                        </div>
                        <div class="col-xs-6" style="background-color: #fff !important;border:none">
                            <b><p>Địa Chỉ: (Số nhà, đường phố, quận, huyện, thị xã)</p></b>
                             <input style="border-radius: 5px; border: 1px solid #000;" type="text" class="form-control" id="diachi" required="">
                        </div>
                        <div class="col-xs-6" style="background-color: #fff !important;border:none">
                            <b><p>Điện Thoại</p></b>
                             <input style="border-radius: 5px; border: 1px solid #000;" type="text" class="form-control" id="sodienthoai" required="">
                        </div>
                        <div class="col-xs-6" style="background-color: #fff !important;border:none">
                            <b><p>Thuộc Loại Hình Cơ Sở (doanh nghiệp)</p></b>
                             <input style="border-radius: 5px; border: 1px solid #000;" type="text" class="form-control" id="loaihinhcoso" required="">
                        </div>
                        <div class="col-xs-6" style="background-color: #fff !important;border:none">
                            <b><p>Mã Loại Hình Cơ Sở</p></b>
                             <input style="border-radius: 5px; border: 1px solid #000;" type="text" class="form-control" id="maloaihinh" required="">
                        </div>
                        <div class="col-xs-6" style="background-color: #fff !important;border:none">
                            <b><p>Lĩnh Vực Sản Xuất Chính Của Cở Sở</p></b>
                             <input style="border-radius: 5px; border: 1px solid #000;" type="text" class="form-control" id="linhvucsanxuat" required="">
                        </div>
                        <div class="col-xs-6" style="background-color: #fff !important;border:none">
                            <b><p>Mã Lĩnh Vực</p></b>
                             <input style="border-radius: 5px; border: 1px solid #000;" type="text" class="form-control" id="malinhvuc" required="">
                        </div>
                        </div>
                    </div>
                    </form>
                    <div class="deleteContent">
                        Bạn có chắc muốn xóa <span class="dname" style="color: red">
                        </span> ? <span class="hidden did"></span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn actionBtn" data-dismiss="modal">
                            <span id="footer_action_button" class='glyphicon'> </span>
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/doanhnghiep.js') }}"></script>
@endsection
