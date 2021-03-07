<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                   
                <img src="" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
            <a id="navbarDropdown" class="d-block" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link list-group-item list-group-item-action active">
                        <i class="fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{ route('profile') }}" class="nav-link list-group-item list-group-item-action active">
                        <i class="fas fa-user-circle"></i>
                        <p>
                            Your Profile
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{ route('allstudent') }}" class="nav-link list-group-item list-group-item-action active">
                    <i class="fas fa-clipboard-list"></i>
                        <p>
                            Student List
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{ route('subject') }}" class="nav-link list-group-item list-group-item-action active">
                    <i class="fas fa-book-reader"></i>
                        <p>
                          Select Subject
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('selected_subject') }}" class="nav-link list-group-item list-group-item-action active">
                    <i class="fas fa-book-reader"></i>
                        <p>
                          Student Selected Subject
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('grading')}}" class="nav-link list-group-item list-group-item-action active">
                    <i class="fab fa-autoprefixer"></i>
                        <p>
                        Marking and Grading
                        </p>
                    </a>
                </li>
                   
                <li class="nav-item">
                    <a href="{{ route('selectstudentclass')}}" class="nav-link list-group-item list-group-item-action active">
                    <i class="fas fa-poll-h"></i>
                        <p>
                          Student Result
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link list-group-item list-group-item-action active">
                        <i class="fas fa-cogs"></i>
                        <p>
                           Setting
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fas fa-sign-out-alt"></i>
                        {{ __('Sign Out') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>