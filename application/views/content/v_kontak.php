<style type="text/css">
    .kotak {
        position: absolute;
        width: 73%;
        height: 5%;
        left: 160px;
        top: 330px;

        background: #FFFFFF;
        box-shadow: 0px 4px 40px rgba(0, 0, 0, 0.2);
        border-radius: 20px;
    }

    .kotakform {
        position: absolute;
        width: 73%;
        height: 42%;
        left: 160px;
        top: 408px;

        background: #FFFFFF;
        box-shadow: 0px 4px 40px rgba(0, 0, 0, 0.2);
        border-radius: 20px;
    }


    textarea {
        resize: none;
        overflow: hidden;
    }

    .btncustom {
        background: #FB5C02;
        border: none;
        border-radius: 6px;
        width: 100%;
    }

    #example1 {
        /*border: 2px solid red;*/
        padding: 10px;
        background: #FFFFFF;
        box-shadow: 0px 4px 40px rgba(0, 0, 0, 0.2);
        border-radius: 20px;

        margin: auto;
        width: 72%;
        /*border: 3px solid #73AD21;
  padding: 10px;*/
        margin-top: -200px;

    }

    #example2 {
        /*border: 2px solid red;*/
        padding: 10px;
        background: #FFFFFF;
        box-shadow: 0px 4px 40px rgba(0, 0, 0, 0.2);
        border-radius: 20px;

        margin: auto;
        width: 72%;
        /*border: 3px solid #73AD21;
  padding: 10px;*/
        margin-top: 20px;
        margin-left: 14%;

    }

    .listkt {

        height: 250px;
        /*width: 100%;*/

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

        .heading-items h4 {
            font-size: 33px;
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
                    <li class="slide" style="background-image: url('<?= base_url(); ?>assets/images/slider/kontak.jpg');">
                        <div class="container" style="position:absolute; width: 100%; height:100%; background: rgba(0, 0, 0, 0.5);">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 wow bounceIn ">
                                    <div class="heading-items">
                                        <h4>Hubungi kami</h4>
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

                    <div class="dividerHeading">
                        <h2><img src="<?= base_url(); ?>assets/images/dgt/Group88.png" width="5px"><span> Branch Office</span></h2>
                        <p>Kantor Perwakilan kami yang berada di seluruh indonesia</p>
                    </div>


                    <div class="row sub_content" style="margin-bottom:-80px">

                        <?php foreach ($branch as $cab) { ?>
                            <div class="col-lg-3 col-md-3 col-sm-3 wow fadeInDown listkt">
                                <div class="dividerHeading">
                                    <!--  <h4><span><a href="<?= base_url(); ?>cabang/view/<?= $cab->id; ?>"><?= $cab->kota; ?></a></span></h4> -->
                                    <h4><span><?= $cab->nama; ?></span></h4>
                                </div>
                                <p><?= $cab->alm1; ?>
                                    <br><?= $cab->alm2; ?>
                                    <!-- <br><?= $cab->alamat3; ?> -->
                                    <br><?= $cab->kota . ', ' . $cab->zipcode; ?>
                                </p>
                                <i class="fa fa-phone"></i>&nbsp;&nbsp;<?= $cab->phone; ?> <br>
                                <i class="fa fa-envelope"> </i>&nbsp;&nbsp;<?= $cab->email; ?><br>
                                <i class="fa fa-fax"> </i>&nbsp;&nbsp;<?= $cab->fax; ?>
                            </div>

                        <?php
                        }
                        ?>


                    </div>

                    <hr style=" border: 0; height: 2px; background-image: linear-gradient(to right, rgba(0, 0, 0, 0), black, #FB5C02, black, rgba(0, 0, 0, 0));">

                    <div class="dividerHeading">
                        <h2><img src="<?= base_url(); ?>assets/images/dgt/Group88.png" width="5px"><span> Agent</span></h2>
                        <p>Kantor Agent kami yang berada di seluruh indonesia</p>
                    </div>


                    <div class="row sub_content" style="margin-bottom:-80px">

                        <?php foreach ($agent as $agn) { ?>
                            <div class="col-lg-3 col-md-3 col-sm-3 wow fadeInDown listkt">
                                <div class="dividerHeading">
                                    <!--  <h4><span><a href="<?= base_url(); ?>cabang/view/<?= $agn->id; ?>"><?= $agn->kota; ?></a></span></h4> -->
                                    <h4><span><?= $agn->nama; ?></span></h4>
                                </div>
                                <p>
                                    <?= $agn->alm1; ?>
                                    <?php if ($agn->alm2 != '') { ?>
                                        <br><?= $agn->alm2; ?>
                                    <?php } else { ?>
                                        <br>-
                                    <?php } ?>
                                    <br><?= $agn->kota . ', ' . $agn->zipcode; ?>
                                </p>
                                <i class="fa fa-phone"></i>&nbsp;&nbsp;<?= $agn->phone; ?> <br>
                                <i class="fa fa-envelope"> </i>&nbsp;&nbsp;<?= $agn->email; ?><br>
                                <i class="fa fa-fax"> </i>&nbsp;&nbsp;<?= $agn->fax; ?>
                            </div>

                        <?php
                        }
                        ?>


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