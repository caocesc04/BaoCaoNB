@extends('layouts.NBCPL04.admin_design')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Phụ Lục 04</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a>Báo Cáo</a>
                </li>
                <li class="active">
                    <strong>Phụ Lục 04</strong>
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
                        <div class="ibox-title">
                            <h5>BÁO CÁO TỔNG HỢP TÌNH HÌNH TAI NẠN LAO ĐỘNG<small style="color: red"> (Kỳ 1 năm 2019) </small></h5>
                        </div>
                        <div class="ibox-content">
                            <form method="get" class="form-horizontal">
                                <div class="form-group"><label class="col-sm-4 control-label">Thuộc loại hình cơ sở (doanh nghiệp)</label>
                                    <div class="col-sm-8"><input type="text" class="form-control"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-4 control-label">Mã loại hình cơ sở</label>
                                    <div class="col-sm-8"><input type="text" class="form-control"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-4 control-label">Đơn vị nhận báo cáo</label>
                                    <div class="col-sm-8"><input type="text" class="form-control"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-4 control-label">Lĩnh vực sản xuất chính của cơ sở</label>
                                    <div class="col-sm-8"><input type="text" class="form-control"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-4 control-label">Mã lĩnh vực</label>
                                    <div class="col-sm-8"><input type="text" class="form-control"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-4 control-label">Tổng số lao động cơ sở (người)</label>
                                    <div class="col-sm-8"><input type="text" class="form-control"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-4 control-label">Số lao động nữ</label>
                                    <div class="col-sm-8"><input type="text" class="form-control"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-4 control-label">Tổng qũy lương (triệu đồng)</label>
                                    <div class="col-sm-8"><input type="text" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <fieldset style="float: left;width: 100%;height: 100%;padding: 0%;background: #fff; ">
                                    <table class="table table-bordered" >
                                        <thead>
                                        <tr>
                                            <th rowspan="4" style="text-align: center;">Tên chỉ tiêu thống kê</th>
                                            <th rowspan="4" style="text-align: center;">Mã số</th>
                                            <th colspan="11" style="text-align: center;">Phân loại TNLĐ theo mức độ thương tật</th>
                                        </tr>
                                        <tr>
                                            <th colspan="3" style="text-align: center;">Số vụ (Vụ)</th>
                                            <th colspan="8" style="text-align: center;">Số người bị tai nạn (Người)</th>
                                        </tr>
                                        <tr>
                                            <th rowspan="2" style="text-align: center;">Tổng số</th>
                                            <th rowspan="2" style="text-align: center;">Số vụ có người chết</th>
                                            <th rowspan="2" style="text-align: center;">Số vụ có từ 2 người bị tai nạn trở nên</th>
                                            <th colspan="2" style="text-align: center;">Tổng số</th>
                                            <th colspan="2" style="text-align: center;">Số LĐ nữ</th>
                                            <th colspan="2" style="text-align: center;">Số người chết</th>
                                            <th colspan="2" style="text-align: center;">Số người bị thương nặng</th>
                                        </tr>
                                        <tr>
                                            <th style="text-align: center;">Tổng số</th>
                                            <th style="text-align: center;">Nạn nhân không thuộc quyền quản lý</th>
                                            <th style="text-align: center;">Tổng số</th>
                                            <th style="text-align: center;">Nạn nhân không thuộc quyền quản lý</th>
                                            <th style="text-align: center;">Tổng số</th>
                                            <th style="text-align: center;">Nạn nhân không thuộc quyền quản lý</th>
                                            <th style="text-align: center;">Tổng số</th>
                                            <th style="text-align: center;">Nạn nhân không thuộc quyền quản lý</th>
                                        </tr>
                                        <tr>
                                            <th style="text-align: center;">1</th>
                                            <th style="text-align: center;">2</th>
                                            <th style="text-align: center;">3</th>
                                            <th style="text-align: center;">4</th>
                                            <th style="text-align: center;">5</th>
                                            <th style="text-align: center;">6</th>
                                            <th style="text-align: center;">7</th>
                                            <th style="text-align: center;">8</th>
                                            <th style="text-align: center;">9</th>
                                            <th style="text-align: center;">10</th>
                                            <th style="text-align: center;">11</th>
                                            <th style="text-align: center;">12</th>
                                            <th style="text-align: center;">13</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan="2" style="font-weight: bold;">1. Tai nạn lao động</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td colspan="13" style="font-weight: bold;">1.1. Phân theo nguyên nhân xảy ra TNLĐ</td>
                                        </tr>
                                        <tr>
                                            <td colspan="13" style="font-weight: bold;">a. Do người sử dụng lao động</td>
                                        </tr>
                                        <tr>
                                            <td>Không có thiết bị an toàn hoặc thiết bị không đảm bảo an toàn</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </fieldset>

                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white" type="submit">Cancel</button>
                                        <button class="btn btn-primary" type="submit">Save changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
        

@endsection
