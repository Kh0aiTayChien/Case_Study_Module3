@extends('frontend.layouts.master')
@section('title','Danh sách người cung cấp dịch vụ')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-6">
                <div class="col-sm-9">
                    <h1>Người cung cấp dịch vụ</h1>
                </div>
                <div class="col-sm-3">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('homepage')}}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh mục người cung cấp dịch vụ</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Họ và tên</th>
                                    <th>Hình ảnh</th>
                                    <th>Tuổi</th>
                                    <th>Địa điểm hẹn hò</th>
                                    <th>Trạng thái</th>
                                    <th colspan="3"></th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($providers as $key => $provider)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{$provider->name }}</td>
                                        <td><img src="{{ asset('storage/' . $provider->image) }}" alt=""
                                                 style="width: 100px">
                                        </td>
                                        <td>{{ $provider->age }}</td>
                                        <td>{{ $provider->city }}</td>
                                        <td>{{ $provider->status }}</td>
                                        <td><a href="{{route('providers.edit', $provider->id)}}" type="button"
                                               class="btn btn-primary"><i class="far fa-edit"></i></a></td>
                                        <td><a href="{{route('providers.destroy', $provider->id)}}"
                                               onclick="return confirm('Bạn vẫn muốn xóa thông tin này?')" type="button"
                                               class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
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
    <!-- /.content -->
@endsection


