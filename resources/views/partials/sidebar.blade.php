<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <img src="{{ asset('admin_assets/images/logo.svg') }}" alt="" srcset="">
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class='sidebar-title'>Customer</li>
                <li class="sidebar-item {{ Request::is('customer') ? 'active' : '' }}">
                    <a href="/customer" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Order Jasa</span>
                    </a>
                </li>
                <li class="sidebar-item {{ Request::is('customer/warranty') ? 'active' : '' }}">
                    <a href="/customer/warranty" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Garansi iPagar</span>
                    </a>
                </li>
                <li class="sidebar-item {{ Request::is('customer/gallery') ? 'active' : '' }}">
                    <a href="/customer/gallery" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Rekomendasi Produk</span>
                    </a>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
