<style type="text/css">
	.imground2 {
		border-radius: 5%;
		position: relative;
		width: 304px;
		height: 204px;
		margin-bottom: 17%;
		/*margin-bottom: 20px;*/
		/*left: 99px;
top: 99px;*/
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
							Galeri </h4>
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
					<div class="dividerHeading">
						<h4><a href="<?= base_url(); ?>">Home</a> > <span><?php echo 'Galeri' ?> </span></h4>
					</div>


					<div class="container-fluid block-content">

						<div class="row main-grid">

							<div class="col-sm-12">

								<div class="container-fluid partners block-content">

									<!-- <div id="partners" class="owl-carousel enable-owl-carousel" data-pagination="false" data-navigation="true" data-min450="2" data-min600="2" data-min768="4">-->

									<!-- <div  class="owl-carousel enable-owl-carousel" data-pagination="false" data-navigation="false" data-min450="2" data-min600="2" data-min768="4">-->

									<?php foreach ($gallery as $b) { ?>

										<!-- <div class="wow rotateIn" data-wow-delay="0.3s" style="float:left;margin: 2px;
    border: 1px solid #ccc;"><a href="<?php echo $b->url; ?>"><img src="https://starcargo.digitalindo.co.id/upload/galeri/<?php echo $b->image; ?>" alt="<?php echo $b->name; ?>"  ></a></div> -->

										<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInDown">

											<a href="https://starcargo.digitalindo.co.id/upload/galeri/<?php echo $b->image; ?>" data-fancybox="gallery" data-caption="">

												<img src="https://starcargo.digitalindo.co.id/upload/galeri/<?php echo $b->image; ?>" class="imground2">
											</a>



											<!-- <img src="https://starcargo.digitalindo.co.id/upload/galeri/<?php echo $b->image; ?>" class="imground2" > -->


										</div>

									<?php }
									// echo $pagination;


									?>

									<!--</div>-->

								</div>

							</div>

						</div>

					</div>







				</div>


			</div>
		</div>

	</div>
</section>









<!-- <div class="bg-image page-title">

				<div class="container-fluid">

					<a href="#"><h1>Gallery</h1></a>

					<div class="pull-right">

						<a href="<?php echo base_url(); ?>"><i class="fa fa-home fa-lg"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="<?php echo base_url(); ?>gallery">Gallery</a>&nbsp;&nbsp;

					</div>

				</div>

			</div> -->