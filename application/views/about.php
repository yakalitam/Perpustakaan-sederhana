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
                <a class="nav-link" href="<?php echo base_url('/koleksi') ?>">Koleksi</a>
                <a class="nav-link active" href="<?php echo base_url('/about') ?>">About</a>
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
                    <h1>HELLO <?= $nama; ?>!</h1>
                </div>
                <div class="card-body">
                    <h3 class="card-title">HOBI :</h3>
                    <ul>
                        <?php foreach ($hobi as $i) {
                        ?>
                            <li> <?php echo $i ?></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- <H1>HELLO <?= $nama; ?>!</H1> -->
    <!-- <H2>Alamat : <?= $alamat; ?></H2>
		<H2>Email : <?= $email; ?></H2>
		<H2>Hobi :</H2> -->

</div>