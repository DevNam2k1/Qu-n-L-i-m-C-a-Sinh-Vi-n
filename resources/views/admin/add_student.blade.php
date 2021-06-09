@extends('../admin_layout')
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Thêm Sinh Viên</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Trang Chủ</a></li>
          <li class="breadcrumb-item active">Thêm Sinh Viên</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection
@section('admin_content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Thêm Sinh Viên</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Mã Sinh Viên</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Mã Sinh Viên">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Họ Và Tên</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Họ và Tên">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Giới Tính</label>
            <br>
            <input type="radio" id="radioPrimary3" name="r1" disabled> Nam   
            <input type="radio" style="margin-left:200px;" id="radioPrimary3" name="r1" disabled>  Nữ
            <input type="radio" style="margin-left:200px;" id="radioPrimary3" name="r1" disabled>  Khác
            
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Ngày Sinh</label>
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Quê Quán</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Địa chỉ">
        </div> 
        <div class="form-group">
            <label for="exampleInputPassword1">Mã Lớp</label>
            <select class="form-control select2" style="width: 100%;">
                <option selected="selected">Mã Lớp</option>
                <option>001-BKD01</option>
                <option>002-BKD02</option>
              </select>
        </div> 
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection