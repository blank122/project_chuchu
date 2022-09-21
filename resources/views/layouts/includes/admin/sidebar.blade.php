<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas top-0 start-0" id="sidebar">
    <ul class="nav" >
        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/dashboard/') }}">
                <i class="mdi mdi-chart-histogram menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#announcement" aria-expanded="false"
                aria-controls="announcement">
                <i class="mdi mdi-message-alert menu-icon"></i>
                <span class="menu-title">Announcement</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="announcement">
                <ul class="nav flex-column sub-menu" >
                    <li class="nav-item"> 
                        <a class="nav-link" href="{{ url('admin/announcement/create') }}">Add Announcement</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="mdi mdi-account menu-icon"></i>
                <span class="menu-title">Student</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href=""> Add Student Login Credentials </a></li>
                    <li class="nav-item"> <a class="nav-link" href=""> Student Payment History </a></li>
                    <li class="nav-item"> <a class="nav-link" href=""> Student Records </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#reading-materials" aria-expanded="false"
                aria-controls="reading-materials">
                <i class="mdi mdi-book menu-icon"></i>
                <span class="menu-title">Reading Materials</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="reading-materials">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                       <a class="nav-link" href="{{ url('admin/reading-materials/create') }}">Add Reading Materials</a> 
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href=" #topnotchers" aria-expanded="false"
                aria-controls="topnotchers">
                <i class="fa-solid fa-graduation-cap menu-icon"></i>
                <span class="menu-title">Top Notchers</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="topnotchers">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('admin/slider/create') }}">Add New Topnotchers</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="mdi mdi-settings  menu-icon"></i>
                <span class="menu-title">Site Settings</span>
            </a>
        </li>
    </ul>
</nav>
<!-- partial -->

<!-- main-panel ends -->
