@section('content')
    @extends('layouts.master')
@section('title','Danh sách người cung cấp dịch vụ')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Người cung cấp dịch vụ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home.index')}}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh mục sách</li>
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
                        <div class="card-header">
                            <h3 class="card-title">
                                <a href="{{ route('authors.create') }}">Thêm mới</a>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã sách</th>
                                    <th>Tên</th>
                                    <th>Hình ảnh</th>
                                    <th>Giá</th>
                                    <th>Ngày phát hành</th>
                                    <th>Mô tả</th>
                                    <th colspan="3"></th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($authors as $key => $author)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <th>{{$author->author_code}}</th>
                                        <td>{{ $author->name }}</td>
                                        <td> @if($author->image)
                                                <img src="{{ asset('storage/images/' . $author->image) }}" alt=""
                                                     style="width: 150px">
                                            @else {{'Chưa chèn ảnh'}}
                                            @endif
                                        </td>
                                        <td>{{ number_format($author->price) }}</td>
                                        <td>{{ $author->date }}</td>
                                        <td>{{ $author->description }}</td>
                                        <td><a type="button" href="{{route('products.addToCart', $author->id)}}"
                                               class="btn btn-success"><i class="fas fa-shopping-cart"></i>

                                            </a></td>
                                        <td><a href="{{route('authors.edit', $author->id)}}" type="button"
                                               class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
                                        <td><a href="{{route('authors.delete', $author->id)}}"
                                               onclick="return confirm('Bạn vẫn muốn xóa sách này?')" type="button"
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

@endsection

