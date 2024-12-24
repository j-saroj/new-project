<nav class="topnav navbar navbar-light">
    <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
    </button>
    <form class="form-inline mr-auto searchform text-muted">
        <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search"
            placeholder="Type something..." aria-label="Search">
    </form>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="dark">
                <i class="fe fe-sun fe-16"></i>
            </a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink"
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="avatar avatar-sm mt-2">
                    <img src="{{ asset('images/user.png') }}" alt="..." class="avatar-img rounded-circle">
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ route('change.password') }}">Change Password</a>
                <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
            </div>
        </li>
    </ul>
</nav>
<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ route('organization.index') }}">
                <div class="avatar avatar-md">
                    {{-- <img src="{{ asset('storage/' . $organization->logo) }}" alt="logo"> --}}
                    Admin Panel
                </div>
            </a>
        </div>



        <ul class="navbar-nav flex-fill w-100 mb-2">


            <li class="nav-item w-100" @if (route('organization.index') == url()->current()) active @endif>
                <a class="nav-link" href="{{ route('organization.index') }}">
                    <i class="fe fe-briefcase fe-16"></i>
                    <span class="ml-3 item-text">Organization</span>
                </a>
            </li>

            <li class="nav-item w-100" @if (route('skills.index') == url()->current()) active @endif>
                <a class="nav-link" href="{{ route('skills.index') }}">
                    <i class="fe fe-zap  fe-16"></i>
                    <span class="ml-3 item-text">Skills</span>
                </a>
            </li>




            <li class="nav-item w-100" @if (route('gallery.index') == url()->current()) active @endif>
                <a class="nav-link" href="{{ route('gallery.index') }}">
                    <i class="fe fe-camera  fe-16"></i>
                    <span class="ml-3 item-text">Gallery</span>
                </a>
            </li>

            <li class="nav-item w-100" @if (route('portfoliocategory.index') == url()->current()) active @endif>
                <a class="nav-link" href="{{ route('portfoliocategory.index') }}">
                    <i class="fe fe-filter  fe-16"></i>
                    <span class="ml-3 item-text">PortFolio Category</span>
                </a>
            </li>

            <li class="nav-item w-100" @if (route('portfolio.index') == url()->current()) active @endif>
                <a class="nav-link" href="{{ route('portfolio.index') }}">
                    <i class="fe fe-folder fe-16"></i>
                    <span class="ml-3 item-text">PortFolio</span>
                </a>
            </li>

            <li class="nav-item w-100" @if (route('experience.index') == url()->current()) active @endif>
                <a class="nav-link" href="{{ route('experience.index') }}">
                    <i class="fe fe-clock   fe-16"></i>
                    <span class="ml-3 item-text">Experience</span>
                </a>
            </li>

            <li class="nav-item w-100" @if (route('award.index') == url()->current()) active @endif>
                <a class="nav-link" href="{{ route('award.index') }}">
                    <i class="fe fe-star  fe-16"></i>
                    <span class="ml-3 item-text">Award</span>
                </a>
            </li>

            <li class="nav-item w-100" @if (route('journey.index') == url()->current()) active @endif>
                <a class="nav-link" href="{{ route('journey.index') }}">
                    <i class="fe fe-map  fe-16"></i>
                    <span class="ml-3 item-text">Journey Stat</span>
                </a>
            </li>




            <li class="nav-item w-100" @if (route('inquiry.index') == url()->current()) active @endif>
                <a class="nav-link" href="{{ route('inquiry.index') }}">
                    <i class="fe fe-inbox fe-16"></i>
                    <span class="ml-3 item-text">Inquires</span>
                </a>
            </li>



        </ul>

    </nav>
</aside>
