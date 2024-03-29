
<div class="leftbar">
    <!-- Start Sidebar -->
    <div class="sidebar">
        <!-- Start Logobar -->
        <div class="logobar">
            <a href="{{url('/')}}" class="logo logo-large"><img src="{{ asset('backend/assets/images/logo.svg') }}" class="img-fluid" alt="logo"></a>
            <a href="{{url('/')}}" class="logo logo-small"><img src="{{ asset('backend/assets/images/small_logo.svg') }}" class="img-fluid" alt="logo"></a>
        </div>
        <!-- End Logobar -->
        <!-- Start Navigationbar -->
        <div class="navigationbar">
            <ul class="vertical-menu">
                <li class="">
                    <a href="{{route('dashboard')}}">
                      <img src="{{ asset('backend/assets/images/svg-icon/dashboard.svg') }}" class="img-fluid" alt="dashboard"><span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="javaScript:void();">
                      <img src="{{ asset('backend/assets/images/svg-icon/user.svg') }}" class="img-fluid" alt="user"><span>User</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{ route('user.view') }}">User List</a></li>
                        <li><a href="{{ route('user.create') }}">User Add</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javaScript:void();">
                        <img src="{{ asset('backend/assets/images/svg-icon/advanced.svg') }}" alt=""><span>Manage Profile</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{ route('profile.view') }}">Profile</a></li>
                        <li><a href="{{ route('password.view') }}">Change Password</a></li>
                    </ul>
                </li>
                <li>
                    <a href="">
                        <img src="{{ asset('backend/assets/images/svg-icon/logout.svg') }}" alt=""><span>Setup Management</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{ route('student.class.view') }}">Student Class</a></li>
                        <li><a href="{{ route('student.year.view') }}">Student Year</a></li>
                        <li><a href="{{ route('student.group.view') }}">Student Group</a></li>
                        <li><a href="{{ route('student.shift.view') }}">Student Shift</a></li>
                        <li><a href="{{ route('fee.category.view') }}">Fee Category</a></li>
                        <li><a href="{{ route('fee.amount.view') }}">Fee Category Amount</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javaScript:void();">
                      <img src="{{ asset('backend/assets/images/svg-icon/apps.svg') }}" class="img-fluid" alt="apps"><span>Apps</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{url('/apps-calender')}}">Calender</a></li>
                        <li><a href="{{url('/apps-chat')}}">Chat</a></li>
                        <li>
                            <a href="javaScript:void();">Email<i class="feather icon-chevron-right pull-right"></i></a>
                            <ul class="vertical-submenu">
                                <li><a href="{{url('/apps-email-inbox')}}">Inbox</a></li>
                                <li><a href="{{url('/apps-email-open')}}">Open</a></li>
                                <li><a href="{{url('/apps-email-compose')}}">Compose</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url('/apps-kanban-board')}}">Kanban Board</a></li>
                        <li><a href="{{url('/apps-onboarding-screens')}}">Onboarding Screens</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- End Navigationbar -->
    </div>
    <!-- End Sidebar -->
</div>
