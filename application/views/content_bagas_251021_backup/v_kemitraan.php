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

			</style>




			<section class="content about">

				<section class="parallax parallax-1">
        <div class="container">
            <!--<h2 class="center">Testimonials</h2>-->
            <div class="row">
                <div class="col-lg-12 col-sm-12 wow bounceIn ">
                    <div class="heading-item">
                        <h4>
                           Kemitraan </h4>
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
								<h4><a href="<?=base_url();?>">Home</a> > <span><?php echo $kemitraan->title;?> </span></h4>
							</div>
                            <section class="info_service">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInDown">
                          <!--   <?php echo $nav->content;?> -->
                           
                            <div class="dividerHeading">
                            <h2><img src="<?=base_url();?>assets/images/dgt/Group88.png" width="5px"><span>   <?= $kemitraan->title ?></span></h2>
                        </div>
                    <!-- <h1 class="intro text-left">Layanan Kami</h1> -->
                        
                    <!-- <p class="lead text-center"></p> -->
                    <div class="col-lg-10 col-md-10 col-sm-10 wow fadeInDown">
                     <p class="lead " align="justify"><?php echo $kemitraan->content ?></p>
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