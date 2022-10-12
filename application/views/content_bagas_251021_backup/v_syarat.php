	<style type="text/css">
	

	
	.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus
{
		background:#fb5c02;
	}

	.nav-tabs > li > a {
		border-radius: 10px 10px 10px 10px;
	}
	.nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
		border-radius: 10px 10px 10px 10px;

	}
	.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
		border-radius: 10px 10px 10px 10px;
	}

	.nav-tabs > li > a {
		background: #ffffff;
		height: 40px;
	}

	/*.nav-tabs > li > a {
    background: #F8F8F8;
    border: 1px solid #ebebeb;
    margin: 0;
    color: #9E9E9E;
    border-radius: 0;
    text-align: center;
    border-radius: 10px 10px 0px 0px;
    
}*/



	</style>


	<section class="content about">

		<section class="parallax parallax-1">
        <div class="container">
            <!--<h2 class="center">Testimonials</h2>-->
            <div class="row">
                <div class="col-lg-12 col-sm-12 wow bounceIn ">
                    <div class="heading-item">
                        <h4>
                           S&K </h4>
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
								<h4><a href="<?=base_url();?>">Home</a> | <span>Syarat & Ketentuan</span></h4>
							</div>
							<!-- <div class="wow fadeInLeft">
                            <?=$syarat->konten;?> 
							
						</div> -->
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
				                          <!--   <?php echo $nav->content;?> -->
				                           
				                            <div class="dividerHeading">
				                            <h2><img src="<?=base_url();?>assets/images/dgt/Group88.png" width="5px"><span>		Syarat & Ketentuan Pengiriman Kirim Cepat Star Cargo</span></h2>
				                        </div>
				                    <!-- <h1 class="intro text-left">Layanan Kami</h1> -->
				                        
				                    <!-- <p class="lead text-center"></p> -->
				                    <div class="col-lg-10 col-md-10 col-sm-10 wow fadeInDown">
				                     <p align="justify">
				                     	<!-- <?php echo $latar->content ?> -->
				                      <?=$syarat->konten;?>
				                     		
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
				                          <!--   <?php echo $nav->content;?> -->
				                           
				                            <div class="dividerHeading">
				                            <h2><img src="<?=base_url();?>assets/images/dgt/Group88.png" width="5px"><span>		Kebijakan Privasi</span></h2>
				                        </div>
				                    <!-- <h1 class="intro text-left">Layanan Kami</h1> -->
				                        
				                    <!-- <p class="lead text-center"></p> -->
				                    <div class="col-lg-10 col-md-10 col-sm-10 wow fadeInDown">
				                     <p class="lead " align="justify">
				                     	<!-- <?php echo $latar->content ?> -->
				                     		<?=$kebijakan->konten;?>
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
				                          <!--   <?php echo $nav->content;?> -->
				                           
				                            <div class="dividerHeading">
				                            <h2><img src="<?=base_url();?>assets/images/dgt/Group88.png" width="5px"><span>		FAQ</span></h2>
				                        </div>
				                    <!-- <h1 class="intro text-left">Layanan Kami</h1> -->
				                        
				                    <!-- <p class="lead text-center"></p> -->
				                    <div class="col-lg-10 col-md-10 col-sm-10 wow fadeInDown">
				                     <p class="lead " align="justify">
				                     	<!-- <?php echo $latar->content ?> -->
				                     	<?=$faq->konten;?>
				                     		
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
                               <center> <a href="<?=base_url();?>syarat"><img src="<?=base_url();?>assets/images/blog/1.png" class="serv-img">
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
                                <center> <a href="<?=base_url();?>kebijakan"> <img src="<?=base_url();?>assets/images/blog/2.png" class="serv-img">
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
                                <center> <a href="<?=base_url();?>faq"> <img src="<?=base_url();?>assets/images/blog/3.png" class="serv-img">
                                <h3 style=" width:auto">FAQS</h3></a></center>
                            </div>
                            <div class="service_content">
                                <p style="text-align:left"></p>
                              
                            </div>
                        </div>
                    </div> -->
				</div>
                </section>