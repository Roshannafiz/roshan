<?php
use App\Models\Admin;

?>
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="{{ url('/dashboard') }}"><img
                src="{{ asset('admin/assets/images/logo.svg') }}" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="{{ url('/dashboard') }}"><img
                src="{{ asset('admin/assets/images/logo-mini.svg') }}" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
        <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                        <i class="input-group-text border-0 mdi mdi-magnify"></i>
                    </div>
                    <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
                </div>
            </form>
        </div>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
                <?php
                $admin_id = Session::get('id');
                $adminDetails = Admin::where('id', $admin_id)->get();
                ?>
                @foreach ($adminDetails as $admin)
                    <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown"
                        aria-expanded="false">
                        <div class="nav-profile-img">
                            <img src="{{ asset('admin/images/upload-admin/' . $admin->admin_image) }}" alt="profile">
                            <span class="availability-status online"></span>
                        </div>
                        <div class="nav-profile-text">
                            <p class="mb-1 text-black">
                                {{ $admin->admin_name }}
                            </p>
                        </div>
                    </a>
                @endforeach
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="{{ url('admin_edit') }}">
                        <i class="mdi mdi-settings mr-2 text-success"></i> Setting </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('/logout') }}">
                        <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
