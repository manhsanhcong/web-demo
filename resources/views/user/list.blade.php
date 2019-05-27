@extends('layouts.admin')

@section('content')
    <div class="content">
        <h3>Danh sách thành viên</h3>
        <div class="table-wrapper">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
                    </th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Ngày sinh</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                @if(count($users) == 0)
                    <tr>
                        <td colspan="4">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($users as $key => $user)
                        <tr>
                            <td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
                            </td>
                            <td>{{ $user->name}}</td>
                            <td>{{ $user->email}}</td>
                            <td>{{ $user->phone}}</td>
                            <td>{{ $user->address}}</td>
                            <td>{{ $user->birth_day}}</td>
                        </tr>
                    @endforeach
                @endif

                </tbody>
            </table>
        </div>
    </div>
@endsection
