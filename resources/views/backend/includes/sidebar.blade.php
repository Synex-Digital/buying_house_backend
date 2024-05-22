<nav class="sidebar dark_sidebar">
    <div class="logo d-flex justify-content-between">
        LN Stitch & Clothing Ltd.
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('backend/assets') }}/img/menu-icon/1.svg" alt>
                </div>
                <div class="nav_title">
                    <span>Dashboard </span>
                </div>
            </a>
            <ul>
                <li><a href="index_2.html">Dashboard</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('backend/assets') }}/img/menu-icon/6.svg" alt>
                </div>
                <div class="nav_title">
                    <span>Category</span>
                </div>
            </a>
            <ul>
                <li><a href="{{ route('category') }}">Category</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('backend/assets') }}/img/menu-icon/7.svg" alt>
                </div>
                <div class="nav_title">
                    <span>Product</span>
                </div>
            </a>
            <ul>
                <li><a href="{{ route('product') }}">Product</a></li>
            </ul>
        </li>
    </ul>
</nav>
