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

    .button {
        background-color: #fff;
        /* Green */
        border-color: #f63f00;
        border: 1;
        color: #f63f00;
        padding: 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        width: 150px;
        margin: 4px 2px;
        cursor: pointer;
    }

    .button4 {
        border-radius: 12px;
    }

    .imground {
        border-radius: 5%;
        position: relative;
        width: 291px;
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


    .lineslider {
        position: relative;
        margin-left: 2.8%;
        width: 324px;
        height: 0px;
        /*left: 100px;
top: 425px;*/



        /* ORANGE */

        border: 2px solid #FB5C02;
    }

    .inputtabs {
        margin-top: -20px;
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

<div class="three-tab">
    <!-- style="float:right" -->
    <div class="col-md-8 wow fadeInLeft">
    </div>
    <div class="col-md-4 wow fadeInLeft">
        <div class="widget widget_tab">
            <ul class="nav nav-tabs">

                <!-- <li class="active">
                                        <img src="<?= base_url(); ?>assets/images/dgt/calc.png"> -->
                <!-- <a href="#Popular" data-toggle="tab"><i class="fa fa-calculator"></i><br>Cek Tarif</a></li> -->
                <li class="nav-tabs active"><a href="#Popular" data-toggle="tab"><i class="fa fa-calculator"></i><br>Cek Tarif</a></li>
                <li class=""><a href="#Recent" data-toggle="tab"><i class="fa fa-map-marker"></i><br>Cek Pengiriman</a></li>
                <li class=""><a href="#login" data-toggle="tab"><i class="fa fa-user"></i><br>Member Area</a></li>
            </ul>

            <div class="tab-content clearfix">
                <div class="tab-pane fade active in" id="Popular">
                    <!--    <p>Masukan Kota Asal dan Kota Tujuan</p> -->
                    <h2>Biaya Kirim</h2>
                    <!-- <div class="alert alert-success hidden alert-dismissable" id="contactSuccess">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <strong>Success!</strong> Your message has been sent to us.
                                    </div> -->

                    <form id="contactForm" method="post" action="<?php echo base_url() . 'prices'; ?>">
                        <div class="row">
                            <div class="form-group inputtabs">
                                <div class="col-lg-12 ">
                                    <h5>Dari (Origin):</h5>
                                    <input type="text" id="hint" name="asal" class="form-control" maxlength="100" data-msg-required="Masukan Kota Asal" value="" placeholder="Kota Asal" required>
                                    <input type="hidden" id="asal" name="dari" class="form-control" />
                                </div>
                                <div class="col-lg-12">
                                    <h5>Ke (Destination):</h5>
                                    <input type="text" id="hint2" name="ke" class="form-control" maxlength="100" data-msg-required="Masukan Kota Tujuan" value="" placeholder="Kota Tujuan" required>
                                    <input type="hidden" id="tujuan" name="tujuan" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <h5>Berat (Weight):</h5>
                                    <input type="text" name="berat" id="berat" class="form-control" maxlength="100" data-msg-required="Masukan Berat" value="" placeholder="Berat (kg)" required>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                      <h5>Berat (Weight):</h5>
                                        <input type="text"  name="berat" id="berat" class="form-control" maxlength="100" data-msg-required="Masukan Berat" value="" placeholder="Berat (kg)" required>
                                    </div>
                                </div>
                            </div> -->

                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" data-loading-text="Loading..." class="btn btn-default2 btn-md" value="Cek">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade in" id="Recent">
                    <!-- <p>Masukan No. AWB Anda.</p> -->
                    <h2>Status Kiriman</h2>
                    <!--   <div class="alert alert-success hidden alert-dismissable" id="contactSuccess">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <strong>Success!</strong> Your message has been sent to us.
                                    </div> -->

                    <form id="contactForm" method="post" action="<?php echo base_url() . 'tracking'; ?>">
                        <h5>Masukkan No. BPC Pengiriman anda!</h5>
                        <textarea id="tracking" class="form-control" name="tracking" rows="10" cols="20" data-msg-required="Masukan No.Awb Anda" maxlength="5000" placeholder="" style="height:90px"></textarea>
                        <div class="col-md-10" style="margin-left: -15px;">
                            <i style="color: #FB5C02;">Pengecekan multiple No. BPC dibatasi dengan tanda koma (,)</i>
                        </div>
                        <!-- <strong><em>This text is both bold and italics</em></strong> -->

                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" data-loading-text="Loading..." class="btn btn-default2 btn-md" value="Cek">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade  in" id="login">
                    <!-- <p>&nbsp; </p> -->
                    <!-- <p style="margin-top: 20px;">Login Form</p> -->
                    <h2>Login Form</h2>
                    <div class="alert alert-success hidden alert-dismissable" id="contactSuccess">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Success!</strong> Loging in your account.
                    </div>

                    <form id="loginForm">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-lg-12 ">
                                    <h5>Username:</h5>
                                    <input type="text" id="username" name="name" class="form-control" maxlength="100" data-msg-required="Please enter your name." value="" placeholder="Username">
                                </div>
                                <div class="col-lg-12">
                                    <h5>Password:</h5>
                                    <input type="password" id="password" name="password" class="form-control" maxlength="100" data-msg-email="Please enter a valid email address." data-msg-required="Please enter your email address." value="" placeholder="Password">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" data-loading-text="Loading..." class="btn btn-default2 btn-md" value="Login">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="three-tab">
        	<div class="col-md-4 wow fadeInLeft" style="float:right">
                        <div class="widget widget_tab">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#Popular" data-toggle="tab"><i class="fa fa-money"></i>&nbsp;&nbsp;Cek Tarif</a></li>
                                <li class=""><a href="#Recent" data-toggle="tab"><i class="fa fa-car"></i>&nbsp;&nbsp;Cek Pengiriman</a></li>
                                <li class=""><a href="#login" data-toggle="tab"><i class="fa fa-user"></i>&nbsp;&nbsp;Login </a></li>
                            </ul>

                            <div class="tab-content clearfix">
                                <div class="tab-pane fade active in" id="Popular">
                                    <p>Masukan Kota Asal dan Kota Tujuan</p>
                                     <div class="alert alert-success hidden alert-dismissable" id="contactSuccess">
						  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						  <strong>Success!</strong> Your message has been sent to us.
									</div>
                                    
                                    <form id="contactForm" method="post" action="<?php echo base_url() . 'prices'; ?>"  >
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-lg-12 ">
                                        <input type="text" id="hint" name="asal" class="form-control" maxlength="100" data-msg-required="Masukan Kota Asal" value="" placeholder="Kota Asal" required>
                                        <input type="hidden" id="asal" name="dari" class="form-control" />
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" id="hint2" name="ke" class="form-control" maxlength="100" data-msg-required="Masukan Kota Tujuan"  value="" placeholder="Kota Tujuan" required>
                                        <input type="hidden" id="tujuan" name="tujuan" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="text"  name="berat" id="berat" class="form-control" maxlength="100" data-msg-required="Masukan Berat" value="1" placeholder="Berat (kg)" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" data-loading-text="Loading..." class="btn btn-default btn-lg" value="Cek">
                                </div>
                            </div>
						</form>
                                </div>
                                <div class="tab-pane fade in" id="Recent">
                                    <p>Masukan No. AWB Anda.</p>
                                     <div class="alert alert-success hidden alert-dismissable" id="contactSuccess">
						  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						  <strong>Success!</strong> Your message has been sent to us.
									</div>
                                    
                                    <form id="contactForm" method="post" action="<?php echo base_url() . 'tracking'; ?>" >
                             <textarea id="tracking" class="form-control" name="tracking" rows="10" cols="20" data-msg-required="Masukan No.Awb Anda" maxlength="5000" placeholder="" style="height:90px"></textarea>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" data-loading-text="Loading..." class="btn btn-default btn-lg" value="Cek">
                                </div>
                            </div>
						</form>
                                </div>
                                <div class="tab-pane fade  in" id="login">
                                    <p>&nbsp;</p>
                                     <div class="alert alert-success hidden alert-dismissable" id="contactSuccess">
						  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						  <strong>Success!</strong> Loging in your account.
									</div>
                                    
                                    <form id="loginForm">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-lg-12 ">
                                        <input type="text" id="username" name="name" class="form-control" maxlength="100" data-msg-required="Please enter your name." value="" placeholder="Username" >
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="password" id="password" name="password" class="form-control" maxlength="100" data-msg-email="Please enter a valid email address." data-msg-required="Please enter your email address." value="" placeholder="Password" >
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" data-loading-text="Loading..." class="btn btn-default btn-lg" value="Login">
                                </div>
                            </div>
						</form>
                                </div>
                            </div>
                        </div>
                    </div>
        </div> -->


<div class="slider_block">
    <div class="flexslider top_slider" style="margin-bottom: 200px;">
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
            <!-- <li class="slide4">
                        <div class="container">
                            <div class="flex_caption1">

                                <p class="slide-heading FromTop"><?= $slider4->captionSlider1; ?></p><br/>
                                <div class="lineslider">
                                  
                                </div>

                                <p class="sub-line FromBottom"><?= $slider4->captionSlider2; ?></p><br/>
                                
                            </div>
                           
                        </div>
                    </li>

                    <li class="slide5">
                        <div class="container">
                            <div class="slide flex_caption1">
                                <p class="slide-heading FromTop"><?= $slider5->captionSlider1; ?></p><br/>
                                <div class="lineslider">
                                  
                                </div>

                                <p class="sub-line FromRight"><?= $slider5->captionSlider2; ?></p><br/>


                            </div>
                        </div>
                    </li>
                    <li class="slide6">
                        <div class="container">
                            <div class="slide flex_caption1">
                                <p class="slide-heading FromTop"><?= $slider6->captionSlider1; ?> </p><br/>
                                <div class="lineslider">
                                  
                                </div>

                                <p class="sub-line FromRight"><?= $slider6->captionSlider2; ?></p><br/>

                            </div>
                        </div>
                    </li> -->
        </ul>
    </div>
</div>
</header>

<!--start wrapper-->
<section class="wrapper mob-index">
    <!--start info service-->
    <section class="info_service" style="margin-top: 400px;">
        <div class="container">
            <div class="row sub_content">
                <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInDown">
                    <div class="dividerHeading">
                        <h2><img src="<?= base_url(); ?>assets/images/dgt/Group88.png" width="5px"><span> Layanan Kami</span></h2>
                    </div>
                    <!-- <h1 class="intro text-left">Layanan Kami</h1> -->

                    <!-- <p class="lead text-center"></p> -->
                    <div class="col-lg-10 col-md-10 col-sm-10 wow fadeInDown">

                        <?php $bn = $this->db->query('Select * from tbl_banner where id = 3')->row(); ?>
                        <p class="lead text-left"><?php echo substr($bn->content, 0, 150) ?></p>
                        <!-- <p class="lead text-left"><?php echo substr("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tincidunt posuere est non iaculis. Suspendisse rutrum, odio eget condimentum eleifend.", 0, 150) ?></p> -->
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 wow fadeInDown">
                        <div class="col-md-12">
                            <!-- <input type="submit" data-loading-text="Loading..." class="btn btn-default btn-lg" value="Selengkapnya"> -->
                            <button type="button" class="button button4" onclick="location.href='https://starcargo.digitalindo.co.id/website/layanan';">Selengkapnya <i class="fa fa-arrow-right"></i></button>
                            <!-- <input type="button" class="button button4" onclick="location.href='https://starcargo.digitalindo.co.id/website/layanan';" value="Selengkapnya" /> -->
                        </div>
                    </div>
                </div>
                <div class="rs_box  wow bounceInRight" data-wow-offset="200">
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
                                <img src="<?= base_url(); ?>assets/images/dgt/Express.png" style="width: 85%;">
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
    <!----- ---->

    <!--end info service-->
    <section class="bg-grey">
        <div class="container">
            <div class="row ">
                <div class="col-sm-4 wow fadeInLeft" data-wow-offset="400">
                    <div class="dividerHeading">
                        <?php $bn = $this->db->query('Select * from tbl_banner where id = 1')->row(); ?>
                        <div class="col-sm-6 col-lg-3">
                            <div class="imgbanner">
                                <img src="<?= base_url(); ?>assets/images/dgt/Mask_Group.png" width="190" height="180">

                            </div>
                            <!-- <img src="<?= base_url(); ?>assets/images/dgt/image8.png" class="imground" width="220" height="170"> -->
                            <img src="https://starcargo.digitalindo.co.id/upload/galeri/<?= $bn->image ?>" class="imground" width="220" height="170">
                        </div>

                    </div>

                </div>
                <div class="col-sm-8 wow fadeInRight" data-wow-offset="400">
                    <div class="dividerHeading">
                        <!-- <h2><span>Bagaimana kami melayani anda?</span></h2> -->
                        <h2><img src="<?= base_url(); ?>assets/images/dgt/Group88.png" width="5px"><span> <?= $bn->title ?></span></h2>
                    </div>
                    <p class="pcontent">
                        <!-- <?= $website->description; ?> -->
                        <!--  	Setiap hari pelanggan mengandalkan STAR CARGO untuk kebutuhan pengiriman mereka dan kami juga benar-benar terkesan mendengar tentang hal itu. Memahami bagaimana perasaan pelanggan tentang layanan yang diterima baik atau buruk sangat penting dalam membantu kami membangun bisnis untuk melayani pelanggan dengan lebih baik. -->
                        <?= $bn->content ?>
                    </p>
                    <!-- <ul class="list_style">
                            <li>Kami siap menjemput paket anda di lokasi</li>
                            <li>Kami siap mengemas rapi paket anda</li>
                            <li>Kami memastikan paket aman dari resiko</li>
                        </ul> -->
                    <br />
                    <!-- <a class="btn btn-default" href="">READ MORE</a> -->
                </div>
                <!--   <div class="col-sm-6 wow fadeInRight" data-wow-offset="400">
                        <div class="dividerHeading">
                            <h4><span>Pendukung</span></h4>
                        </div>
                        <p>
                        </p>
                        <ul class="list_style">
                            <li>Kami siap menjemput paket anda di lokasi</li>
                            <li>Kami siap mengemas rapi paket anda</li>
                            <li>Kami memastikan paket aman dari resiko</li>
                        </ul>
                        <br />
                        <a class="btn btn-default" href="">READ MORE</a>
                    </div> -->
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container">
            <div class="row ">

                <div class="col-sm-6 wow fadeInRight" data-wow-offset="400">
                    <div class="dividerHeading">
                        <?php $bn2 = $this->db->query('Select * from tbl_banner where id = 2')->row(); ?>
                        <!-- <h2><span>Keuatamaan Pelayanan Kami</span></h2> -->
                        <h2><img src="<?= base_url(); ?>assets/images/dgt/Group88.png" width="5px"><span> <?= $bn2->title ?></span></h2>
                    </div>
                    <p class="pcontent">
                        <!-- <?= $website->description; ?> -->
                        <?= $bn2->content ?>
                        <!-- 	Segala sesuatu yang dipindahkan dari satu tempat ke tempat lain membutuhkan bantuan logistik, tetapi di balik pernyataan yang sederhana ini dibutuhkan sebuah kepercayaan. Percayakan kami untuk melayani pengiriman di seluruh Indonesia, angkutan melalui udara, darat & laut, pengiriman barang / cargo, pengiriman dokumen, angkutan pindahan rumah atau pun kantor dan pengiriman khusus. -->
                    </p>
                    <!-- <ul class="list_style">
                            <li>Kami siap menjemput paket anda di lokasi</li>
                            <li>Kami siap mengemas rapi paket anda</li>
                            <li>Kami memastikan paket aman dari resiko</li>
                        </ul> -->
                    <br />
                    <!-- <a class="btn btn-default" href="">READ MORE</a> -->
                </div>
                <div class="col-sm-6 wow fadeInLeft" data-wow-offset="400">
                    <div class="dividerHeading">
                        <div class="col-sm-7 col-lg-3">
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="imgbanner2">
                                <img src="<?= base_url(); ?>assets/images/dgt/Mask_Group.png" width="190" height="180">

                            </div>
                            <!-- <img src="<?= base_url(); ?>assets/images/dgt/Mask_Group.png" > -->
                            <!-- <img src="<?= base_url(); ?>assets/images/dgt/image9.png" class="imground" width="220" height="170"> -->
                            <img src="https://starcargo.digitalindo.co.id/upload/galeri/<?= $bn2->image ?>" class="imground" width="220" height="170">
                        </div>

                    </div>

                </div>
                <!--   <div class="col-sm-6 wow fadeInRight" data-wow-offset="400">
                        <div class="dividerHeading">
                            <h4><span>Pendukung</span></h4>
                        </div>
                        <p>
                        </p>
                        <ul class="list_style">
                            <li>Kami siap menjemput paket anda di lokasi</li>
                            <li>Kami siap mengemas rapi paket anda</li>
                            <li>Kami memastikan paket aman dari resiko</li>
                        </ul>
                        <br />
                        <a class="btn btn-default" href="">READ MORE</a>
                    </div> -->
            </div>
        </div>
    </section>


    <!--start wrapper-->
    <!-- <section class="wrapper mob-index">
		start info service
		<section class="info_service">
        <div class="container">
            <div class="row sub_content">
                <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInDown">
                    <line2>
                    <h1 class="intro text-center">Keunggulan Kami</h1>
                    <p class="lead text-center"></p>
                </div>
                <div class="rs_box  wow bounceInRight" data-wow-offset="200">
                    <div class="col-sm-6 col-lg-3">
                        <div class="serviceBox_3">
                            <div class="service-icon">
                                <img src="<?= base_url(); ?>assets/images/services/service-3-icon.png">
                               <i class="fa fa-thumbs-up"></i>
                            </div>
                            <h3>Layanan Berkualitas</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa dignissimos distinctio ea eius laborum nesciunt qui quis quisquam quos!</p>
                          
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="serviceBox_3">
                            <div class="service-icon">
                                <img src="<?= base_url(); ?>assets/images/services/service-3-icon1.png">
                                <i class="fa fa-bolt"></i>
                            </div>
                            <h3>Lebih Cepat</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa dignissimos distinctio ea eius laborum nesciunt qui quis quisquam quos!</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="serviceBox_3">
                            <div class="service-icon">
                                <img src="<?= base_url(); ?>assets/images/services/service-3-icon2.png">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <h3>Lebih Tepat</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa dignissimos distinctio ea eius laborum nesciunt qui quis quisquam quos!</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="serviceBox_3">
                            <div class="service-icon">
                                <img src="<?= base_url(); ?>assets/images/services/service-3-icon3.png">
                                 <i class="fa fa-lock"></i>
                            </div>
                            <h3>Lebih Aman</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa dignissimos distinctio ea eius laborum nesciunt qui quis quisquam quos!</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section> -->
    <!----- ---->
    <!--  <section class="parallax parallax-1">
        <div class="container">
            <h2 class="center">Testimonials</h2>
            <div class="row">
                <div class="col-lg-12 col-sm-12 wow bounceIn ">
                    <div class="heading-item">
                        <h4>
                            Kontak Kami </h4>
                        <p>
                            Bila ingin menanyakan lebih lanjut tentang layanan Himeji Express atau tentang perusahaan kami silah kan 
                        </p>
                        <a class="btn btn-default" href="<?= base_url(); ?>">Tinggalkan Pesan</a>
                        <em>atau hubuni kami langsung ke 
                            <strong>
                                <?= $website->phone; ?>
                            </strong>
                        </em>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--end info service-->


    <!--   <section class="bg-grey">
            <div class="container">
                <div class="row ">
                    <div class="col-sm-6 wow fadeInLeft" data-wow-offset="400">
                        <div class="dividerHeading">
                            <h4><span>Tentang Kami</span></h4>
                        </div>
                        <p><?= $website->description; ?>
                        </p>
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-offset="400">
                        <div class="dividerHeading">
                            <h4><span>Pendukung</span></h4>
                        </div>
                        <p>
                        </p>
                        <ul class="list_style">
                            <li>Kami siap menjemput paket anda di lokasi</li>
                            <li>Kami siap mengemas rapi paket anda</li>
                            <li>Kami memastikan paket aman dari resiko</li>
                        </ul>
                        <br />
                        <a class="btn btn-default" href="">READ MORE</a>
                    </div>
                </div>
            </div>
        </section> -->


    <!--Start recent work-->
    <!-- <section class="latest_work">
			<div class="container">
				<div class="row">
					<div class="carousel-intro wow fadeInDown"  data-wow-offset="200">
						<div class="col-md-12">
							<div class="dividerHeading">
								<h4><span>Klien Kami</span></h4>
							</div>
							<div class="carousel-navi">
								<div id="work-prev" class="arrow-left jcarousel-prev"><i class="fa fa-angle-left"></i></div>
								<div id="work-next" class="arrow-right jcarousel-next"><i class="fa fa-angle-right"></i></div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>

                    <div class="jcarousel recent-work-jc wow fadeInDown"  data-wow-offset="200">
                        <ul class="jcarousel-list">
                     
                        <?php foreach ($client as $klien) { ?>
                            Recent Work Item
                            <li class="col-sm-3 col-md-3 col-lg-3">
                                <figure class="touching effect-bubba">
                                    <img src="<?= base_url(); ?>admin/upload/client/<?= $klien->image; ?>"  alt="<?= $klien->name; ?>" class="img-responsive">
                                </figure>
                            </li>
                            <?php
                        }
                            ?>
                        </ul>
                    </div>
				</div>
			</div>
		</section> -->
    <!--Start recent work-->
    <!--  <section class="bg-grey">
            <div class="container">
                <div class="row ">
                    <div class="col-sm-12 wow fadeInLeft" data-wow-offset="400">
                        <div class="dividerHeading">
                            <h4><span>Snapshot</span></h4>
                        </div>
                       <div class="row">
                         <?php foreach ($gallery as $gal) { ?>
                            Recent Work Item
                          <div class="col-sm-4" style="margin-top:2%;">
                              
                                    <img src="<?= base_url(); ?>admin/upload/gallery/<?= $gal->image; ?>"  alt="<?= $gal->name; ?>" class="img-responsive">
                               
                           </div>
                            <?php
                            }
                            ?>
                       </div>
                    </div>
                
                </div>
            </div>
        </section> -->

    <section class="bg-grey">
        <div class="container">
            <div class="row ">
                <div class="col-sm-12 wow fadeInLeft" data-wow-offset="400">
                    <div class="dividerHeading">
                        <!-- div class="linegaris">
                        		
                        	</div> -->
                        <h2 style="text-align: center;"><img src="<?= base_url(); ?>assets/images/dgt/Group88.png" width="5px"><span> Statik Pengunjung</span></h2>
                    </div>
                    <div class="row">
                        <div class="rs_box  wow bounceInRight" data-wow-offset="200">
                            <div class="col-sm-6 col-lg-3">
                                <div class="serviceBox_3r">
                                    <div class="service-icon">

                                        <img src="<?= base_url(); ?>assets/images/dgt/DATE.png">
                                        <!-- <?= '<h3 >' . date('d') . '</h3>'; ?> -->
                                        <h1><?= date('d') ?></h1>
                                    </div>

                                    <?php
                                    $date = date('Y-m-d');
                                    echo '<h3 class="h3st">' . format_hari_tanggal($date) . '</h3>';
                                    ?>


                                    <!-- <h3>Hari ini Kirim, Hari Ini Sampai (HIS) </h3> -->
                                    <!--   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa dignissimos distinctio ea eius laborum nesciunt qui quis quisquam quos!</p> -->

                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="serviceBox_3r">

                                    <div class="service-icon">

                                        <img src="<?= base_url(); ?>assets/images/dgt/TRAFICT.png">
                                        <h1><?php echo $online->jml; ?></h1>
                                    </div>
                                    <!-- <h1>Online Visitor Today</h1> -->
                                    <h3 class="h3st">Online Visitor Today</h3>
                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa dignissimos distinctio ea eius laborum nesciunt qui quis quisquam quos!</p> -->
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="serviceBox_3r">
                                    <div class="service-icon">

                                        <img src="<?= base_url(); ?>assets/images/dgt/USER.png">
                                        <h1><?php echo $today->jml; ?></h1>
                                    </div>
                                    <!-- <h1>Online Visitor Today</h1> -->
                                    <h3 class="h3st">Visitor Today</h3>

                                    <!-- <h3>Pelayanan Express (EXP)</h3> -->
                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa dignissimos distinctio ea eius laborum nesciunt qui quis quisquam quos!</p> -->
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="serviceBox_3r">
                                    <div class="service-icon">

                                        <img src="<?= base_url(); ?>assets/images/dgt/GROUP.png">
                                        <h2><?php echo $all->jml; ?></h2>
                                    </div>
                                    <!-- <h1>Online Visitor Today</h1> -->
                                    <h3 class="h3st">Total Visitor</h3>

                                    <!-- <h3>Pelayanan Reguler (REG)</h3> -->
                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa dignissimos distinctio ea eius laborum nesciunt qui quis quisquam quos!</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!--start wrapper-->

    <!-- 	<section class="bg-grey">
			<div class=" container">
				
				
                <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInRight">
                        <div class="dividerHeading">
                            <h4><span>Testimoni </span></h4>
                        </div>
                        <div id="testimonial-carousel" class="testimonial carousel slide">
                            <div class="carousel-inner">


                            <?php
                            $no = 1;
                            foreach ($testi as $testi) {
                                if ($no != 1) {
                                    echo '<div class="item">
                                    <div class="testimonial-item">
                                        <div class="icon"><i class="fa fa-quote-right"></i></div>
                                        <blockquote>
                                            <p>' . $testi->testi . '</p>
                                        </blockquote>
                                        <div class="icon-tr"></div>
                                        <div class="testimonial-review">
                                            <img src="' . base_url() . 'assets/images/testimonials/1.png" alt="testimoni">
                                            <h1>' . $testi->nama . ',<small>' . $testi->email . '</small></h1>
                                        </div>
                                    </div>
                                </div>';

                                    $no++;
                                } else {
                                    echo ' <div class="active item">
                                    <div class="testimonial-item">
                                        <div class="icon"><i class="fa fa-quote-right"></i></div>
                                        <blockquote>
                                            <p>' . $testi->testi . '</p>
                                        </blockquote>
                                        <div class="icon-tr"></div>
                                        <div class="testimonial-review">
                                            <img src="' . base_url() . 'assets/images/testimonials/1.png" alt="testimoni">
                                            <h1>' . $testi->nama . ',<small>' . $testi->email . '</small></h1>
                                        </div>
                                    </div>
                                </div>';
                                    $no++;
                                }
                            }
                            ?>
                                                      


                            </div>
                            <div class="testimonial-buttons"><a href="#testimonial-carousel" data-slide="prev"><i class="fa fa-chevron-left"></i></a>&#32;
                                <a href="#testimonial-carousel" data-slide="next"><i class="fa fa-chevron-right"></i></a></div>
                        </div>
                        <div class="dividerHeading">
                            <h4><span>Tambah Testimoni </span></h4>
                        </div>
                        <form id="testimon"  >
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-lg-12 ">
                                        <input type="text" id="namatesti" name="namatesti" class="form-control" maxlength="100" data-msg-required="Masukan nama anda" value="" placeholder="Nama" >
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="email" id="emailtesti" name="emailtesti" class="form-control" maxlength="100" data-msg-email="Masukan email anda" data-msg-required="Please enter your email address." value="" placeholder="Email" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <textarea id="testi" class="form-control" name="testi" rows="10" cols="20" data-msg-required="Masukan testimonial anda." maxlength="5000" placeholder="Testimoni" style="height:90px"></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" data-loading-text="Loading..." class="btn btn-default btn-lg" >Kirim</button>
                                </div>
                            </div>
						</form>
                    </div>
           
            <div class="container">
                <div class="row feature_bottom">
                    <div class="col-lg-8 col-md-8 col-sm-8 wow fadeInLeft">
                        <div class="dividerHeading">
                            <h4><span>Berita Terbaru</span></h4>
                        </div>
                        <div class="row">

                        <?php foreach ($berita as $rec) { ?>
                            <div class="col-lg-6  rec_blog">
                                <div class="blogPic">
                                    <div class="news-thumb">
                                        <div >
                                            <img src="<?= base_url(); ?>admin/upload/post/<?= $rec->image; ?>">
                                        </div>
                                    </div>

                                </div>
                                <div class="blogDetail">
                                    <div class="blogTitle">
                                        <a href="<?= base_url(); ?>berita/read/<?= $rec->slug; ?>">
                                            <h2><?= $rec->Title; ?></h2>
                                        </a>
                                        <span>
                                            <i class="fa fa-calendar"></i>
                                           <?= $rec->created_date; ?>
                                        </span>&nbsp;&nbsp;&nbsp;
                                        <span><i class="fa fa-user"></i> Admin </span>
                                    </div>
                                    <div class="blogContent">
                                        <p><?= substr(strip_tags($rec->content), 0, 150) . ' ...'; ?></p>
                                    </div>                                    
                                </div>
                            </div>
                            <?php
                        }
                            ?>

                            <div class="col-lg-6  rec_blog">
                                <div class="blogPic">
                                    <div class="news-thumb">
                                        <div >
                                            <img src="images/about/porto1.jpg">
                                        </div>
                                    </div>

                                </div>
                                <div class="blogDetail">
                                    <div class="blogTitle">
                                        <a href="detail-berita.html">
                                            <h2>Veos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est</h2>
                                        </a>
                                        <span>
                                            <i class="fa fa-calendar"></i>
                                            30 June, 20:43 PM
                                        </span>&nbsp;&nbsp;&nbsp;
                                        <span><i class="fa fa-user"></i> Admin </span>
                                    </div>
                                    <div class="blogContent">
                                        <p>Etu eros omnes theophratus mei, cumit usulan dicit omnium eripuit. Qui tever iluma facete gubergren. </p>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
      
			</div>
	</div>	

        </section> -->



    <section class="parallax parallax-1">
        <div style="background: rgba(0,0,0,0.3);">

            <div class="container">
                <!--<h2 class="center">Testimonials</h2>-->
                <div class="row">
                    <div class="col-lg-12 col-sm-12 wow bounceIn ">
                        <div class="heading-item">
                            <h4>
                                "Kami Hadirkan Bandara Ke Depan Anda" </h4>
                            <!--  <p>
                            Bila ingin menanyakan lebih lanjut tentang layanan Himeji Express atau tentang perusahaan kami silah kan 
                        </p>
                        <a class="btn btn-default" href="<?= base_url(); ?>">Tinggalkan Pesan</a>
                        <em>atau hubuni kami langsung ke 
                            <strong>
                                <?= $website->phone; ?>
                            </strong>
                        </em> -->
                        </div>
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
        /* prevent horizontal scrollbar */
        overflow-x: hidden;
        /* add padding to account for vertical scrollbar */
        padding-right: 20px;
        z-index: 1000;
    }
</style>
<script>
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
            source: base_url + "autocomplete/search/" + $("#hint").val(),
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

        $("#testimon").submit(function() {

            $("#testimon .btn").attr("disabled", true);

            var data = {

                namatesti: $("#namatesti").val(),

                emailtesti: $("#emailtesti").val(),

                testi: $("#testi").val()

            };

            $.ajax({

                type: "POST",

                url: base_url + "testi",

                data: data,

                success: function(response) {

                    $('.success').fadeIn(1000);

                    $("#testimon .btn").attr("disabled", false);

                    alert(response);

                    setInterval(function() {
                        window.location = base_url;
                    }, 3000);

                },

                error: function(response) {

                    $('.error').fadeIn(1000);

                    $("#testimon .btn").attr("disabled", false);
                    alert(response);
                    setInterval(function() {
                        window.location = base_url;
                    }, 3000);

                }

            });

            return false;

            ;
        });



        base_url = '<?= base_url(); ?>';

        $("form#loginForm").submit(function() {

            $(".btn").attr("disabled", true);

            var data = {
                username: $("#username").val(),
                password: $("#password").val(),
                method: 'crosssite'
            };


            $.ajax({

                type: "POST",

                // url: base_url+"sistem/inc/login.php",
                url: "https://starcargo.digitalindo.co.id/inc/login.php",

                data: data,

                success: function(data) {

                    if (data) {
                        //redirect jika berhasil login
                        setInterval(function() {
                            window.location = 'https://starcargo.digitalindo.co.id/inc/login.php?t=' + data;
                        }, 1000);
                    } else {
                        alert('Username atau Password Salah');
                    }
                    $(".btn").attr("disabled", false);


                },

                error: function() {

                    alert('Username atau Password Salah.');
                    $(".btn").attr("disabled", false);

                }

            });

            return false;

        });

    });
</script>