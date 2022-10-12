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

    .heading-items h4 {
        margin-top: 260px;
        margin-left: 190px;
        color: #ffffff;
        font-weight: 600;
        font-size: 58px;
    }

    .kami {
        margin-top: 33%;
    }


    @media screen and (max-width: 768px) {
        .three-tab {
            float: left !important;
            position: absolute !important;
            width: 100% !important;
            margin-top: 60px !important
        }

        .kami {
            margin-top: 70%;
        }

        .heading-items h4 {
            margin-top: 140px;
            margin-left: 10px;
            color: #FFFFFF;
            font-size: 40px;

        }
    }

    /* zoom 125% */
    @media screen and (min-width: 500px) and (max-width: 1230px) {
        .kami {
            margin-top: 40%;
        }
    }

    /* zoom 200% */
    @media only screen and (min-width:360px) and (max-width:780px) {
        .kami {
            margin-top: 65%;
        }
    }

    /* zoom 500% */
    @media only screen and (min-width:150px) and (max-width:400px) {
        .kami {
            margin-top: 83%;
        }
    }
</style>

<div class="three-tab" style="margin: 10% 0 10px 0;">
    <div class="col-md-0" style="float:right">
        <ul class="nav" style=" border-color: #ebebeb; outline: none; background: linear-gradient(293.8deg, #033498 0%, #00C0FF 170.7%); color: #c9c4c4; margin: 0 0 -1px 0; border-bottom: none; border-radius: 0;">
            <li class="active"><a href="<?= base_url('prices'); ?>" class="icont"><img src="<?= base_url(); ?>assets/images/Cek Tarif (active) (1).svg" class="svg" alt="" width="15px" height="15px"></a></li>
        </ul>
        <ul class="nav" style=" border-color: #ebebeb; outline: none; background: linear-gradient(293.8deg, #033498 0%, #00C0FF 170.7%); color: #c9c4c4; margin: 0 0 -1px 0; border-bottom: none; border-radius: 0;">
            <li class="active"><a href="<?= base_url('tracking'); ?>" class="icont"><img src="<?= base_url(); ?>assets/images/Group 135.png" class="svg1" alt="" width="15px" height="15px"></a></li>
        </ul>
        <ul class="nav" style=" border-color: #ebebeb; outline: none; background: linear-gradient(293.8deg, #033498 0%, #00C0FF 170.7%); color: #c9c4c4; margin: 0 0 -1px 0; border-bottom: none; border-radius: 0;">
            <li class="active"><a href="<?= base_url('lokasi'); ?>" class="icont"><img src="<?= base_url(); ?>assets/images/Vector.png" class="svg2" alt="" width="15px" height="15px"></a></li>
        </ul>
    </div>
</div>

<div class="slider_block">
    <div class="flexslider top_slider">
        <div class="col-md-12">
            <div class="row">
                <ul class="slides">
                    <li class="slide" style="background-image: url('<?= base_url(); ?>assets/images/slider/layanan.jpg');">
                        <div class="container" style="position:absolute; width: 100%; height:100%; background: rgba(0, 0, 0, 0.5);">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 wow bounceIn ">
                                    <div class="heading-items">
                                        <h4>Destinasi</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<section class="content about">


    <div class="container">
        <div class="row sub_content">
            <div class="who">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12 kami wow fadeInDown">
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
                            $i = 1;
                            foreach ($this->db->query("SELECT * from tbl_destination WHERE id IN(11,12,13,14,15,16,17,18,19,20,21,22)  LIMIT 12 OFFSET " . ($i - 1))->result() as $glr) { ?>
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
                            $i = 1;
                            foreach ($this->db->query("SELECT * from tbl_destination WHERE id IN(23,24,25,28,29,30,31,32)  LIMIT 11 OFFSET " . ($i - 1))->result() as $glr) { ?>
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
                            $i = 1;
                            foreach ($this->db->query("SELECT * from tbl_destination WHERE id IN(26,27,33,34,35,36,37,38,39,40,41,42,43,44)  LIMIT 15 OFFSET " . ($i - 1))->result() as $glr) { ?>
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
                    <h2 style="text-align: center;"><strong>Butuh Bantuan ?</strong></h2>
                </div>
                <form id="bantuan">
                    <div class="col-lg-12 wow fadeInLeft ">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-lg-4">
                                    <input id="name" type="text" class="form-control" maxlength="100" data-msg-required="Your Name" name="name" placeholder="Your Name" required style="height: 46px;">
                                </div>
                                <div class="col-lg-4">
                                    <input id="email" type="email" class="form-control" maxlength="100" data-msg-required="Your Email" name="email" placeholder="Your Email" required style="height: 46px;">
                                </div>
                                <div class="col-lg-4">
                                    <input id="phone" type="text" class="form-control" maxlength="100" data-msg-required="Your Phone" name="phone" placeholder="Your Phone" required style="height: 46px;" onkeypress="return hanyaAngka(event)">
                                </div>
                                <div class="col-lg-9" style="margin-top: 20px;">
                                    <input id="message" class="form-control" data-msg-required="Masukan No.Awb Anda" name="message" maxlength="5000" placeholder="Message" style="height:58px">
                                </div>
                                <div class="col-md-3" style="margin-top: 10px;">
                                    <input type="submit" data-loading-text="Loading..." class="btn btn-default2 btn-md" value="Submit" style="height:58px; font-size: 20px; font-weight: bold;">
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
                    <style>
                        @media only screen and (min-width:150px) and (max-width:600px) {
                            .s {
                                font-size: 12px;
                            }
                        }
                    </style>
                    <h2 style="line-height: 0px;"><strong class="s">Telp : <?= $website->phone; ?>, <?= $i; ?></strong></h2>
                </div>


            </div>
        </div>

    </div>
</section>

<script>
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;
        return true;
    }

    $(document).ready(function() {

        base_url = '<?php echo base_url(); ?>';

        $("#bantuan").submit(function() {

            $(".btn").attr("disabled", true);

            var data = {

                name: $("#name").val(),

                email: $("#email").val(),

                phone: $("#phone").val(),
                message: $("#message").val()
            };

            $.ajax({

                type: "POST",

                url: base_url + "bantuan",

                data: data,

                success: function(response) {

                    $('.success').fadeIn(1000);
                    $("#bantuan .btn").attr("disabled", false);
                    alert('Terima Kasih, Pesan anda akan kami proses secepatnya.')


                    setInterval(function() {
                        window.location = base_url;
                    }, 3000);

                },


            });

            return false;

        });

    });
</script>