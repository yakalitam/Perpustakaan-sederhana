<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Edit Data User</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="<?php echo base_url('user/update/' . $list['id']) ?>" method="post" enctype="multipart/form-data">
                                <h1 for="id"><?php echo $list['id'] ?></h1>
                                <div class="mb-3 row">
                                    <label for="nama" class="col-sm-1 col-form-label">Nama</label>
                                    <div class="col-sm-11">
                                        <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $list['nama'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="alamat" class="col-sm-1 col-form-label">Alamat</label>
                                    <div class="col-sm-11">
                                        <input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $list['alamat'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="telepon" class="col-sm-1 col-form-label">Telepon</label>
                                    <div class="col-sm-11">
                                        <input type="text" name="telepon" class="form-control" id="telepon" value="<?php echo $list['telepon'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="email" class="col-sm-1 col-form-label">Email</label>
                                    <div class="col-sm-11">
                                        <input type="text" name="email" class="form-control" id="email" value="<?php echo $list['email'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="Password" class="col-sm-1 col-form-label">Password</label>
                                    <div class="col-sm-11">
                                        <input type="text" name="password" class="form-control" id="password" value="<?php echo md5($list['password']) ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="profil" class="col-sm-1 col-form-label">Profil</label>
                                    <div class="col-sm-11"><input type="file" name="profil" class="form-control" id="profil">
                                    </div>
                                </div>
                                <button style="width: 100px; height: 40px;" type="submit" class="btn btn-primary">Submit</button>
                                <a style="width: 100px; height: 40px;" class="btn btn-sm btn-danger" href="<?php echo base_url('user') ?>"> Back
                                </a>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>