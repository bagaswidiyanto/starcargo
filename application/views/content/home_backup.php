<?php
// $slider4=$this->db->get_where('tbl_slider',array('id'=>'27'))->row();
// $slider5=$this->db->get_where('tbl_slider',array('id'=>'24'))->row();
// $slider6=$this->db->get_where('tbl_slider',array('id'=>'25'))->row();

// foreach($this->db->query('select * from tbl_slider')->result() as  $slider){
?>

<!-- <style>
.flexslider.top_slider .slides li.slide<?= $slider->id ?> {background-image:url(https://starcargo.digitalindo.co.id/upload/slider/<?= $slider->image; ?>);webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>

	-->



<style>
    .flexslider.top_slider .slides li.slide4 {
        background-image: url(https://starcargo.digitalindo.co.id/upload/slider/<?= $slider4->image; ?>);
        webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    .flexslider.top_slider .slides li.slide5 {
        background-image: url(https://starcargo.digitalindo.co.id/upload/slider/<?= $slider5->image; ?>);
        webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    .flexslider.top_slider .slides li.slide6 {
        background-image: url(https://starcargo.digitalindo.co.id/upload/slider/<?= $slider6->image; ?>);
        webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    /*//layanan kami*/
    .inputForm {
        border-radius: 5px;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
    }

    .text-left {
        text-align: left;
    }

    .button4 {
        /* margin: -18px 0px; */
        margin-left: 20px;
        /* color: #FB5C02; */
    }




    .imground {
        border-radius: 5%;
        position: relative;
        width: 89%;
        height: 199px;
        /*left: 99px;
top: 99px;*/
    }


    /*//kotak static*/
    .kotakst {
        position: absolute;
        width: 291px;
        height: 199px;
        left: 100px;
        top: 2524px;

        background: #FFFFFF;
        /* Shadow */

        box-shadow: 0px 4px 40px rgba(0, 0, 0, 0.2);
        border-radius: 20px;
    }


    .imgbanner {
        position: absolute;
        z-index: -9999;
        top: -70px;
        left: -60px;
    }

    .imgbanner2 {
        position: absolute;
        z-index: -9999;
        top: 80px;
        left: 200px;
    }

    .linegaris {
        position: relative;
        width: 55px;
        height: 6px;
        left: 506px;
        top: 2474px;

        /* LINIER 2 */

        background: linear-gradient(293.8deg, #033498 0%, #00C0FF 170.7%);
        transform: rotate(-90deg)
    }


    .h3st {
        position: absolute;


        /*font-family: Poppins;*/
        font-style: normal;
        font-weight: 600;
        font-size: 18px;
        line-height: 27px;
        /* identical to box height */

        text-align: center;

        /* BLUE */

        color: #033498;

    }

    .coba {
        position: relative;


        /*font-family: Poppins;*/
        font-style: normal;
        font-weight: bold;
        font-size: 54px;
        /*line-height: 1px;*/
        top: -50px;
        width: 190px;
        /* identical to box height */


        /* BLUE */

        color: #033498;
    }




    .inputtabs {
        margin-top: -10px;
    }


    .pcontent {
        /*font-family: Poppins;*/
        font-style: normal;
        font-weight: 500;
        font-size: 18px;
        line-height: 180.5%;
        /* or 32px */


        color: #262626;
    }


    .col-lg-6 h5 {
        font-size: 14px;
        margin-bottom: 20px;
    }

    .tuch {
        height: 267px;

    }

    .even {
        width: 89%;
    }

    .buttons {
        padding: 6px 15px;
        left: 75px;
        color: #000000;
        position: absolute;
        margin-left: 70%;
        border-radius: 10px;
        margin-top: -40px;
        border: 0px solid #ffffff;
        background-color: #ffffff00;
    }

    .button4 {
        /* margin: -18px 0px; */
        margin-left: -100px;
        color: #FB5C02;
        /* background-color: #c9c4c4; */
        width: 91%;
        margin-top: 9%;
    }

    .lengkap {
        margin-left: 40px;
    }







    @media screen and (max-width: 768px) {
        .button4 {
            /* margin: -18px 0px; */
            margin-left: -100px;
            color: #FB5C02;
            /* background-color: #c9c4c4; */
            width: 52%;
            margin-top: -4%;
        }

        .img-fluid {
            margin-top: 20px;
            border-radius: 5%;
        }

        .imground {
            border-radius: 5%;
            position: relative;
            width: 100%;
            height: 199px;
            /*left: 99px;
top: 99px;*/
        }


        .three-tab {
            float: left !important;
            position: absolute !important;
            width: 100% !important;
            margin-top: 40px !important
        }


        .nav-tabs>li {
            *margin-bottom: 0px;
            padding: 0;
            /*width: 33.3%;*/
            width: 100%;
            height: 100%;


        }


        .tuch {
            /* width: 33.3%; */
            /* position: fixed; */
            background: linear-gradient(293.8deg, #033498 0%, #00C0FF 170.7%);
            height: 265px;
        }


        .mbl {
            margin-top: 383px;
        }

        .cek {
            width: 50%;
        }

        .cek2 {
            width: 50%;
            margin-top: -63px;
            margin-left: 50%;
        }

        input input {
            margin-top: 1px;
        }

        .col-lg-6 h5 {
            font-size: 14px;
            margin-bottom: 10px;
        }

        .slides .sub-line {
            font-size: 13px;
            padding: 0px 0px;
            width: 250px;
        }

        .even {
            width: 100%;
        }

        .imground {
            width: 100%;
        }
    }
</style>

<?php
function format_hari_tanggal($waktu)
{
    $hari_array = array(
        'Minggu',
        'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu'
    );
    $hr = date('w', strtotime($waktu));
    $hari = $hari_array[$hr];
    $tanggal = date('j', strtotime($waktu));
    $bulan_array = array(
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember',
    );
    $bl = date('n', strtotime($waktu));
    $bulan = $bulan_array[$bl];
    $tahun = date('Y', strtotime($waktu));
    $jam = date('H:i:s', strtotime($waktu));

    //untuk menampilkan hari, tanggal bulan tahun jam
    //return "$hari, $tanggal $bulan $tahun $jam";

    //untuk menampilkan hari, tanggal bulan tahun
    return "$hari, $tanggal $bulan $tahun";
}
?>

<style>
    .cek {
        margin-left: 70px;
        margin-top: 16px;
        width: 167px;
    }

    .cek3 {
        margin-left: 70px;
        margin-top: 8px;
        width: 167px;
    }

    .cek2 {
        margin-top: 16px;
        width: 167px;
    }

    .cek4 input {
        margin-top: -103px;
        width: 137px;
        margin-left: 238px;
    }




    .des {
        margin-top: -30px;
        margin-left: 121px;
        color: white;
        font-size: 28px;
    }

    .desk {
        margin-top: -30px;
        margin-left: 101px;
        color: white;
        font-size: 28px;
    }

    .desk1 {
        margin-top: -41px;
        margin-left: 109px;
        color: white;
        font-size: 28px;
    }

    .tuch img {
        width: 23px;
        margin-left: 86px;
        margin-top: 16px;
    }

    .tuchh img {
        width: 32px;
        margin-left: 59px;
        margin-top: 16px;
    }

    .tuchhh img {
        width: 32px;
        margin-left: 64px;
        margin-top: 16px;
    }


    .tracking {
        height: 49px;
        margin-top: 14px;
        width: 380px;
        margin-left: 10%
    }

    .trackingMid {
        width: 380px;
        margin-left: 10%;
        margin-top: 30px;
    }

    .trackingP {
        margin-left: 31px;
        font-size: 14px;
        margin-top: -6px;
    }



    .layanan1 {
        width: 291px;
        font-size: 16px;
        font-weight: 500;
        margin-left: 8%;
    }

    .layananP {
        margin-left: 8%;
        width: 298px;
    }

    .i {
        margin-left: 3%;
    }

    .ico {
        margin-left: 0px;
        font-size: 15px;
        width: 20px;
        height: 20px;
    }

    .bpc {
        margin-left: 32px;
        margin-top: 0px;
        font-size: 10px;
    }

    .lock {
        margin-left: 5%;
    }

    .kg {
        margin-top: -37px;
        margin-left: 83%;
    }



    @media screen and (max-width: 600px) {
        .cek {
            margin-left: 0px;
            width: 50%;
        }

        .cek2 {
            margin-top: -64px;
            width: 50%;
        }

        .cek3 {
            margin-left: 0px;
            width: 100%;
        }

        .cek4 input {
            width: 100%;
            margin-left: 0px;
        }

        /* input input {
            width: 293%;
        } */

        .des {
            margin-top: -34px;
            margin-left: 57px;
            color: white;
            font-size: 30px;
        }

        .desk {
            margin-top: -34px;
            margin-left: 57px;
            color: white;
            font-size: 28px;
        }

        .desk1 {
            margin-top: -34px;
            margin-left: 64px;
            color: white;
            font-size: 28px;
        }

        .tuch img {
            width: 35px;
            margin-left: 16px;
            margin-top: 16px;
        }

        /* tracking */

        .tracking {
            margin-top: 0px;
            width: 100%;
            margin-left: 0%
        }

        .trackingMid {
            width: 100%;
            margin-left: 0%;
        }

        .trackingP {
            margin-left: -12px;
        }

        .col-md-12 .ico {
            margin-left: -10px;
            margin-top: 0px;
            font-size: 15px;
        }

        .col-md-12 i {
            margin-left: 0px;
            margin-top: 0px;
            font-size: 10px;
        }

        .inpt {
            width: 100%;
        }

        .tuchh img {
            width: 35px;
            margin-left: 16px;
            margin-top: 16px;
        }

        .tuchhh img {
            width: 35px;
            margin-left: 16px;
            margin-top: 16px;
        }

        .layanan1 {
            width: 108%;
            margin-left: -4%;
        }

        .layananP {
            margin-left: -4%;
            width: 100%;
        }

        .i {
            margin-left: 0%;
        }


        .ico {
            margin-left: -10px;
            font-size: 15px;

        }

        .kg {
            margin-left: 82%;
        }


    }


    @media screen and (max-width: 1378px) {
        .tuch img {
            margin-left: 20px;
        }
    }


    @media screen and (min-width: 600px) and (max-width: 1300px) {
        .tracking {
            width: 310px;
        }

        .trackingMid {
            width: 310px;
        }

        .tuch img {
            margin-left: 16px;
        }

        .des {
            margin-left: 47px;
        }
    }


    /* zoom 125% */
    @media screen and (min-width: 500px) and (max-width: 1230px) {
        .cls {
            margin-bottom: 25px
        }

        .cek {
            margin-left: 0px;
            margin-top: 25px;
        }

        .cek2 {
            margin-top: -73px;
            margin-left: 165px;
        }

        .cek3 {
            margin-left: 0px;
        }

        .cek4 input {
            margin-top: -83px;
            margin-left: 165px;
        }

        .tracking {
            width: 273px;

        }


        .trackingMid {
            width: 273px;
        }

        .layanan1 {
            width: 273;
        }

        .tuch {
            height: 272px;
        }
    }

    /* zoom 150% */
    @media screen and (min-width: 450px) and (max-width: 1100px) {
        .cek {
            margin-left: 0px;
            margin-top: 25px;
            width: 153px;
        }

        .cek2 {
            margin-top: -73px;
            margin-left: 149px;
            width: 153px;
        }

        .cek3 {
            margin-left: 0px;
            width: 153px;
        }

        .cek4 input {
            margin-top: -83px;
            margin-left: 149px;
            width: 124px;
        }

        .tuch img {
            margin-left: 16px;
        }

        .tuchh img {
            margin-left: 16px;
        }

        .tuchhh img {
            margin-left: 16px;
        }

        .trackingP {
            margin-left: 6px;
            font-size: 12px;
            margin-top: -6px;
        }

        .des {
            margin-left: 50px;
        }

        .desk {
            margin-left: 55px;
        }

        .desk1 {
            margin-left: 55px;
        }

        .tracking {
            margin-left: 8px;
        }

        .trackingMid {
            margin-left: 8px;
            margin-top: 15px;
            margin-bottom: 0px;
        }

        .layananP {
            margin-left: -2px;
        }

        .layanan1 {
            margin-left: 0px;
        }

        .lock {
            margin-left: -8px;
        }

        .lengkap {
            margin-left: -10px;
        }

        .nav-tabs {
            margin-top: -90px;
        }

    }

    /* zoom 175% */
    @media only screen and (min-width:400px) and (max-width:900px) {
        .cek {
            width: 133px;
        }

        .cek2 {
            margin-left: 124px;
            width: 142px;
        }

        .cek3 {
            width: 133px;
        }

        .cek4 input {
            margin-left: 124px;
            width: 111px;
        }

        .desk {
            font-size: 21px;
        }

        .tracking {
            width: 230px;
        }

        .trackingMid {
            width: 230px;
        }

        .trackingP {
            margin-top: -20px;
        }

        .layananP {
            margin-left: -12px;
            font-size: 13px;
        }

        .layanan1 {
            width: 259px;
            margin-left: -11px;
        }

        .lock {
            margin-left: -17px;
        }

        .lengkap {
            margin-left: -31px;
        }

        .nav-tabs {
            margin-top: -90px;
        }

    }


    /* zoom 200% */
    @media only screen and (min-width:360px) and (max-width:780px) {
        .cek2 {
            margin-top: -64px;
        }

        .cek4 input {
            margin-top: -64px;
        }

        .lengkap {
            margin-left: -78px;
        }

        .nav-tabs {
            margin-top: 0px;
        }

    }


    /* zoom 400% */
    @media only screen and (min-width:200px) and (max-width:500px) {
        .cek4 input {
            margin-top: -66px;
        }

        .cek {
            width: 190px;
        }

        .cek2 {
            width: 190px;
            margin-left: 184px;
        }

        .cek3 {
            width: 374px;
        }

    }




    /* zoom 500% */
    @media only screen and (min-width:150px) and (max-width:400px) {
        .s {
            font-size: 12px;
        }

        .cek {
            width: 154px;
        }

        .cek2 {
            width: 154px;
            margin-left: 146px;
        }

        .cek3 {
            width: 299px;
        }

        .cek4 input {
            margin-top: 14px;
            width: 270px;
        }

        .lengkap {
            margin-left: -25px;
        }

        .tracking {
            width: 70%;
        }

        .trackingMid {
            width: 70%;
        }

        .layananP {
            width: 70%;
        }

        .layanan1 {
            width: 76%;
        }
    }

    .three-tab1 {
        margin-top: 430px;
    }
</style>


<div class="three-tab1">
    <div class="col-md-12 wow fadeInLeft" style="padding-right: 0px; padding-left: 0px">
        <div class="widget widget_tab" style="box-shadow: 0px 4px 40px rgb(0 0 0 / 30%);">
            <ul class="nav nav-tabs">
                <!-- <div class="tes col-md-4"> -->
                <li class="nav-tabs active tuch" style="height: 259px;  background: linear-gradient(293.8deg, #033498 0%, #00C0FF 170.7%);">
                    <!-- <a href="#Popular" class="tuch" data-toggle="tab"> -->
                    <img src="<?= base_url(); ?>assets/images/Cek Tarif (active) (1).svg" alt="">
                    <h3 class="des">Cek Tarif</h3>
                    <div class="tab-pane fade active in " id="Popular">

                        <form id="cekTarif" method="post" action="<?php echo base_url(); ?>prices" role="form">
                            <div class="col-lg-12 ">
                                <div class="row" style="width: 416px;">
                                    <div class="form-group inputtabs">
                                        <div class="col-lg-6 cek">
                                            <h5>Dari (Origin):</h5>
                                            <input type="text" id="hint" name="asal" class="form-control input ui-autocomplete-input" maxlength="100" data-msg-required="Masukan Kota Asal" value="" style="height: 41px;">
                                            <input type="hidden" id="asal" name="dari" class="form-control" />
                                        </div>
                                        <div class="col-lg-6 cek2">
                                            <h5>Ke (Destination):</h5>
                                            <input type="text" id="hint2" name="ke" class="form-control input ui-autocomplete-input" maxlength="100" data-msg-required="Masukan Kota Tujuan" value="" style="height: 41px;">
                                            <input type="hidden" id="tujuan" name="tujuan" class="form-control" />
                                        </div>
                                        <div class="col-lg-6 cek3">
                                            <h5>Berat (Weight):</h5>
                                            <input type="text" name="berat" id="weight" class="form-control input" maxlength="100" data-msg-required="Masukan Berat" value="" style="height: 41px;" onkeypress="return hanyaAngka(event)">
                                            <p class="kg">Kg</p>
                                        </div>
                                        <div class="col-lg-6 cek4">
                                            <h5></h5>
                                            <input type="submit" data-loading-text="Loading..." class="btn btn-default2 btn-md inpt" style="height: 41px;" value="Cek">
                                        </div>
                                        <!-- <div class="col-lg-6 cek3">
                                            
                                        </div> -->

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- </a> -->
                </li>
                <!-- </div>
                <div class="tes col-md-4"> -->
                <li class="tuchh" style="box-shadow: 0px 4px 15px rgb(0 0 0 / 28%);">
                    <!-- <a href="#Recent" class="tuchh tuch" data-toggle="tab"> -->
                    <img src="<?= base_url(); ?>assets/images/akar-icons_shipping-box-01.svg" alt="">
                    <h3 class="desk" style="color: #000000;">Lacak Pengiriman</h3>
                    <div class="tab-pane fade in" id="Recent">
                        <div class="tab-pane fade active in " id="Popular">
                            <form id="contactForm" method="post" action="<?php echo base_url() . 'tracking'; ?>">
                                <div class="col-lg-12 ">
                                    <div class="row" style="width: 416px;">
                                        <div class="form-group inputtabs">
                                            <div class="col-lg-12 ">
                                                <div class="col-md-10">
                                                    <p class="trackingP" style="color: #000000; font-weight: 500;">Masukkan No. BPC Pengiriman anda!</p>
                                                </div>
                                                <!-- <textarea id="tracking" class="form-control input tracking" name="tracking" rows="10" cols="20" data-msg-required="Masukan No.Awb Anda" maxlength="5000" placeholder="" style="height:50px"></textarea> -->

                                                <input id="tracking" class="form-control input tracking" name="tracking" data-msg-required="Masukan No.Awb Anda" maxlength="5000" placeholder="">
                                                <div class="col-md-12">
                                                    <!-- <i class="bpc" style="color: #FB5C02;">Pengecekan multiple No. BPC dibatasi dengan tanda koma (,)</i> -->
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12" style="margin-bottom: 39px;">
                                                        <input type="submit" data-loading-text="Loading..." class="btn btn-default2 btn-md trackingMid" value="Cek Pengiriman" style="height: 41px; font-size: 16px; font-weight: bold; ">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- </a> -->
                </li>
                <!-- </div>
                <div class="tes col-md-4"> -->
                <li class="tuchhh">
                    <!-- <a href="#lacak" class="tuchhh tuch" data-toggle="tab"> -->
                    <img src="<?= base_url(); ?>assets/images/Cek pengiriman (Active).svg" alt="">
                    <h3 class="desk1" style="color: #000000;">Titik Layanan</h3>
                    <div class="tab-pane fade in" id="Recent">
                        <div class="tab-pane fade active in " id="Popular">
                            <form id="contactForm" method="post" action="<?php echo base_url() . 'tracking'; ?>">
                                <div class="col-lg-12 ">
                                    <div class="row" style="width: 416px;">
                                        <div class="form-group inputtabs">
                                            <div class="col-lg-12 ">
                                                <div class="col-md-12">
                                                    <p class="layananP" style="font-size: 14px; color: #000000; font-weight: 500;">Temukan titik layanan berdasarkan lokasi terdekat anda!</p>
                                                </div>
                                                <div class="col-md-12">
                                                    <button data-loading-text="Loading..." onclick="location.href='<?= base_url('layanan'); ?>';" class="btn btn-default2 btn-md layanan1" style="height: 41px; "><i class="fa fa-search ico"></i> Temukan Titik Layanan</button>
                                                </div>
                                                <div class="col-md-12 i">
                                                    <i class="lock" style="color: #FB5C02;">Lokasi terdekat kami</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- </a> -->
                </li>
                <!-- </div> -->
            </ul>
        </div>
    </div>
</div>


<div class="three-tab" style="margin: 10% 0 10px 0;">
    <div class="col-md-0" style="float:right">
        <ul class="nav" style=" border-color: #ebebeb; outline: none; background: linear-gradient(293.8deg, #033498 0%, #00C0FF 170.7%); color: #c9c4c4; margin: 0 0 -1px 0; border-bottom: none; border-radius: 0;">
            <li class="active"><a href="<?= base_url('tarif'); ?>" class="icont"><img src="<?= base_url(); ?>assets/images/Cek Tarif (active) (1).svg" class="svg" alt="" width="15px" height="15px"></a></li>
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
                    <?php
                    foreach ($this->db->query('select * from tbl_slider')->result() as  $slider) { ?>

                        <style>
                            .flexslider.top_slider .slides li.slide<?= $slider->id ?> {
                                background-image: url(https://starcargo.digitalindo.co.id/upload/slider/<?= $slider->image; ?>);
                                webkit-background-size: cover;
                                -moz-background-size: cover;
                                -o-background-size: cover;
                                background-size: cover;
                            }
                        </style>

                        <li class="slide<?= $slider->id ?>">
                            <div class="container">
                                <div class="flex_caption1">

                                    <p class="slide-heading FromTop"><?= $slider->captionSlider1; ?></p><br />
                                    <div class="lineslider">

                                    </div>

                                    <p class="sub-line FromBottom"><?= $slider->captionSlider2; ?></p><br />

                                </div>
                            </div>
                        </li>

                    <? } ?>

                </ul>
            </div>
        </div>
    </div>
</div>

</header>

<!--start wrapper-->
<section class="wrapper mob-index">
    <!--start info service-->
    <section class="info_service" style="margin-top: 700px;">
        <div class="container">
            <div class="row sub_content mbl">
                <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInDown">
                    <div class="dividerHeading">
                        <h2><img src="<?= base_url(); ?>assets/images/dgt/Group88.png" width="5px"><span> Produk dan Layanan</span></h2>
                    </div>
                    <!-- <h1 class="intro text-left">Layanan Kami</h1> -->

                    <!-- <p class="lead text-center"></p> -->
                    <div class="col-lg-9 col-md-9 col-sm-9 wow fadeInDown">

                        <?php $bn = $this->db->query('Select * from tbl_banner where id = 3')->row(); ?>
                        <p class="lead text-left" style="font-size:18px; font-weight: 500;"><?php echo substr($bn->content, 0, 150) ?></p>
                        <!-- <p class="lead text-left"><?php echo substr("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tincidunt posuere est non iaculis. Suspendisse rutrum, odio eget condimentum eleifend.", 0, 150) ?></p> -->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 wow fadeInDown">
                        <a href="<?= base_url('layanan'); ?>" style="margin-left: 33px;"><img src="<?= base_url(); ?>assets/images/panah selengkapnya.svg" alt="" class="lengkap"></a>
                        <!-- <button type="button" class="buttons button4" onclick="location.href='https://starcargo.digitalindo.co.id/newwebsite/layanan';"><img src="<?= base_url(); ?>assets/images/panah selengkapnya.svg" alt="" style="margin-left: 40px;"></button> -->
                    </div>
                </div>
                <div class="rs_box  wow bounceInRight" data-wow-offset="200" style="margin-top: 84px;">
                    <div class="col-sm-6 col-lg-3">
                        <div class="serviceBox_3">
                            <div class="service-icon">
                                <!-- <img src="<?= base_url(); ?>assets/images/services/service-3-icon.png"> -->
                                <img src="<?= base_url(); ?>assets/images/dgt/HIS.png">
                                <!-- <i class="fa fa-thumbs-up"></i> -->
                            </div>
                            <h3 style="font-weight: 500;">Hari ini Kirim, Hari Ini Sampai (HIS) </h3>
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
                            <h3 style="font-weight: 500;">Hari Ini Kirim, Besok Sampai (HIB)</h3>
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
                            <h3 style="font-weight: 500;">Pelayanan Express (EXP)</h3>
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
                            <h3 style="font-weight: 500;">Pelayanan Reguler (REG)</h3>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa dignissimos distinctio ea eius laborum nesciunt qui quis quisquam quos!</p> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!----- ---->

    <section class="bg-grey">
        <div class="container">
            <div class="row ">

                <div class="col-sm-6 wow fadeInRight">
                    <div class="dividerHeading">
                        <?php $bn2 = $this->db->query('Select * from tbl_banner where id = 2')->row(); ?>
                        <!-- <h2><span>Keuatamaan Pelayanan Kami</span></h2> -->
                        <?php $post1 = $this->db->query('Select * from tbl_posts where id = 39')->row(); ?>
                        <h2><img src="<?= base_url(); ?>assets/images/dgt/Group88.png" width="5px"><span> Publikasi</span></h2>
                    </div>
                    <style>
                        strong {
                            font-size: 18px;
                            color: black;
                        }
                    </style>
                    <?php foreach ($blog as $news) { ?>
                        <p class="pcontent">
                        <p style="color: #868686;"><?= date("d/m/Y", strtotime($news->created_date)); ?></p>
                        <a href="<?= base_url(); ?>berita/read/<?= $news->slug; ?>"><strong><?= $news->Title; ?></strong></a>
                        </p>
                        <hr style=" display: block; height: 1px; border: 0; border-top: 1px solid #ccc; margin: 1em 0; padding: 0;">
                    <?php } ?>
                    <!-- <p class="pcontent">
                    <p style="color: #868686;">16/09/2021</p>
                    <strong>Semua karyawan Star Cargo sudah di Vaksin,
                        siap melayani masyarakat dengan aman.</strong>
                    </p>
                    <hr style=" display: block; height: 1px; border: 0; border-top: 1px solid #ccc; margin: 1em 0; padding: 0;">
                    <p class="pcontent">
                    <p style="color: #868686;">16/09/2021</p>
                    <strong>Kepuasan masyarakat berkat adanya Star Cargo</strong>
                    </p>
                    <hr style=" display: block; height: 1px; border: 0; border-top: 1px solid #ccc; margin: 1em 0; padding: 0;"> -->

                </div>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-5 wow fadeInLeft">
                    <div class="dividerHeading even">
                        <div class="dividerHeading">
                            <h2><img src="<?= base_url(); ?>assets/images/dgt/Group88.png" width="5px"><span> Event</span></h2>
                        </div>
                        <!-- <img src="<?= base_url(); ?>assets/images/dgt/Mask_Group.png" > -->
                        <!-- <img src="<?= base_url(); ?>assets/images/dgt/image9.png" class="imground" width="220" height="170"> -->
                        <img src="https://starcargo.digitalindo.co.id/upload/galeri/<?= $bn2->image ?>" class="imground" width="100%" height="170">
                        <p style="color: #868686;"><?= date("d/m/Y", strtotime($post1->created_date)); ?></p>
                        <a href="<?= base_url(); ?>berita/read/<?= $post1->slug; ?>"><strong><?= $post1->Title; ?></strong></a>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInDown">
                    <div class="dividerHeading">
                        <h2><img src="<?= base_url(); ?>assets/images/dgt/Group88.png" width="5px"><span> Promo Star Cargo</span></h2>
                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-9 wow fadeInDown">
                        <p class="lead text-left" style="font-weight: 500; font-size: 18px;">Temukan banyak promo menarik dari Star Cargo yang dapat kamu gunakan.</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 wow fadeInDown">
                        <a href="<?= base_url('promo'); ?>" style="margin-left: 33px;"><img src="<?= base_url(); ?>assets/images/panah promo.svg" class="lengkap" alt=""></a>
                        <!-- <button type="button" class="buttons button4" onclick="location.href='https://starcargo.digitalindo.co.id/newwebsite/promo';"><img src="<?= base_url(); ?>assets/images/panah promo.svg" alt="" style="margin-left: 40px;"></button> -->
                    </div>
                </div>



            </div>
            <div class="row wow bounceInRight">
                <?php foreach ($this->db->query("SELECT * from tbl_promo LIMIT 3")->result() as $p) { ?>
                    <div class="col-lg-4 wow fadeInLeft" style="margin-top:  39px;">
                        <img src="https://starcargo.digitalindo.co.id/upload/galeri/<?= $p->image; ?>" alt="" style="width: 100%;">
                    </div>
                <?php } ?>
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
                                        <input id="phone" type="number" class="form-control" maxlength="100" data-msg-required="Your Phone" name="phone" placeholder="Your Phone" required style="height: 46px;">
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

                        <h2 style="line-height: 0px;"><strong class="s">Telp : <?= $website->phone; ?>, <?= $i; ?></strong></h2>
                    </div>


                </div>
            </div>

        </div>
    </section>












</section>
<!--end wrapper-->

<style>
    .ui-autocomplete {
        max-height: 200px;
        overflow-y: auto;
        /* background-color: #c8ba37; */
        /* prevent horizontal scrollbar */
        overflow-x: hidden;
        /* add padding to account for vertical scrollbar */
        padding-right: 20px;
        z-index: 1000;
    }
</style>


<script>
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;
        return true;
    }

    $(document).ready(function() {
        base_url = '<?= base_url(); ?>';
        $("#hint").autocomplete({
            source: base_url + "autocomplete/search/" + $("#hint").val(),
            select: function(event, ui) {
                event.preventDefault();
                $("#hint").val(ui.item.label); // display the selected text
                $("#asal").val(ui.item.value); // save selected id to hidden input
            },
            focus: function(event, ui) {
                event.preventDefault();
                $("#hint").val(ui.item.label);
            },

            minLength: 3
        });

        $("#hint2").autocomplete({
            source: base_url + "autocomplete/search1/" + $("#hint").val(),
            select: function(event, ui) {
                event.preventDefault();
                $("#hint2").val(ui.item.label); // display the selected text
                $("#tujuan").val(ui.item.value); // save selected id to hidden input
            },
            focus: function(event, ui) {
                event.preventDefault();
                $("#hint2").val(ui.item.label);
            },

            minLength: 3
        });

    });

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

                    setInterval(function() {
                        window.location = base_url;
                    }, 3000);

                },


            });

            return false;

        });




        base_url = '<?= base_url(); ?>';


    });
</script>

<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<link rel=" stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />