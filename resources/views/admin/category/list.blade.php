@extends('admin.master')
@section('content')
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN THEME PANEL -->
        <div class="theme-panel hidden-xs hidden-sm">
            <div class="toggler"> </div>
            <div class="toggler-close"> </div>
            <div class="theme-options">
                <div class="theme-option theme-colors clearfix">
                    <span> THEME COLOR </span>
                    <ul>
                        <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default"> </li>
                        <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue"> </li>
                        <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue"> </li>
                        <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey"> </li>
                        <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light"> </li>
                        <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2"> </li>
                    </ul>
                </div>
                <div class="theme-option">
                    <span> Theme Style </span>
                    <select class="layout-style-option form-control input-sm">
                        <option value="square" selected="selected">Square corners</option>
                        <option value="rounded">Rounded corners</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Layout </span>
                    <select class="layout-option form-control input-sm">
                        <option value="fluid" selected="selected">Fluid</option>
                        <option value="boxed">Boxed</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Header </span>
                    <select class="page-header-option form-control input-sm">
                        <option value="fixed" selected="selected">Fixed</option>
                        <option value="default">Default</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Top Menu Dropdown</span>
                    <select class="page-header-top-dropdown-style-option form-control input-sm">
                        <option value="light" selected="selected">Light</option>
                        <option value="dark">Dark</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Sidebar Mode</span>
                    <select class="sidebar-option form-control input-sm">
                        <option value="fixed">Fixed</option>
                        <option value="default" selected="selected">Default</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Sidebar Menu </span>
                    <select class="sidebar-menu-option form-control input-sm">
                        <option value="accordion" selected="selected">Accordion</option>
                        <option value="hover">Hover</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Sidebar Style </span>
                    <select class="sidebar-style-option form-control input-sm">
                        <option value="default" selected="selected">Default</option>
                        <option value="light">Light</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Sidebar Position </span>
                    <select class="sidebar-pos-option form-control input-sm">
                        <option value="left" selected="selected">Left</option>
                        <option value="right">Right</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Footer </span>
                    <select class="page-footer-option form-control input-sm">
                        <option value="fixed">Fixed</option>
                        <option value="default" selected="selected">Default</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- END THEME PANEL -->
        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="#">Tables</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Datatables</span>
                </li>
            </ul>
            <div class="page-toolbar">
                <div class="btn-group pull-right">
                    <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
                        <i class="fa fa-angle-down"></i>
                    </button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li>
                            <a href="#">
                                <i class="icon-bell"></i> Action</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-shield"></i> Another action</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-user"></i> Something else here</a>
                        </li>
                        <li class="divider"> </li>
                        <li>
                            <a href="#">
                                <i class="icon-bag"></i> Separated link</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <h1 class="page-title"> Editable Datatables
            <small>editable datatable samples</small>
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
                            <span class="caption-subject font-red sbold uppercase">Editable Table</span>
                        </div>
                        <div class="actions">
                            <div class="btn-group btn-group-devided" data-toggle="buttons">
                                <label class="btn btn-transparent red btn-outline btn-circle btn-sm active">
                                    <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                <label class="btn btn-transparent red btn-outline btn-circle btn-sm">
                                    <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-toolbar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="btn-group">
                                        <button id="sample_editable_1_new" class="btn green"> Add New
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="btn-group pull-right">
                                        <button class="btn green btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;"> Print </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> Save as PDF </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> Export to Excel </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                            <thead>
                                <tr>
                                    <th> Username </th>
                                    <th> Full Name </th>
                                    <th> Points </th>
                                    <th> Notes </th>
                                    <th> Edit </th>
                                    <th> Delete </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> alex </td>
                                    <td> Alex Nilson </td>
                                    <td> 1234 </td>
                                    <td class="center"> power user </td>
                                    <td>
                                        <a class="edit" href="javascript:;"> Edit </a>
                                    </td>
                                    <td>
                                        <a class="delete" href="javascript:;"> Delete </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td> lisa </td>
                                    <td> Lisa Wong </td>
                                    <td> 434 </td>
                                    <td class="center"> new user </td>
                                    <td>
                                        <a class="edit" href="javascript:;"> Edit </a>
                                    </td>
                                    <td>
                                        <a class="delete" href="javascript:;"> Delete </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td> nick12 </td>
                                    <td> Nick Roberts </td>
                                    <td> 232 </td>
                                    <td class="center"> power user </td>
                                    <td>
                                        <a class="edit" href="javascript:;"> Edit </a>
                                    </td>
                                    <td>
                                        <a class="delete" href="javascript:;"> Delete </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td> goldweb </td>
                                    <td> Sergio Jackson </td>
                                    <td> 132 </td>
                                    <td class="center"> elite user </td>
                                    <td>
                                        <a class="edit" href="javascript:;"> Edit </a>
                                    </td>
                                    <td>
                                        <a class="delete" href="javascript:;"> Delete </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td> alex </td>
                                    <td> Alex Nilson </td>
                                    <td> 1234 </td>
                                    <td class="center"> power user </td>
                                    <td>
                                        <a class="edit" href="javascript:;"> Edit </a>
                                    </td>
                                    <td>
                                        <a class="delete" href="javascript:;"> Delete </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td> webriver </td>
                                    <td> Antonio Sanches </td>
                                    <td> 462 </td>
                                    <td class="center"> new user </td>
                                    <td>
                                        <a class="edit" href="javascript:;"> Edit </a>
                                    </td>
                                    <td>
                                        <a class="delete" href="javascript:;"> Delete </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td> gist124 </td>
                                    <td> Nick Roberts </td>
                                    <td> 62 </td>
                                    <td class="center"> new user </td>
                                    <td>
                                        <a class="edit" href="javascript:;"> Edit </a>
                                    </td>
                                    <td>
                                        <a class="delete" href="javascript:;"> Delete </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td> alex </td>
                                    <td> Alex Nilson </td>
                                    <td> 1234 </td>
                                    <td class="center"> power user </td>
                                    <td>
                                        <a class="edit" href="javascript:;"> Edit </a>
                                    </td>
                                    <td>
                                        <a class="delete" href="javascript:;"> Delete </a>
                                    </td>
                                </tr>
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