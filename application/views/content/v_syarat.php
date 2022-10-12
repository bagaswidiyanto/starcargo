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

		.kami {
			margin-top: 33%;
		}

		.heading-items h4 {
			margin-top: 260px;
			margin-left: 190px;
			color: #ffffff;
			font-weight: 600;
			font-size: 58px;
		}


		@media screen and (max-width: 768px) {
			.three-tab {
				float: left !important;
				position: absolute !important;
				width: 100% !important;
				margin-top: 60px !important
			}

			.kami {
				margin-top: 70%;
			}

			.heading-items h4 {
				margin-top: 140px;
				margin-left: 10px;
				color: #FFFFFF;
				font-size: 34px;

			}

			.nav-tabs>li>a {
				background: #ffffff;
				height: 65px;
			}
		}

		@media screen and (min-width: 500px) and (max-width: 1230px) {
			.nav-tabs>li>a {
				font-size: 22px;
				padding-bottom: 44px;
			}
		}

		@media only screen and (min-width:150px) and (max-width:400px) {
			.nav-tabs>li>a {
				font-size: 13px;
			}
		}

		/* zoom 125% */
		@media screen and (min-width: 500px) and (max-width: 1230px) {
			.kami {
				margin-top: 40%;
			}

			.nav-tabs>li>a {
				font-size: 18px;
				line-height: 19px;
			}
		}

		/* zoom 200% */
		@media only screen and (min-width:360px) and (max-width:780px) {
			.kami {
				margin-top: 65%;
			}

			.nav-tabs>li>a {
				font-size: 24px;
				line-height: 25px;
			}
		}

		/* zoom 400% */
		@media only screen and (min-width:200px) and (max-width:500px) {
			.nav-tabs>li>a {
				font-size: 18px;
				line-height: 22px;
			}
		}

		/* zoom 500% */
		@media only screen and (min-width:150px) and (max-width:400px) {
			.kami {
				margin-top: 83%;
			}

			.nav-tabs>li>a {
				font-size: 13px;
				line-height: 20px;
			}
		}
	</style>

	<div class="three-tab" style="margin: 10% 0 10px 0;">
		<div class="col-md-0" style="float:right">
			<ul class="nav" style=" border-color: #ebebeb; outline: none; background: linear-gradient(293.8deg, #033498 0%, #00C0FF 170.7%); color: #c9c4c4; margin: 0 0 -1px 0; border-bottom: none; border-radius: 0;">
				<li class="active"><a href="<?= base_url('prices'); ?>" class="icont"><img src="<?= base_url(); ?>assets/images/Cek Tarif (active) (1).svg" class="svg" alt="" width="15px" height="15px"></a></li>
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
						<li class="slide" style="background-image: url('<?= base_url(); ?>assets/images/slider/syarat.jpg');">
							<div class="container" style="position:absolute; width: 100%; height:100%; background: rgba(0, 0, 0, 0.5);">
								<div class="row">
									<div class="col-lg-12 col-sm-12 wow bounceIn ">
										<div class="heading-items">
											<h4>Syarat & Ketentuan</h4>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<section class="content about">



		<div class="container">
			<div class="row sub_content">
				<div class="who">
					<div class="col-lg-12 col-md-12 col-sm-12 kami">

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
										<input id="phone" type="text" class="form-control" maxlength="100" data-msg-required="Your Phone" name="phone" placeholder="Your Phone" required style="height: 46px;" onkeypress="return hanyaAngka(event)">
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
						<style>
							@media only screen and (min-width:150px) and (max-width:600px) {
								.s {
									font-size: 12px;
								}
							}
						</style>
						<h2 style="line-height: 0px;"><strong class="s">Telp : <?= $website->phone; ?>, <?= $i; ?></strong></h2>
					</div>


				</div>
			</div>

		</div>
	</section>

	<script>
		function hanyaAngka(evt) {
			var charCode = (evt.which) ? evt.which : event.keyCode
			if (charCode > 31 && (charCode < 48 || charCode > 57))

				return false;
			return true;
		}
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
						$("#bantuan .btn").attr("disabled", false);
						alert('Terima Kasih, Pesan anda akan kami proses secepatnya.')


						setInterval(function() {
							window.location = base_url;
						}, 3000);

					},


				});

				return false;

			});

		});
	</script>