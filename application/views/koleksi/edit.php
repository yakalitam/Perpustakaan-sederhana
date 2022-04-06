<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Edit Data Buku</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="<?php echo base_url('koleksi/update/' . $detail['id_buku']) ?>" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="judul" class="form-label">Nama</label>
                                    <input type="text" name="judul" class="form-control" id="judul" value="<?php echo $detail['judul'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="penulis" class="form-label">Penulis</label>
                                    <input type="text" name="penulis" class="form-control" id="penulis" value="<?php echo $detail['penulis'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="penerbit" class="form-label">Penerbit</label>
                                    <input type="text" name="penerbit" class="form-control" id="penerbit" value="<?php echo $detail['penerbit'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="kategori" class="form-label">Kategori</label>
                                    <input type="text" name="kategori" class="form-control" id="kategori" value="<?php echo $detail['kategori'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="cover" class="form-label">Cover</label>
                                    <input type="file" name="cover" class="form-control" id="cover">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
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