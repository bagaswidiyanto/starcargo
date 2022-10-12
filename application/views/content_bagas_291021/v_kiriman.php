<style>
    @media only screen and (max-width: 600px) {
        h5 {
            font-size: 10px;
        }
    }
</style>
<section class="bg-white">
    <div class="container">
        <div class="row ">

            <div class="col-md-12 wow fadeInRight" data-wow-offset="400">
                <div class="dividerHeading">
                    <?php $bn2 = $this->db->query('Select * from tbl_banner where id = 2')->row(); ?>
                    <!-- <h2><span>Keuatamaan Pelayanan Kami</span></h2> -->
                    <h2><img src="<?= base_url(); ?>assets/images/dgt/Group88.png" width="5px"><span> Lacak Kiriman</span></h2>
                </div>
                <form id="contactForm" method="post" action="<?php echo base_url() . 'prices'; ?>">
                    <div class="row">
                        <div class="col-lg-12 ">
                            <h2><img src="<?= base_url(); ?>assets/images/akar-icons_shipping-box-01.svg" alt="" width="20px"> LACAK KIRIMAN</h2>
                            <div class="form-group inputtabs">
                                <div class="col-lg-12 ">
                                    <h5>Silakan masukkan Nomor Airwaybill (satu Per baris) Kemudian Klik 'Cari'.</h5>
                                    <textarea id="tracking" class="form-control" name="tracking" rows="10" cols="20" data-msg-required="Masukan No.Awb Anda" maxlength="5000" placeholder="available up to 20 Airwaybill" style="height:90px"></textarea>
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-12 ">
                            <div class="form-group">

                                <div class="col-lg-2">
                                    <h5></h5>
                                    <input type="submit" data-loading-text="Loading..." class="btn btn-default2 btn-md" value="Cari">
                                </div>
                            </div>
                        </div>
                    </div>



                </form>

            </div>

        </div>
    </div>
</section>