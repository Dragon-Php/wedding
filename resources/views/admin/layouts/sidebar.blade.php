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
            <li class="nav-item  {{ \Request::segment(1) == 'Admin-Country' || \Request::segment(1) == 'Admin-AddCountry' || \Request::segment(1) == 'Admin-EditCountry' ? 'active' : ''}}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-tag"></i>
                    <span class="title">Country</span>
                    <span class="arrow {{ \Request::segment(1) == 'Admin-Country' || \Request::segment(1) == 'Admin-AddCountry' || \Request::segment(1) == 'Admin-EditCountry' ? 'open' : ''}}"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  {{ \Request::segment(1) == 'Admin-Country' ? 'active' : ''}} ">
                        <a href="{{ route('admincountry')}}" class="nav-link ">
                            <span class="title">List</span>
                        </a>
                    </li>
                    <li class="nav-item  {{ \Request::segment(1) == 'Admin-AddCountry' ? 'active' : ''}} ">
                        <a href="{{route('admin_addcountry')}}" class="nav-link ">
                            <span class="title">Add</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  {{ \Request::segment(1) == 'Admin-State' || \Request::segment(1) == 'Admin-AddState' || \Request::segment(1) == 'Admin-EditState' ? 'active' : ''}}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-tag"></i>
                    <span class="title">State</span>
                    <span class="arrow {{ \Request::segment(1) == 'Admin-State' || \Request::segment(1) == 'Admin-AddState' || \Request::segment(1) == 'Admin-EditState' ? 'open' : ''}}"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  {{ \Request::segment(1) == 'Admin-State' ? 'active' : ''}} ">
                        <a href="{{ route('adminstate')}}" class="nav-link ">
                            <span class="title">List</span>
                        </a>
                    </li>
                    <li class="nav-item  {{ \Request::segment(1) == 'Admin-AddState' ? 'active' : ''}} ">
                        <a href="{{route('admin_addstate')}}" class="nav-link ">
                            <span class="title">Add</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  {{ \Request::segment(1) == 'Admin-City' || \Request::segment(1) == 'Admin-AddCity' || \Request::segment(1) == 'Admin-EditCity' ? 'active' : ''}}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-tag"></i>
                    <span class="title">City</span>
                    <span class="arrow {{ \Request::segment(1) == 'Admin-City' || \Request::segment(1) == 'Admin-AddCity' || \Request::segment(1) == 'Admin-EditCity' ? 'open' : ''}}"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  {{ \Request::segment(1) == 'Admin-City' ? 'active' : ''}} ">
                        <a href="{{ route('admincity')}}" class="nav-link ">
                            <span class="title">List</span>
                        </a>
                    </li>
                    <li class="nav-item  {{ \Request::segment(1) == 'Admin-AddCity' ? 'active' : ''}} ">
                        <a href="{{route('admin_addcity')}}" class="nav-link ">
                            <span class="title">Add</span>
                        </a>
                    </li>
                </ul>
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