<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Tambha Pengacara</h1>
                        </div>
                        <form class="user" action="<?= base_url('login/daftar'); ?>" method="post">
                            <div class="form-group">
                                <input type="text" name="id" placeholder="ID" value="<?= set_value('id'); ?>">
                                <small class="text-danger pl-3">*</small><?= form_error('id', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Nama" value="<?= set_value('name'); ?>">
                                <small class="text-danger pl-3">*</small><?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" placeholder="Alamat Email" value="<?= set_value('email'); ?>">
                                <small class="text-danger pl-3">*</small><?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" name="jk" placeholder="jk" value="<?= set_value('jk'); ?>">
                                <small class="text-danger pl-3">*</small><?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" placeholder="Nomor Telepon" value="<?= set_value('phone'); ?>">
                                <small class="text-danger pl-3">*</small><?= form_error('phone', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <input type="text" name="keterangan" placeholder="Keterangan" value="<?= set_value('keterangan'); ?>">
                            </div>

                            <div class="form-group">
                                <input type="text" name="s1" placeholder="Pendidikan S1" value="<?= set_value('s1'); ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" name="s2" placeholder="Pendidikan S2" value="<?= set_value('s2'); ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" name="s3" placeholder="Pendidikan S3" value="<?= set_value('s3'); ?>">
                            </div>

                            <div class="form-group">
                                <input type="text" name="pengalaman" placeholder="Pengalaman" value="<?= set_value('pengalaman'); ?>">
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" name="password1" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                    <small class="text-danger pl-3">*</small><?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" name="password2" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Ulangi Password">

                                </div>
                            </div>
                            <button type="submit">
                                Tambah Pengacara
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>