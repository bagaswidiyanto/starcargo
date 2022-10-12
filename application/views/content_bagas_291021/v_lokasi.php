<style type="text/css">
    #example1 {
        padding: 10px;
        background: #FFFFFF;
        box-shadow: 0px 4px 40px rgba(0, 0, 0, 0.2);
        border-radius: 20px;
        margin: auto;
        width: 72%;
        margin-top: -200px;

    }

    .search {
        padding: 8px 15px;
        background: rgba(0, 0, 0, 0);
        border: 1px solid #dbdbdb;
        outline: none;
        width: 300px;
        border-radius: 10px;
    }

    .button {
        position: relative;
        padding: 6px 15px;
        left: -8px;
        border: 2px solid #fa6501;
        background-color: #fa6501;
        color: #fafafa;
        position: absolute;
        margin-left: 228px;
        border-radius: 10px;
        margin-top: 1px;
    }

    .button:hover {
        background-color: #fafafa;
        color: #207cca;
    }

    @media only screen and (max-width: 600px) {
        form {
            margin-top: -43px;
        }

        h1 {
            font-size: 18px;
            margin-left: -20px;
        }

        .search {
            padding: 8px 15px;
            background: rgba(0, 0, 0, 0);
            border: 1px solid #dbdbdb;
            outline: none;
            width: 140px;
            border-radius: 10px;
        }
    }
</style>


<section class="content about">
    <div class="container">
        <div class="row sub_content">
            <div class="who">
                <div class="dividerHeading">
                    <strong>
                        <h2><img src="<?= base_url(); ?>assets/images/dgt/Group88.png" width="5px"> Lacak Kiriman</h2>
                    </strong>
                </div>
                <div class="col-lg-12">
                    <div class="col-lg-6">
                        <h1 style="color: black;"><img src="<?= base_url(); ?>assets/images/Cek pengiriman (Active).svg" alt="" width="20px"> LACAK KIRIMAN </h1>
                    </div>

                    <div class="col-lg-6">
                        <form style="float: right;">
                            <button class="button" type="button"><i class="fa fa-search"></i></button>
                            <input class="search" type="text" placeholder="Cari lokasi anda" required>
                        </form>
                        </h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <section class="contact_2">
                        <div class="maps wow fadeInDown" style=" z-index: -99999;">
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