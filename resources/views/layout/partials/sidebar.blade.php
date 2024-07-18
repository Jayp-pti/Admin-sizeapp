<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="clinicdropdown">
                    <a href="{{ url('profile') }}">
                        <img src="{{ URL::asset('/build/img/profiles/avatar-14.jpg') }}" class="img-fluid" alt="Profile">
                        <div class="user-names">
                            <h5>{{ Auth::user()->name }}</h5>
                        </div>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="{{ Request::is('deals-dashboard', 'leads-dashboard', 'dashboard', 'project-dashboard') ? 'subdrop active' : '' }}">
                                <i class="ti ti-layout-2"></i><span>Dashboard</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a class="{{ Request::is('dashboard') ? 'active' : '' }}"
                                        href="{{ url('dashboard') }}">Dashboard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="{{ Route::is('categories.index', 'categories.create', 'calendar', 'subcategories.create') ? 'subdrop active' : '' }}"><i
                                    class="ti ti-brand-airtable"></i><span>Categories</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="{{ Route::is('categories.create') ? 'active' : '' }}"
                                        href="{{ url('categories/create') }}">create category</a></li>

                                <li><a class="{{ Route::is('categories.index') ? 'active' : '' }}"
                                        href="{{ Route('categories.index') }}">List Categories</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <h6 class="submenu-hdr">Templates</h6>
                    <ul>
                        <li><a class="{{ Route::is('templates') ? 'active' : '' }}" href="{{ url('templates') }}"><i
                                    class="ti ti-page-break"></i><span>Templates</span></a></li>
                    </ul>
                </li>
                <li>
                    <h6 class="submenu-hdr">Size Charts</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="{{ Route::is('size_charts.index', 'size_charts.create', 'icons.create', 'icons.index') ? 'subdrop active' : '' }}">
                                <i class="ti ti-file-invoice"></i><span>Size-chart</span><span
                                    class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a class="{{ Route::is('size_charts.create') ? 'active' : '' }}"
                                        href="{{ Route('size_charts.create') }}">Create size chart</a></li>
                                <li><a class="{{ Route::is('icons.create') ? 'active' : '' }}"
                                        href="{{ Route('icons.create') }}">Upload icons</a></li>
                                <li><a class="{{ Route::is('icons.index') ? 'active' : '' }}"
                                        href="{{ Route('icons.index') }}">Icons</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>
