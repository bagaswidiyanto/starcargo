
<?php 
$date=strtotime($blog->created_date);
$tgl=date('d',$date);
$bln=date('M',$date);
?>
<section class="content about">
			<div class="container">
				<div class="row sub_content">
					<div class="who">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="dividerHeading">
								<h4><a href="<?=base_url();?>">Home</a> | <span>Berita </span></h4>
							</div>
                            <section class="content blog">
			<div class="container">
				<div class="row" style="margin-top:-40px; ">
					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 wow fadeInLeft" >
						<div class="blog_single">
							<article class="post">
								<figure class="post_img">
									<a href="#">
										<img src="<?=base_url();?>admin/upload/post/<?=$blog->image;?>" alt="">
									</a>
								</figure>
								<div class="post_date">
									<span class="day"><?=$tgl;?></span>
									<span class="month"><?=$bln;?></span>
								</div>
								<div class="post_content">
									<div class="post_meta">
										<h2>
											<a href="<?=base_url();?>berita/read/<?=$blog->slug;?>"><?=$blog->Title;?></a>
										</h2>
										<div class="metaInfo">
											<span><i class="fa fa-calendar"></i> <a href="#"><?=$blog->created_date;?></a> </span>
											<span><i class="fa fa-user"></i> By <a href="#">Admin</a> </span>
										</div>
									</div>
									<?=$blog->content;?>
								</div>
								<ul class="shares">
									<li class="shareslabel"><h3>Share This Story</h3></li>
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
						<!-- 	<div class="widget widget_search wow fadeInLeft">
								<div class="site-search-area">
									<form method="get" id="site-searchform" action="#">
										<div>
											<input class="input-text" name="s" id="s" placeholder="Enter Search keywords..." type="text" />
											<input id="searchsubmit" value="Search" type="submit" />
										</div>
									</form>
								</div>
							</div> -->
							
							<div class="widget widget_categories wow fadeInLeft" >
								<div class="widget_title">
									<h4><span>Berita Terbaru</span></h4>
									</div>
								<ul class="arrows_list list_style">
								<?php foreach($recent as $rec){
									echo '<li><a href="'.base_url().'berita/read/'.$rec->slug.'">'.$rec->Title.'</a></li>';
								}
								?>
									
								</ul>
							</div>
							
						<!-- 	<div class="widget widget_about wow fadeInLeft">
								<div class="widget_title">
									<h4><span>Lorem ipsum dolor sit amet</span></h4>
									</div>
								<p>Lorem ipsum dolor sit amet, consectetur adip, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
 -->
						</div>
					</div>
				</div><!--/.row-->
			</div> <!--/.container-->
		</section>
               
						</div>
						
						
					</div>
				</div>
                
                </div>
                </section>