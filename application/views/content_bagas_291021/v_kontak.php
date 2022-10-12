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
                    <h4 style="margin-top: 150px; margin-bottom: -30px;">Hubungi Kami </h4>
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

<script type="text/javascript">
    $(document).ready(function() {

        base_url = '<?php echo base_url(); ?>';

        $("#kontakin").submit(function() {

            $("#kontakin .btn").attr("disabled", true);

            var data = {

                name: $("#name").val(),

                email: $("#email").val(),

                subject: $("#subject").val(),

                message: $("#message").val()

            };

            $.ajax({

                type: "POST",

                url: base_url + "sendmail",

                data: data,

                success: function() {

                    $('.success').fadeIn(1000);

                    $("#kontakin .btn").attr("disabled", false);

                    alert('Terima Kasih, Pesan anda akan kami proses secepatnya.')

                    setInterval(function() {
                        window.location = base_url + 'kontak';
                    }, 3000);

                },

                error: function() {

                    $('.error').fadeIn(1000);

                    $("#kontakin .btn").attr("disabled", false);

                }

            });

            return false;

            ;
        });

    });
</script>