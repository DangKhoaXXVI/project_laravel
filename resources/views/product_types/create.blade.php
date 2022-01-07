@extends('master')
@section('title', 'Thêm loại sản phẩm')
@section('content')
  
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm loại sản phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Thêm loại sản phẩm</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row  d-flex justify-content-center">

            <div class="card card-primary w-50">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('createProduct')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" name="Name" placeholder="Nhập tên sản phẩm">
                  </div>
                  <div class="form-group">
                    <label for="Status">Status</label>
                    <select class="form-control" name="Status">
                   
                        <option value="1" selected>Active</option> 
                        <option value="0">Deactive</option> 
                     
                    </select>
                  </div>
                  
                    {{-- "Configuration": "",
                    "Info": "ASUS TUF Gaming Dash F15 là một chiếc laptop gaming hạng nặng với bộ vi xử lý Intel i7 Gen 11 mới nhất kết hợp với GPU Nvidia RTX 3060 mới nhất và một thiết lập âm thanh tổng thể tuyệt vời. Trong thời điểm hiện nay việc tìm mua được một chiếc RTX 3000 cho PC cũng khá là khó khăn nhưng TUF Dash 15 2021. sẽ là một lựa chọn hoàn hảo.  <img src=\"https://file.hstatic.net/1000026716/file/gearvn-laptop-gaming-asus-tuf-dash-fx516pe-hn005t-3_a7129baccf8740f9af2d55e558d29a94_1024x1024.jpg\" alt=\"GEARVN.COM - Laptop Gaming Asus TUF Dash FX516PE HN005T\">  Thiết kế Thiết kế được thay đổi hoàn toàn so với những người anh em trước đó thuộc dòng TUF Gaming. Bề ngoài góc cạnh cùng màu Eclipse Gray tạo cảm giác chắc chắn và đậm chất gaming. <img src=\"https://file.hstatic.net/1000026716/file/",
                    "Origin": "Asus",
                    "ProductType_id": 1,
                    "Price": 22490000,
                    "Quantity": 100,
                    "Avatar": "image2.jpg",
                    "Status": 1,
                    "created_at": null,
                    "updated_at": null --}}
 
                  {{-- <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> --}}
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
           

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection