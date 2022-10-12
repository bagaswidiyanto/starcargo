

<div class="bg-image page-title">

				<div class="container-fluid">

					<a href="#"><h1>Gallery</h1></a>

					<div class="pull-right">

						<a href="<?php echo base_url();?>"><i class="fa fa-home fa-lg"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="<?php echo base_url();?>gallery">Gallery</a>&nbsp;&nbsp;

					</div>

				</div>

			</div>



			<div class="container-fluid block-content">

				<div class="row main-grid">

					<div class="col-sm-12">

					<div class="container-fluid partners block-content">

						<!-- <div id="partners" class="owl-carousel enable-owl-carousel" data-pagination="false" data-navigation="true" data-min450="2" data-min600="2" data-min768="4">-->

						<!-- <div  class="owl-carousel enable-owl-carousel" data-pagination="false" data-navigation="false" data-min450="2" data-min600="2" data-min768="4">-->

							<?php foreach ($gallery as $b) {?>

							<div class="wow rotateIn" data-wow-delay="0.3s" style="float:left;margin: 2px;
    border: 1px solid #ccc;"><a href="<?php echo $b->url;?>"><img src="<?php echo base_url();?>admin/upload/gallery/<?php echo $b->image;?>" alt="<?php echo $b->name;?>"  ></a></div>

							<?php }
							echo $pagination;


							?>

						<!--</div>-->

					</div>

					</div>

				</div>

			</div>