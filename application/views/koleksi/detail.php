<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a href="<?php echo base_url('/dashboard') ?>">
            <img src="<?php echo base_url('assets/images/logo/logo_ts.jpg') ?>" alt="" width="100px" height="40px" class="d-inline-block align-text-top">
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
            <div class="card">
                <div class="card-header">
                    <h1>Detail Buku</h1>
                </div>

                <div class="card-body">
                    <div class="row">

                        <div class="col-8">
                            <h4 class="card-title">Judul <?php echo $detail['judul'] ?></h4>
                            <h6>Penulis :<?php echo $detail['penulis'] ?></h6>
                            <h6>Penerbit :<?php echo $detail['penerbit'] ?></h6>
                            <h6>Kategori : <?php echo $detail['kategori'] ?></h6>
                            <a class=" btn btn-sm btn-danger" href="<?php echo base_url('koleksi') ?>"> Kembali
                            </a>
                        </div>
                        <div class="col-4">
                            <img style="width:150px" src="<?php echo base_url('assets/images/cover/' . $detail['cover']) ?>" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>