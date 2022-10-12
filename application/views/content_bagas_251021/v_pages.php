			<style type="text/css">
				/*//tambahan*/
.imground {
  border-radius: 5%;
  position: relative;
  width: 156px;
height: 160px;
/*left: 99px;
top: 99px;*/
}

.imground2 {
  border-radius: 5%;
  position: relative;
  width: 304px;
height: 204px;
/*left: 99px;
top: 99px;*/
}

.imgbanner2{
	position: absolute;
	z-index: -9999;
	top:80px;
	left:200px;
}

.foot {
  /*font-family: Poppins;*/
font-style: normal;
font-weight: 500;
font-size: 16px;
line-height: 180.5%;
/* or 32px */


color: #262626;

}

.opac{
  background-color: black;
opacity: 0.3;
}

			</style>




			<section class="content about">
          
        
				<section class="parallax parallax-1">
        <!-- <div class="opac"> -->
        <div class="container">
            <!--<h2 class="center">Testimonials</h2>-->
            <div class="row">
                <div class="col-lg-12 col-sm-12 wow bounceIn ">
                    <div class="heading-item">
                        <h4>
                           About Us </h4>
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
  <!-- </div> -->
    </section>



			<div class="container">
				<div class="row sub_content">
					<div class="who">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="dividerHeading">
								<h4><a href="<?=base_url();?>">Home</a> > <span><?php echo $nav->title;?> </span></h4>
							</div>
                            <section class="info_service">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInDown">
                          <!--   <?php echo $nav->content;?> -->
                           
                            <div class="dividerHeading">
                            <h2><img src="<?=base_url();?>assets/images/dgt/Group88.png" width="5px"><span>   Tentang Kami</span></h2>
                        </div>
                    <!-- <h1 class="intro text-left">Layanan Kami</h1> -->
                        
                    <!-- <p class="lead text-center"></p> -->
                    <div class="col-lg-10 col-md-10 col-sm-10 wow fadeInDown">
                     <p><?php echo $latar->content ?></p>
                 </div>
						</div> 



						<!-- //visi -->
						 <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInDown">
                          <!--   <?php echo $nav->content;?> -->
                           
                            <div class="dividerHeading">
                            <h2><img src="<?=base_url();?>assets/images/dgt/Group88.png" width="5px"><span>   Visi</span></h2>
                        </div>
                    <!-- <h1 class="intro text-left">Layanan Kami</h1> -->
                        
                    <!-- <p class="lead text-center"></p> -->
                    <div class="col-lg-10 col-md-10 col-sm-10 wow fadeInDown">
                     <p class="lead " align="justify"><?php echo $visi->content ?></p>
                 </div>
						</div>  

						<!-- //foto  -->
					<div class="col-lg-6 col-md-6 col-sm-6 wow fadeInDown">
                          <!--   <?php echo $nav->content;?> -->
                           
                            <div>
                            <h2></h2>
                                <!-- br -->
                        	</div>
                         
                    <!-- <h1 class="intro text-left">Layanan Kami</h1> -->
                        
                    <!-- <p class="lead text-center"></p> -->
                    <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInDown">
                    	<img src="https://starcargo.digitalindo.co.id/upload/profile/<?= $ceo->image ?>" class="imground">

                 </div>

                 <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInDown">
                    	
                 	<h2><?php echo $ceo->posisi ?></h2>
                     <p class="lead " ><?php echo $ceo->content ?></p>
                 </div>



						</div>



					<div class="col-lg-6 col-md-6 col-sm-6 wow fadeInDown">
                          <!--   <?php echo $nav->content;?> -->
                           
                            <div class="dividerHeading">
                            <h2><img src="<?=base_url();?>assets/images/dgt/Group88.png" width="5px"><span>   Misi</span></h2>
                        </div>
                    <!-- <h1 class="intro text-left">Layanan Kami</h1> -->
                        
                    <!-- <p class="lead text-center"></p> -->
                    <div class="col-lg-10 col-md-10 col-sm-10 wow fadeInDown">
                     <p class="lead " ><?php echo $misi->content ?></p>
                 </div>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 wow fadeInDown">
                          <!--   <?php echo $nav->content;?> -->
                           
                            <div>
                            <h2><span></span></h2>
                        </div>
                    <!-- <h1 class="intro text-left">Layanan Kami</h1> -->
                        
                    <!-- <p class="lead text-center"></p> -->
                    <div class="col-lg-10 col-md-10 col-sm-10 wow fadeInDown">
                     <img src="https://starcargo.digitalindo.co.id/upload/profile/<?= $img->image ?>" class="imground2" width="220" height="170">
                     <div class="imgbanner2">
                        	<img src="<?=base_url();?>assets/images/dgt/Mask_Group.png" width="190" height="180">
                        		
                        	</div>

                 </div>
						</div>





						<div class="col-lg-6 col-md-6 col-sm-6 wow fadeInDown">
                          <!--   <?php echo $nav->content;?> -->
                           
                            <div class="dividerHeading">
                            <h2><img src="<?=base_url();?>assets/images/dgt/Group88.png" width="5px"><span>   Sasaran</span></h2>
                        </div>
                    <!-- <h1 class="intro text-left">Layanan Kami</h1> -->
                        
                    <!-- <p class="lead text-center"></p> -->
                    <div class="col-lg-10 col-md-10 col-sm-10 wow fadeInDown">
                     <p class="lead " ><?php echo $sasaran->content ?></p>
                 </div>
						</div>

						<!-- //break -->
						<div  class="col-lg-10 col-md-10 col-sm-10 wow fadeInDown">
							<br>
						</div>
						<!-- break -->

						<div class="col-lg-6 col-md-6 col-sm-6 wow fadeInDown">
                          <!--   <?php echo $nav->content;?> -->
                           
                            <div class="dividerHeading">
                            <h2><img src="<?=base_url();?>assets/images/dgt/Group88.png" width="5px"><span>   Fokus Pelayanan</span></h2>
                        </div>
                    <!-- <h1 class="intro text-left">Layanan Kami</h1> -->
                        
                    <!-- <p class="lead text-center"></p> -->
                    <div class="col-lg-10 col-md-10 col-sm-10 wow fadeInDown">
                     <p class="lead " ><?php echo $fokus->content ?></p>
                 </div>
						</div>	






            </div>

        </div>
    </section>
               
						</div>
						
						
					</div>
				</div>
                
                </div>
                </section>