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

				.heading-items h4 {
					margin-top: 260px;
					margin-left: 190px;
					color: #ffffff;
					font-weight: 600;
					font-size: 58px;

				}

				.karir1 {
					margin-top: 13%;
					margin-left: 190px;
					color: white;
					font-size: 28px;
					margin-bottom: 3%;
				}

				@media only screen and (max-width: 600px) {
					.member-img {
						margin-top: 20px;
					}
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

				.heading-items {
					margin-top: 165px;
				}

				.heading-items h4 {
					margin-top: 37px;
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

					.karir1 {
						margin-top: 129px;
						margin-left: 11px;
						color: white;
						margin-bottom: 4%;
					}

					.kami {
						margin-top: 70%;
					}

					.heading-items h4 {
						/* margin-top: 140px; */
						margin-left: 10px;
						font-size: 34px;

					}

					.kami {
						margin-top: 42%;
					}
				}

				@media only screen and (min-width:150px) and (max-width:400px) {
					.kami {
						margin-top: 60%;
					}

					.heading-items h4 {
						line-height: 38px;
					}
				}

				/* zoom 125% */
				@media screen and (min-width: 500px) and (max-width: 1230px) {
					.kami {
						margin-top: 40%;
					}
				}

				/* zoom 150% */
				@media screen and (min-width: 450px) and (max-width: 1100px) {
					.kami {
						margin-top: 50%;
					}

					.heading-items h4 {
						line-height: 55px;
						margin-top: 11px;
					}

					.heading-items {
						margin-top: 93px;
					}
				}


				/* zoom 175% */
				@media only screen and (min-width:400px) and (max-width:900px) {
					.heading-items h4 {
						margin-top: 11px;
					}
				}

				/* zoom 200% */
				@media only screen and (min-width:360px) and (max-width:780px) {
					.kami {
						margin-top: 65%;
					}

					.heading-items {
						margin-top: 59px;
					}
				}

				/* zoom 400% */
				@media only screen and (min-width:200px) and (max-width:500px) {
					.heading-items h4 {
						margin-top: 11px;
						line-height: 35px;
					}

					.heading-items {
						margin-top: 85px;
					}
				}

				/* zoom 500% */
				@media only screen and (min-width:150px) and (max-width:400px) {
					.kami {
						margin-top: 83%;
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
													<h4 style="font-size: 24px;">Karir</h4>
													<h4>Begabunglah Bersama Kami</h4>
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

				<section class="bg-white">
					<div class="container">

						<div class="row kami">
							<div class="dividerHeading">
								<h2><img src="<?= base_url(); ?>assets/images/dgt/Group88.png" width="5px"><span> Tahapan Seleksi</span></h2>
							</div>

							<div class="col-lg-3 col-md-6 d-flex align-items-stretch">
								<div class="member">
									<div class="member-img" style="text-align: center;">
										<img src="<?= base_url(); ?>assets/images/Group 124.svg" class="img-fluid" alt="" width="150px" height="150px">
										<p>Administrasi</p>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-6 d-flex align-items-stretch">
								<div class="member">
									<div class="member-img" style="text-align: center;">
										<img src="<?= base_url(); ?>assets/images/Group 119.svg" class="img-fluid" alt="" width="150px" height="150px">
										<p>Psikotes</p>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 d-flex align-items-stretch">
								<div class="member">
									<div class="member-img" style="text-align: center;">
										<img src="<?= base_url(); ?>assets/images/Group 133.svg" class="img-fluid" alt="" width="150px" height="150px">
										<p>Wawancara</p>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 d-flex align-items-stretch">
								<div class="member">
									<div class="member-img" style="text-align: center;">
										<img src="<?= base_url(); ?>assets/images/Group 130.svg" class="img-fluid" alt="" width="150px" height="150px">
										<p>Offering</p>
									</div>
								</div>
							</div>

						</div>

					</div>
				</section>

				<section class="bg-white">

					<div class="container">

						<div class="row">
							<?php foreach ($this->db->query("SELECT * from tbl_karir LIMIT 3")->result() as $k) { ?>
								<div class="col-lg-4">
									<div class=" member">
										<div class="member-img">
											<img src="https://starcargo.digitalindo.co.id/upload/galeri/<?= $k->image; ?>" alt="" width="100%">
											<h4 style="margin-left: 33px;"><?= $k->title; ?></h4>
											<p style="margin-left: 33px;">Due Date:<?= date("d F Y", strtotime($k->created_date)); ?></p>
											<a href="<?= base_url(); ?>karir/read/<?= $k->slug; ?>" style="margin-left: 33px;"><img src="<?= base_url(); ?>assets/images/Group 134.png" alt=""></a>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</section>
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

						$("#bantuan .btn").attr("disabled", true);

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

							success: function() {

								$('.success').fadeIn(1000);
								$("#bantuan .btn").attr("disabled", false);
								alert('Terima Kasih, Pesan anda akan kami proses secepatnya.')

								setInterval(function() {
									window.location = base_url + 'karir';
								}, 3000);

							},


						});

						return false;

					});

				});
			</script>