<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="ri ri-dashboard-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <hr>
        <span>HR-1</span>   
        <li class="nav-item">
            <a class="nav-link" href="{{route('hr1Dashboard')}}">
                <i class="ri ri-dashboard-fill"></i>
                <span>HR-1 Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Recruitment</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('recruitment-request')}}">
                        <i class="bi bi-circle"></i><span>Request List</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('recruitment')}}">
                        <i class="bi bi-circle"></i><span>Recruitment</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('recruitment')}}">
                <i class="bi bi-person-lines-fill"></i><span>Recruitment</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('applicant')}}">
                <i class="bi bi-person-badge"></i><span>Applicant Management</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('onboarding')}}">
                <i class="bi bi-person-badge"></i><span>New Hire on Board</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-person-badge"></i><span>Social Recognition</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-person-badge"></i><span>Compentency Management</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('performance')}}">
                <i class="bi bi-person-badge"></i><span>Performance Management</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-person-badge"></i><span>Succession Planning</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('learning')}}">
                <i class="bi bi-person-badge"></i><span>Learning / Training Management</span>
            </a>
        </li>
        <hr>
        <span>HR-2</span>
        <li class="nav-item">
            <a class="nav-link" href="{{route('hr2Dashboard')}}">
                <i class="ri ri-dashboard-fill"></i>
                <span>HR-2 Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav23" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Time and Attendance</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav23" class="nav-content collapse " data-bs-parent="#sidebar-nav">
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
    </ul>

</aside><!-- End Sidebar-->