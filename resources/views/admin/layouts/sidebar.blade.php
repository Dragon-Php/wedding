<div class="page-sidebar-wrapper">
   
    <div class="page-sidebar navbar-collapse collapse">
      
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
           
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
           
            
            <li class="nav-item start {{ \Request::segment(1) == 'Admin-Dashboard' ? 'active' : ''}} open">
                <a href="index.html" class="nav-link ">
                    <i class="icon-bar-chart"></i>
                    <span class="title">Dashboard </span>
                    <span class="selected"></span>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">System</h3>
            </li>
            <li class="nav-item  {{ \Request::segment(1) == 'Admin-Category' || \Request::segment(1) == 'Admin-AddCategory' || \Request::segment(1) == 'Admin-EditCategory' ? 'active' : ''}}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-tag"></i>
                    <span class="title">Category</span>
                    <span class="arrow {{ \Request::segment(1) == 'Admin-Category' || \Request::segment(1) == 'Admin-AddCategory' || \Request::segment(1) == 'Admin-EditCategory' ? 'open' : ''}}"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  {{ \Request::segment(1) == 'Admin-Category' ? 'active' : ''}} ">
                        <a href="{{ route('admincategory')}}" class="nav-link ">
                            <span class="title">List</span>
                        </a>
                    </li>
                    <li class="nav-item  {{ \Request::segment(1) == 'Admin-AddCategory' ? 'active' : ''}} ">
                        <a href="{{route('admin_addcategory')}}" class="nav-link ">
                            <span class="title">Add</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  {{ \Request::segment(1) == 'Admin-VendorType' || \Request::segment(1) == 'Admin-AddVendorType' || \Request::segment(1) == 'Admin-EditVendorType' ? 'active' : ''}}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-tag"></i>
                    <span class="title">Vendor Type</span>
                    <span class="arrow {{ \Request::segment(1) == 'Admin-VendorType' || \Request::segment(1) == 'Admin-AddVendorType' || \Request::segment(1) == 'Admin-EditVendorType' ? 'open' : ''}}"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item {{ \Request::segment(1) == 'Admin-VendorType' ? 'active' : ''}} ">
                        <a href="{{ route('adminvendortype')}}" class="nav-link ">
                            <span class="title">List</span>
                        </a>
                    </li>
                    <li class="nav-item {{ \Request::segment(1) == 'Admin-AddVendorType' ? 'active' : ''}} ">
                        <a href="{{route('admin_addvendortype')}}" class="nav-link ">
                            <span class="title">Add</span>
                        </a>
                    </li>
                </ul>
            </li>
            
        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>