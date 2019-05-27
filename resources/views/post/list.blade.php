@extends('layouts.admin')

@section('content')
    <div class="content">
        <h3>Danh sách bài viết</h3>
        <div class="col-12">
            @if (Session::has('success'))
                <p class="text-success">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    {{ Session::get('success') }}
                </p>
            @endif
        </div>
        <div class="col-12">
            @if (Session::has('delete'))
                <p class="text-danger">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    {{ Session::get('delete') }}
                </p>
            @endif
        </div>
        <div class="table-wrapper">
            <div class="col-12">
                <form class="navbar-form navbar-right" action="{{ route('post.search') }}" method="get">
                    @csrf
                    <div class="col-md-5 col-sm-5 col-xs-5">
                        <div class="form-group">
                            <input type="text" class="form-control" name="keyword" placeholder="Search"
                                   value="{{ (isset($_GET['keyword'])) ? $_GET['keyword'] : '' }}">
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-2" style="margin-left: 2px">
                        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                    </div>
                    <div class="col-md-1 col-sm-1 col-xs-1" style="margin-left: 40px">
                        <a class="btn btn-primary" href="{{ route('post.create') }}">Thêm
                            mới</a>
                    </div>
                </form>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
                    </th>
                    <th>Tiêu đề</th>
                    <th>Chuyên mục</th>
                    <th>Thời gian</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                @if(count($posts) == 0)
                    <tr>
                        <td colspan="4">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($posts as $key => $post)
                        <tr>
                            <td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
                            </td>
                            <td><a class="link" title="Xem chi tiết"
                                   href="{{ route('post.view', $post->id) }}">{{$post->title}}</a></td>
                            <td>{{ $post->category->name}}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>
                                <a class="fa fa-pencil edit" href="{{ route('post.edit', $post->id) }}"
                                   style="width: 23px" title="Sửa"></a>
                                <a class="fa fa-trash delete" href="{{ route('post.destroy', $post->id) }}"
                                   style="width: 23px" title="Xóa"
                                   onclick="return confirm('Bạn chắc chắn muốn xóa?')"></a>

                            </td>
                        </tr>
                    @endforeach
                @endif

                </tbody>
            </table>
            <div class="row">
                <div class="col-6">
                    <div class="pagination float-right">
                        {{ $posts->appends(request()->query()) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
