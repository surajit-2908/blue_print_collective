@php
    $controller_arr = explode(
        '\\',
        request()
            ->route()
            ->getAction()['controller'],
    );
    $controllerArr = explode('@', end($controller_arr));
    $controller_name = $controllerArr[0];
@endphp

<!-- ===================== Main Sidebar Section Start ===================== -->
<section class="main-sidebar full-menu" id="main-sidebar">
    <!-- for desktop view -->
    <button class="navbar-toggler open" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span></span><span></span><span></span><span></span>
    </button>


    <div class="main-sidebar-nav mCustomScrollbar">

        <ul>
            <li class="{{ request()->is('admin/dashboard*') ? 'active' : '' }}"><a
                    href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
            </li>

            <li class="{{ Route::is('admin.settings') ? 'active' : '' }}"><a href="{{ route('admin.settings') }}"><i
                        class="fa fa-gear"></i> <span>Settings</span></a>
            </li>
            <li class="{{ $controller_name == 'ContentController' ? 'active' : '' }}">
                <a href="{{ route('admin.content') }}"><i class="fa fa-gear"></i> <span>Manage Content</span></a>
            </li>

        </ul>
    </div>





</section>



<!-- ===================== Main Sidebar Section End ===================== -->
