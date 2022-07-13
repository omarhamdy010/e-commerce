<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            @if(auth()->user())
            <img src="{{auth()->user()->image}}" class="img-circle elevation-2" alt="User Image">
                @elseif(auth()->guard('admin')->check())
                <img src="{{auth()->guard('admin')->user()->image}}" class="img-circle elevation-2" alt="User Image">
            @endif
        </div>
{{--        @dd(\Illuminate\Support\Facades\Auth::guard('admin'))--}}
        <div class="info">
            @if(auth()->user())
                <a href="#" class="d-block">{{auth()->user()->name}}</a>
            @elseif(auth()->guard('admin')->check())
                <a href="#" class="d-block">{{\Illuminate\Support\Facades\Auth::guard('admin')->user()->name}}</a>
            @endif
        </div>
    </div>

    <!-- SidebarSearch Form -->
{{--            <div class="form-inline">--}}
{{--                <div class="input-group" data-widget="sidebar-search">--}}
{{--                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">--}}
{{--                    <div class="input-group-append">--}}
{{--                        <button class="btn btn-sidebar">--}}
{{--                            <i class="fas fa-search fa-fw"></i>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

<!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('category.index')}}" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Category</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('product.index')}}" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Product</p>
                        </a>
                    </li>
                    @if(auth()->guard('admin')->check())
                        <li class="nav-item">
                            <a href="{{route('admin.index')}}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Admin</p>
                            </a>
                        </li>
                    @endif
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>

