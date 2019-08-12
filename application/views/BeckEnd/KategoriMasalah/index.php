<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Data <?= $title ?></h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                
                <ol class="breadcrumb">
                    <li><a href="<?= base_url('assets/BackEnd/') ?>#">Dashboard</a></li>
                    <li class="active"><?= $title ?></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="flash-data" data-flash = "<?= $this->session->flashdata('message') ?>"></div>
                    <a href="#" id="modaltambah" data-toggle="modal" data-target="#responsive-modal"><h3 class="box-title m-b-30">Tambah Data</h3></a>
                    
                    <div class="table-responsive">
                        <table id="myTable" class="table table-striped table color-bordered-table danger-bordered-table">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Nama Kategori</th>
                                    <th class="text-center">Jenis Perkara</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i =1; foreach ($KategoriMasalah as $km) : ?>
                                    <tr>
                                        <td class="text-center"><?= $i++ ?></td>
                                        <td class="text-center"><?= $km['NamaKategori'] ?></td>
                                        <td class="text-center"><?= $km['JenisPerkara'] ?></td>
                                        <td class="text-center">
                                            <a href="#" data-toggle="modal" id="modalubah" data-target="#responsive-modal" data-id="<?= $km['IdKategori']; ?>" >
                                                <span class="circle circle-sm bg-primary di"><i class="ti-pencil-alt"></i></span>
                                            </a>
                                            <a href="#" id="btndelete" data-id="<?= $km['IdKategori']; ?>" >
                                                <span class="circle circle-sm bg-danger di"><i class="ti-trash"></i></span>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>        
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmid">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Tambah Data <?= $title; ?></h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" class="form-control" id="IdKategori" name="IdKategori">
                    
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Nama Kategori:</label>
                        <input type="text" class="form-control" id="NamaKategori" name="NamaKategori">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Jenis Perkara:</label>
                        <input type="text" class="form-control" id="JenisPerkara" name="JenisPerkara">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Batal</button>
                    <button type="submit" name="submit" id="submit" class="btn btn-danger waves-effect waves-light">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>