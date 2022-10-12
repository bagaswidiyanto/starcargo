<style type="text/css">
    .ul{
       list-style: disc;
    margin-left: : 5px;
    list-style-position: inside;
    /*padding: 0;*/
    }

    .tabshadow{
      box-shadow: 0px 4px 40px rgba(0, 0, 0, 0.2);
border-radius: 10px;
    }

    .tabshadow2{
      box-shadow: 0px 4px 40px rgba(0, 0, 0, 0.2);

    }



</style>


<section class="content about">
  <section class="parallax parallax-1">
        <div class="container">
            <!--<h2 class="center">Testimonials</h2>-->
            <div class="row">
                <div class="col-lg-12 col-sm-12 wow bounceIn ">
                    <div class="heading-item">
                        <h4>
                           Destination </h4>
                       <!--  <p>
                            Bila ingin menanyakan lebih lanjut tentang layanan Himeji Express atau tentang perusahaan kami silah kan 
                        </p>
                        <a class="btn btn-default" href="<?=base_url();?>">Tinggalkan Pesan</a>
                        <em>atau hubuni kami langsung ke 
                            <strong>
                                <?=$website->phone;?>
                            </strong>
                        </em> -->
                    </div>
                </div>
            </div>
        </div>
    </section>




			<div class="container">
				<div class="row sub_content">
					<div class="who">

						<div class="col-lg-12 col-md-12 col-sm-12">



							<div class="dividerHeading">
								<h4><a href="<?=base_url();?>">Home</a> > <span>Destinasi </span></h4>
							</div>






                             <!--  <div class="three-tab">
            <div class="col-md-4 wow fadeInLeft" style="float:right">
                        <div class="widget widget_tab" style="width: 399px;"> -->
                            


                            <div class="three-tab">
  <!-- style="float:right" -->
  <div class="col-md-8 wow fadeInLeft">
  </div>
            <div class="col-md-4 wow fadeInLeft">
                        <div class="widget widget_tab"  style="width: 399px;">
                            <ul class="nav nav-tabs">
                                
                                    <!-- <li class="active">
                                        <img src="<?=base_url();?>assets/images/dgt/calc.png"> -->
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
                                    
                                    <form id="contactForm" method="post" action="<?php echo base_url().'prices';?>"  >
                            <div class="row">
                                <div class="form-group inputtabs">
                                    <div class="col-lg-12 ">
                                      <h5>Dari (Origin):</h5>
                                        <input type="text" id="hint" name="asal" class="form-control" maxlength="100" data-msg-required="Masukan Kota Asal" value="" placeholder="Kota Asal" required>
                                        <input type="hidden" id="asal" name="dari" class="form-control" />
                                    </div>
                                    <div class="col-lg-12">
                                      <h5>Ke (Destination):</h5>
                                        <input type="text" id="hint2" name="ke" class="form-control" maxlength="100" data-msg-required="Masukan Kota Tujuan"  value="" placeholder="Kota Tujuan" required>
                                        <input type="hidden" id="tujuan" name="tujuan" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                      <h5>Berat (Weight):</h5>
                                        <input type="text"  name="berat" id="berat" class="form-control" maxlength="100" data-msg-required="Masukan Berat" value="" placeholder="Berat (kg)" required>
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
                                    
                                    <form id="contactForm" method="post" action="<?php echo base_url().'tracking';?>" >
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
                                        <input type="text" id="username" name="name" class="form-control" maxlength="100" data-msg-required="Please enter your name." value="" placeholder="Username" >
                                    </div>
                                    <div class="col-lg-12">
                                       <h5>Password:</h5>
                                        <input type="password" id="password" name="password" class="form-control" maxlength="100" data-msg-email="Please enter a valid email address." data-msg-required="Please enter your email address." value="" placeholder="Password" >
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
    <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInDown">
    	<!-- <h1 class="intro text-center ">Kantor Cabang Kami</h1> -->
         <div class="dividerHeading">
                            <h2><span>Jangkauan Kami</span></h2>
                        </div>
        	<p class="lead text-left"> Daerah-daerah yang kami layani di Seluruh Indonesia</p>
            <img src="<?=base_url();?>assets/images/dgt/Peta_Indonesia.png" style="width: 70%;">

            <!-- //three -->

            <!-- //end -->



        </div>





    <!-- <div class="row sub_content">
           <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInDown">
                        <div class="dividerHeading">
                            <h4><span><a href="#">Netherland</a></span></h4>
                        </div>
                        <p>
                         Netherland
                        </p>

                        <div class="dividerHeading">
                            <h4><span><a href="#">Netherland</a></span></h4>
                        </div>
                        <p>
                         Netherland
                        </p>

                        <div class="dividerHeading">
                            <h4><span><a href="#">Netherland</a></span></h4>
                        </div>
                        <p>
                         Netherland
                        </p>
                     
                    </div>
</div> -->


<?php
              $count=$this->db->query("SELECT count(*) as jml from tbl_destination")->row();
              for ($i=1; $i <=$count->jml ; $i+=3) { 
                ?>
<div class="row">
  <?php
  foreach ($this->db->query("SELECT * from tbl_destination LIMIT 3 OFFSET ".($i-1))->result() as $glr) {?>
    <div class="col-md-4">
       <!-- <a href="https://karura.digitalindo.co.id/upload/foto_tbl_gallery_group/<?=$glr->image?>" data-fancybox="<?=$grp->grp?>" data-caption="<?=$grp->grp?>"> -->
                <!-- <div class="content-gallery-image-view" style="background: url(https://karura.digitalindo.co.id/upload/foto_tbl_gallery_group/<?=$glr->image?>);background-size: cover;"> -->
                    <div class="dividerHeading">
                        <!-- <h4><span><a href="#"><?=$glr->title;?></a></span></h4> -->
                            <h4><span><?=$glr->title;?></span></h4>
                        </div>

                    <p><?= $glr->content ?></p>

                </div>
      <!-- <img width="200" src="https://karura.digitalindo.co.id/upload/foto_tbl_gallery_group/<?=$glr->image?>"> -->
  <!--   </div> -->
  
  <?php
}
  ?>
             </div>
              <?php
            }
              ?>

      








                <!--  <div class="row sub_content" style="margin-bottom:-80px">

<div class="col-lg-5 col-md-5 col-sm-5 wow fadeInDown">
                        <div class="dividerHeading">
                            <h4><span><a href="#">Netherland</a></span></h4>
                        </div>
                         <ul class="ul">
                          <li>Netherland</li>
                        </ul>
                          
                     
                    </div> 

                    <div class="col-lg-5 col-md-5 col-sm-5 wow fadeInDown">
                        <div class="dividerHeading">
                            <h4><span><a href="#">United Arab Emirates</a></span></h4>
                        </div>
                         <ul class="ul">
                          <li>United Arab Emirates</li>
                        </ul>
                     
                    </div> 

                     <div class="col-lg-2 col-md-2 col-sm-2 wow fadeInDown">
                        <div class="dividerHeading">
                            <h4><span><a href="#">Australia</a></span></h4>
                        </div>
                         <ul class="ul">
                          <li>Australia</li>
                        </ul>
                     
                    </div>

                  

                   
                </div> -->
    </div>
						
						
					</div>
				</div>
                
                </div>
                </section>