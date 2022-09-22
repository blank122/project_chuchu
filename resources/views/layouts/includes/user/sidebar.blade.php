<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas top-0 start-0" id="sidebar">
    <ul class="nav" >
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user/dashboard') }}">
                <i class="mdi mdi-chart-histogram menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="{{route('user/announce')}}" aria-expanded="false"
                aria-controls="announcement">
                <i class="mdi mdi-message-alert menu-icon"></i>
                <span class="menu-title">Announcement</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="mdi mdi-account menu-icon"></i>
                <span class="menu-title">Student</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="{{url('user/documents')}}" aria-expanded="false"
                aria-controls="reading-materials">
                <i class="mdi mdi-book menu-icon"></i>
                <span class="menu-title">Reading Materials</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('user/help')}}">
                <i class="mdi mdi-settings  menu-icon"></i>
                <span class="menu-title">Help</span>
            </a>
        </li>
    </ul>
</nav>
<!-- partial -->

<!-- main-panel ends -->
