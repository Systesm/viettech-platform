@extends('admin::layouts.master')

@section('styleHead')
    <link href="/modules/admin/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <form action="{{route('users.update', $data->email)}}" method="post" role="form" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                        <div class="col-md-12">
                            <h4 class="m-t-0 header-title"><b>Infomation of Role</b></h4>
                            <p class="text-muted m-b-30 font-13">
                                Bootstrap includes validation styles for error, warning, and success states on form controls.
                            </p>
                            <div class="form-horizontal">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Avatar</label>

                                    <div class="col-md-6">
                                        <img src="/uploads/avatar/{{ $data->avatar }}" alt="" style="width: 100px; height: 100px;">
                                        <input type="file" class="form-control" name="avatar" value="{{ $data->avatar }}" autofocus>
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Name</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ $data->name }}" required autofocus>
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" value="{{ $data->email }}" disabled>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                        <button class="btn btn-primary" type="submit">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('srcScript')
    <script type="text/javascript" src="/modules/admin/plugins/multiselect/js/jquery.multi-select.js"></script>
@endsection
