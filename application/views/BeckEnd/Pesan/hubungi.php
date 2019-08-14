<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">

            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

                <ol class="breadcrumb">
                    <li><a href="<?= base_url('assets/BackEnd/') ?>#">Dashboard</a></li>

                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">

                    <?php echo $this->session->flashdata('pesan') ?>

                    <table class="table table-striped table-advance table-hover">
                        <tr>
                            <th>NO</th>
                            <th><i class="fa fa-bookmark"> NAMA</th>
                            <th><i class="fa fa-bullhorn"></i> EMAIL</th>
                            <th><i class="fa fa-question-circle"></i> PESAN</th>
                            <th colspan="2"><i class=" fa fa-edit"></i> AKSI</th>
                        </tr>

                        <?php $no = 1;
                        foreach ($hubungi as $hub) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $hub->nama ?></td>
                            <td><?php echo $hub->email ?></td>
                            <td><?php echo $hub->pesan ?></td>
                            <td width="20px">
                                <?php echo anchor('administrator/hubungi_kami/kirim_email/' . $hub->id_hubungi, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?>
                            </td>
                            <td width="20px">
                                <?php echo anchor('admin/pesan/delete/' . $hub->id_hubungi, '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>