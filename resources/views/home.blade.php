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
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Báo Cáo Phụ Lục 01</h5>
                        </div>
                        <div class="ibox-content" >
                            <form id="form" method="post" action="{{route('baocaophuluc01.store')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                                @foreach($ntts as $ntt)
                                <h1 class="show">{{$ntt->tennhom}}</h1>
                                <fieldset style="float: left;width: 100%;height: 100%;padding: 0%;background: #fff;">
                                    <table class="table table-bordered" >
                                        <thead>
                                            <tr>
                                                <th class="col-md-1">TT</th>
                                                <th class="col-md-9">Các Tiêu Chí Trong Kỳ Báo Cáo</th>
                                                <th class="col-md-1">ĐVT</th>
                                                <th class="col-md-1">Số Liệu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($pl01s as $pl01)
                                                @if($ntt->id == $pl01->id_nhom) 
                                                    <tr>
                                                        <td><input type="hidden" class="form-control" id="fid"name="idpl01[]" value= "{{$pl01->id}}"></td>
                                                        <td>+ {{$pl01->tenthuoctinh}}</td>
                                                        <td>{{$pl01->donvitinh}}</td>
                                                        <td><input type="text" class="form-control" name="inputpl01[]">
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
