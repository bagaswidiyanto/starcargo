	<style type="text/css">
		.nav-tabs>li.active>a,
		.nav-tabs>li.active>a:hover,
		.nav-tabs>li.active>a:focus {
			background: #fb5c02;
		}

		.nav-tabs>li>a {
			border-radius: 10px 10px 10px 10px;
		}

		.nav-tabs>li.active>a:hover,
		.nav-tabs>li.active>a:focus {
			border-radius: 10px 10px 10px 10px;

		}

		.nav-tabs>li.active>a,
		.nav-tabs>li.active>a:hover,
		.nav-tabs>li.active>a:focus {
			border-radius: 10px 10px 10px 10px;
		}

		.nav-tabs>li>a {
			background: #ffffff;
			height: 40px;
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

	<section class="content about">

		<section class="parallax parallax-1">
			<div class="container">
				<!--<h2 class="center">Testimonials</h2>-->
				<div class="row">
					<div class="col-lg-12 col-sm-12 wow bounceIn ">
						<div class="heading-item">
							<h4 style="margin-top: 150px; margin-bottom: -30px;">Syarat & Ketentuan </h4>
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
		</section>




		<div class="container">
			<div class="row sub_content">
				<div class="who">
					<div class="col-lg-12 col-md-12 col-sm-12">

					</div>

				</div>
			</div>
			<!-- 	<div class="col-md-12 col-lg-12 col-sm-12 ">
						<div class="dividerHeading">
							<h4><span></span></h4>
						</div>
					</div> -->


			<!-- <div class="container"><h2>Example tab 2 (using standard nav-tabs)</h2></div>

<div id="exTab2" class="container">	
<ul class="nav nav-tabs">
			<li class="active">
        <a  href="#1" data-toggle="tab">Overview</a>
			</li>
			<li><a href="#2" data-toggle="tab">Without clearfix</a>
			</li>
			<li><a href="#3" data-toggle="tab">Solution</a>
			</li>
		</ul>

			<div class="tab-content ">
			  <div class="tab-pane active" id="1">
          <h3>Standard tab panel created on bootstrap using nav-tabs</h3>
				</div>
				<div class="tab-pane" id="2">
          <h3>Notice the gap between the content and tab after applying a background color</h3>
				</div>
        <div class="tab-pane" id="3">
          <h3>add clearfix to tab-content (see the css)</h3>
				</div>
			</div>
  </div>

<hr></hr> -->





			<div class="container">
				<div class="row ">
					<div class="col-md-6">
						<div class="panel-heading">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#layer1" data-toggle="tab">Syarat & Ketentuan</a></li>
								<li><a href="#layer2" data-toggle="tab">Kebijakan Privasi</a></li>
								<li><a href="#layer3" data-toggle="tab">FAQ</a></li>
								<!--   <li class="dropdown">
                                <a href="#" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#tab4default" data-toggle="tab">Default 4</a></li>
                                    <li><a href="#tab5default" data-toggle="tab">Default 5</a></li>
                                </ul>
                            </li> -->
							</ul>
						</div>
					</div>

					<div class="tab-content">
						<div class="tab-pane fade in active" id="layer1">
							<div class="container">
								<div class="row ">
									<div class="col-lg-12 col-md-12 col-sm-12 wow fadeInDown">
										<!--   <?php echo $nav->content; ?> -->

										<div class="dividerHeading">
											<h2><img src="<?= base_url(); ?>assets/images/dgt/Group88.png" width="5px"><span> Syarat & Ketentuan Pengiriman Kirim Cepat Star Cargo</span></h2>
										</div>
										<!-- <h1 class="intro text-left">Layanan Kami</h1> -->

										<!-- <p class="lead text-center"></p> -->
										<div class="col-lg-10 col-md-10 col-sm-10 wow fadeInDown">
											<p align="justify">
												<!-- <?php echo $latar->content ?> -->
												<?= $syarat->konten; ?>

											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="layer2">
							<div class="container">
								<div class="row ">
									<div class="col-lg-12 col-md-12 col-sm-12 wow fadeInDown">
										<!--   <?php echo $nav->content; ?> -->

										<div class="dividerHeading">
											<h2><img src="<?= base_url(); ?>assets/images/dgt/Group88.png" width="5px"><span> Kebijakan Privasi</span></h2>
										</div>
										<!-- <h1 class="intro text-left">Layanan Kami</h1> -->

										<!-- <p class="lead text-center"></p> -->
										<div class="col-lg-10 col-md-10 col-sm-10 wow fadeInDown">
											<p class="lead " align="justify">
												<!-- <?php echo $latar->content ?> -->
												<?= $kebijakan->konten; ?>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="layer3">
							<div class="container">
								<div class="row ">
									<div class="col-lg-12 col-md-12 col-sm-12 wow fadeInDown">
										<!--   <?php echo $nav->content; ?> -->

										<div class="dividerHeading">
											<h2><img src="<?= base_url(); ?>assets/images/dgt/Group88.png" width="5px"><span> FAQ</span></h2>
										</div>
										<!-- <h1 class="intro text-left">Layanan Kami</h1> -->

										<!-- <p class="lead text-center"></p> -->
										<div class="col-lg-10 col-md-10 col-sm-10 wow fadeInDown">
											<p class="lead " align="justify">
												<!-- <?php echo $latar->content ?> -->
												<?= $faq->konten; ?>

											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="tab-pane fade" id="tab4default">Default 4</div>
                        <div class="tab-pane fade" id="tab5default">Default 5</div> -->
					</div>



					<div class="widget widget_tab">





						<!--   <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInDown">
                        <div class="serviceBox_1">
                            <div class="service_icon" style="text-align:left">
                               <center> <a href="<?= base_url(); ?>syarat"><img src="<?= base_url(); ?>assets/images/blog/1.png" class="serv-img">
                                <h3 style=" width:auto">Syarat & Ketentuan</h3></a></center>
                            </div>
                            <div class="service_content">
                                <p style="text-align:left"></p>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInDown">
                        <div class="serviceBox_1">
                            <div class="service_icon" style="text-align:left">
                                <center> <a href="<?= base_url(); ?>kebijakan"> <img src="<?= base_url(); ?>assets/images/blog/2.png" class="serv-img">
                                <h3 style=" width:auto">Kebijakan Privasi</h3></a></center>
                            </div>
                            <div class="service_content">
                                <p style="text-align:left">&nbsp;</p>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInDown">
                        <div class="serviceBox_1">
                            <div class="service_icon" style="text-align:left">
                                <center> <a href="<?= base_url(); ?>faq"> <img src="<?= base_url(); ?>assets/images/blog/3.png" class="serv-img">
                                <h3 style=" width:auto">FAQS</h3></a></center>
                            </div>
                            <div class="service_content">
                                <p style="text-align:left"></p>
                              
                            </div>
                        </div>
                    </div> -->
					</div>
	</section>

	<section class="bg-grey">
		<div class="container">
			<div class="row ">
				<div class="col-sm-12 wow fadeInLeft">
					<div class="dividerHeading">
						<!-- div class="linegaris">
                        		
                        	</div> -->
						<h2 style="text-align: center;"><strong>Butuh Bantuan ?</strong></h2>
					</div>
					<form id="contactForm" method="post" action="<?php echo base_url() . 'prices'; ?>">
						<div class="col-lg-12 ">
							<div class="row">
								<div class="form-group">
									<div class="col-lg-4 ">
										<input type="text" class="form-control " maxlength="100" data-msg-required="Your Name" value="" placeholder="Your Name" required>
									</div>
									<div class="col-lg-4">
										<input type="email" class="form-control " maxlength="100" data-msg-required="Your Email" value="" placeholder="Your Email" required>
									</div>
									<div class="col-lg-4">
										<input type="number" class="form-control " maxlength="100" data-msg-required="Your Phone" value="" placeholder="Your Phone" required>
									</div>
									<div class="col-lg-9" style="margin-top: 20px;">
										<input class="form-control" data-msg-required="Masukan No.Awb Anda" maxlength="5000" placeholder="" style="height:40px">
									</div>
									<div class="col-md-3" style="margin-top: 10px;">
										<input type="submit" data-loading-text="Loading..." class="btn btn-default2 btn-md" value="Submit" style="height:40px">
									</div>
								</div>
							</div>
						</div>

					</form>
					<!-- <strong><em>This text is both bold and italics</em></strong> -->
					<!-- <strong><em>This text is both bold and italics</em></strong> -->
					<div class="col-md-12" style="text-align: center;">
						<h3 style="color: #FB5C02;"><i class="fa fa-phone"></i> Customer Care</h3>
						<?php
						$nmr = $website->no_wa;
						$i = substr($nmr, 3);
						?>
						<h2><strong>Telp : <?= $website->phone; ?>, <?= $i; ?></strong></h2>
					</div>


				</div>
			</div>

		</div>
	</section>