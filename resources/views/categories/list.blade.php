@extends('layouts.admin')

@section('content')
    <div class="content">
        <h3>Danh sách thể loại</h3>
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
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>
                    <span class="custom-checkbox">
                        <input type="checkbox" id="selectAll">
                        <label for="selectAll"></label>
                    </span>
                </th>
                <th>Thể loại</th>
                <th>Số bài viết</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @if(count($categories) == 0)
                <tr>
                    <td colspan="4">Không có dữ liệu</td>
                </tr>
            @else
                @foreach($categories as $key => $category)
                    <tr>
                        <td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
                        </td>
                        <td>{{ $category->name }}</td>
                        <td>{{ count($category->posts) }}</td>
                        <td>
                            <a class="fa fa-pencil edit" href="{{ route('categories.edit', $category->id) }}"
                               style="width: 23px" title="Sửa"></a>
                            <a class="fa fa-trash delete" href="{{ route('categories.destroy', $category->id) }}"
                               style="width: 23px" title="Xóa"
                               onclick="return confirm('Khi xóa thể loại thì tất cả bài viết liên quan đến thể lại này sẽ bị mất. ' +
                                'Bạn có chắc chắn muốn xóa không?')"></a>

                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{ route('categories.create') }}">Thêm mới</a>
        <button class="btn btn-primary" onclick="window.history.go(-1); return false;">Quay lại</button>
    </div>
@endsection
