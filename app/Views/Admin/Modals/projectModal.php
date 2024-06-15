<!-- Modal Tambah -->
<div class="modal fade" id="AddProjecModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="AddUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AddUserModalLabel">Tambah Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('/user/add'); ?>" method="post" enctype="multipart/form-data" autocomplete="off">
                <?= csrf_field() ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name_project">Nama Project: </label>
                        <input name="name_project" type="text" class="form-control form-control-sm" id="nama" value="<?= old('name_project') ?>">
                    </div>
                    <div class="form-group">
                        <label for="foto">Upload Image:</label>
                        <input name="foto" type="file" class="form-control-file" id="foto">
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