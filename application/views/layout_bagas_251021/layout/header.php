<style>
    .navbar-default .navbar-nav>li>a>span.data-hover {
        color: black !important;
    }

    .search {
        padding: 3px 8px;
        background: rgba(0, 0, 0, 0);
        border: 1px solid #dbdbdb;
        outline: none;
        width: 155px;
        border-radius: 10px;
        position: absolute;
        margin-left: 0px;
        margin-top: 22px;
    }

    .button {
        position: relative;
        padding: 6px 15px;
        left: -8px;
        border: 0px solid #fa6501;
        /* background-color: #fa6501; */
        color: #fa6501;
        position: absolute;
        margin-left: 140px;
        border-radius: 10px;
        margin-top: 20px;
        background: transparent;
    }

    .navbar-default .navbar-nav>li>a>span.layanan::before {
        position: absolute;
        background: #056cda;
        color: #fff;
        right: 100%;
        width: 130px;
        margin: -62px 10px;
        padding: 62px 10px;
        content: attr(data-hover);
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        transition: all 0.3s ease-in-out 0s;
        _webkit-transition: all 0.3s ease-in-out 0s;
        _moz-transition: all 0.3s ease-in-out 0s;
    }

    .navbar-default .navbar-nav>li>a>span.kami::before {
        position: absolute;
        background: #056cda;
        color: #fff;
        right: 100%;
        width: 100px;
        margin: -62px 10px;
        padding: 62px 10px;
        content: attr(data-hover);
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        transition: all 0.3s ease-in-out 0s;
        _webkit-transition: all 0.3s ease-in-out 0s;
        _moz-transition: all 0.3s ease-in-out 0s;
    }

    /* zoom 175% */
    @media only screen and (min-width: 768px) and (max-width: 989px) {
        .navbar-default .navbar-nav>li>a>span.home::before {
            width: 35px;
        }

        .navbar-default .navbar-nav>li>a>span.layanan::before {
            width: 86px;
        }

        .navbar-default .navbar-nav>li>a>span.destinasi::before {
            width: 50px;
        }

        .navbar-default .navbar-nav>li>a>span.karir::before {
            width: 35px;
        }

        .navbar-default .navbar-nav>li>a>span.kami::before {
            width: 72px;
        }

        .search {
            width: 132px;
            margin-top: 30px;
            padding: 0px 8px;
        }

        .button {
            margin-left: 121px;
            margin-top: 24px
        }

        #logo img {
            width: 85%;
        }

        .top_slider .flex_caption1 {
            top: 20%;
        }

        .flex-control-nav {
            top: 326px;
        }
    }

    /* zoom 200% */
    @media only screen and (min-width:360px) and (max-width:780px) {

        .navbar-default .navbar-nav>li>a>span.home::before {
            width: 29px;
        }

        .navbar-default .navbar-nav>li>a>span.layanan::before {
            width: 70px;
        }

        .navbar-default .navbar-nav>li>a>span.destinasi::before {
            width: 41px;
        }

        .navbar-default .navbar-nav>li>a>span.karir::before {
            width: 29px;
        }

        .navbar-default .navbar-nav>li>a>span.kami::before {
            width: 56px;
        }

        .search {
            width: 111px;
            height: 19px;
            margin-top: 33px
        }

        .button {
            margin-left: 105px;
            margin-top: 28px
        }

        .flex-control-nav {
            top: 226px;
        }
    }

    @media (max-width: 767px) {
        #logo img {
            width: 37%;
            height: auto;
        }

        .search {
            padding: 8px 15px;
            background: rgba(0, 0, 0, 0);
            border: 1px solid #dbdbdb;
            outline: none;
            width: 198px;
            border-radius: 10px;
            margin-left: 20px;
            margin-top: -44px;
        }

        .button {
            padding: 6px 15px;
            left: 297px;
            color: #ffffff;
            position: absolute;
            margin-left: -90px;
            border-radius: 10px;
            margin-top: -40px;
            border: 0px solid #ffffff;
            background-color: transparent;
        }

        .cari {
            margin-top: 55px;
        }

    }


    @media (max-width: 660px) {
        #logo img {
            width: 37%;
            height: auto;
        }
    }

    @media (max-width: 500px) {
        #logo img {
            width: 37%;
            height: auto;
        }
    }
