<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard.index') }}" class="brand-link">
        <img src="{{ url('/assets/backend/img/logo.jpeg') }}" alt="{{ env('APP_NAME','Application') }}"
             class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">{{ env('APP_NAME','Application') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="nav-link {{ (request()->is('dashboard*') ? 'active' : '') }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/category') }}" class="nav-link {{ (request()->is('category*') ? 'active' : '') }}">
                        <i class="nav-icon fas fa-list"></i>
                        <p>Category</p>
                    </a>
                </li>

{{--                <li class="nav-item">--}}
{{--                    <a href="{{ url('/news') }}" class="nav-link {{ (request()->is('news*') ? 'active' : '') }}">--}}
{{--                        <i class="nav-icon fas fa-newspaper"></i>--}}
{{--                        <p>News</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a href="{{ url('/member') }}" class="nav-link {{ (request()->is('member*') ? 'active' : '') }}">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p>Member</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/blog') }}" class="nav-link {{ (request()->is('blog*') ? 'active' : '') }}">
                        <i class="nav-icon fas fa-pen"></i>
                        <p>Blog</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/portfolio') }}" class="nav-link {{ (request()->is('portfolio*') ? 'active' : '') }}">
                        <i class="nav-icon fas fa-images"></i>
                        <p>Portfolio</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/advertisement') }}" class="nav-link {{ (request()->is('advertisement*') ? 'active' : '') }}">
                        <i class="nav-icon fas fa-bullhorn"></i>
                        <p>Advertisements</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/contact-details') }}" class="nav-link {{ (request()->is('contact-details*') ? 'active' : '') }}">
                        <i class="nav-icon fas fa-info"></i>
                        <p>Contact Info</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/subscriber') }}" class="nav-link {{ (request()->is('subscriber*') ? 'active' : '') }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Subscribers</p>
                    </a>
                </li>

                <li class="nav-item has-treeview {{ (request()->is('users*') ? 'menu-open' : '') }}">
                    <a href="#" class="nav-link {{ (request()->is('users*') ? 'active' : '') }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Users Management<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="nav-link {{ (request()->is('users*') ? 'active' : '') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Users</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{ (request()->is('settings/*') ? 'menu-open' : '') }}">
                    <a href="#" class="nav-link {{ (request()->is('settings/*') ? 'active' : '') }}">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>Settings<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{!! route('settings.general.index') !!}" class="nav-link {{ (request()->is('settings/general*') ? 'active' : '') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>General</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{!! route('settings.socials.index') !!}" class="nav-link {{ (request()->is('settings/socials*') ? 'active' : '') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Socials</p>
                            </a>
                        </li>
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link {{ (request()->is('settings/seo-tools*') ? 'active' : '') }}">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>SEO Tools</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
