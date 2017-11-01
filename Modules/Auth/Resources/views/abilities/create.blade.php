@extends('admin::layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <form action="{{route('abilities.store')}}" method="post" role="form">
                        {{ csrf_field() }}
                        <div class="col-md-12">
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
                            </div>
                        </div>
                        <div class="col-md-12">
                          <center>
                            <button class="btn btn-primary" type="submit">Save Changes</button>
                          </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
