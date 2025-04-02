<div class="sidebar-wrapper" data-layout="stroke-svg">
    <div class="logo-wrapper">
        <a href="{{ route('admin.dashboard') }}">
            <img class="img-fluid" src="{{ asset('frontend/assets/images/home/favicon.webp') }}" alt="" style="height: 50px; width: 50px;">
        </a>
        <div class="back-btn">
            <i class="fa fa-angle-left"></i>
        </div>
        <div class="toggle-sidebar">
            <i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i>
        </div>
    </div>
    <div class="logo-icon-wrapper">
        <a href="{{ route('admin.dashboard') }}">
            <img class="img-fluid" src="{{ asset('frontend/assets/images/home/favicon.webp') }}" alt="" style="height: 50px; width: 50px;">
        </a>
    </div>
    <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow">
            <i data-feather="arrow-left"></i>
        </div>
        <div id="sidebar-menu">
            <ul class="sidebar-links" id="simple-bar">
                <li class="back-btn">
                    <a href="{{ route('admin.dashboard') }}">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/home/favicon.webp') }}" alt="" style="height: 50px; width: 50px;"">
                    </a>
                    <div class="mobile-back text-end">
                        <span>Back </span>
                        <i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                    </div>
                </li>

                {{-- Dashboard --}}
                <li class="sidebar-list">
                    <a class="sidebar-link  {{
                        (Route::currentRouteName() === 'admin.dashboard')
                        || (Route::currentRouteName() === 'page.index') || (Route::currentRouteName() === 'page.create') || (Route::currentRouteName() === 'page.edit')
                        || (Route::currentRouteName() === 'banner.index') || (Route::currentRouteName() === 'banner.create') || (Route::currentRouteName() === 'banner.edit')
                        || (Route::currentRouteName() === 'what-we-offer.index') || (Route::currentRouteName() === 'what-we-offer.create') || (Route::currentRouteName() === 'what-we-offer.edit')
                        || (Route::currentRouteName() === 'service.index') || (Route::currentRouteName() === 'service.create') || (Route::currentRouteName() === 'service.edit')
                        || (Route::currentRouteName() === 'sara-research.index') || (Route::currentRouteName() === 'sara-research.create') || (Route::currentRouteName() === 'sara-research.edit')
                        || (Route::currentRouteName() === 'statistics.index') || (Route::currentRouteName() === 'statistics.create') || (Route::currentRouteName() === 'statistics.edit')
                        ? 'active' : '' }} sidebar-title" href="javascript:void(0)">

                        <svg class="stroke-icon">
                            <use href="{{ asset('backend/assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('backend/assets/svg/icon-sprite.svg#fill-home') }}"></use>
                        </svg>
                        <span>Home</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{ route('page.index') }}" class="{{ (Route::currentRouteName() === 'page.index') || (Route::currentRouteName() === 'page.create') || (Route::currentRouteName() === 'page.edit') ? 'active' : '' }}">Page</a>
                        </li>
                        <li>
                            <a href="{{ route('banner.index') }}" class="{{ (Route::currentRouteName() === 'banner.index') || (Route::currentRouteName() === 'banner.create') || (Route::currentRouteName() === 'banner.edit') ? 'active' : '' }}">Banner</a>
                        </li>
                        <li>
                            <a href="{{ route('what-we-offer.index') }}" class="{{ (Route::currentRouteName() === 'what-we-offer.index') || (Route::currentRouteName() === 'what-we-offer.create') || (Route::currentRouteName() === 'what-we-offer.edit') ? 'active' : '' }}">What We Offer</a>
                        </li>
                        <li>
                            <a href="{{ route('service.index') }}" class="{{ (Route::currentRouteName() === 'service.index') || (Route::currentRouteName() === 'service.create') || (Route::currentRouteName() === 'service.edit') ? 'active' : '' }}">Service</a>
                        </li>
                        <li>
                            <a href="{{ route('sara-research.index') }}" class="{{ (Route::currentRouteName() === 'sara-research.index') || (Route::currentRouteName() === 'sara-research.create') || (Route::currentRouteName() === 'sara-research.edit') ? 'active' : '' }}">About Sara</a>
                        </li>
                        <li>
                            <a href="{{ route('statistics.index') }}" class="{{ (Route::currentRouteName() === 'statistics.index') || (Route::currentRouteName() === 'statistics.create') || (Route::currentRouteName() === 'statistics.edit') ? 'active' : '' }}">Statistics</a>
                        </li>
                    </ul>
                </li>

                {{-- Service --}}
                {{-- <li class="sidebar-list">
                    <a class="sidebar-link  sidebar-title" href="javascript:void(0)">

                        <svg class="stroke-icon">
                            <use href="{{ asset('backend/assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('backend/assets/svg/icon-sprite.svg#fill-home') }}"></use>
                        </svg>
                        <span>SRDC Services</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="#" class="#">About Service</a>
                        </li>
                        <li>
                            <a href="#" class="#">Services</a>
                        </li>
                    </ul>
                </li> --}}

            </ul>
            <div class="right-arrow" id="right-arrow">
                <i data-feather="arrow-right"></i>
            </div>
        </div>
    </nav>
</div>
