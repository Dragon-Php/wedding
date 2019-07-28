@extends('admin.master')
@section('content')
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN THEME PANEL -->
       
        <!-- END THEME PANEL -->
        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="{{url('/')}}">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Add New</span>
                </li>
            </ul>
            
        </div>
        
        
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN VALIDATION STATES-->
                <div class="portlet light portlet-fit portlet-form bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-settings font-red"></i>
                            <span class="caption-subject font-red sbold uppercase">{{$__module}}</span>
                        </div>
                        
                    </div>
                    <div class="portlet-body">
                        <!-- BEGIN FORM-->
                        {{ Form::open(['url' => route('setting'), 'class'=>'form-horizontal','files' => true ])}}
                            <div class="form-body">
                                <div class="alert alert-danger display-hide">
                                    <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                <div class="alert alert-success display-hide">
                                    <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                                <div class="form-group">
                                    <label for="Address" class="control-label col-md-3">Address
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="address" data-required="1" class="form-control" value="{{$address}}" /> 
                                        @if($errors->first('address'))
                                            <font color="red">{{ $errors->first('address')}}</font>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Address" class="control-label col-md-3">Contact Email
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="contact_email" data-required="1" class="form-control" value="{{$contact_email}}" /> 
                                        @if($errors->first('contact_email'))
                                            <font color="red">{{ $errors->first('contact_email')}}</font>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Address" class="control-label col-md-3">Contact Number
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="contact_number" data-required="1" class="form-control" value="{{$contact_number}}" /> 
                                        @if($errors->first('contact_number'))
                                            <font color="red">{{ $errors->first('contact_number')}}</font>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Address" class="control-label col-md-3">Facebook
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="fb_share_link" data-required="1" class="form-control" value="{{$fb_share_link}}" /> 
                                        @if($errors->first('fb_share_link'))
                                            <font color="red">{{ $errors->first('fb_share_link')}}</font>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Address" class="control-label col-md-3">Linkedin
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="ln_share_link" data-required="1" class="form-control" value="{{$ln_share_link}}" /> 
                                        @if($errors->first('ln_share_link'))
                                            <font color="red">{{ $errors->first('ln_share_link')}}</font>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Address" class="control-label col-md-3">Twitter
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="tw_share_link" data-required="1" class="form-control" value="{{$tw_share_link}}" /> 
                                        @if($errors->first('tw_share_link'))
                                            <font color="red">{{ $errors->first('tw_share_link')}}</font>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Address" class="control-label col-md-3">Copyright
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="copyright" data-required="1" class="form-control" value="{{$copyright}}" /> 
                                        @if($errors->first('copyright'))
                                            <font color="red">{{ $errors->first('copyright')}}</font>
                                        @endif
                                    </div>
                                </div>
                                

                            </div>

                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green">Submit</button>
                                        <button type="button" class="btn grey-salsa btn-outline">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- END FORM-->
                    </div>
                </div>
                <!-- END VALIDATION STATES-->
            </div>
        </div>
      
    </div>
    <!-- END CONTENT BODY -->
</div>
@endsection