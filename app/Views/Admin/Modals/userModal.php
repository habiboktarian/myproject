<!-- Modal Tambah -->
<div class="modal fade" id="AddUserModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="AddUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AddUserModalLabel">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('/user/add'); ?>" method="post" enctype="multipart/form-data" autocomplete="off">
                <?= csrf_field() ?>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="nama">Nama: </label>
                                <input name="nama" type="text" class="form-control form-control-sm" id="nama" value="<?= old('nama') ?>">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="email">Email: </label>
                                <input name="email" type="email" class="form-control form-control-sm" id="email" value="<?= old('email') ?>" autofocus>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="nomor_telepon">Nomor Telepon: </label>
                                <input name="nomor_telepon" type="text" class="form-control form-control-sm" id="nomor_telepon" value="<?= old('nomor_telepon') ?>">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="alamat">Alamat: </label>
                                <textarea name="alamat" class="form-control form-control-sm" id="alamat"><?= old('alamat') ?></textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="username">Username: </label>
                                <input name="username" type="text" class="form-control form-control-sm" id="username" value="<?= old('username') ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input name="password" type="password" class="form-control form-control-sm" id="password">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="role_id">Role:</label>
                                <select name="role_id" class="form-control form-control-sm select2" id="role_id">
                                    <?php foreach ($view_role as $role) : ?>
                                        <option value="<?= $role['id'] ?>" <?= old('role_id') == $role['id'] ? 'selected' : ''; ?>><?= $role['role_name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="is_active">Status:</label>
                                <select name="is_active" class="form-control form-control-sm select2" id="is_active">
                                    <option value="1" <?= old('is_active') == 1 ? 'selected' : ''; ?>>Aktif</option>
                                    <option value="2" <?= old('is_active') == 2 ? 'selected' : ''; ?>>Tidak Aktif</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="foto">Upload Foto:</label>
                                <input name="foto" type="file" class="form-control-file" id="foto">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-primary btn-sm">
                        <i class="fas fa-save"></i>
                        Tambah
                    </button>
                    <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">
                        <i class="fas fa-sign-out-alt"></i>
                        Close
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Detail -->
<?php foreach ($view_user as $data) : ?>
    <div class="modal fade" id="DetailUserModal<?= $data['id']; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="DetailUserModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title " id="DetailUserModalLabel">Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">

                                    <!-- Profile Image -->
                                    <div class="card card-primary card-outline">
                                        <div class="card-body box-profile">
                                            <div class="text-center">
                                                <?php if ($data['foto']) : ?>
                                                    <img class="profile-user-img img-fluid img-circle" src="<?= base_url('uploads/images/' . $data['foto']); ?>" alt="User profile picture">
                                                <?php else : ?>
                                                    <p>Foto tidak tersedia</p>
                                                <?php endif; ?>
                                            </div>

                                            <h3 class="profile-username text-center"><?= $data['nama']; ?></h3>

                                            <p class="text-muted text-center">Fullstack Developer</p>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header p-2">
                                            <ul class="nav nav-pills">
                                                <li class="nav-item"><a class="nav-link active" href="#details" data-toggle="tab">Details</a></li>
                                                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                                            </ul>
                                        </div><!-- /.card-header -->
                                        <div class="card-body">
                                            <div class="tab-content">
                                                <!-- /.tab-pane -->
                                                <div class="active tab-pane" id="details">
                                                    <div class=" row">
                                                        <label class="col-5">Nama</label>
                                                        <div class="col-7">
                                                            <span>: <?= $data['nama']; ?></span>
                                                        </div>
                                                        <label class="col-5">Username</label>
                                                        <div class="col-7">
                                                            <span>: <?= $data['username']; ?></span>
                                                        </div>
                                                        <label class="col-5">Email</label>
                                                        <div class="col-7">
                                                            <span>: <?= $data['email']; ?></span>
                                                        </div>
                                                        <label class="col-5">Alamat</label>
                                                        <div class="col-7">
                                                            <span>: <?= $data['alamat']; ?></span>
                                                        </div>
                                                        <label class="col-5">Telepon</label>
                                                        <div class="col-7">
                                                            <span>: <?= $data['nomor_telepon']; ?></span>
                                                        </div>
                                                    </div>


                                                </div>
                                                <!-- /.tab-pane -->

                                                <div class="tab-pane" id="settings">
                                                    <form class="form-horizontal">
                                                        <div class=" row">
                                                            <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="inputName" placeholder="Nama Lengkap">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="inputName2" placeholder="Name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                                                            <div class="col-sm-10">
                                                                <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="offset-sm-2 col-sm-10">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="offset-sm-2 col-sm-10">
                                                                <button type="submit" class="btn btn-danger">Submit</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- /.tab-pane -->
                                            </div>
                                            <!-- /.tab-content -->
                                        </div><!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>
                    <!-- /.content -->
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Modal Update -->
<?php foreach ($view_user as $data) : ?>
    <div class="modal fade" id="UpdateUserModal<?= $data['id']; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="DeleteUserModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DeleteUserModalLabel">Update User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('/user/update/' . $data['id']); ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="nama">Nama: </label>
                                    <input name="nama" type="text" class="form-control form-control-sm" id="nama" value="<?= $data['nama']; ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="email">Email: </label>
                                    <input name="email" type="email" class="form-control form-control-sm" id="email" value="<?= $data['email']; ?>" autofocus>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="username">Username: </label>
                                    <input name="username" type="text" class="form-control form-control-sm" id="username" value="<?= $data['username']; ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="password">Password:</label>
                                    <input name="password" type="password" class="form-control form-control-sm" id="password">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="alamat">Alamat: </label>
                                    <textarea name="alamat" class="form-control form-control-sm" id="alamat"><?= $data['alamat']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="nomor_telepon">Nomor Telepon: </label>
                                    <input name="nomor_telepon" type="text" class="form-control form-control-sm" id="nomor_telepon" value="<?= $data['nomor_telepon']; ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="role_id">Role:</label>
                                    <select name="role_id" class="form-control form-control-sm" id="role_id">
                                        <?php foreach ($view_role as $role) : ?>
                                            <option value="<?= $role['id'] ?>" <?= $data['role_id'] == $role['id'] ? 'selected' : ''; ?>><?= $role['role_name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="is_active">Status:</label>
                                    <select name="is_active" class="form-control form-control-sm" id="is_active">
                                        <option value="1" <?= $data['is_active'] == 1 ? 'selected' : ''; ?>>Aktif</option>
                                        <option value="2" <?= $data['is_active'] == 2 ? 'selected' : ''; ?>>Tidak Aktif</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="foto">Upload Foto:</label>
                                    <input name="foto" type="file" class="form-control-file" id="foto">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-primary btn-sm">
                            <i class="fas fa-edit"></i>
                            Update
                        </button>
                        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">
                            <i class="fas fa-sign-out-alt"></i>
                            Close
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Modal Delete -->
<?php foreach ($view_user as $data) : ?>
    <div class="modal fade" id="DeleteUserModal<?= $data['id']; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="DeleteUserModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DeleteUserModalLabel">Delete User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('user/delete/' . $data['id']); ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this user?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-danger btn-sm">
                            <i class="fas fa-trash-alt"></i>
                            Delete
                        </button>
                        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">
                            <i class="fas fa-sign-out-alt"></i>
                            Close
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>