<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">

        <a class="sidebar-brand brand-logo" href="{{url('/redirects')}}">
            <img style="height: 50px;" src=" assets/images/logo-new-removebg-preview (1).png" alt="logo">
        </a>
        <a class="sidebar-brand brand-logo-mini" href="index.html">
            <img src="assets/images/logo-new-removebg-preview (1).png" style="width: 50px;"  alt="logo" />
        </a>
    </div>
    <ul class="nav">
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/users')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">USERS</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/foodmenu')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-table-large"></i>
                </span>
                <span class="menu-title">FOODS</span>
            </a>
        </li> 
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/employedash')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-chart-bar"></i>
                </span>
                <span class="menu-title">EMPLOYEE</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/bcdash')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-chart-bar"></i>
                </span>
                <span class="menu-title">BUSINESS CONTACT</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/employersdash')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-chart-bar"></i>
                </span>
                <span class="menu-title">Employee reviews</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/employersdash')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-chart-bar"></i>
                </span>
                <span class="menu-title">Employers reviews</span>
            </a>
        </li>
    </ul>
</nav>