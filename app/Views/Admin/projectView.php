<?= $this->extend('layout/AdminTemplate'); ?>

<?= $this->section('content'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title">Tabel My Project</h3>
                    </div>
                    <div class="card-body">
                        <table id="TabelData" class="table table-sm table-bordered table-striped">
                            <div class="mb-3">
                                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#AddProjecModal">
                                    <i class="fas fa-plus"></i>
                                    Tambah
                                </button>
                            </div>
                            <thead>
                                <tr>
                                    <th>No. </th>
                                    <th>User</th>
                                    <th>Project Name</th>
                                    <th>Image Project</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($view_project as $data) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $data['user_id'] ?></td>
                                        <td><?= $data['name_project']; ?></td>
                                        <td><?= $data['image_project']; ?></td>
                                        <td><?= $data['created_at']; ?></td>
                                        <td><?= $data['updated_at']; ?></td>
                                        <td class="align-middle">
                                            <button class="btn btn-outline-secondary btn-sm mt-1 mb-1" data-toggle="modal" data-target="#DetailProjectsModal<?= $data['id']; ?>">
                                                <i class="fas fa-search"></i>
                                            </button>
                                            <button class="btn btn-outline-info btn-sm mt-1 mb-1" data-toggle="modal" data-target="#UpdateProjectsModal<?= $data['id']; ?>">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm mt-1 mb-1" data-toggle="modal" data-target="#DeleteProjectsModal<?= $data['id']; ?>">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <?= $this->include('Admin/Modals/projectModal', ['data' => $data]); ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>