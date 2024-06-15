<?= $this->extend('layout/AdminTemplate'); ?>

<?= $this->section('content'); ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title">Tabel User</h3>
                    </div>
                    <div class="card-body">
                        <table id="TabelData" class="table table-sm table-bordered table-striped">
                            <div class="mb-3">
                                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#AddUserModal">
                                    <i class="fas fa-plus"></i>
                                    Tambah
                                </button>
                            </div>

                            <?php if (session()->getFlashdata('errors')) : ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                                        <li><?= esc($error) ?></li>
                                    <?php endforeach; ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php endif; ?>

                            <thead>
                                <tr class="text-center">
                                    <th class="align-middle">No.</th>
                                    <th class="align-middle">Nama</th>
                                    <th class="align-middle">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($view_user as $data) : ?>
                                    <tr class="text-center">
                                        <td class="align-middle"><?= $no++; ?></td>
                                        <td class="align-middle"><?= $data['nama']; ?></td>
                                        <td class="align-middle">
                                            <button class="btn btn-outline-secondary btn-sm mt-1 mb-1" data-toggle="modal" data-target="#DetailUserModal<?= $data['id']; ?>">
                                                <i class="fas fa-search"></i>
                                            </button>
                                            <button class="btn btn-outline-info btn-sm mt-1 mb-1" data-toggle="modal" data-target="#UpdateUserModal<?= $data['id']; ?>">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm mt-1 mb-1" data-toggle="modal" data-target="#DeleteUserModal<?= $data['id']; ?>">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <?= $this->include('Admin/Modals/userModal', ['data' => $data]); ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>