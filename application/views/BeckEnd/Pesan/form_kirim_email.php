<body class="fix-header">






    <!-- row -->
    <div class="row">
        <!-- Left sidebar -->
        <div class="col-md-12">
            <div class="white-box">
                <div class="row">
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12 inbox-panel">
                        <div> <a href="#" class="btn btn-custom btn-block waves-effect waves-light">Compose</a>
                            <div class="list-group mail-list m-t-20"> <a href="inbox.html" class="list-group-item active">Inbox <span class="label label-rouded label-success pull-right">5</span></a> <a href="#" class="list-group-item ">Starred</a> <a href="#" class="list-group-item">Draft <span class="label label-rouded label-warning pull-right">15</span></a> <a href="#" class="list-group-item">Sent Mail</a> <a href="#" class="list-group-item">Trash <span class="label label-rouded label-default pull-right">55</span></a> </div>
                            <h3 class="panel-title m-t-40 m-b-0">Labels</h3>
                            <hr class="m-t-5">
                            <div class="list-group b-0 mail-list"> <a href="#" class="list-group-item"><span class="fa fa-circle text-info m-r-10"></span>Work</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-warning m-r-10"></span>Family</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-purple m-r-10"></span>Private</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-danger m-r-10"></span>Friends</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-success m-r-10"></span>Corporate</a> </div>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12 mail_listing">
                        <h3 class="box-title">Buat Pesan Balasan</h3>
                        <!--main content start-->
                        <section id="main-content">
                            <section class="wrapper">
                                <!-- page start-->
                                <div class="row mt">
                                    <div class="col-sm-3">
                                        <section class="panel">
                                            <div class="panel-body">
                                                <a href="mail_compose.html" class="btn btn-compose">
                                                    <i class="fa fa-pencil"></i> Compose Mail
                                                </a>
                                                <ul class="nav nav-pills nav-stacked mail-nav">
                                                    <li class="active"><a href="inbox.html"> <i class="fa fa-inbox"></i> Inbox <span class="label label-theme pull-right inbox-notification">3</span></a></li>
                                                    <li><a href="#"> <i class="fa fa-envelope-o"></i> Send Mail</a></li>
                                                    <li><a href="#"> <i class="fa fa-exclamation-circle"></i> Important</a></li>
                                                    <li><a href="#"> <i class="fa fa-file-text-o"></i> Drafts <span class="label label-info pull-right inbox-notification">8</span></a></a>
                                                    </li>
                                                    <li><a href="#"> <i class="fa fa-trash-o"></i> Trash</a></li>
                                                </ul>
                                            </div>
                                        </section>

                                    </div>
                                    <div class="col-sm-9">
                                        <section class="panel">
                                            <header class="panel-heading wht-bg">
                                                <h4 class="gen-case">
                                                    Compose Mail
                                                    <form action="#" class="pull-right mail-src-position">
                                                        <div class="input-append">
                                                            <input type="text" class="form-control " placeholder="Search Mail">
                                                        </div>
                                                    </form>
                                                </h4>
                                            </header>
                                            <div class="panel-body">
                                                <div class="compose-btn pull-right">
                                                    <button class="btn btn-theme btn-sm"><i class="fa fa-check"></i> Send</button>
                                                    <button class="btn btn-sm"><i class="fa fa-times"></i> Discard</button>
                                                    <button class="btn btn-sm">Draft</button>
                                                </div>
                                                <div class="compose-mail">
                                                    <?php foreach ($hubungi as $hub) : ?>
                                                    <form method="post" action="<?php echo base_url('administrator/hubungi_kami/kirim_email_aksi')  ?>">

                                                        <div class="form-group">
                                                            <label for="to" class="">To:</label>
                                                            <input type="hidden" name="id_hubungi" value="<?php echo $hub->id_hubungi ?>" tabindex="1" id="to" class="form-control">
                                                            <input type="text" name="email" class="form-control" value="<?php echo $hub->email  ?>">
                                                            <div class="compose-options">
                                                                <a onclick="$(this).hide(); $('#cc').parent().removeClass('hidden'); $('#cc').focus();" href="javascript:;">Cc</a>
                                                                <a onclick="$(this).hide(); $('#bcc').parent().removeClass('hidden'); $('#bcc').focus();" href="javascript:;">Bcc</a>
                                                            </div>
                                                        </div>
                                                        <div class="form-group hidden">
                                                            <label for="cc" class="">Cc:</label>
                                                            <input type="text" tabindex="2" id="cc" class="form-control">
                                                        </div>
                                                        <div class="form-group hidden">
                                                            <label for="bcc" class="">Bcc:</label>
                                                            <input type="text" tabindex="2" id="bcc" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="subject" class="">Subject:</label>
                                                            <input type="text" name="subject" tabindex="1" id="subject" class="form-control">
                                                        </div>
                                                        <div class="compose-editor">
                                                            <textarea class="wysihtml5 form-control" name="pesan" rows="9"></textarea>
                                                            <input type="file" class="default">
                                                        </div>
                                                        <br>
                                                        <div class="compose-btn">
                                                            <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-check"></i> Send</button>
                                                        </div>
                                                    </form>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                            <!-- /wrapper -->
                        </section>
                        <!-- /MAIN CONTENT -->
                        <hr>

                    </div>
                </div>
            </div>
        </div>
    </div>