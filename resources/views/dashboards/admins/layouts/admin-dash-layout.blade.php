<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <base href="{{ \URL::to('/') }}">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="icon" href="/assets/favicon.ico" />
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">


        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item mt-1  ">
                    <a class="dropdown-item text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                       <i class="fa fa-power-off"></i> {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ \URL::to('/admin/dashboard') }}" class="brand-link">
            <img src="dist/img/web c.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light "><strong>NSTI CALICUT</strong></span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                   <img src="dist/img/admin.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="/admin/dashboard" class="d-block">{{ Auth::user()->name}}</a>

                </div>

            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="/dashboard" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Dashboard

                            </p>
                        </a>

                    <li class="nav-item" >
                        <router-link to="/Certificate-Verification" class="nav-link">
                            <i class="nav-icon fas fa-check"></i>
                            <p>
                                Certificate verification

                            </p>
                        </router-link>
                    </li>

                    <li class="nav-item">
                        <router-link to="/Fee-Verification" class="nav-link">
                            <i class="nav-icon fas fa-check"></i>
                            <p>
                                Fee Payment Verification

                            </p>
                        </router-link>
                    </li>

                    <li class="nav-item">
                        <router-link to="/Admission-Pending" class="nav-link">
                            <i class="nav-icon fas fa-check-circle"></i>
                            <p>
                                Admission Pending

                            </p>
                        </router-link>
                    </li>

                    <li class="nav-item">
                        <router-link to="/Admitted-List" class="nav-link">
                            <i class="nav-icon fas fa-clipboard-check"></i>
                            <p>
                                Admitted List

                            </p>
                        </router-link>
                    </li>

                    <li class="nav-item">
                        <router-link to="/Waiting-List" class="nav-link">
                            <i class="nav-icon fas fa-clipboard-check"></i>

                            <p>

                                Waiting List
                            </p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/Rejected-List" class="nav-link">
                            <i class="nav-icon fas fa-clipboard-check"></i>

                            <p>
                                Rejected List


                            </p>
                        </router-link>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="admin/dashboard" class="nav-link active">

                            <p>
                                Admission-Completed Coursewise Students Details
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <router-link to="/Adit-Admitted" class="nav-link active">
                                    <i class="far fa-"></i>
                                    <p>ADIT</p>
                                </router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/Cits-Admitted" class="nav-link ">
                                    <i class="far fa-"></i>
                                    <p>CITS</p>
                                </router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/Cts-Admitted" class="nav-link ">
                                    <i class="far fa-"></i>
                                    <p>CTS</p>
                                </router-link>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" >
        @yield('content')

    </div>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">

        </div>
        <!-- Default to the left -->
        <center> <strong>Copyright &copy; 2021 <a href="">adit</a>.</strong> All rights reserved.</center>
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <script src="{{ asset('js/app.js') }}"></script>{{-- vue js --}}
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
<!-- Page specific script -->
<script>

 $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });

  </script>


</body>

</html>
