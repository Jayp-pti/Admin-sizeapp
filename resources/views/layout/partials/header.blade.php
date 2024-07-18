<div class="header">
    <div class="header-left active">
        <a href="{{ url('dashboard') }}" class="logo logo-normal">
            <img src="{{ URL::asset('/build/img/logo.svg') }}" alt="Logo">
            <img src="{{ URL::asset('/build/img/white-logo.svg') }}" class="white-logo" alt="Logo">
        </a>
        <a href="{{ url('deals-dashboard') }}" class="logo-small">
            <img src="{{ URL::asset('/build/img/logo-small.svg') }}" alt="Logo">
        </a>
        <a id="toggle_btn" href="javascript:void(0);">
            <i class="ti ti-arrow-bar-to-left"></i>
        </a>
    </div>
    <!-- /Logo -->

    <a id="mobile_btn" class="mobile_btn" href="#sidebar">
        <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </a>

    <div class="header-user">
        <ul class="nav user-menu">

            <!-- Search -->
            <li class="nav-item nav-search-inputs me-auto">
                <div class="top-nav-search">
                    <a href="javascript:void(0);" class="responsive-search">
                        <i class="fa fa-search"></i>
                    </a>
                    <form action="#" class="dropdown">
                        <div class="searchinputs" id="dropdownMenuClickable">
                            <input type="text" placeholder="Search">
                            <div class="search-addon">
                                <button type="submit"><i class="ti ti-command"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
            <li class="nav-item nav-list">
                <ul class="nav">
                    <li class="dark-mode-list">
                        <a href="javascript:void(0);" id="dark-mode-toggle" class="dark-mode-toggle">
                            <i class="ti ti-sun light-mode active"></i>
                            <i class="ti ti-moon dark-mode"></i>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item dropdown has-arrow main-drop">
                <a href="javascript:void(0);" class="nav-link userset" data-bs-toggle="dropdown">
                    <span class="user-info">
                        <span class="user-letter">
                            <img src="{{ URL::asset('/build/img/profiles/avatar-20.jpg') }}" alt="Profile">
                        </span>
                        <span class="badge badge-success rounded-pill"></span>
                    </span>
                </a>
                <div class="dropdown-menu menu-drop-user">
                    <div class="profilename">
                        <a class="dropdown-item" href="{{ url('/dashboard') }}">
                            <i class="ti ti-layout-2"></i> Dashboard
                        </a>
                        <a class="dropdown-item" href="{{ url('user/profile') }}">
                            <i class="ti ti-user-pin"></i> My Profile
                        </a>
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <a class="dropdown-item" href="{{ route('logout') }}">
                                <i class="ti ti-lock"></i> Logout
                            </a>
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="dropdown mobile-user-menu">
        <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ url('/dashboard') }}">
                <i class="ti ti-layout-2"></i> Dashboard
            </a>
            <a class="dropdown-item" href="{{ url('user/profile') }}">
                <i class="ti ti-user-pin"></i> My Profile
            </a>
            <a class="dropdown-item" href="{{ route('logout') }}">
                <i class="ti ti-lock"></i> Logout
            </a>
        </div>
    </div>
</div>
