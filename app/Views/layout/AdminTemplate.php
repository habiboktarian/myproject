<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- Google Font: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('adminlte/'); ?>plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('adminlte/'); ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('adminlte/'); ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('adminlte/'); ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('adminlte/'); ?>dist/css/adminlte.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url('adminlte/'); ?>plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url('adminlte/'); ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url('adminlte/'); ?>plugins/sweetalert2/sweetalert2.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url('adminlte/'); ?>plugins/toastr/toastr.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" data-widget="pushmenu" href="" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url('/'); ?>" class="nav-link">Home</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-light-primary">
            <!-- Brand Logo -->
            <a href="<?= base_url('profile'); ?>" class="brand-link">
                <img src="<?= base_url('uploads/images/') . session()->get('foto'); ?>" class="brand-image img-circle">
                <span class="brand-text"><?= session()->get('nama'); ?></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-2 pb-2 mb-2 d-flex">
                    <ul class="nav nav-pills nav-sidebar flex-column nav-compact nav-child-indent">
                        <li class="nav-item">
                            <button type="button" class="nav-link bg-danger border-0 text-left" data-toggle="modal" data-target="#logoutModal">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>Logout</p>
                            </button>
                        </li>
                    </ul>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">

                    <?php
                    $uri = service('uri');
                    ?>

                    <ul class="nav nav-pills nav-sidebar flex-column nav-compact nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard'); ?>" class="nav-link <?= ($uri->getSegment(1) == 'dashboard') ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item <?= ($uri->getSegment(1) == 'manage_home' || $uri->getSegment(1) == 'manage_about_me' || $uri->getSegment(1) == 'manage_my_project' || $uri->getSegment(1) == 'manage_contact_me') ? 'menu-open' : 'menu-close' ?>">
                            <a href="#" class="nav-link <?= ($uri->getSegment(1) == 'manage_home' || $uri->getSegment(1) == 'manage_about_me' || $uri->getSegment(1) == 'manage_my_project' || $uri->getSegment(1) == 'manage_contact_me') ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-folder-plus"></i>
                                <p>
                                    Manage
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('manage_home'); ?>" class="nav-link <?= ($uri->getSegment(1) == 'manage_home') ? 'active' : '' ?>">
                                        <i class="<?= $uri->getSegment(1) == 'manage_home' ? 'fas' : 'fas'; ?> fa-home nav-icon <?= $uri->getSegment(1) == 'manage_home' ? 'text-primary' : ''; ?>"></i>
                                        <p>Home</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('manage_about_me'); ?>" class="nav-link <?= ($uri->getSegment(1) == 'manage_about_me') ? 'active' : '' ?>">
                                        <i class="<?= $uri->getSegment(1) == 'manage_about_me' ? 'fas' : 'fas'; ?> fa-user nav-icon <?= $uri->getSegment(1) == 'manage_about_me' ? 'text-primary' : ''; ?>"></i>
                                        <p>About Me</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('manage_my_project'); ?>" class="nav-link <?= ($uri->getSegment(1) == 'manage_my_project') ? 'active' : '' ?>">
                                        <i class="<?= $uri->getSegment(1) == 'manage_my_project' ? 'fas' : 'fas'; ?> fa-folder-open nav-icon <?= $uri->getSegment(1) == 'manage_my_project' ? 'text-primary' : ''; ?>"></i>
                                        <p>My Projects</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('manage_contact_me'); ?>" class="nav-link <?= ($uri->getSegment(1) == 'manage_contact_me') ? 'active' : '' ?>">
                                        <i class="<?= $uri->getSegment(1) == 'manage_contact_me' ? 'fas' : 'fas'; ?> fa-id-card nav-icon <?= $uri->getSegment(1) == 'manage_contact_me' ? 'text-primary' : ''; ?>"></i>
                                        <p>Contact Me</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item <?= ($uri->getSegment(1) == 'user' || $uri->getSegment(1) == 'role') ? 'menu-open' : 'menu-close' ?>">
                            <a href="#" class="nav-link <?= ($uri->getSegment(1) == 'user' || $uri->getSegment(1) == 'role') ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-user-cog"></i>
                                <p>
                                    Setting
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('user'); ?>" class="nav-link <?= ($uri->getSegment(1) == 'user') ? 'active' : '' ?>">
                                        <i class="<?= $uri->getSegment(1) == 'user' ? 'fas' : 'fas'; ?> fa-users nav-icon <?= $uri->getSegment(1) == 'user' ? 'text-primary' : ''; ?>"></i>
                                        <p>User</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('role'); ?>" class="nav-link <?= ($uri->getSegment(1) == 'role') ? 'active' : '' ?>">
                                        <i class="<?= $uri->getSegment(1) == 'role' ? 'fas' : 'fas'; ?> fa-user-tag nav-icon <?= $uri->getSegment(1) == 'role' ? 'text-primary' : ''; ?>"></i>
                                        <p>Role</p>
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

        <div class="content-wrapper">
            <!-- Content -->
            <?= $this->renderSection('content'); ?>

        </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Siap untuk Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" di bawah ini jika Anda yakin untuk mengakhiri sesi Anda saat ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form action="<?= base_url('auth/logout'); ?>" method="post">
                        <button type="submit" class="btn btn-sm btn-outline-danger">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url('adminlte/'); ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('adminlte/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?= base_url('adminlte/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('adminlte/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('adminlte/'); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('adminlte/'); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url('adminlte/'); ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('adminlte/'); ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url('adminlte/'); ?>plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url('adminlte/'); ?>plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url('adminlte/'); ?>plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url('adminlte/'); ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('adminlte/'); ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url('adminlte/'); ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('adminlte/'); ?>dist/js/adminlte.min.js"></script>

    <!-- Select2 -->
    <script src="<?= base_url('adminlte/'); ?>plugins/select2/js/select2.full.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?= base_url('adminlte/'); ?>plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="<?= base_url('adminlte/'); ?>plugins/toastr/toastr.min.js"></script>

    <!-- DataTables -->
    <script>
        $(function() {
            function DataTable(selectors) {
                selectors.forEach(function(selector) {
                    $(selector).DataTable({
                        "paging": true,
                        "lengthChange": true,
                        "searching": true,
                        "ordering": true,
                        "info": true,
                        "autoWidth": false,
                        "responsive": true,
                        // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                    }).buttons().container().appendTo($(selector + '_wrapper .col-md-6:eq(0)'));
                });
            }

            DataTable(["#TabelData", "#TabelData1", "#TabelData2", "#TabelData3"]);
        });
    </script>

    <!-- Select2 -->
    <script>
        $(function() {
            $('.select2').select2()
        })
    </script>

    <!-- Sweetalert 2 -->
    <script>
        $(document).ready(function() {
            <?php if (session()->getFlashdata('success')) { ?>
                const SuccessToast = Swal.mixin({
                    toast: true,
                    position: "top",
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                });
                SuccessToast.fire({
                    icon: "success",
                    title: "<?= session()->getFlashdata('success') ?>"
                });
            <?php } ?>

            <?php if (session()->getFlashdata('error')) { ?>
                const ErrorToast = Swal.mixin({
                    toast: true,
                    position: "top",
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                });
                ErrorToast.fire({
                    icon: "error",
                    title: "<?= session()->getFlashdata('error') ?>"
                });
            <?php } ?>

        });
    </script>
</body>

</html>