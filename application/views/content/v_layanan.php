<style type="text/css">
    .ul {
        list-style: disc;
        margin-left: 5px;
        list-style-position: inside;
        /*padding: 0;*/
    }

    .icont:hover i {
        color: #000000;
    }

    .icont i {
        color: #FFFFFF;
    }

    .kami {
        margin-top: 33%;
    }

    .heading-items h4 {
        margin-top: 260px;
        margin-left: 190px;
        color: #ffffff;
        font-weight: 600;
        font-size: 58px;
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
            font-size: 34px;
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
                    <li class="slide" style="background-image: url('<?= base_url(); ?>assets/images/slider/layanan.jpg'); ">
                        <div class="container" style="position:absolute; width: 100%; height:100%; background: rgba(0, 0, 0, 0.5);">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 wow bounceIn ">
                                    <div class="heading-items">
                                        <h4>Produk & Layanan</h4>
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
                <div class="col-lg-12 col-md-12 col-sm-12 kami">
                    <section class="info_service">
                        <div class="container">
                            <div class="row sub_content">

                                <div class="rs_box  wow bounceInRight">
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="serviceBox_3">
                                            <div class="service-icon">
                                                <!-- <img src="<?= base_url(); ?>assets/images/services/service-3-icon.png"> -->
                                                <img src="<?= base_url(); ?>assets/images/dgt/HIS.png">
                                                <!-- <i class="fa fa-thumbs-up"></i> -->
                                            </div>
                                            <h3>Hari ini Kirim, Hari Ini Sampai (HIS) </h3>
                                            <!--   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa dignissimos distinctio ea eius laborum nesciunt qui quis quisquam quos!</p> -->

                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-3">
                                        <div class="serviceBox_3">
                                            <div class="service-icon">
                                                <!--  <img src="<?= base_url(); ?>assets/images/services/service-3-icon1.png"> -->
                                                <!-- <i class="fa fa-bolt"></i> -->
                                                <img src="<?= base_url(); ?>assets/images/dgt/HIB.png">
                                            </div>
                                            <h3>Hari Ini Kiri, Besok Sampai (HIB)</h3>
                                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa dignissimos distinctio ea eius laborum nesciunt qui quis quisquam quos!</p> -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="serviceBox_3">
                                            <div class="service-icon">
                                                <!--  <img src="<?= base_url(); ?>assets/images/services/service-3-icon2.png"> -->
                                                <!-- <i class="fa fa-map-marker"></i> -->
                                                <img src="<?= base_url(); ?>assets/images/dgt/Express.png" style="margin-left: -65px;">
                                            </div>
                                            <h3>Pelayanan Express (EXP)</h3>
                                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa dignissimos distinctio ea eius laborum nesciunt qui quis quisquam quos!</p> -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="serviceBox_3">
                                            <div class="service-icon">
                                                <!-- <img src="<?= base_url(); ?>assets/images/services/service-3-icon3.png"> -->
                                                <!-- <i class="fa fa-lock"></i> -->
                                                <img src="<?= base_url(); ?>assets/images/dgt/reguler.png">
                                            </div>
                                            <h3>Pelayanan Reguler (REG)</h3>
                                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa dignissimos distinctio ea eius laborum nesciunt qui quis quisquam quos!</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>

                    <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInDown">
                        <!-- <img src="<?= base_url(); ?>assets/images/dgt/Group88.png" width="4px" > -->
                        <div class="dividerHeading">
                            <h2><img src="<?= base_url(); ?>assets/images/dgt/Group88.png" width="5px"> <span>Logistics & Courier</span></h2>
                        </div>
                        <p> Jenis Layanan yang kami Tawarkan </p>

                    </div>


                    <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInDown">
                        <div class="dividerHeading">
                            <h3><img src="<?= base_url(); ?>assets/images/dgt/Produk_Jasa.png" width="7%"><span> Produk & Jasa</span></h3>
                        </div>
                        <ul class="ul">
                            <li>Pengiriman Dokumen & Paket</li>
                            <li>General & Heavy Cargo</li>
                            <li>Pengiriman Barang Pindahan</li>
                            <li>Project Handling (Oil Company, Mining dll)</li>
                            <li>Logistik & Distribusi</li>
                            <li>Custom Clearanc</li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInDown">
                        <div class="dividerHeading">
                            <h3><img src="<?= base_url(); ?>assets/images/dgt/Udara.png" width="7%"><span> Udara - Cargo Express</span></h3>
                        </div>
                        <ul class="ul">
                            <li>Door To Door</li>
                            <li>Door To Port</li>
                            <li>Port To Door</li>
                            <li>Port To Port</li>




                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInDown">
                        <div class="dividerHeading">
                            <h3><img src="<?= base_url(); ?>assets/images/dgt/Darat.png" width="7%"><span> Darat/Laut - Reguler Express</span></h3>
                        </div>
                        <ul class="ul">
                            <li>Door To Door</li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInDown">
                        <div class="dividerHeading">
                            <h3><img src="<?= base_url(); ?>assets/images/dgt/MPacking.png" width="7%"><span> Moving Packing & Project</span></h3>
                        </div>
                        <!-- <p> Jenis Layanan yang kami Tawarkan </p> -->
                        <ul class="ul">
                            <li>Pindahan Rumah</li>
                            <li>Pindahan Kantor</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInDown">
                        <div class="dividerHeading">
                            <h3><img src="<?= base_url(); ?>assets/images/dgt/CTrucking.png" width="7%"><span> Charter Trucking & Project</span></h3>
                        </div>
                        <!-- <p> Jenis Layanan yang kami Tawarkan </p> -->
                    </div>





















                    <!-- ///BACKUP//////////////// -->
                    <section class="info_service" hidden="">
                        <div class="container">
                            <div class="row sub_content">
                                <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInDown">
                                    <h1 class="intro text-center mintop60"></h1>
                                    <p class="lead text-center"></p>
                                </div>
                                <div class="rs_box  wow bounceInRight">
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="serviceBox_3">
                                            <div class="service-icon">
                                                <!--  <img src="<?= base_url(); ?>assets/images/services/service-3-icon.png"> -->
                                                <i class="fa fa-thumbs-up"></i>
                                            </div>
                                            <h3>Layanan Berkualitas</h3>
                                            <!--   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa dignissimos distinctio ea eius laborum nesciunt qui quis quisquam quos!</p> -->

                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-3">
                                        <div class="serviceBox_3">
                                            <div class="service-icon">
                                                <!--  <img src="<?= base_url(); ?>assets/images/services/service-3-icon1.png"> -->
                                                <i class="fa fa-bolt"></i>
                                            </div>
                                            <h3>Lebih Cepat</h3>
                                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa dignissimos distinctio ea eius laborum nesciunt qui quis quisquam quos!</p> -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="serviceBox_3">
                                            <div class="service-icon">
                                                <!--  <img src="<?= base_url(); ?>assets/images/services/service-3-icon2.png"> -->
                                                <i class="fa fa-map-marker"></i>
                                            </div>
                                            <h3>Lebih Tepat</h3>
                                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa dignissimos distinctio ea eius laborum nesciunt qui quis quisquam quos!</p> -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="serviceBox_3">
                                            <div class="service-icon">
                                                <!-- <img src="<?= base_url(); ?>assets/images/services/service-3-icon3.png"> -->
                                                <i class="fa fa-lock"></i>
                                            </div>
                                            <h3>Lebih Aman</h3>
                                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa dignissimos distinctio ea eius laborum nesciunt qui quis quisquam quos!</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                    <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInDown" hidden="">
                        <h1 class="intro text-center mintop60">Layanan Kami</h1>
                        <p class="lead text-center">Kami menyediakan berbagai jenis moda untuk pelayanan pengiriman paket Anda</p>
                    </div>
                    <div class="who" hidden="">
                        <div class="col-lg-6 col-sm-6 wow fadeInRight">
                            <div class="img-about">
                                <div id="slider" class="swipe">
                                    <ul class="swipe-wrap">
                                        <li><img src="<?= base_url(); ?>assets/images/darat.jpg" alt="" /></li>
                                        <li><img src="<?= base_url(); ?>assets/images/laut.jpg" alt="" /></li>
                                        <li><img src="<?= base_url(); ?>assets/images/udara.jpg" alt="" /></li>
                                        <li><img src="<?= base_url(); ?>assets/images/all.jpg" alt="" /></li>
                                    </ul>
                                    <div class="swipe-navi">
                                        <div class="swipe-left" onclick="mySwipe.prev()"><i class="fa fa-chevron-left"></i></div>
                                        <div class="swipe-right" onclick="mySwipe.next()"><i class="fa fa-chevron-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6 wow fadeInleft">
                            <div class="edge-tab">
                                <div class="dividerHeading">
                                    <h4><span>Jenis Layanan</span></h4>

                                </div>
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#darat" data-toggle="tab">Via Darat</a></li>
                                    <li class=""><a href="#laut" data-toggle="tab">Via Laut</a></li>
                                    <li class=""><a href="#udara" data-toggle="tab">Via Udara</a></li>
                                    <li class=""><a href="#carter" data-toggle="tab">Sewa Carter</a></li>
                                </ul>

                                <div class="tab-content clearfix" style="background:none; margin-top:30px">
                                    <div class="tab-pane fade active in" id="darat">
                                        <ul class="list_style circle">
                                            <!-- <li><a href="#"> Donec convallis, metus nec tempus aliquet</a></li>
										<li><a href="#"> Aenean commodo ligula eget dolor</a></li>
										<li><a href="#"> Cum sociis natoque penatibus mag dis parturient</a></li>
										<li><a href="#"> Lorem ipsum dolor sit amet cons adipiscing</a></li>
										<li><a href="#"> Accumsan vulputate faucibus turpis tortor dictum</a></li>
										<li><a href="#"> Nullam ultrices eros accumsan vulputate faucibus</a></li>
										<li><a href="#"> Nunc aliquet tincidunt metus sit amet</a></li> -->
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="laut">
                                        <ul class="list_style circle">
                                            <!-- <li><a href="#"> Donec convallis, metus nec tempus aliquet</a></li>
										<li><a href="#"> Aenean commodo ligula eget dolor</a></li>
										<li><a href="#"> Cum sociis natoque penatibus mag dis parturient</a></li>
										<li><a href="#"> Lorem ipsum dolor sit amet cons adipiscing</a></li>
										<li><a href="#"> Accumsan vulputate faucibus turpis tortor dictum</a></li>
										<li><a href="#"> Nullam ultrices eros accumsan vulputate faucibus</a></li>
										<li><a href="#"> Nunc aliquet tincidunt metus sit amet</a></li> -->
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="udara">
                                        <ul class="list_style circle">
                                            <!-- <li><a href="#"> Donec convallis, metus nec tempus aliquet</a></li>
										<li><a href="#"> Aenean commodo ligula eget dolor</a></li>
										<li><a href="#"> Cum sociis natoque penatibus mag dis parturient</a></li>
										<li><a href="#"> Lorem ipsum dolor sit amet cons adipiscing</a></li>
										<li><a href="#"> Accumsan vulputate faucibus turpis tortor dictum</a></li>
										<li><a href="#"> Nullam ultrices eros accumsan vulputate faucibus</a></li>
										<li><a href="#"> Nunc aliquet tincidunt metus sit amet</a></li> -->
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="carter">
                                        <ul class="list_style circle">
                                            <!--  <li><a href="#"> Donec convallis, metus nec tempus aliquet</a></li>
                                        <li><a href="#"> Aenean commodo ligula eget dolor</a></li>
                                        <li><a href="#"> Cum sociis natoque penatibus mag dis parturient</a></li>
                                        <li><a href="#"> Lorem ipsum dolor sit amet cons adipiscing</a></li>
                                        <li><a href="#"> Accumsan vulputate faucibus turpis tortor dictum</a></li>
                                        <li><a href="#"> Nullam ultrices eros accumsan vulputate faucibus</a></li>
                                        <li><a href="#"> Nunc aliquet tincidunt metus sit amet</a></li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
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