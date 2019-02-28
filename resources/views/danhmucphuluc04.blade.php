@extends('layouts.DM_Phu_Luc_04.admin_design')

@section('content')
     
    <div class="wrapper wrapper-content animated fadeInRight">
        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div><br />
          @endif
          @if (Session::has('success'))
          <div class="alert alert-success">
              <p>{{ Session::get('success') }}</p>
          </div><br />
        @endif
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title" style="background-color: ">
                        <h5 class="col-lg-10">Danh Mục Phụ Lục 04</h5>
                        <button class="btn btn-info" type="button" data-toggle="modal" data-target="#myModal1">
                        <i class="fa fa-paste"></i> Thêm Mới </button>
                    </div>
                    <div class="ibox-content" >
                        <div class="tabs-container" style="background-color: #fff">
                            <ul class="nav nav-tabs col-lg-12">
                                @foreach($ntts as $pl04)
                                    <li class="col-lg-3" style="height: 100px">
                                        <a data-toggle="tab" href="#tab-{{$pl04->id}}">{{$pl04->tennhom}}</a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="tab-content">
                                @foreach($ntts as $key=>$ntt)
                                    <div id="tab-{{$ntt->id}}" class="tab-pane {{$key==0 ? 'active' : ''}}">
                                        <div class="ibox-content">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover dataTables-example css-serial" >
                                                    <thead>
                                                        <tr>
                                                            <th>Số thứ tự</th>
                                                            <th>Tiêu chí</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($pl04s as $pl04)
                                                        @if($ntt->id == $pl04->id_nhom) 
                                                        <tr class="item{{$pl04->id}}">
                                                            <td></td>
                                                            <td>
                                                                {{$pl04->tieuchithongke}}
                                                            </td>
                                                            <td style='text-align: center;'>
                                                                <button class="btn btn-outline btn-success  dim edit-modal" data-id="{{$pl04->id}}" data-noidung="{{$pl04->tenthuoctinh}}" style=" padding: 1px 9px;"><i class="fa fa-paint-brush"></i>Edit</button> 
                                                                <button class="btn btn-outline btn-danger  dim delete-modal" data-id="{{$pl04->id}}" data-noidung="{{$pl04->tenthuoctinh}}" type="submit" style=" padding: 1px 9px;"><i class="fa fa-trash"></i>Delete</button>
                                                            </td>
                                                        </tr>
                                                        @endif
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form method="post" action="{{route('danhmucphuluc04.store')}}" enctype="multipart/form-data">{{csrf_field()}}
        <div class="modal inmodal fade" id="myModal1" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-lg" style="width: 500px;margin: 30px auto;">
                <div class="modal-content"style="border: 3px solid transparent;border-radius: 10px;    -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);border-color: #1ab394;">
                    <div class="modal-header"style="padding: 2px 6px;text-align: center;background-color: #1ab394;    border-color: #1ab394;">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title"style="color: #ffffff;">Thêm nhóm thuộc tính</h4>
                    </div>
                    <div class="modal-body"style="padding: 1px 30px 1px 30px;">
                        <div class="row show-grid">
                            <div class="col-xs-12" style="background-color: #fff !important;border:none">
                                <b><p>Tên Thuộc Tính</p></b>
                                 <input style="border-radius: 5px; border: 1px solid #000;" type="text" class="form-control" name="TenThuocTinh" required="">
                            </div> 
                            <div class="col-xs-12" style="background-color: #fff !important;border:none">
                                <b><p>Thuộc Nhóm</p> </b>
                                <select style="border: 1px solid #000;" class="form-control m-b" name="TenNhom" style="border-radius: 10px;">
                                    @foreach($ntts as $ntt)
                                    <option value="{{$ntt->id}}">{{$ntt->tennhom}}</option>
                                    @endforeach
                                </select>
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
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                    <div class="row show-grid">
                        <input type="hidden" class="form-control" id="fid" disabled>
                        <div class="row show-grid">
                            <div class="col-xs-12" style="background-color: #fff !important;border:none">
                                <label class="control-label" for="name">Nội dung:</label>
                                <input type="name" class="form-control" id="noidung">
                            </div>
                            <div class="col-xs-12" style="background-color: #fff !important;border:none">
                                <label class="control-label" for="name">Đơn vị tính:</label>
                                <input type="name" class="form-control" id="donvitinh">
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
<script src="{{ asset('js/ajaxscript.js') }}"></script>
@endsection
