<div class="page-sidebar-wrapper">
   
    <div class="page-sidebar navbar-collapse collapse">
      
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
           
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
           
            
            <li class="nav-item start active open">
                <a href="index.html" class="nav-link ">
                    <i class="icon-bar-chart"></i>
                    <span class="title">Dashboard </span>
                    <span class="selected"></span>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">System</h3>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-tag"></i>
                    <span class="title">Category</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{ route('admincategory')}}" class="nav-link ">
                            <span class="title">List</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('admin_addcategory')}}" class="nav-link ">
                            <span class="title">Add</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-tag"></i>
                    <span class="title">Vendor Type</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{ route('adminvendortype')}}" class="nav-link ">
                            <span class="title">List</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
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