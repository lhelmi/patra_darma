<!-- End Top Navigation -->
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav slimscrollsidebar">
        <div class="sidebar-head">
            <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
        </div>
        <ul class="nav" id="side-menu">
            <li class="user-pro">
                <a href="<?= base_url('assets/BackEnd/') ?>#" class="waves-effect"><img src="<?= base_url('assets/BackEnd/') ?>plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span class="hide-menu"> Steve Gection<span class="fa arrow"></span></span>
                </a>
                <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 0px;">
                    <li><a href="<?= base_url('assets/BackEnd/') ?>javascript:void(0)"><i class="ti-user"></i> <span class="hide-menu">My Profile</span></a></li>
                    <li><a href="<?= base_url('assets/BackEnd/') ?>javascript:void(0)"><i class="ti-wallet"></i> <span class="hide-menu">My Balance</span></a></li>
                    <li><a href="<?= base_url('assets/BackEnd/') ?>javascript:void(0)"><i class="ti-email"></i> <span class="hide-menu">Inbox</span></a></li>
                    <li><a href="<?= base_url('assets/BackEnd/') ?>javascript:void(0)"><i class="ti-settings"></i> <span class="hide-menu">Account Setting</span></a></li>
                    <li><a href="<?= base_url('assets/BackEnd/') ?>javascript:void(0)"><i class="fa fa-power-off"></i> <span class="hide-menu">Logout</span></a></li>
                </ul>
            </li>


            <li><a href="<?= base_url('assets/BackEnd/') ?>inbox.html" class="waves-effect"><i class="mdi mdi-apps fa-fw"></i> <span class="hide-menu">Apps<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?= base_url('assets/BackEnd/') ?>chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">Chat-message</span></a></li>
                    <li><a href="<?= base_url('assets/BackEnd/') ?>javascript:void(0)" class="waves-effect"><i class="ti-desktop fa-fw"></i><span class="hide-menu">Inbox</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li> <a href="<?= base_url('assets/BackEnd/') ?>inbox.html"><i class="ti-email fa-fw"></i><span class="hide-menu">Mail box</span></a></li>
                            <li> <a href="<?= base_url('assets/BackEnd/') ?>inbox-detail.html"><i class="ti-layout-media-left-alt fa-fw"></i><span class="hide-menu">Inbox detail</span></a></li>
                            <li> <a href="<?= base_url('assets/BackEnd/') ?>compose.html"><i class="ti-layout-media-center-alt fa-fw"></i><span class="hide-menu">Compose mail</span></a></li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url('assets/BackEnd/') ?>javascript:void(0)" class="waves-effect"><i class="ti-user fa-fw"></i><span class="hide-menu">Contacts</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li> <a href="<?= base_url('assets/BackEnd/') ?>contact.html"><i class="icon-people fa-fw"></i><span class="hide-menu">Contact1</span></a></li>
                            <li> <a href="<?= base_url('assets/BackEnd/') ?>contact2.html"><i class="icon-user-follow fa-fw"></i><span class="hide-menu">Contact2</span></a></li>
                            <li> <a href="<?= base_url('assets/BackEnd/') ?>contact-detail.html"><i class="icon-user-following fa-fw"></i><span class="hide-menu">Contact Detail</span></a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="devider"></li>

            <li><a href="<?= base_url('KategoriMasalah') ?>" class="waves-effect"><i class="mdi mdi-logout fa-fw"></i> <span class="hide-menu">Kategori Masalah</span></a></li>
            <li class="devider"></li>

            <li><a href="<?php echo base_url('administrator/hubungi_kami') ?>" class="waves-effect"><i class="mdi mdi-gmail fa-fw"></i> <span class="hide-menu">Pesan</span></a></li>
            
            <li><a href="<?= base_url('Pengacara') ?>" class="waves-effect"><i class="mdi mdi-tie fa-fw"></i> <span class="hide-menu">Pengacara</span></a></li>
            <li class="devider"></li>
        </ul>
    </div>
</div>

                    