<?= $this->extend('layout/HomeTemplate'); ?>

<?= $this->section('content'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Website Alat Tulis Kantor</h5>

                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's
                            content.
                        </p>

                        <a href="#" class="card-link">Selengkapnya</a>
                        <a href="#" class="card-link">Beli</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Website Persediaan Barang</h5>

                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's
                            content.
                        </p>

                        <a href="#" class="card-link">Selengkapnya</a>
                        <a href="#" class="card-link">Beli</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>