@extends('layouts.admin')
@section('content')
    <div class="content">
        <div class="col-md-6" >
                <div class="card-header"><h3>Thay đổi mật khẩu</h3></div>

                <div class="card-body">
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div style="margin: auto">
                        <form class="form-horizontal" method="POST" action="{{ route('changePassword.store') }}">
                            @csrf

                            <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                <p for="new-password" class="col-md-4 control-label">
                                    <h4 style="margin-left: 20px">Mật khẩu hiện tại</h4>
                                </p>
                                <div class="col-md-12">
                                    <input id="current-password" type="password" class="form-control"
                                           name="current-password" required>

                                    @if ($errors->has('current-password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                <p for="new-password" class="col-md-4 control-label">
                                    <h4 style="margin-left: 20px">Mật khẩu mới</h4>
                                </p>
                                <div class="col-md-12">
                                    <input id="new-password" type="password" class="form-control"
                                           name="new-password" required>

                                    @if ($errors->has('new-password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <p for="new-password-confirm" class="col-md-8 control-label">
                                    <h4 style="margin-left: 20px">Xác nhận lại mật khẩu mới</h4>
                                </p>
                                <div class="col-md-12">
                                    <input id="new-password-confirm" type="password" class="form-control"
                                           name="new-password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 ">
                                    <button type="submit" class="btn btn-primary">
                                        Lưu thay đổi
                                    </button>
                                    <a class="btn btn-primary" href="{{ url('/home') }}">Quay lại</a>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
