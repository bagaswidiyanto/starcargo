<style type="text/css">
    #example1 {
        padding: 10px;
        background: #FFFFFF;
        box-shadow: 0px 4px 40px rgba(0, 0, 0, 0.2);
        border-radius: 20px;
        /* margin: auto; */
        width: 72%;
        margin-top: -200px;
        position: absolute;
        margin-left: 12%;

    }

    .col-lg-3 {
        padding-right: 0px;
    }

    .sl {
        float: left;
        margin-bottom: 13px;

    }

    .s {
        height: 36px;
        background: #FB5C02;
        border: 0px;
        width: 42px;
        color: #fff;
        border-radius: 20px;
        position: absolute;
    }

    .b {
        height: 36px;
        border-radius: 20px;
        padding-left: 49px;
        width: 127%;
        border: 1px solid #E5E5E5;
    }

    input:focus {
        border: 1px solid #E5E5E5;
    }
</style>
<section class="content about">
    <div class="container">
        <div class="row sub_content">
            <div class="who">
                <div class="dividerHeading">
                    <strong>
                        <h2><img src="<?= base_url(); ?>assets/images/dgt/Group88.png" width="5px"> Titik Layanan</h2>
                    </strong>
                </div>
                <div class="col-lg-12">
                    <div class="col-lg-9">
                        <h1 style="color: black;"><img src="<?= base_url(); ?>assets/images/Cek pengiriman (Active).svg" alt="" width="20px"> TITIK LAYANAN </h1>
                    </div>

                    <div class="col-lg-3">
                        <form class="sl">
                            <button class="s" type="button"><i class="fa fa-search"></i></button>
                            <input class="b" type="text" placeholder="Cari lokasi anda" required>
                        </form>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <section class="contact_2">
                        <div class="maps wow fadeInDown">
                            <?= $website->map; ?>
                        </div>


                        <!--           <div class="col-lg-8 col-sm-8 wow bounceIn "> -->
                        <div id="example1">
                            <h5 style="text-align: center;">

                                <img src="<?= base_url(); ?>assets/images/dgt/Office.png" width="20px">

                                Head Office : Villa Melati Mas Blok SR 15 No.36 BSD, Jakarta, 15322, Indonesia
                            </h5>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>