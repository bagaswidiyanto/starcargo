<?php

$date = strtotime($blog->created_date);

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

											<figure class="post_img">

												<a href="#">

													<img src="<?= base_url(); ?>admin/upload/post/<?= $blog->image; ?>" alt="">

												</a>

											</figure>

											<div class="post_date">

												<span class="day"><?= $tgl; ?></span>

												<span class="month"><?= $bln; ?></span>

											</div>

											<div class="post_content">

												<div class="post_meta">

													<h2>

														<a href="<?= base_url(); ?>berita/read/<?= $blog->slug; ?>"><?= $blog->Title; ?></a>

													</h2>

													<div class="metaInfo">

														<span><i class="fa fa-calendar"></i> <a href="#"><?= $blog->created_date; ?></a> </span>

														<span><i class="fa fa-user"></i> By <a href="#">Admin</a> </span>

													</div>

												</div>

												<?= $blog->content; ?>
												<p class="mt-5">Sumber : <a href="<?= $blog->metaLink; ?>"><?= $blog->metaLink; ?></a></p>

											</div>

											<ul class="shares">

												<li class="shareslabel">

													<h3>Share This Story</h3>

												</li>

												<li><a class="twitter" href="#" data-placement="bottom" data-toggle="tooltip" title="Twitter"></a></li>

												<li><a class="facebook" href="#" data-placement="bottom" data-toggle="tooltip" title="Facebook"></a></li>

												<li><a class="gplus" href="#" data-placement="bottom" data-toggle="tooltip" title="Google Plus"></a></li>

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

												<h4><span>Berita Terbaru</span></h4>

											</div>

											<ul class="arrows_list list_style">

												<?php foreach ($recent as $rec) {

													echo '<li><a href="' . base_url() . 'berita/read/' . $rec->slug . '">' . $rec->Title . '</a></li>';
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