</style>





<header id="header">


    <div id="menu-bar" style="background:rgba(220,220,220, 0.4);height: 70px;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div id="logo">
                        <!-- <h1><a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>assets/images/logo.png"/></a></h1> -->
                        <h1>
                            <a href="<?= base_url(); ?>"> <img src="<?= base_url(); ?>assets/images/Logo Star Cargo png 1 (1).png" /></a>
                        </h1>
                    </div>
                </div>
                <!-- Navigation
                    ================================================== -->
                <div class="col-lg-8 col-sm-8 navbar navbar-default navbar-static-top container" role="navigation">
                    <!--  <div class="container">-->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="background: #fa6501;">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse justify-content-left">
                        <!-- <?= $menu; ?> -->
                        <?php
                        $hal = $this->uri->segment(1);
                        ?>
                        <ul class="nav navbar-nav">
                            <?php foreach ($this->db->query("SELECT * FROM tbl_navigation WHERE parent = 0 AND status = 1")->result() as $key) { ?>
                                <li class="nav-item <?php
                                                    if ($key->slug != "") {
                                                        if ($this->uri->segment(1) == $key->slug) {
                                                            echo "active";
                                                        }
                                                    } else {
                                                        if ($this->uri->segment(1) == "") {
                                                            echo "active";
                                                        }
                                                    }
                                                    ?> submenu dropdown"><a class="nav-link" href="<?= ($key->title != 'Home') ? base_url() . strtolower($key->slug) : base_url() ?>" onclick="window.location.href='<?= base_url() . $key->slug; ?>/';"><?= $key->title ?></a>

                                    <ul class="dropdown-menu">
                                        <? foreach ($this->db->query("SELECT * FROM tbl_navigation where parent='$key->id' and status='1' order by sort")->result() as $c) {
                                            echo "<li class='nav-item'><a class='nav-link' href='" . base_url() . "$key->slug/$c->slug'>$c->title</a></li>";
                                        } ?>
                                    </ul>

                                </li>
                            <?php } ?>
                            <!-- <li><a href="#"><span class="data-hover perusahaan" data-hover="Perusahaan">Perusahaan</span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= base_url('pages/index/tentang-kami'); ?>">Tentang Perusahaan</a></li>
                                    <li><a href="<?= base_url('kemitraan'); ?>">Mitra Kami</a></li>
                                    <li><a href="<?= base_url('syarat'); ?>">Syarat & Ketentuan</a></li>
                                </ul>
                            </li>
                            <li><a class="<?= ($hal == 'layanan') ? 'active' : ''; ?>" href="<?= base_url('layanan'); ?>"><span class="data-hover layanan" data-hover="Produk & Layanan">Produk & Layanan</span></a>
                            </li>
                            <li><a class="<?= ($hal == 'destination') ? 'active' : ''; ?>" href="<?= base_url('destination'); ?>"><span class="data-hover destinasi" data-hover="DESTINASI">Destinasi</span></a>
                            </li>
                            <li class="<?= ($hal == 'karir') ? 'active' : ''; ?>"><a href="<?= base_url('karir'); ?>"><span class="data-hover karir" data-hover="KARIR">Karir</span></a>
                            </li>
                            <li class="<?= ($hal == 'kontak') ? 'active' : ''; ?>"><a href="<?= base_url('kontak'); ?>"><span class="data-hover kami" data-hover="Hubungi Kami">Hubungi Kami</span></a>
                            </li> -->
                            <li class="cari">
                                <form style="float: right; position: absolute;">
                                    <span><button class="button" type="button"><i class="fa fa-search"></i></button></span>
                                    <span><input class="search" type="text" placeholder="Search Keyword" style="color: black;"></span>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- <div class="col-md-1">
                    <form style="float: right; position: absolute;">
                        <button class="button" type="button"><i class="fa fa-search"></i></button>
                        <input class="search" type="text" placeholder="Search Keyword" required>
                    </form>
                </div> -->
            </div>
        </div>
        <!--/.container -->
    </div>
    <!--/#menu-bar -->


    <?php if ($this->router->fetch_class() != "welcome") {
        echo '
        </header>';
    }
    ?>

    <!--start wrapper-->