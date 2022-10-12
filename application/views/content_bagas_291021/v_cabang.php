<section class="content about">
			<div class="container">
				<div class="row sub_content">
					<div class="who">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="dividerHeading">
								<h4><a href="<?=base_url();?>">Home</a> | <span>Kantor Cabang </span></h4>
							</div>
    <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInDown">
    	<h1 class="intro text-center ">Kantor Cabang Kami</h1>
        	<p class="lead text-center"></p>
        </div>
        <div class="row sub_content" style="margin-bottom:-80px">

        <?php foreach($cabang as $cab){?>
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