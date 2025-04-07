<div class="sidebar-wrapper" data-layout="stroke-svg">
    <div class="logo-wrapper">
        <a href="{{ route('admin.dashboard') }}">
            <img class="img-fluid" src="{{ asset('frontend/assets/images/home/footer-logo.webp') }}" alt="" style="height: 40px; width: 150px;">
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
            <img class="img-fluid" src="{{ asset('frontend/assets/images/home/footer-logo.webp') }}" alt="" style="height: 40px; width: 150px;">
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
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/home/footer-logo.webp') }}" alt="" style="height: 40px; width: 150px;"">
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
                        || (Route::currentRouteName() === 'industry-products.index') || (Route::currentRouteName() === 'industry-products.create') || (Route::currentRouteName() === 'industry-products.edit')
                        || (Route::currentRouteName() === 'sara-research.index') || (Route::currentRouteName() === 'sara-research.create') || (Route::currentRouteName() === 'sara-research.edit')
                        || (Route::currentRouteName() === 'statistics.index') || (Route::currentRouteName() === 'statistics.create') || (Route::currentRouteName() === 'statistics.edit')
                        || (Route::currentRouteName() === 'our-advantages.index') || (Route::currentRouteName() === 'our-advantages.create') || (Route::currentRouteName() === 'our-advantages.edit')
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
                        <li>
                            <a href="{{ route('our-advantages.index') }}" class="{{ (Route::currentRouteName() === 'our-advantages.index') || (Route::currentRouteName() === 'our-advantages.create') || (Route::currentRouteName() === 'our-advantages.edit') ? 'active' : '' }}">Our Advantages</a>
                        </li>
                    </ul>
                </li>

                {{-- Specialty Chemicals --}}
                <li class="sidebar-list">
                    <a class="sidebar-link  {{ (Route::currentRouteName() === 'industry-products.index') || (Route::currentRouteName() === 'industry-products.create') || (Route::currentRouteName() === 'industry-products.edit')
                        || (Route::currentRouteName() === 'product.index') || (Route::currentRouteName() === 'product.create') || (Route::currentRouteName() === 'product.edit')
                        ? 'active' : '' }} sidebar-title" href="javascript:void(0)">

                        <svg class="stroke-icon">
                            <use href="{{ asset('backend/assets/svg/icon-sprite.svg#stroke-widget') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('backend/assets/svg/icon-sprite.svg#fill-widget') }}"></use>
                        </svg>
                        <span>Specialty Chemicals</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{ route('industry-products.index') }}" class="{{ (Route::currentRouteName() === 'industry-products.index') || (Route::currentRouteName() === 'industry-products.create') || (Route::currentRouteName() === 'industry-products.edit') ? 'active' : '' }}">Industries</a>
                        </li>
                        <li>
                            <a href="{{ route('product.index') }}" class="{{ (Route::currentRouteName() === 'product.index') || (Route::currentRouteName() === 'product.create') || (Route::currentRouteName() === 'product.edit') ? 'active' : '' }}">Products</a>
                        </li>
                    </ul>
                </li>

            </ul>
            <div class="right-arrow" id="right-arrow">
                <i data-feather="arrow-right"></i>
            </div>
        </div>
    </nav>
</div>
