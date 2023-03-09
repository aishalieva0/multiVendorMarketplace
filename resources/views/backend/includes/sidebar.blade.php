<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{asset('dashboard')}}" class="nav-link">Home</a>
            </li>
        </ul>


    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{asset('/')}}" class="brand-link">
            <img src="{{asset('assets/backend/img/AdminLTELogo.png') }}" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Corporate</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('assets/backend/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Admin</a>
                </div>
            </div>


            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">

                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="{{asset('admin')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Admin</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{asset('about')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>About</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{asset('blog')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Blog</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{asset('admin')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Admin</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{asset('comment_blog')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Blog's comments</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{asset('faq')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>FAQ</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{asset('mission')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Mission</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{asset('offer')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Offer</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{asset('portfolio')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Portfolio</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{asset('portfolio_category')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Portfolio Category</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{asset('chart')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Chart</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{asset('service')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Service</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{asset('slider')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Slider</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{asset('team')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Team</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{asset('costumer_review')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Costumer Review</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{asset('setting')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Setting</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
