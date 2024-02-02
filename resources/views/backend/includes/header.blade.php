<div class="container-fluid g-0">
    <div class="row">
        <div class="col-lg-12 p-0 ">
            <div class="header_iner d-flex justify-content-between align-items-center">
                <div class="sidebar_icon d-lg-none">
                    <i class="ti-menu"></i>
                </div>
                <div class="line_icon open_miniSide d-none d-lg-block">
                    <img src="{{ asset('backend/assets') }}/img/line_img.png" alt>
                </div>

                    <div class="profile_info d-flex align-items-center">
                        <div class="profile_thumb mr_20">
                            <img src="{{ asset('backend/assets') }}/img/transfer/4.png" alt="#">
                        </div>
                        <div class="author_name">
                            <h4 class="f_s_15 f_w_500 mb-0">Admin Manager</h4>
                            <p class="f_s_12 f_w_400">Admin</p>
                        </div>
                        <div class="profile_info_iner">
                            <div class="profile_info_details">
                                <a href="#">LN Associate Limited</a>
                                {{-- <a href="#">Settings</a> --}}
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Log Out </a>
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
