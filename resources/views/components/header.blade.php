<div class="header">
    
    <!-- Header Title -->
    <div class="page-title-box">
        <h3>SoCOPA</h3>
    </div>
    <!-- /Header Title -->

    <a id="toggle_btn" href="javascript:void(0);">
        <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </a>
    
    <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
    
    <!-- Header Menu -->
    <ul class="nav user-menu">
    
        <!-- Flag -->
        <li class="nav-item dropdown has-arrow flag-nav">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                <img src="{{ asset('img/flags/fr.png') }}" alt="" height="16"> <span>Français</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="javascript:void(0);" class="dropdown-item">
                    <img src="{{ asset('img/flags/us.png') }}" alt="" height="20"> Anglais
                </a>
            </div>
        </li>
        <!-- /Flag -->
    
        <!-- Notifications -->
        <li class="nav-item dropdown">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i> <span class="badge badge-pill">3</span>
            </a>
            {{--<div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span class="notification-title">Notifications</span>
                    <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                </div>
                <div class="noti-content">
                    <ul class="notification-list">
                        <li class="notification-message">
                            <a href="activities.html">
                                <div class="media">
                                    <span class="avatar">
                                        <img alt="" src="assets/img/profiles/avatar-02.jpg">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
                                        <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="activities.html">
                                <div class="media">
                                    <span class="avatar">
                                        <img alt="" src="assets/img/profiles/avatar-03.jpg">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
                                        <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="activities.html">
                                <div class="media">
                                    <span class="avatar">
                                        <img alt="" src="assets/img/profiles/avatar-06.jpg">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
                                        <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="activities.html">
                                <div class="media">
                                    <span class="avatar">
                                        <img alt="" src="assets/img/profiles/avatar-17.jpg">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
                                        <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="activities.html">
                                <div class="media">
                                    <span class="avatar">
                                        <img alt="" src="assets/img/profiles/avatar-13.jpg">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
                                        <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="topnav-dropdown-footer">
                    <a href="activities.html">View all Notifications</a>
                </div>
            </div>--}}
        </li>
        <!-- /Notifications -->
        
        @isset(auth()->user()->section->libelle)
        <li class="nav-item main-drop">
            <a href="#" class="nav-link">
                <span>{{ auth()->user()->section->libelle }}</span>
            </a>
        </li>
        @endisset

        <li class="nav-item dropdown main-drop">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <span>{{ auth()->user()->nom }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="profile.html">Profile</a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Déconnexion
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
    <!-- /Header Menu -->
    
    <!-- Mobile Menu -->
    <div class="dropdown mobile-user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="profile.html">Profile</a>
            <a class="dropdown-item" href="settings.html">Settings</a>
            <a class="dropdown-item" href="login.html">Déconnexion</a>
        </div>
    </div>
    <!-- /Mobile Menu -->
    
</div>