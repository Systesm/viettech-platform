@extends('admin::layouts.master')

@section('styleHead')
    <link href="/modules/admin/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <form action="/admin/roles/storeUser/{{ $id }}" method="post" role="form">
                        {{ csrf_field() }}
                        <div class="col-md-12">
                            <h4 class="m-t-0 header-title"><b>Infomation of Role</b></h4>
                            <p class="text-muted m-b-30 font-13">
                                Bootstrap includes validation styles for error, warning, and success states on form controls.
                            </p>
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="displayNameForm">Users</label>
                                    <div class="col-md-6">
                                        <select multiple="multiple" class="multi-select" data-plugin="multiselect" data-selectable-optgroup="true" name="userId[]" id="levelForm" required>
                                            @forelse ($listData as $data)
                                            <option value="{{ $data->id }}">{{ $data->name }} ({{ $data->email }})</option>
                                            @empty
                                            <option value="">No data</option>
                                            @endforelse
                                        </select>
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
