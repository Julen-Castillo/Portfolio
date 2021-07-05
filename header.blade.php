<div class="header-area header-sticky header-area--absolute">
    <div class="container-fluid container-fluid--cp-150">
        <div class="row">
            <div class="col-lg-12">
                <div class="header position-relative">
                    <!-- brand logo -->
                    <div class="header__logo">
                        <a href="javascript:void(0);">
                            <img src="{{ asset(env('LOGO_WHITE')) }}" class="img-fluid light-logo"
                                 alt="{{ env('APP_NAME') }}">
                            <img src="{{ asset(env('LOGO_DARK')) }}" class="img-fluid dark-logo"
                                 alt="{{ env('APP_NAME') }}">
                        </a>
                    </div>
                    <!-- navigation menu -->
                    <div class="header__navigation d-none d-xl-block">
                        <nav class="navigation-menu navigation-menu--onepage navigation-menu--text_white">
                            <ul>
                                @foreach($cabecera['menu'] as $menu)
                                    <li>
                                        <a href="{{ $menu['url'] }}"><span>{{ $menu['nombre'] }}</span></a>
                                    </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                    <!-- header actions -->
                    <div class="header__actions">
                        <div class="header__icons-wrapper" id="hidden-icon-wrapper">
                            <a href="{{ $cabecera['cta_simple']['enlace'] }}" class="hover-style-link font-weight--bold hover-style-link--green">{{ $cabecera['cta_simple']['texto'] }}</a>
                            <div class="header-button button--white">
                                <a href="{{ $cabecera['cta_boton']['enlace'] }}" class="btn btn--white">{{ $cabecera['cta_boton']['texto'] }}</a>
                            </div>
                        </div>
                        <!-- mobile menu -->
                        <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
                            <i></i>
                        </div>
                        <!-- hidden icons menu -->
                        <div class="hidden-icons-menu d-block d-md-none" id="hidden-icon-trigger">
                            <a href="javascript:void(0)">
                                <i class="far fa-ellipsis-h-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
