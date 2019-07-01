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
                        {{ Form::open(['url' => route('admin_addcity'), 'class'=>'form-horizontal','files' => true ])}}
                            <div class="form-body">
                                <div class="alert alert-danger display-hide">
                                    <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                <div class="alert alert-success display-hide">
                                    <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                                <div class="form-group">
                                    <label for="Country" class="control-label col-md-3">Country
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <select name="country_id" data-required="1" class="form-control" onchange="getState(this.value)">
                                            <option value="">Select Country..</option>
                                            @foreach($countries as $country)
                                            <option value="{{$country->id}}"> {{$country->name}}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->first('country_id'))
                                            <font color="red">{{ $errors->first('country_id')}}</font>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="State" class="control-label col-md-3">State
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <select name="state_id"  data-required="1" class="form-control states">
                                        	<option value="">Select State..</option>
                                        	
                                        </select>
                                        @if($errors->first('state_id'))
                                            <font color="red">{{ $errors->first('state_id')}}</font>
                                        @endif
                                    </div>
                                </div>
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