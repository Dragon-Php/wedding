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
                    <span>Edit Record</span>
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
                        {{ Form::open(['url' => url('Admin-EditBlog/'.\Request::segment(2)), 'class'=>'form-horizontal','files' => true ])}}
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
                                        <input type="text" name="title" data-required="1" class="form-control" value="{{$editData->title}}" /> 
                                        @if($errors->first('title'))
                                            <font color="red">{{ $errors->first('title')}}</font>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Name" class="control-label col-md-3">Author
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="auther" data-required="1" class="form-control"  value="{{$editData->auther}}"/> 
                                        @if($errors->first('auther'))
                                            <font color="red">{{ $errors->first('auther')}}</font>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Name" class="control-label col-md-3">Short notes
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <textarea name="short_description" rows="10" class="form-control" /> {{$editData->short_description}}</textarea> 
                                        @if($errors->first('short_description'))
                                            <font color="red">{{ $errors->first('short_description')}}</font>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="form-group ">
                                    <label class="control-label col-md-3">Image
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-9">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                                {{ Html::image($editData->image, '')}}
                                             </div>
                                                
                                            <div>
                                                <span class="btn red btn-outline btn-file">
                                                    <span class="fileinput-new"> Select image </span>
                                                    <span class="fileinput-exists"> Change </span>
                                                    <input type="file" name="image"> </span>
                                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                            </div>
                                            
                                        </div>
                                        @if($errors->first('image'))
                                            <font color="red">{{ $errors->first('image')}}</font>
                                        @endif
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Name" class="control-label col-md-3">Description
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-9">
                                        <textarea name="description"  class="form-control ckeditor" />{{$editData->description}}</textarea> 
                                        @if($errors->first('description'))
                                            <font color="red">{{ $errors->first('description')}}</font>
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