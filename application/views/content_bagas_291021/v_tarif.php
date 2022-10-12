<section class="bg-white">
    <div class="container">
        <div class="row ">

            <div class="col-md-12 wow fadeInRight" data-wow-offset="400">
                <div class="dividerHeading">
                    <?php $bn2 = $this->db->query('Select * from tbl_banner where id = 2')->row(); ?>
                    <!-- <h2><span>Keuatamaan Pelayanan Kami</span></h2> -->
                    <h2><img src="<?= base_url(); ?>assets/images/dgt/Group88.png" width="5px"><span> Tarif Kiriman</span></h2>
                </div>
                <form id="contactForm" method="post" action="<?php echo base_url() . 'prices'; ?>">
                    <div class="row">
                        <div class="col-lg-12 ">
                            <h2><img src="<?= base_url(); ?>assets/images/Cek Tarif (active).svg" alt="" width="20px"> CEK TARIF</h2>
                            <div class="form-group inputtabs">
                                <div class="col-lg-4 ">
                                    <h5>Dari (Origin):</h5>
                                    <input type="text" id="hint" name="asal" class="form-control input" maxlength="100" data-msg-required="Masukan Kota Asal" value="" required>
                                    <input type="hidden" id="asal" name="dari" class="form-control" />
                                </div>
                                <div class="col-lg-4">
                                    <h5>Ke (Destination):</h5>
                                    <input type="text" id="hint2" name="ke" class="form-control input" maxlength="100" data-msg-required="Masukan Kota Tujuan" value="" required>
                                    <input type="hidden" id="tujuan" name="tujuan" class="form-control" />
                                </div>
                                <div class="col-lg-4">
                                    <h5>Berat (Weight):</h5>
                                    <input type="text" name="berat" id="berat" class="form-control input" maxlength="100" data-msg-required="Masukan Berat" value="" required>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-12 ">
                            <div class="form-group">
                                <div class="col-lg-4">
                                    <h5>Masukan kode di atas</h5>
                                    <input type="text" name="berat" id="berat" class="form-control input" maxlength="100" data-msg-required="Masukan Berat" value="" required>
                                </div>
                                <div class="col-lg-4">
                                    <h5></h5>
                                    <input type="submit" data-loading-text="Loading..." class="btn btn-default2 btn-md" value="Cek">
                                </div>
                            </div>
                        </div>
                    </div>



                </form>

            </div>

        </div>
    </div>
</section>