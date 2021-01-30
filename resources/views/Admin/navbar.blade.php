<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
                    <img src="assets/assets/images/faces/face24.jpg" alt="image"/>
                </div>
                <div class="profile-name">
                    <p class="name">
                        Welcome
                    </p>
                    <p class="designation">
                        Super Admin
                    </p>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="admin">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Details">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">All registered accounts</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Checked_In">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Checked in users</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Checked_Out">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Checked out users</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Report">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Report</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Account">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Create Account</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="AccountDetails">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Account Details</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="Shop_office">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Shop/Office</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="RoomDetails">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Room details</span>
            </a>
        </li>


        <li class="nav-item">
{{--            <a class="nav-link" href="LogOut">--}}
{{--                <span class="menu-title">Log Out</span>--}}
                <a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="fa fa-home menu-icon"></i><span class="menu-title">Log Out</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
        </li>
    </ul>
</nav>
