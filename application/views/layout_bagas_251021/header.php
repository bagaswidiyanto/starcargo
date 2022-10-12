<style>
    .navbar-default .navbar-nav>li>a>span.data-hover {
        color: black !important;
    }

    @media (max-width: 767px) {
        #logo img {
            width: 60%;
            height: auto;
        }
    }

    @media (max-width: 660px) {
        #logo img {
            width: 60%;
            height: auto;
        }
    }

    @media (max-width: 500px) {
        #logo img {
            width: 60%;
            height: auto;
        }
    }
</style>





<header id="header">
    <!-- Start header-top -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="hidden-xs col-lg-7 col-sm-5 top-info">
                    <span><i class="fa fa-phone"></i>Telp: <?= $website->phone; ?></span>
                    <!-- <span class="hidden-sm"><i class="fa fa-envelope"></i>Email: <?= $website->email; ?></span> -->
                </div>
                <div class="col-lg-5 col-sm-7 top-info clearfix">
                    <ul>
                        <?php foreach ($sosmed as $sos) {
                            echo '<li><a class="my-' . $sos->name . '" href="' . $sos->link . '"><i class="fa ' . $sos->icon . '"></i></a></li>';
                        }
                        ?>
                        <!--  <li><a class="my-facebook" href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a class="my-tweet" href=""><i class="fa fa-twitter"></i></a></li>
                          <li><a class="my-google" href=""><i class="fa fa-google-plus"></i></a></li> -->
                        <li>
                            <form class="search-bar" hidden="">
                                <label for="search" class="search-label">
                                    <button class="search-button"><i class="fa fa-search"></i></button>
                                    <!-- Fix the break-row-bug
                                    --><input type="text" id="search" class="search-input" />
                                </label>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--/.header-top -->

    <div id="menu-bar" style="background:rgba(220,220,220, 0.4);height: 70px;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div id="logo">
                        <!-- <h1><a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>assets/images/logo.png"/></a></h1> -->
                        <h1>
                            <a href="<?= base_url(); ?>"> <img src="https://starcargo.digitalindo.co.id/upload/slider/Logo_star.png" /></a>
                        </h1>
                    </div>
                </div>
                <!-- Navigation
                    ================================================== -->
                <div class="col-lg-9 col-sm-9 navbar navbar-default navbar-static-top container" role="navigation">
                    <!--  <div class="container">-->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        <?= $menu; ?>
                        <!-- <ul class="nav navbar-nav">
                                <li class="active"><a href="index.html"><span class="data-hover"data-hover="home">home</span></a>
                                </li>

                                <li><a href="about.html"><span class="data-hover" data-hover="TENTANG KAMI">TENTANG KAMI</span></a>
                                </li>

                                <li><a href="services.html" ><span class="data-hover" data-hover="LAYANAN">LAYANAN</span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="services.html">Lorem Ipsum</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="services.html">Lorem Ipsum 1</a></li>
                                                <li><a href="services.html">Lorem Ipsum 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="services.html">Lorem Ipsum</a></li>
                                        <li><a href="services.html">Lorem Ipsum</a></li>
                                        <li><a href="services.html">Lorem Ipsum</a></li>
                                    </ul>
                                </li>


								<li ><a href="berita.html"><span class="data-hover" data-hover="BERITA">BERITA</span></a>
                                </li>
                                
                                <li ><a href="destination.html"><span class="data-hover" data-hover="DESTINASI">DESTINASI</span></a>
                                </li>

                                 <li><a href="mitra.html"><span class="data-hover" data-hover="KEMITRAAN">KEMITRAAN</span></a>
                                </li>

                                 <li><a href="syarat.html"><span class="data-hover" data-hover="CABANG">CABANG</span></a>
                                </li>
                                
                                <li><a href="kontak.html"><span class="data-hover" data-hover="KONTAK">KONTAK</span></a>
                                </li>
                            </ul> -->
                    </div>
                </div>
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