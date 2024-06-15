<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NairatkoDEV | Home</title>

    <!-- Google Font: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('adminlte/plugins/fontawesome-free/css/all.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('adminlte/dist/css/adminlte.min.css'); ?>">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url('adminlte/plugins/sweetalert2/sweetalert2.min.css'); ?>">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url('adminlte/plugins/toastr/toastr.min.css'); ?>">
</head>

<body class="hold-transition layout-top-nav layout-navbar-fixed">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand-md navbar-white navbar-light border-bottom-0 shadow">
            <div class="container-fluid">
                <a href="<?= base_url('/'); ?>" class="navbar-brand">
                    <!-- <img src="<?= base_url('images/logo.png'); ?>" class="brand-image"> -->
                    <span class="brand-text"><b>Habib Oktarian</b></span>
                </a>
                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-dark">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">About Me</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">My Project</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <div class="content-wrapper">
            <!-- Content -->
            <?= $this->renderSection('content'); ?>
        </div>

        <footer class="main-footer border-top-0 elevation-5">
            <div class="float-right d-none d-sm-inline">
                Version 0.0.1
            </div>
            <strong>Copyright &copy; 2024 - <?= date('Y'); ?> <a href="https://habiboktarian.com">Habib Oktarian</a>.</strong> All rights reserved.
        </footer>
    </div>


    <!-- jQuery -->
    <script src="<?= base_url('adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('adminlte/dist/js/adminlte.min.js'); ?>"></script>

    <!-- Select2 -->
    <script src="<?= base_url('adminlte/'); ?>plugins/select2/js/select2.full.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?= base_url('adminlte/'); ?>plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="<?= base_url('adminlte/'); ?>plugins/toastr/toastr.min.js"></script>

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