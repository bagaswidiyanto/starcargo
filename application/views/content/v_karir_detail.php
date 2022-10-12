<?php
$date = strtotime($detail->created_date);
$tgl = date('d', $date);
$bln = date('M', $date);
?>
<section class="content about">
	<div class="container">
		<div class="row sub_content">
			<div class="who">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<section class="content blog">
						<div class="container">
							<div class="row">
								<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 wow fadeInLeft">
									<div class="blog_single">
										<article class="post">

											<div class="post_date">
												<span class="day"><?= $tgl; ?></span>
												<span class="month"><?= $bln; ?></span>
											</div>
											<div class="post_content">
												<div class="post_meta">
													<h2>
														<a href="<?= base_url(); ?>karir/read/<?= $detail->slug; ?>"><?= $detail->title; ?></a>
													</h2>
													<div class="metaInfo">
														<span><i class="fa fa-calendar"></i> <a href="#"><?= $detail->created_date; ?></a> </span>
														<span><i class="fa fa-user"></i> By <a href="#">Admin</a> </span>
													</div>
												</div>
												<figure class="post_img">
													<a href="#">
														<img src="https://starcargo.digitalindo.co.id/upload/galeri/<?= $detail->image; ?>" alt="" title="<?= $detail->title; ?>">
													</a>
												</figure>
												<?= $detail->deskripsi; ?>
											</div>
											<ul class="shares">
												<li class="shareslabel">
													<h3>Share This Story</h3>
												</li>
												<style>
													.iconss {
														font-size: 25px;
														padding: 12px 19px 0 16px;
														color: #9e9e9e;
													}

													.shares a:hover .iconss {
														color: #fff;
													}
												</style>
												<?php foreach ($sosmed as $sosis) { ?>
													<li><a class="" href="<?= $sosis->link; ?>" data-placement="bottom" data-toggle="tooltip" title="<?= $sosis->name; ?>" target="_blank"><i class="fa <?= $sosis->icon; ?> iconss"></i></a></li>
												<?php } ?>
												<!-- <li><a class="facebook" href="#" data-placement="bottom" data-toggle="tooltip" title="Facebook"></a></li> -->
												<!-- <li><a class="gplus" href="#" data-placement="bottom" data-toggle="tooltip" title="Google Plus"></a></li> -->
											</ul>
										</article>

									</div>

									<!--News Comments-->

								</div>

								<!--Sidebar Widget-->

								<div class="col-xs-12 col-md-4 col-lg-4 col-sm-4">
									<div class="sidebar">


										<div class="widget widget_categories wow fadeInLeft">
											<div class="widget_title">
												<h4><span>Karir Lainnya</span></h4>
											</div>
											<ul class="arrows_list list_style">
												<?php foreach ($this->db->query("SELECT * from tbl_karir LIMIT 10")->result() as $k) {
													echo '<li><a href="' . base_url() . 'karir/read/' . $k->slug . '">' . $k->title . '</a></li>';
												}
												?>

											</ul>
										</div>


									</div>
								</div>
							</div>
							<!--/.row-->
						</div>
						<!--/.container-->
					</section>

				</div>


			</div>
		</div>

	</div>
</section>