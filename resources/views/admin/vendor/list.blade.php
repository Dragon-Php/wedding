@extends('admin.master')
@section('content')
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="{{url('/')}}">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="#">{{ $__module }}</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>List</span>
                </li>
            </ul>
            
        </div>
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <h1 class="page-title"> {{ $__module }}
            <small>{{ $__module }} List</small>
        </h1>
        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light portlet-fit bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-settings font-red"></i>
                            <span class="caption-subject font-red sbold uppercase">{{ $__module }}</span>
                        </div>
                        
                    </div>
                    @if(session()->get('error'))
                            <div class="alert alert-danger">
                                <button class="close" data-close="alert"></button> {{ session()->get('error')}}.
                            </div>
                            @endif
                            @if(session()->get('success'))
                            <div class="alert alert-success">
                                <button class="close" data-close="alert"></button> {{ session()->get('success')}}.
                            </div>
                            @endif
                    <div class="portlet-body">
                        <div class="table-toolbar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="btn-group">
                                        <a href="{{route('admin_addvendor')}}" class="btn green"> Add New
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>

                        </div>
                        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                            <thead>
                                <tr>
                                    <th> S. No. </th>
                                    <th> Title </th>
                                    <th> Email </th>
                                    <th> Contact </th>
                                    <th> Image </th>
                                    <th> Status </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                @foreach($resultData as $rowData)

                              
                                <tr>
                                    <td> {{$i}} </td>
                                    <td> {{$rowData->name}} </td>
                                    <td> {{$rowData->email}} </td>
                                    <td> {{$rowData->contact}} </td>
                                    <td> {{Html::image(($rowData->vendor_profile != '' ? $rowData->vendor_profile->banner:''), '', ['width'=>'100'])}} </td>
                                    <td> {{$rowData->is_active  == '1' ? 'Active':'In-Active'}} </td>
                                    
                                    <td>
                                        <a class="btn btn-sm btn-warning" title="Change Status" href="{{ url('Admin-StatusVendor/'.$rowData->id)}}"> <i class="fa fa-check-square"></i> </a>
                                        <a class="btn btn-sm btn-primary" title="Edit" href="{{ url('Admin-EditVendor/'.$rowData->id)}}"> <i class="fa fa-pencil"></i> </a>
                                        <a class="btn btn-sm btn-danger" title="Delete" href="{{ url('Admin-DeleteVendor/'.$rowData->id)}}"> <i class="fa fa-trash"></i> </a>
                                    </td>
                                </tr>
                                @php $i++; @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
    </div>
    <!-- END CONTENT BODY -->
</div>
@endsection