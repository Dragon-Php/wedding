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
                    <a href="index.html">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Form Stuff</span>
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
                            <span class="caption-subject font-red sbold uppercase">Basic Validation</span>
                        </div>
                        
                    </div>
                    <div class="portlet-body">
                        <!-- BEGIN FORM-->
                        {{ Form::open(['url' => url('Admin-EditVendorType/'.\Request::segment(2)), 'class'=>'form-horizontal' ])}}
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
                                        {{ Form::text('title', $editData->title, ['class'=>'form-control', 'data-required'=>'1'])}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Vendor </label>
                                    <div class="col-md-4">
                                        {{ Form::select('vendor_type', $vendortype, '', ['class'=>'mt-multiselect btn btn-default', 'multiple'=>'multiple', 'data-label'=>'left', 'data-select-all'=>'true', 'data-width'=>'100%', 'data-filter'=>'true', 'data-action-onchange'=>'true'])}}
                                        <!-- <select class="mt-multiselect btn btn-default" multiple="multiple" data-label="left" data-select-all="true" data-width="100%" data-filter="true" data-action-onchange="true" name="vendor_type">
                                           
                                        </select> --> 
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