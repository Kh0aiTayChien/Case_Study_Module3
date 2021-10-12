@extends('frontend.layouts.master')
@section('title', 'Sửa thông tin')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Đăng ký thông tin người dùng</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('providers.store') }}" class="form" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <lable>Họ và tên <span class="text-danger">*</span></lable>
                                    <input type="text" class="form-control" name="name">
                                    @error('name')
                                    <p class="text-danger"> {{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="inputFileNameImage">Tên thư mục ảnh đại diện</label>
                                    <input type="file" class="form-control-file" id="inputFileImage"
                                           name="image">
                                    @error('image')
                                    <p class="text-danger"> {{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputFileNameAvatar">Tên thư mục ảnh avatar</label>
                                    <input type="file" class="form-control-file" id="inputFileAvatar"
                                           name="avatar">
                                    @error('avatar')
                                    <p class="text-danger"> {{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <lable>Tuổi <span class="text-danger">*</span></lable>
                                    <input type="text" class="form-control" name="age">
                                    @error('age')
                                    <p class="text-danger"> {{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <lable>Ngày, tháng <span class="text-danger">*</span></lable>
                                    <input type="text" class="form-control" name="birth_day">
                                    @error('birth_day')
                                    <p class="text-danger"> {{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <lable>Giới tính <span class="text-danger">*</span></lable>
                                    <label><select class="form-control" name="gender">
                                            <option value="male">Nam</option>
                                            <option value="female">Nữ</option>
                                        </select></label>
                                    @error('gender')
                                    <p class="text-danger"> {{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <lable>Điện thoại <span class="text-danger">*</span></lable>
                                    <input type="text" class="form-control" name="phone">
                                    @error('phone')
                                    <p class="text-danger"> {{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <lable>Địa chỉ <span class="text-danger">*</span></lable>
                                    <input type="text" class="form-control" name="address">
                                    @error('address')
                                    <p class="text-danger"> {{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <lable>Tỉnh/Thành phố <span class="text-danger">*</span></lable>
                                    <input type="text" class="form-control" name="city">
                                    @error('city')
                                    <p class="text-danger"> {{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <lable>Quốc tịch <span class="text-danger">*</span></lable>
                                    <input type="text" class="form-control" name="national">
                                    @error('national')
                                    <p class="text-danger"> {{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <lable>Chiều cao</lable>
                                    <input type="text" class="form-control" name="height">
                                </div>
                                <div class="form-group">
                                    <lable>Cân nặng</lable>
                                    <input type="text" class="form-control" name="weight">
                                </div>
                                <div class="form-group">
                                    <lable>Sở thích</lable>
                                    <input type="text" class="form-control" name="favourite">
                                </div>
                                <div class="form-group">
                                    <lable>Mô tả</lable>
                                    <textarea class="form-control" name="description"></textarea>
                                </div>
                                <div class="form-group">
                                    <lable>Trạng thái</lable>
                                    <input type="text" class="form-control" name="status">
                                </div>
                                <button type="submit" class="btn btn-primary">Tạo mới</button>
                            </form>

                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>

@endsection

