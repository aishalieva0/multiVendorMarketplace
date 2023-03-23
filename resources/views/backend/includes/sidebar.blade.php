<style>
    .my-nav-item .nav-link i {
        margin-right: 5px;
    }

    .my-nav-item .nav-link p {
        margin-left: 5px;
    }

</style>

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
            <img src="{{asset('assets/backend/img/AdminLTELogo.png') }}" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Marketplace</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('assets/backend/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                         alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Admin</a>
                </div>
            </div>


            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                    <!-- only visible admins -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Website settings
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
<<<<<<< HEAD
                                <a href="{{asset('sliders')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Sliders</p>
=======
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Slider</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/forms/editors.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Setting</p>
>>>>>>> aisha
                                </a>
                            </li>
                        </ul>
                    </li>

<<<<<<< HEAD
                    <li class="nav-item menu-open">

                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="{{asset('banners')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Banners</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item menu-open">

                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="{{asset('brands')}}" class="nav-link">
=======
                    <!-- only visible admins -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Blog settings
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Blogs</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Blog categories</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- only visible admins -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Admin control
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Admins</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Users</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Vendors</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Roles</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Permissions</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- only visible admins -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Contact with buyers
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Contact</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Subscriptions</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <!-- only visible admins -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Shop settings
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Delivery methods</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Payment methods</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Product categories</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
>>>>>>> aisha
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Brands</p>
                                </a>
                            </li>
<<<<<<< HEAD

                        </ul>
                    </li>

                    <li class="nav-item menu-open">

                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="{{asset('images')}}" class="nav-link">
=======
                        </ul>
                    </li>

                    <!-- only visible admins -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Vendor control
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Products</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Orders</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <!-- only visible vendors -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                               My shop
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Products</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/forms/editors.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Orders</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/forms/editors.html" class="nav-link">
>>>>>>> aisha
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Images</p>
                                </a>
                            </li>
<<<<<<< HEAD

                        </ul>
                    </li>

                    <li class="nav-item menu-open">

                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="{{asset('settings')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Settings</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item menu-open">

                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="{{asset('blog_categories')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Blog Categories</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item menu-open">

                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="{{asset('product_categories')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Product Categories</p>
                                </a>
                            </li>

=======
>>>>>>> aisha
                        </ul>
                    </li>


<<<<<<< HEAD
=======






>>>>>>> aisha

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
