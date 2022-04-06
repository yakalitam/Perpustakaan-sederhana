<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Tambah Data Buku</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="<?php echo base_url('koleksi/insert') ?>" method="post" enctype="multipart/form-data">
                                <div class="mb-3 row">
                                    <label for="judul" class="col-sm-1 col-form-label">Judul</label>
                                    <div class="col-sm-11">
                                        <input type="text" name="judul" class="form-control" id="judul">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="penulis" class="col-sm-1 col-form-label">Penulis</label>
                                    <div class="col-sm-11">
                                        <input type="text" name="penulis" class="form-control" id="penulis">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="penerbit" class="col-sm-1 col-form-label">Penerbit</label>
                                    <div class="col-sm-11">
                                        <input type="text" name="penerbit" class="form-control" id="penerbit">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="kategori" class="col-sm-1 col-form-label">Kategori</label>
                                    <div class="col-sm-11">
                                        <input type="text" name="kategori" class="form-control" id="kategori">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="cover" class="col-sm-1 col-form-label">Cover</label>
                                    <div class="col-sm-11"><input type="file" name="cover" class="form-control" id="cover">
                                    </div>
                                </div>
                                <button style="width: 100px; height: 40px;" type="submit" class="btn btn-primary">Submit</button>
                                <a style="width: 100px; height: 40px;" class="btn btn-sm btn-danger" href="<?php echo base_url('koleksi') ?>"> Back
                                </a>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>