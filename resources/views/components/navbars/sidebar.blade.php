@props(['activePage'])

<aside
    class="sidenav navbar navbar-vertical  navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3    bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 d-flex text-wrap align-items-center" href=" {{ route('dashboard') }} ">
            <img src="{{ asset('assets') }}/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-2 font-weight-bold text-white">kamu kamu secondary school</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  h-75 overflow-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <!-- <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Laravel examples</h6>
            </li> -->
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'user-profile' ? 'active bg-gradient-primary' : '' }} "
                    href="{{ route('user-profile') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1.2rem;" class="fas fa-user-circle ps-2 pe-2 text-center"></i>
                    </div>
                    <span class="nav-link-text ms-1">User Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'user-management' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('user-management.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="fas fa-lg fa-list-ul ps-2 pe-2 text-center"></i>
                    </div>
                    <span class="nav-link-text ms-1">User Management</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'dashboard' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('dashboard') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>


            <!-- <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'dashboard' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('dashboard') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Teachers</span>
                </a>
            </li> -->
            
            <!-- <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'tables' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('tables') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1">Tables</span>
                </a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link text-white  {{ in_array($activePage, ['all-teachers', 'add-teacher', 'teacher-reports']) ? 'active bg-gradient-primary' : '' }}"
                    href="#teachersDropdown" data-bs-toggle="collapse" role="button" aria-expanded="false">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">groups</i>
                    </div>
                    <span class="nav-link-text ms-1">Teachers</span>
                    <!-- <i class="material-icons opacity-10 ms-auto">arrow_drop_down</i> -->
                </a>
                <div class="collapse" id="teachersDropdown">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white {{ $activePage == 'all-teachers' ? 'active bg-gradient-primary' : '' }}"
                                href="{{ route('teachers.index') }}">
                                <span class="nav-link-text ms-3">All Teachers</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white {{ $activePage == 'add-teacher' ? 'active bg-gradient-primary' : '' }}"
                                href="{{ route('teachers.create') }}">
                                <span class="nav-link-text ms-3">Add New Teacher</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white {{ $activePage == 'teacher-reports' ? 'active bg-gradient-primary' : '' }}"
                                href="#">
                                <span class="nav-link-text ms-3">Teacher Reports</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white {{ $activePage == 'teacher-attendance' ? 'active bg-gradient-primary' : '' }}"
                                href="#">
                                <span class="nav-link-text ms-3">Attendance</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white  {{ in_array($activePage, ['all-students', 'add-student', 'student-reports']) ? 'active bg-gradient-primary' : '' }}"
                    href="#studentsDropdown" data-bs-toggle="collapse" role="button" aria-expanded="false">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">school</i>
                    </div>
                    <span class="nav-link-text ms-1">Students</span>
                </a>
                <div class="collapse" id="studentsDropdown">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white {{ $activePage == 'all-students' ? 'active bg-gradient-primary' : '' }}"
                                href="{{ route('students.index') }}">
                                <span class="nav-link-text ms-3">All Students</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white {{ $activePage == 'add-student' ? 'active bg-gradient-primary' : '' }}"
                                href="{{ route('students.create') }}">
                                <span class="nav-link-text ms-3">Add New Student</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white {{ $activePage == 'student-reports' ? 'active bg-gradient-primary' : '' }}"
                                href="{{ route('students.index') }}">
                                <span class="nav-link-text ms-3">Student Reports</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white {{ $activePage == 'student-attendance' ? 'active bg-gradient-primary' : '' }}"
                                href="#">
                                <span class="nav-link-text ms-3">Attendance</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white {{ $activePage == 'student-performance' ? 'active bg-gradient-primary' : '' }}"
                                href="#">
                                <span class="nav-link-text ms-3">Performance</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link text-white  {{ in_array($activePage, ['all-teachers', 'add-teacher', 'teacher-reports']) ? 'active bg-gradient-primary' : '' }}"
                    href="#teachersDropdown" data-bs-toggle="collapse" role="button" aria-expanded="false">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">groups</i>
                    </div>
                    <span class="nav-link-text ms-1">Grading</span>
                    <!-- <i class="material-icons opacity-10 ms-auto">arrow_drop_down</i> -->
                <!-- </a>
                <div class="collapse" id="teachersDropdown">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white {{ $activePage == 'Grading' ? 'active bg-gradient-primary' : '' }}"
                                href="#">
                                <span class="nav-link-text ms-3">S1</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white {{ $activePage == 'add-teacher' ? 'active bg-gradient-primary' : '' }}"
                                href="#">
                                <span class="nav-link-text ms-3">S2</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white {{ $activePage == 'teacher-reports' ? 'active bg-gradient-primary' : '' }}"
                                href="#">
                                <span class="nav-link-text ms-3">S3</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white {{ $activePage == 'teacher-attendance' ? 'active bg-gradient-primary' : '' }}"
                                href="#">
                                <span class="nav-link-text ms-3">S4</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --> -->
            <!-- <li class="nav-item">
                <a class="nav-link text-white  {{ in_array($activePage, ['all-teachers', 'add-teacher', 'teacher-reports']) ? 'active bg-gradient-primary' : '' }}"
                    href="#teachersDropdown" data-bs-toggle="collapse" role="button" aria-expanded="false">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">groups</i>
                    </div>
                    <span class="nav-link-text ms-1">Fees</span>
                    <!-- <i class="material-icons opacity-10 ms-auto">arrow_drop_down</i> -->
                <!-- </a>
                <div class="collapse" id="teachersDropdown">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white {{ $activePage == 'all-teachers' ? 'active bg-gradient-primary' : '' }}"
                                href="#">
                                <span class="nav-link-text ms-3">defaulters</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white {{ $activePage == 'add-teacher' ? 'active bg-gradient-primary' : '' }}"
                                href="#">
                                <span class="nav-link-text ms-3">cleared</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --> -->
            <!-- <li class="nav-item">
                <a class="nav-link text-white  {{ in_array($activePage, ['all-teachers', 'add-teacher', 'teacher-reports']) ? 'active bg-gradient-primary' : '' }}"
                    href="#teachersDropdown" data-bs-toggle="collapse" role="button" aria-expanded="false">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">groups</i>
                    </div>
                    <span class="nav-link-text ms-1">Inventory management</span>
                    <!-- <i class="material-icons opacity-10 ms-auto">arrow_drop_down</i> -->
                <!-- </a>
                <div class="collapse" id="teachersDropdown">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white {{ $activePage == 'all-teachers' ? 'active bg-gradient-primary' : '' }}"
                                href="#">
                                <span class="nav-link-text ms-3">All Teachers</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white {{ $activePage == 'add-teacher' ? 'active bg-gradient-primary' : '' }}"
                                href="#">
                                <span class="nav-link-text ms-3">Add New Teacher</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white {{ $activePage == 'teacher-reports' ? 'active bg-gradient-primary' : '' }}"
                                href="#">
                                <span class="nav-link-text ms-3">Teacher Reports</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white {{ $activePage == 'teacher-attendance' ? 'active bg-gradient-primary' : '' }}"
                                href="#">
                                <span class="nav-link-text ms-3">Attendance</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --> -->
            <!-- <li class="nav-item">
                <a class="nav-link text-white  {{ in_array($activePage, ['all-teachers', 'add-teacher', 'teacher-reports']) ? 'active bg-gradient-primary' : '' }}"
                    href="#teachersDropdown" data-bs-toggle="collapse" role="button" aria-expanded="false">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">groups</i>
                    </div>
                    <span class="nav-link-text ms-1">Attendance Management</span> -->
                    <!-- <i class="material-icons opacity-10 ms-auto">arrow_drop_down</i>
                </a>
                <div class="collapse" id="teachersDropdown">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white {{ $activePage == 'all-teachers' ? 'active bg-gradient-primary' : '' }}"
                                href="#">
                                <span class="nav-link-text ms-3">All Teachers</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white {{ $activePage == 'add-teacher' ? 'active bg-gradient-primary' : '' }}"
                                href="#">
                                <span class="nav-link-text ms-3">Add New Teacher</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white {{ $activePage == 'teacher-reports' ? 'active bg-gradient-primary' : '' }}"
                                href="#">
                                <span class="nav-link-text ms-3">Teacher Reports</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white {{ $activePage == 'teacher-attendance' ? 'active bg-gradient-primary' : '' }}"
                                href="#">
                                <span class="nav-link-text ms-3">Attendance</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> -->
            <!-- <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'billing' ? ' active bg-gradient-primary' : '' }}  "
                    href="{{ route('billing') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <span class="nav-link-text ms-1">Billing</span>
                </a>
            </li> -->
            <!-- <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'virtual-reality' ? ' active bg-gradient-primary' : '' }}  "
                    href="{{ route('virtual-reality') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">view_in_ar</i>
                    </div>
                    <span class="nav-link-text ms-1">Virtual Reality</span>
                </a>
            </li> -->
            <!-- <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'rtl' ? ' active bg-gradient-primary' : '' }}  "
                    href="{{ route('rtl') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
                    </div>
                    <span class="nav-link-text ms-1">RTL</span>
                </a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'notifications' ? ' active bg-gradient-primary' : '' }}  "
                    href="{{ route('notifications.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">notifications</i>
                        @if(auth()->user()->unreadNotifications->count() > 0)
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.6rem;">
                                {{ auth()->user()->unreadNotifications->count() }}
                                <span class="visually-hidden">unread notifications</span>
                            </span>
                        @endif
                    </div>
                    <span class="nav-link-text ms-1">Notifications</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account </h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'profile' ? ' active bg-gradient-primary' : '' }}  "
                    href="{{ route('profile') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{ route('static-sign-in') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">login</i>
                    </div>
                    <span class="nav-link-text ms-1">Sign In</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{ route('static-sign-up') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">assignment</i>
                    </div>
                    <span class="nav-link-text ms-1">Sign Up</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- <div class="sidenav-footer py-2 ">
        <div class="mx-3 mb-2">
            <a class="btn bg-gradient-primary w-100" href="https://www.creative-tim.com/product/material-dashboard-laravel" target="_blank">Free Download</a>
        </div>
        <div class="mx-3">
            <a class="btn bg-gradient-primary w-100" href="../../documentation/getting-started/installation.html" target="_blank">View documentation</a>
        </div>
        <div class="mx-3">
            <a class="btn bg-gradient-primary w-100"
                href="https://www.creative-tim.com/product/material-dashboard-pro-laravel" target="_blank" type="button">Upgrade
                to pro</a>
        </div>
    </div> -->
</aside>
