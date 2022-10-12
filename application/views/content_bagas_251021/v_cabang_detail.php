<section class="content about">
			<div class="container">
				<div class="row sub_content">
					<div class="who">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="dividerHeading">
								<h4><a href="<?=base_url();?>">Home</a> | <span>Kantor Cabang </span></h4>
							</div>
                            <section class="contact_2">
        						<div class="maps wow fadeInDown">
            						<?=$cabang->map;?>
        						</div>
        <div class="container mintop60">
            <div class="row sub_content mintop60">               
                <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInLeft">
                    <div class="sidebar">
                        <div class="widget_info">
                            <div class="dividerHeading">
                                <h4><span>Kantor Cabang <?=$cabang->kota;?></span></h4>
                            </div>
                            <p></p>
                            <ul class="widget_info_contact">
                                <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInLeft"><li><i class="fa fa-map-marker"></i><strong>Alamat</strong> <p><?=$cabang->alamat1;?>
                                <br><?=$cabang->alamat2;?>
                                <br><?=$cabang->alamat3;?>
                                <br><?=$cabang->kota.', '.$cabang->zipcode;?></p></li></div>
                                <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInLeft"><li><i class="fa fa-envelope"></i><strong>Email</strong> <p><a href="#"><?=$cabang->email;?></a></p> </li></div>
                                <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInLeft"><li><i class="fa fa-phone"></i><strong>Telepon/Fax</strong> <p><?=$cabang->telepon;?>/</p><p><?=$cabang->fax;?></p></li></div>
                            </ul>
                        </div>

                        <div class="widget_social">
                            <ul class="widget_social">
                                <li><a class="fb" href="#." data-placement="bottom" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twtr" href="#." data-placement="bottom" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="gmail" href="#." data-placement="bottom" data-toggle="tooltip" title="Google"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInDown mintop60">
    	<h1 class="intro text-center mintop60">Kantor Cabang Kami</h1>
        	<p class="lead text-center"></p>
        </div>
        <div class="row sub_content" style="margin-bottom:-80px">

       <?php foreach($branch as $cab){?>
        <div class="col-lg-3 col-md-3 col-sm-3 wow fadeInDown">
                        <div class="dividerHeading">
                            <h4><span><a href="<?=base_url();?>cabang/view/<?=$cab->id;?>"><?=$cab->kota;?></a></span></h4>
                        </div>
                        <p><?=$cab->alamat1;?>
                            <br><?=$cab->alamat2;?>
                            <br><?=$cab->alamat3;?>
                            <br><?=$cab->kota.', '.$cab->zipcode;?>
                        </p>
                        <i class="fa fa-phone"></i>&nbsp;&nbsp;<?=$cab->telepon;?>    <br>                    
                        <i class="fa fa-envelope"> </i>&nbsp;&nbsp;<?=$cab->email;?><br>
                        <i class="fa fa-fax"> </i>&nbsp;&nbsp;<?=$cab->fax;?>
                    </div>

                    <?php
                }
                ?>

                    
                </div>
    </div>
						
						
					</div>
				</div>
                
                </div>
                </section>