@extends('layouts.DMKy_Bao_Cao.admin_design')

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
                                    <th>Số thứ tự</th>
                                    <th>Tên kỳ</th>
                                    <th>Thời gian bắt đầu</th>
                                    <th>Thời gian kết thúc</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($kybaocao as $kbc)
                                    <tr class="item{{$kbc->id}}">
                                        <td></td>
                                        <td>
                                            {{$kbc->tenky}}
                                        </td>
                                        <td>
                                            {{date('d-m-Y', strtotime($kbc->thoigianbatdau))}}
                                        </td>
                                        <td>
                                            {{date('d-m-Y', strtotime($kbc->thoigianketthuc))}}
                                        </td>
                                        <td style='text-align: center;'>
                                            <button class="btn btn-outline btn-success  dim edit-modal" data-id="{{$kbc->id}}" data-tenky="{{$kbc->tenky}}" data-ngaybatdau="{{date('d-m-Y', strtotime($kbc->thoigianbatdau))}}" data-ngayketthuc="{{date('d-m-Y', strtotime($kbc->thoigianketthuc))}}" style=" padding: 1px 9px;"><i class="fa fa-paint-brush"></i>Edit</button> 
                                            <button class="btn btn-outline btn-danger  dim delete-modal" data-id="{{$kbc->id}}" data-noidung="{{$kbc->tenky}}" type="submit" style=" padding: 1px 9px;"><i class="fa fa-trash"></i>Delete</button>
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

<form method="post" action="{{route('kybaocao.store')}}" enctype="multipart/form-data">{{csrf_field()}}
    <div class="modal inmodal fade" id="myModal1" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width: 500px;margin: 30px auto;">
            <div class="modal-content"style="border: 3px solid transparent;border-radius: 10px;    -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);border-color: #1ab394;">
                <div class="modal-header"style="padding: 2px 6px;text-align: center;background-color: #1ab394;    border-color: #1ab394;">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title"style="color: #ffffff;">Thêm kỳ báo cáo</h4>
                </div>
                <div class="modal-body"style="padding: 1px 30px 1px 30px;">
                    <div class="row show-grid">
                        <div class="col-xs-12" style="background-color: #fff !important;border:none">
                            <b><p>Tên Kỳ</p></b>
                             <input style="border-radius: 5px; border: 1px solid #000;" type="text" class="form-control" name="tenky" required="">
                        </div>
                        <div class="col-xs-6" style="background-color: #fff !important;border:none">
                            <b><p>Thời Gian Bắt Đầu</p></b>
                            <div class="input-group date" style="border: 1px solid #000;">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" class="form-control" id="thoigianbatdau" name="thoigianbatdau">
                            </div>
                        </div>
                        <div class="col-xs-6" style="background-color: #fff !important;border:none">
                            <b><p>Thời Gian Kết Thúc</p></b>
                            <div class="input-group date" style="border: 1px solid #000;">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" class="form-control" name="thoigianketthuc" id="thoigianketthuc">
                            </div>
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
        <div class="modal-dialog modal-lg" style="width: 500px;margin: 30px auto;">
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
                        <div class="col-xs-12" style="background-color: #fff !important;border:none">
                            <b><p>Tên Kỳ</p></b>
                             <input style="border-radius: 5px; border: 1px solid #000;" type="text" class="form-control" id="tenky" required="">
                        </div>
                        <div class="col-xs-6" style="background-color: #fff !important;border:none">
                            <b><p>Thời Gian Bắt Đầu</p></b>
                                <div class="input-group date" style="border: 1px solid #000;">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="text" class="form-control" id="thoigianbd">
                                </div>
                        </div>
                        <div class="col-xs-6" style="background-color: #fff !important;border:none">
                            <b><p>Thời Gian Kết Thúc</p></b>
                                <div class="input-group date" style="border: 1px solid #000;">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="text" class="form-control" id="thoigiankt">
                                </div>
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
<script src="{{ asset('js/kybaocao.js') }}"></script>
@endsection
