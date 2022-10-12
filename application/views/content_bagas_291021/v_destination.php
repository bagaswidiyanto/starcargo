<style type="text/css">
    .ul {
        list-style: disc;
        margin-left: : 5px;
        list-style-position: inside;
        /*padding: 0;*/
    }

    .tabshadow {
        box-shadow: 0px 4px 40px rgba(0, 0, 0, 0.2);
        border-radius: 10px;
    }

    .tabshadow2 {
        box-shadow: 0px 4px 40px rgba(0, 0, 0, 0.2);

    }

    .icont:hover i {
        color: #000000;
    }

    .icont i {
        color: #FFFFFF;
    }

    @media screen and (max-width: 768px) {
        .three-tab {
            float: left !important;
            position: absolute !important;
            width: 100% !important;
            margin-top: 60px !important
        }
    }
</style>

<div class="three-tab">
    <div class="col-md-0" style="float:right">
        <ul class="nav" style=" border-color: #ebebeb; outline: none; background: linear-gradient(293.8deg, #033498 0%, #00C0FF 170.7%); color: #c9c4c4; margin: 0 0 -1px 0; border-bottom: none; border-radius: 0;">
            <li class="active"><a href="<?= base_url('tarif'); ?>" class="icont"><i class="fa fa-money"></i></a></li>
        </ul>
        <ul class="nav" style=" border-color: #ebebeb; outline: none; background: linear-gradient(293.8deg, #033498 0%, #00C0FF 170.7%); color: #c9c4c4; margin: 0 0 -1px 0; border-bottom: none; border-radius: 0;">
            <li class="active"><a href="<?= base_url('kiriman'); ?>" class="icont"><i class="fa fa-car "></i></a></li>
        </ul>
        <ul class="nav" style=" border-color: #ebebeb; outline: none; background: linear-gradient(293.8deg, #033498 0%, #00C0FF 170.7%); color: #c9c4c4; margin: 0 0 -1px 0; border-bottom: none; border-radius: 0;">
            <li class="active"><a href="<?= base_url('lokasi'); ?>" class="icont"><i class="fa fa-user "></i></a></li>
        </ul>
    </div>
</div>

<section class="parallax parallax-1">
    <div class="container">
        <!--<h2 class="center">Testimonials</h2>-->
        <div class="row">
            <div class="col-lg-12 col-sm-12 wow bounceIn ">

                <div class="heading-item">
                    <h4 style="margin-top: 150px; margin-bottom: -30px;">Destinasi </h4>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="content about">


    <div class="container">
        <div class="row sub_content">
            <div class="who">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInDown">
                        <!-- <h1 class="intro text-center ">Kantor Cabang Kami</h1> -->
                        <div class="dividerHeading">
                            <h2><img src="<?= base_url(); ?>assets/images/dgt/Group88.png" width="5px"><span> Jangkauan Kami</span></h2>
                        </div>
                        <p class="lead text-left"> Daerah-daerah yang kami layani di Seluruh Indonesia</p>
                        <img src="<?= base_url(); ?>assets/images/dgt/Peta_Indonesia.png" style="width: 100%;">
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <?php
                            // 1,4,7,10,13,14 || 2,5,8,11 || 3,6,9,12,15
                            $i = 1;
                            foreach ($this->db->query("SELECT * from tbl_destination WHERE id IN(1,4,7,10,13,14)  LIMIT 6 OFFSET " . ($i - 1))->result() as $glr) { ?>
                                <div class="dividerHeading">
                                    <h4><span><?= $glr->title; ?></span></h4>
                                </div>
                                <ul>
                                    <li style="margin-left: 16px;"><?= $glr->content ?></li>
                                </ul>
                                <br>


                            <?php
                            }
                            ?>
                        </div>
                        <div class="col-md-4">
                            <?php
                            // 1,4,7,10,13,14 || 2,5,8,11 || 3,6,9,12,15
                            $i = 1;
                            foreach ($this->db->query("SELECT * from tbl_destination WHERE id IN(2,5,8,11)  LIMIT 4 OFFSET " . ($i - 1))->result() as $glr) { ?>
                                <div class="dividerHeading">
                                    <h4><span><?= $glr->title; ?></span></h4>
                                </div>
                                <ul>
                                    <li style="margin-left: 16px;"><?= $glr->content ?></li>
                                </ul>
                                <br>


                            <?php
                            }
                            ?>
                        </div>
                        <div class="col-md-4">
                            <?php
                            // 1,4,7,10,13,14 || 2,5,8,11 || 3,6,9,12,15
                            $i = 1;
                            foreach ($this->db->query("SELECT * from tbl_destination WHERE id IN(3,6,9,12,15)  LIMIT 5 OFFSET " . ($i - 1))->result() as $glr) { ?>
                                <div class="dividerHeading">
                                    <h4><span><?= $glr->title; ?></span></h4>
                                </div>
                                <ul>
                                    <li style="margin-left: 16px;"><?= $glr->content ?></li>
                                </ul>
                                <br>


                            <?php
                            }
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

<section class="bg-grey">
    <div class="container">
        <div class="row ">
            <div class="col-sm-12 wow fadeInLeft">
                <div class="dividerHeading">
                    <!-- div class="linegaris">
                        		
                        	</div> -->
                    <h2 style="text-align: center;"><strong>Butuh Bantuan ?</strong></h2>
                </div>
                <form id="contactForm" method="post" action="<?php echo base_url() . 'prices'; ?>">
                    <div class="col-lg-12 ">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" maxlength="100" data-msg-required="Your Name" value="" placeholder="Your Name" required style="height: 45px;">
                                </div>
                                <div class="col-lg-4">
                                    <input type="email" class="form-control" maxlength="100" data-msg-required="Your Email" value="" placeholder="Your Email" required style="height: 45px;">
                                </div>
                                <div class="col-lg-4">
                                    <input type="number" class="form-control" maxlength="100" data-msg-required="Your Phone" value="" placeholder="Your Phone" required style="height: 45px;">
                                </div>
                                <div class="col-lg-9" style="margin-top: 20px;">
                                    <input class="form-control" data-msg-required="Masukan No.Awb Anda" maxlength="5000" placeholder="Message" style="height:55px">
                                </div>
                                <div class="col-md-3" style="margin-top: 10px;">
                                    <input type="submit" data-loading-text="Loading..." class="btn btn-default2 btn-md" value="Submit" style="height:55px">
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
                <!-- <strong><em>This text is both bold and italics</em></strong> -->
                <div class="col-md-12" style="text-align: center;">
                    <h3 style="color: #FB5C02;"><i class="fa fa-phone"></i> Customer Care</h3>
                    <?php
                    $nmr = $website->no_wa;
                    $i = substr($nmr, 3);
                    ?>
                    <h2 style="line-height: 0px;"><strong>Telp : <?= $website->phone; ?>, <?= $i; ?></strong></h2>
                </div>


            </div>
        </div>

    </div>
</section>