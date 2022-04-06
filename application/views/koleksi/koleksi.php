<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a href="<?php echo base_url('/dashboard') ?>">
            <img src="assets/images/logo/logo_ts.jpg" alt="" width="100px" height="40px" class="d-inline-block align-text-top">
        </a>
        <!-- <a class="navbar-brand" href="#">PERPUS TS</a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" aria-current="page" href="<?php echo base_url('/dashboard') ?>">Dashboard</a>
                <a class="nav-link" href="<?php echo base_url('/user') ?>">User</a>
                <a class="nav-link active" href="<?php echo base_url('/koleksi') ?>">Koleksi</a>
                <a class="nav-link" href="<?php echo base_url('/about') ?>">About</a>
                <a class="nav-link" href="<?php echo base_url('/Login/logout') ?>">Logout</a>
            </div>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Tabel Data Buku</h1>
            <a class="btn btn-sm btn-success" href="<?php echo base_url('koleksi/add') ?>"> + Tambah Data
            </a>
            <table class="table table align-middle">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php
                $count = 1;
                foreach ($koleksi_buku as $i) : {
                ?>
                        <tr>
                            <th><?php echo $count++; ?></th>
                            <th><?php echo $i->judul ?></th>
                            <th style="width:'150px';" class="">
                                <a class="btn btn-sm btn-primary" href="koleksi/detail/<?php echo $i->id_buku; ?>"> DETAIL</a>
                                <a class="btn btn-sm btn-warning" href="koleksi/edit/<?php echo $i->id_buku; ?>">EDIT</a>
                                <a class="btn btn-sm btn-danger" onclick="konfirmasi(<?php echo $i->id_buku; ?>)">DELETE</a>
                            </th>
                        </tr>
                <?php }
                endforeach; ?>
            </table>
        </div>
    </div>
</div>

<script>
    function konfirmasi(id) {
        let text = "Apakah anda yakin akan menghapus data?";
        if (confirm(text) == true) {
            window.location.href = 'koleksi/delete/' + id;
        }
    }
</script>