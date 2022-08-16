
<header id="header" class=" header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0 bg-dark box-shadow-none">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{!! url('/') !!}">
                                <img alt="SoftSourseBD" width="100" height="70" src="{!! asset('assets/backend/img/logo.jpeg') !!}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">

                            <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown">
                                            <a data-hash class="dropdown-item dropdown-toggle active" href="{!! url('/') !!}">
                                                Home
                                            </a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" data-hash data-hash-offset="68" href="{!! url('/about') !!}">About Us</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" data-hash data-hash-offset="68" href="{!! url('/services') !!}">Services</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" data-hash data-hash-offset="68" href="{!! url('/portfolio-list') !!}">Portfolio  </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" data-hash data-hash-offset="68" href="{!! url('/team') !!}">Team</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" data-hash data-hash-offset="68" href="{!! url('/blog-list') !!}">Blog</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" data-hash data-hash-offset="68" href="{!! url('/contact') !!}">Contact</a>
                                        </li>

                                    </ul>
                                </nav>
                            </div>

                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
