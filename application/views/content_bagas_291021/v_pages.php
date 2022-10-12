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

				.imgbanner2 {
					position: absolute;
					z-index: -9999;
					top: 80px;
					left: 200px;
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

				.opac {
					background-color: black;
					opacity: 0.3;
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
				<!-- <div class="opac"> -->
				<div class="container">
					<!--<h2 class="center">Testimonials</h2>-->
					<div class="row">
						<div class="col-lg-12 col-sm-12 wow bounceIn ">
							<div class="heading-item">
								<h4 style="margin-top: 150px; margin-bottom: -30px;">Tentang Perusahaan</h4>
							</div>
						</div>
					</div>
				</div>
				<!-- </div> -->
			</section>

			<section class="content about">


				<div class="container">
					<div class="row sub_content">
						<div class="who">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<section class="info_service">
									<div class="container">
										<div class="row ">
											<div class="col-lg-12 col-md-12 col-sm-12 wow fadeInDown">
												<!--   <?php echo $nav->content; ?> -->

												<div class="dividerHeading">
													<h2><img src="<?= base_url(); ?>assets/images/dgt/Group88.png" width="5px"><span> Tentang Kami</span></h2>
												</div>
												<!-- <h1 class="intro text-left">Layanan Kami</h1> -->

												<!-- <p class="lead text-center"></p> -->
												<div class="col-lg-10 col-md-10 col-sm-10 wow fadeInDown">
													<p><?php echo $latar->content ?></p>
												</div>
											</div>



											<!-- //visi -->
											<div class="col-lg-6 col-md-6 col-sm-6 wow fadeInDown">
												<!--   <?php echo $nav->content; ?> -->

												<div class="dividerHeading">
													<h2><img src="<?= base_url(); ?>assets/images/dgt/Group88.png" width="5px"><span> Visi</span></h2>
												</div>
												<!-- <h1 class="intro text-left">Layanan Kami</h1> -->

												<!-- <p class="lead text-center"></p> -->
												<div class="col-lg-10 col-md-10 col-sm-10 wow fadeInDown">
													<p class="lead " align="justify"><?php echo $visi->content ?></p>
												</div>
											</div>

											<!-- //foto  -->
											<div class="col-lg-6 col-md-6 col-sm-6 wow fadeInDown">
												<!--   <?php echo $nav->content; ?> -->

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
													<p class="lead "><?php echo $ceo->content ?></p>
												</div>



											</div>



											<div class="col-lg-6 col-md-6 col-sm-6 wow fadeInDown">
												<!--   <?php echo $nav->content; ?> -->

												<div class="dividerHeading">
													<h2><img src="<?= base_url(); ?>assets/images/dgt/Group88.png" width="5px"><span> Misi</span></h2>
												</div>
												<!-- <h1 class="intro text-left">Layanan Kami</h1> -->

												<!-- <p class="lead text-center"></p> -->
												<div class="col-lg-10 col-md-10 col-sm-10 wow fadeInDown">
													<p class="lead "><?php echo $misi->content ?></p>
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-6 wow fadeInDown">
												<!--   <?php echo $nav->content; ?> -->

												<div>
													<h2><span></span></h2>
												</div>
												<!-- <h1 class="intro text-left">Layanan Kami</h1> -->

												<!-- <p class="lead text-center"></p> -->
												<div class="col-lg-10 col-md-10 col-sm-10 wow fadeInDown">
													<img src="https://starcargo.digitalindo.co.id/upload/profile/<?= $img->image ?>" class="imground2" width="220" height="170">
													<div class="imgbanner2">
														<img src="<?= base_url(); ?>assets/images/dgt/Mask_Group.png" width="190" height="180">

													</div>

												</div>
											</div>





											<div class="col-lg-6 col-md-6 col-sm-6 wow fadeInDown">
												<!--   <?php echo $nav->content; ?> -->

												<div class="dividerHeading">
													<h2><img src="<?= base_url(); ?>assets/images/dgt/Group88.png" width="5px"><span> Sasaran</span></h2>
												</div>
												<!-- <h1 class="intro text-left">Layanan Kami</h1> -->

												<!-- <p class="lead text-center"></p> -->
												<div class="col-lg-10 col-md-10 col-sm-10 wow fadeInDown">
													<p class="lead "><?php echo $sasaran->content ?></p>
												</div>
											</div>

											<!-- //break -->
											<div class="col-lg-10 col-md-10 col-sm-10 wow fadeInDown">
												<br>
											</div>
											<!-- break -->

											<div class="col-lg-6 col-md-6 col-sm-6 wow fadeInDown">
												<!--   <?php echo $nav->content; ?> -->

												<div class="dividerHeading">
													<h2><img src="<?= base_url(); ?>assets/images/dgt/Group88.png" width="5px"><span> Fokus Pelayanan</span></h2>
												</div>
												<!-- <h1 class="intro text-left">Layanan Kami</h1> -->

												<!-- <p class="lead text-center"></p> -->
												<div class="col-lg-10 col-md-10 col-sm-10 wow fadeInDown">
													<p class="lead "><?php echo $fokus->content ?></p>
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

			<section class="bg-grey">
				<div class="container">
					<div class="row ">
						<div class="col-sm-12 wow fadeInLeft" data-wow-offset="400">
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