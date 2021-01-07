<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="row">
            <div class="col-md-12 pt-2" align="right">
                <svg xmlns="http://www.w3.org/2000/svg" width="20.246" height="20.525" viewBox="0 0 24.246 27.525">
                    <defs>
                        <style>
                            .cls-1{fill:#fff}.cls-2{fill:#1caa53}
                        </style>
                    </defs>
                    <g id="notification_2_" data-name="notification (2)" transform="translate(-447.211 91)">
                        <path id="Path_1" d="M137.878 421.455a4.552 4.552 0 0 1-4.546-4.546.909.909 0 0 1 1.818 0 2.728 2.728 0 1 0 5.455 0 .909.909 0 0 1 1.818 0 4.552 4.552 0 0 1-4.545 4.546zm0 0" class="cls-1" data-name="Path 1" transform="translate(321.456 -484.931)"/>
                        <path id="Path_2" d="M22.125 85.822h-20a2.122 2.122 0 0 1-1.38-3.734.838.838 0 0 1 .1-.073 8.148 8.148 0 0 0 2.8-6.146v-3.383A8.5 8.5 0 0 1 12.123 64a3.651 3.651 0 0 1 .6.036.909.909 0 1 1-.3 1.793 1.908 1.908 0 0 0-.3-.011 6.676 6.676 0 0 0-6.668 6.668v3.382a9.971 9.971 0 0 1-3.519 7.6.683.683 0 0 1-.053.041.3.3 0 0 0-.064.188.306.306 0 0 0 .3.3h20a.306.306 0 0 0 .3-.3.29.29 0 0 0-.065-.188l-.052-.041a9.969 9.969 0 0 1-3.519-7.6v-1.321a.909.909 0 1 1 1.818 0v1.321a8.151 8.151 0 0 0 2.8 6.15.884.884 0 0 1 .093.07 2.121 2.121 0 0 1-1.38 3.733zm0 0" class="cls-1" data-name="Path 2" transform="translate(447.211 -152.934)"/>
                        <ellipse id="Ellipse_16" cx="4.5" cy="5" class="cls-2" data-name="Ellipse 16" rx="4.5" ry="5" transform="translate(462 -91)"/>
                    </g>
                </svg>                        
            </div>
            <div class="col-md-3 col-3 pt-5">
                <img src="{{ asset('assets/backend/images/user.png') }}" width="48" height="48" alt="User" style="border-radius: 50%;">
            </div>
            <div class="col-md-9 col-9 pt-5">
                <div class="name text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Hi ! {{ Auth::user()->name }}</div>
            <div class="email text-white"> {{ Auth::user()->email }}</div>
            </div>
        </div>
    </div>
    <!-- Menu -->
    <div class="menu pt-5" style="background-color: #1d1b27;">
        <ul class="list">
            @if(Request::is('admin*'))
                <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="material-icons">home</i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/manager') ? 'active' : '' }}">
                    <a href="{{ route('admin.manager.index') }}">
                        <i class="material-icons">person_pin</i>
                        <span>Managers</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/faculty') ? 'active' : '' }}">
                    <a href="{{ route('admin.faculty.index') }}">
                        <i class="material-icons">people</i>
                        <span>Faculty</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/student') ? 'active' : '' }}">
                    <a href="{{ route('admin.student.index') }}">
                        <i class="material-icons">person_add</i>
                        <span>Students</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/team') ? 'active' : '' }}">
                    <a href="{{ route('admin.team.index') }}">
                        <i class="material-icons">people_alt</i>
                        <span>Artist Team</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/teamProduction') ? 'active' : '' }}">
                    <a href="{{ route('admin.teamProduction.index') }}">
                        <i class="material-icons">people_alt</i>
                        <span>Team Production</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/menu*') ? 'active' : '' }}">
                    <a href="{{ route('admin.menu.index') }}" class="menu-toggle">
                        <i class="material-icons">dashboard</i>
                        <span>Menu</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{ route('admin.submenu.index') }}">Sub menu</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ Request::is('admin/pros') ? 'active' : '' }}">
                    <a href="{{ route('admin.pros.index') }}">
                        <i class="material-icons">psychology</i>
                        <span>Pros</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/download') ? 'active' : '' }}">
                    <a href="{{ route('admin.download.index') }}">
                        <i class="material-icons">get_app</i>
                        <span>Downloads</span>
                    </a>
                </li>
                <!-- <li class="{{ Request::is('admin/menu') ? 'active' : '' }}">
                    <a href="{{ route('admin.menu.index') }}">
                        <i class="material-icons">emoji_flags</i>
                        <span>Cources</span>
                    </a>
                </li> -->
                <li class="{{ Request::is('admin/newsroom') ? 'active' : '' }}">
                    <a href="{{ route('admin.newsroom.index') }}">
                        <i class="material-icons">emoji_food_beverage</i>
                        <span>Newsroom</span>
                    </a>
                </li>
                <!-- <li class="{{ Request::is('admin/menu') ? 'active' : '' }}">
                    <a href="{{ route('admin.menu.index') }}">
                        <i class="material-icons">school</i>
                        <span>exams</span>
                    </a>
                </li> -->
                <!-- <li class="{{ Request::is('admin/menu') ? 'active' : '' }}">
                    <a href="{{ route('admin.menu.index') }}">
                        <i class="material-icons">poll</i>
                        <span>Diploma Cources</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/menu') ? 'active' : '' }}">
                    <a href="{{ route('admin.menu.index') }}">
                        <i class="material-icons">people_alt</i>
                        <span>Artist Team</span>
                    </a>
                </li> -->
                <!-- <li class="{{ Request::is('admin/submenu*') ? 'active' : '' }}">
                    <a href="{{ route('admin.submenu.index') }}" class="menu-toggle">
                        <i class="material-icons">star</i>
                        <span>Studio Equipments</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{ route('admin.submenu.index') }}">Hardware Equipments</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.submenu.index') }}">Software Applications</a>
                        </li>
                    </ul>
                </li> -->
                <li class="{{ Request::is('admin/engineeringCourse*') ? 'active' : '' }}">
                    <a href="{{ route('admin.engineeringCourse.index') }}" class="menu-toggle">
                        <i class="material-icons">star</i>
                        <span>Engineering Diploma Course</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{ route('admin.engineeringCourseSound.index') }}">Enroll Course ?</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.engineeringCourseSoftware.index') }}">Software Applications</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.engineeringCourseHardware.index') }}">Hardware Applications</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.engineeringCourseOverview.index') }}">Engineering module Overview</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.engineeringCourseModule.index') }}">Engineering Modules</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ Request::is('admin/productionCourse*') ? 'active' : '' }}">
                    <a href="{{ route('admin.productionCourse.index') }}" class="menu-toggle">
                        <i class="material-icons">star</i>
                        <span>Music Production Course</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{ route('admin.productionCourseQuick.index') }}">Quick Course ?</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.productionCourseLogic.index') }}">Logic Pro X</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.productionCoursePro.index') }}">Pro Ableton Live</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ Request::is('admin/academyCourse') ? 'active' : '' }}">
                    <a href="{{ route('admin.academyCourse.index') }}">
                        <i class="material-icons">star</i>
                        <span>Academy Courses</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/studioEquipmentHardware*') ? 'active' : '' }}">
                    <a href="{{ route('admin.studioEquipmentHardware.index') }}" class="menu-toggle">
                        <i class="material-icons">star</i>
                        <span>Studio Equipment Hardware</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{ route('admin.studioEquipmentSoftware.index') }}">Studio Equipment Software</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.studioEquipmentHardwareImage.index') }}">Hardware Images</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.studioEquipmentSoftwareImage.index') }}">Software Images</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ Request::is('admin/gallery') ? 'active' : '' }}">
                    <a href="{{ route('admin.gallery.index') }}">
                        <i class="material-icons">emoji_food_beverage</i>
                        <span>Gallery</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/faq*') ? 'active' : '' }}">
                    <a href="{{ route('admin.faq.index') }}" class="menu-toggle">
                        <i class="material-icons">support_agent</i>
                        <span>FAQ</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{ route('admin.faqCareer.index') }}">FAQ Career</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.faqCourse.index') }}">FAQ Course</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.faqGeneral.index') }}">FAQ General</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.faqHostel.index') }}">FAQ Hostel</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ Request::is('admin/vacancy') ? 'active' : '' }}">
                    <a href="{{ route('admin.vacancy.index') }}">
                        <i class="material-icons">how_to_reg</i>
                        <span>Vacancy</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/contact') ? 'active' : '' }}">
                    <a href="{{ route('admin.contact.index') }}">
                        <i class="material-icons">emoji_food_beverage</i>
                        <span>Contact</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="material-icons">input</i>
                        <span>Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form> 
                </li>
            @endif

            @if(Request::is('manager*'))
                <li class="{{ Request::is('manager/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('manager.dashboard') }}">
                        <i class="material-icons">home</i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="material-icons">input</i>
                        <span>Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form> 
                </li>
            @endif

            @if(Request::is('faculty*'))
                <li class="{{ Request::is('faculty/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('faculty.dashboard') }}">
                        <i class="material-icons">home</i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="material-icons">input</i>
                        <span>Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form> 
                </li>
            @endif

            @if(Request::is('student*'))
                <li class="{{ Request::is('student/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('student.dashboard') }}">
                        <i class="material-icons">home</i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="material-icons">input</i>
                        <span>Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form> 
                </li>
            @endif
        </ul>
    </div>
</aside>