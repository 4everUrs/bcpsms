<div>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
    
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{route('dashboard')}}" class="logo d-flex align-items-center">
                <img src="{{asset('assets/img/logo.png')}}" alt="">
                <span class="d-none d-lg-block">BCP|SMS</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->
       @isEmployee
        @if ($attendance->time_in == null || $attendance->time_out != null)
            <button  wire:click="attendance" class="btn btn-success" style="margin-left: 10px">Time In</button>
            <span style="margin-left: 30px">{{Carbon\Carbon::parse(now())->toFormattedDateString()}}</span>|
            <span wire:poll.1000ms>{{Carbon\Carbon::parse(now())->format('g:i:A')}}</span>
        @else
            <button wire:click="time_out" class="btn btn-success" style="margin-left: 10px">Time Out</button>
            <span style="margin-left: 30px">{{Carbon\Carbon::parse(now())->toFormattedDateString()}}</span>|
            <span wire:poll.1000ms>{{Carbon\Carbon::parse(now())->format('g:i:A')}}</span>
        @endif
       @endisEmployee
        <nav class="header-nav ms-auto" wire:ignore>
            <ul class="d-flex align-items-center">
    
                <li class="nav-item dropdown">
    
                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">0</span>
                    </a><!-- End Notification Icon -->
    
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have no new notifications
    
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
    
    
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>
    
                    </ul><!-- End Notification Dropdown Items -->
    
                </li><!-- End Notification Nav -->
    
                <li class="nav-item dropdown">
    
                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">0</span>
                    </a><!-- End Messages Icon -->
    
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header">
                            You have no new messages
    
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all messages</a>
                        </li>
    
                    </ul><!-- End Messages Dropdown Items -->
    
                </li><!-- End Messages Nav -->
    
                <li class="nav-item dropdown pe-3">
    
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="{{asset('assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{Auth::user()->name}}</span>
                    </a><!-- End Profile Iamge Icon -->
    
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{Auth::user()->name}}</h6>
                            <span>Adminstrator</span>
                        </li>
    
    
    
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
    
                        <li>
                            <hr class="dropdown-divider">
                        </li>
    
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item d-flex align-items-center" href="route('logout')" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Sign Out</span>
                                </a>
                            </form>
                        </li>
    
                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->
    
            </ul>
        </nav><!-- End Icons Navigation -->
    
    </header><!-- End Header -->
</div>
