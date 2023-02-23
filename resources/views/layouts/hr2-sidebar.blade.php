<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="{{route('hr2Dashboard')}}">
                <i class="ri ri-dashboard-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
       <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Time and Attendance</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('timesheet')}}">
                        <i class="bi bi-circle"></i><span>Attendance</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('timesheet-management')}}">
                        <i class="bi bi-circle"></i><span>Timesheet</span>
                    </a>
                </li>

            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('timesheet')}}">
                <i class="bi bi-person-lines-fill"></i><span>Leave Management</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('timesheet')}}">
                <i class="bi bi-person-lines-fill"></i><span>Payroll</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('timesheet')}}">
                <i class="bi bi-person-lines-fill"></i><span>HR Analytics</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('timesheet')}}">
                <i class="bi bi-person-lines-fill"></i><span>Claims and Reimbursement</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('hcm')}}">
                <i class="bi bi-person-lines-fill"></i><span>Core Human Capital</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('timesheet')}}">
                <i class="bi bi-person-lines-fill"></i><span>Compensation Planing</span>
            </a>
        </li>


        {{-- <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="icons-bootstrap.html">
                        <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
                    </a>
                </li>
                <li>
                    <a href="icons-remix.html">
                        <i class="bi bi-circle"></i><span>Remix Icons</span>
                    </a>
                </li>
                <li>
                    <a href="icons-boxicons.html">
                        <i class="bi bi-circle"></i><span>Boxicons</span>
                    </a>
                </li>
            </ul>
        </li> --}}
    </ul>

</aside><!-- End Sidebar-->