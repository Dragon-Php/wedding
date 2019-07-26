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
                            <span class="caption-subject font-red sbold uppercase">{{ $__module}}</span>
                        </div>
                        
                    </div>
                    <div class="portlet-body">
                        <!-- BEGIN FORM-->
                        {{ Form::open(['url' => route('admin_addvendor'), 'class'=>'form-horizontal', 'files'=>true ])}}
                            <div class="form-body">
                                <div class="alert alert-danger display-hide">
                                    <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                <div class="alert alert-success display-hide">
                                    <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Event Type <span class="required"> * </span></label>
                                    <div class="col-md-4">
                                        {{ Form::select('vendortype[]', $vendortype, '', ['class'=>'mt-multiselect btn btn-default', 'multiple'=>'multiple', 'data-label'=>'left', 'data-select-all'=>'true', 'data-width'=>'100%', 'data-filter'=>'true', 'data-action-onchange'=>'true'])}}
                                        @if($errors->first('vendortype'))
                                        <font color="red">{{ $errors->first('vendortype') }}</font>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Name" class="control-label col-md-3">Brand Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="title" data-required="1" class="form-control" /> 
                                        @if($errors->first('title'))
                                        <font color="red">{{ $errors->first('title') }}</font>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Name" class="control-label col-md-3">Contact Number
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="contact" data-required="1" class="form-control" /> 
                                        @if($errors->first('contact'))
                                        <font color="red">{{ $errors->first('contact') }}</font>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Name" class="control-label col-md-3">Email
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="email" name="email" data-required="1" class="form-control" /> 
                                        @if($errors->first('email'))
                                        <font color="red">{{ $errors->first('email') }}</font>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Name" class="control-label col-md-3">Password
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="password" name="password" data-required="1" class="form-control" /> 
                                        @if($errors->first('password'))
                                        <font color="red">{{ $errors->first('password') }}</font>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Country <span class="required"> * </span></label>
                                    <div class="col-md-4">
                                        {{ Form::select('country_id', $country, '', ['class'=>'form-control', 'placeholder'=>'Select country', 'onchange'=>'getState(this.value)'])}}
                                        @if($errors->first('country_id'))
                                        <font color="red">{{ $errors->first('country_id') }}</font>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">State <span class="required"> * </span></label>
                                    <div class="col-md-4">
                                        {{ Form::select('state_id', [], '', ['class'=>'form-control states', 'placeholder'=>'Select state','onchange'=>'getCity(this.value)'])}}
                                        @if($errors->first('state_id'))
                                        <font color="red">{{ $errors->first('state_id') }}</font>
                                        @endif
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">City </label>
                                    <div class="col-md-4">
                                        {{ Form::select('city_id', [], '', ['class'=>'form-control cities', 'placeholder'=>'Select city'])}}
                                        
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Name" class="control-label col-md-3">Address
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="address" data-required="1" class="form-control" /> 
                                        @if($errors->first('address'))
                                        <font color="red">{{ $errors->first('address') }}</font>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="form-group ">
                                    <label class="control-label col-md-3">Image</label>
                                    <div class="col-md-9">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> </div>
                                            <div>
                                                <span class="btn red btn-outline btn-file">
                                                    <span class="fileinput-new"> Select image </span>
                                                    <span class="fileinput-exists"> Change </span>
                                                    <input type="file" name="image"> </span>
                                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                            </div>
                                        </div>
                                        @if($errors->first('image'))
                                        <font color="red">{{ $errors->first('image') }}</font>
                                        @endif
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Name" class="control-label col-md-3">Description
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-9">
                                        <textarea class="ckeditor form-control" name="description" rows="6"></textarea> 
                                        @if($errors->first('description'))
                                        <font color="red">{{ $errors->first('description') }}</font>
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