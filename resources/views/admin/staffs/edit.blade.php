@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Edit Staff
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css -->
    <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('assets/vendors/select2/css/select2-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/pages/wizard.css') }}" rel="stylesheet">
    <!--end of page level css-->

@stop


{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>Edit staff</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Staffs</li>
            <li class="active">Add New Staff</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"> <i class="livicon" data-name="staffs" data-size="16" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                            Editing staff : <p class="user_name_max">{!! $staff->first_name!!} {!! $staff->last_name!!}</p>
                        </h3>
                    <span class="pull-right clickable">
                        <i class="glyphicon glyphicon-chevron-up"></i>
                    </span>
                    </div>
                    <div class="panel-body">
                        <!--main content-->
                        <div class="row">

                            <div class="col-md-12">

                                {!! Form::model($staff, ['url' => URL::to('admin/staffs/'. $staff->id.''), 'method' => 'put', 'class' => 'form-horizontal','id'=>'commentForm', 'enctype'=>'multipart/form-data','files'=> true]) !!}
                                    {{ csrf_field() }}

                                    <div id="rootwizard">

                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Full name</label>
                                            <div class="col-md-4 col-xs-6 col-sm-6">
                                                <input type="text" class="form-control" name="firstName" placeholder="Enter First Name" value="{!! old('first_name', $staff->first_name) !!}"/>
                                            </div>
                                            <div class="col-md-4 col-xs-6 col-sm-6">
                                                <input type="text" class="form-control" name="lastName" placeholder="Enter Last Name" value="{!! old('last_name', $staff->last_name) !!}"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="job" class="col-md-3 control-label">Job</label>
                                            <div class="col-md-8">
                                                <input id="job" name="job" type="text" class="form-control" value="{!! old('job', $staff->job) !!}"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="address" class="col-md-3 control-label">NMLS#</label>
                                            <div class="col-md-8">
                                                <input id="NMLS" name="NMLS" type="text" class="form-control" value="{!! old('NMLS', $staff->NMLS) !!}"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Email Address</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="email" placeholder="Enter Email Address" value="{!! old('email', $staff->email) !!}"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Phone Number</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="phone" id="phone" placeholder="(814) 555-1234" value="{!! old('phone', $staff->phone) !!}" required/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="pic" class="col-md-3 control-label">Profile picture</label>
                                            <div class="col-md-8">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 200px;">
                                                        @if($staff->pic)
                                                            <img src="{!! url('/').'/uploads/staffs/'.$staff->pic !!}" alt="img"
                                                                 class="img-responsive"/>
                                                        @else
                                                            <img src="{{ asset('assets/images/authors/no_avatar.jpg') }}" alt="..."
                                                                 class="img-responsive"/>
                                                        @endif
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 200px;"></div>
                                                    <div>
                                                        <span class="btn btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input id="pic" name="pic_file" type="file" class="form-control" />
                                                        </span>
                                                        <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                    </div>
                                                </div>
                                                <span class="help-block">{{ $errors->first('pic_file', ':message') }}</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="profile" class="col-md-3 control-label">Profile</small></label>
                                            <div class="col-md-8">
                                                <textarea name="profile" id="profile" class="form-control resize_vertical" rows="10">{{ $staff->profile }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-offset-3 col-md-8">
                                                <div class="col-md-6">
                                                    <input type="submit" name="btnSubmit" id="btnSubmit" value="Register" class="btn btn-primary btn-block btn-md btn-responsive">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="button" value="Reset" id="reset" class=" btn btn-success btn-block btn-md btn-responsive">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <!--main content end-->
                    </div>
                </div>
            </div>
        </div>
        <!--row end-->
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}" ></script>
    <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrapwizard/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/edituser.js') }}"></script>
    <script>
        function formatState (state) {
            if (!state.id) { return state.text; }
            var $state = $(
                '<span><img src="{{asset('assets/img/countries_flags')}}/'+ state.element.value.toLowerCase() + '.png" class="img-flag" width="20px" height="20px" /> ' + state.text + '</span>'
            );
            return $state;

}
$(".country_field").select2({
    templateResult: formatState,
    templateSelection: formatState,
    placeholder: "select a country",
    theme:"bootstrap"
});


</script>
@stop
