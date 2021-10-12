@extends('frontend.layouts.master')
@section('title', 'Sửa thông tin')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 text-center"><h1>Chỉnh sửa thông tin</h1></div>
        </div>
        <div class="row">
            <form method="post" action="{{ route('providers.update', $provider->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="col">
                    <div class="row">
                        <div class="form-group col-6">
                            <label><b>Họ và tên</b><span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" value="{{ $provider->name }}"
                                   required>
                            @error('name')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label><b>Tuổi</b> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="age" value="{{ $provider->age }}"
                                   required>
                            @error('age')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="inputFileNameImage"><b>Thư mục ảnh đại diện</b><span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="inputFileNameImage" name="inputFileNameImage">
                            <input type="file" class="form-control-file" id="inputFileImage" name="image">
                        </div>
                        <div class="form-group col-6">
                            <label for="inputFileNameAvatar"><b>Thư mục ảnh avatar</b><span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="inputFileNameAvatar" name="inputFileNameAvatar">
                            <input type="file" class="form-control-file" id="inputFileAvatar" name="avatar">
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label for="inputFileName">Tên thư mục</label>--}}
{{--                            <input type="text" class="form-control" id="inputFileName" name="inputFileName">--}}
{{--                            <input type="file" class="form-control-file" id="inputFile" name="inputFile">--}}
{{--                        </div>--}}
                    </div>

                    <br>
                    <div class="row">
                        <div class="form-group col-6">
                            <label><b>Ngày, tháng sinh</b> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="birth_day"
                                   value="{{ $provider->birth_day }}"
                                   required>
                            @error('birth_day')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group col-2">
                            <label><b>Giới tính</b><span class="text-danger">*</span></label>
                            <br>
                            <label><select class="form-control" name="gender" style="width: 170px">
                                    <option value="male">Nam</option>
                                    <option value="female">Nữ</option>
                                </select></label>
                            @error('gender')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group col-4">
                            <label><b>Số điện thoại</b><span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="phone"
                                   value="{{ $provider->phone }}" required>
                            @error('phone')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <br>
                <div class="col">
                    <div class="row">
                        <div class="form-group col-6">
                            <label><b>Địa chỉ</b> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="address"
                                   value="{{ $provider->address }}" required>
                            @error('address')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group col-3">
                            <label><b>Tỉnh/Thành phố</b><span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="city"
                                   value="{{ $provider->city }}" required>
                            @error('city')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group col-3">
                            <label><b>Quốc gia</b><span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="national"
                                   value="{{ $provider->national }}" required>
                            @error('national')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-3">
                            <label><b>Chiều cao</b></label>
                            <input type="text" class="form-control" name="height"
                                   value="{{ $provider->height }}" required>
                        </div>
                        <br>
                        <div class="form-group col-3">
                            <label><b>Cân nặng</b></label>
                            <input type="text" class="form-control" name="weight"
                                   value="{{ $provider->weight }}" required>
                        </div>
                        <br>
                        <div class="form-group col-6">
                            <label><b>Sở thích</b></label>
                            <input type="text" class="form-control" name="favourite"
                                   value="{{ $provider->favourite }}" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label><b>Mô tả</b></label>
                        <br>
                        <textarea class="form-control" name="description"
                                  cols="155" rows="5">{{ $provider->description }}</textarea>
                    </div>
                    <br>

                    <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
