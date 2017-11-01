@extends('admin::layouts.master')

@section('styleHead')
    <link href="/modules/admin/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <form action="{{route('roles.store')}}" method="post" role="form">
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            <h4 class="m-t-0 header-title"><b>Infomation of Role</b></h4>
                            <p class="text-muted m-b-30 font-13">
                                Bootstrap includes validation styles for error, warning, and success states on form controls.
                            </p>
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="nameForm">Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="nameForm" name="name" class="form-control" placeholder="Slug name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="displayNameForm">Display Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="displayNameForm" name="title" class="form-control" placeholder="...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="displayNameForm">Levels</label>
                                    <div class="col-md-6">
                                        <select name="level" id="levelForm" class="form-control" required>
                                            @forelse ($levels as $level)
                                            <option value="{{ $level->id }}">{{ $level->name }}</option>
                                            @empty
                                            <option value="">No data</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 class="m-t-0 header-title"><b>Permission</b></h4>
                            <p class="text-muted m-b-30 font-13">
                                Set heights using classes like <code>.input-lg</code>, and set widths using grid column classes like <code>.col-lg-*</code>.
                            </p>
                            <select multiple="multiple" class="multi-select" name="permission[]" data-plugin="multiselect" data-selectable-optgroup="true">
                                @forelse ($abilities as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @empty
                                    <option value="">No data</option>
                                @endforelse
                            </select>
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
