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
                        {{ Form::open(['url' => route('admin_addcountry'), 'class'=>'form-horizontal','files' => true ])}}
                            <div class="form-body">
                                <div class="alert alert-danger display-hide">
                                    <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                <div class="alert alert-success display-hide">
                                    <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                                <div class="form-group">
                                    <label for="Name" class="control-label col-md-3">Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="name" data-required="1" class="form-control" /> 
                                        @if($errors->first('name'))
                                            <font color="red">{{ $errors->first('name')}}</font>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Iso3" class="control-label col-md-3">Iso3
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="iso3" data-required="1" class="form-control" /> 
                                        @if($errors->first('iso3'))
                                            <font color="red">{{ $errors->first('iso3')}}</font>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="iso2" class="control-label col-md-3">iso2
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="iso2" data-required="1" class="form-control" /> 
                                        @if($errors->first('iso2'))
                                            <font color="red">{{ $errors->first('iso2')}}</font>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="countrycode" class="control-label col-md-3">Country code
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="countrycode" data-required="1" class="form-control" /> 
                                        @if($errors->first('countrycode'))
                                            <font color="red">{{ $errors->first('countrycode')}}</font>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phonecode" class="control-label col-md-3">Phone code
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="phonecode" data-required="1" class="form-control" /> 
                                        @if($errors->first('phonecode'))
                                            <font color="red">{{ $errors->first('phonecode')}}</font>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="capital" class="control-label col-md-3">Capital
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="capital" data-required="1" class="form-control" /> 
                                        @if($errors->first('capital'))
                                            <font color="red">{{ $errors->first('capital')}}</font>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="currency" class="control-label col-md-3">Currency
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="currency" data-required="1" class="form-control" /> 
                                        @if($errors->first('currency'))
                                            <font color="red">{{ $errors->first('currency')}}</font>
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