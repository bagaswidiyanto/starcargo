			<section class="content about">
			<div class="container">
				<div class="row sub_content">
					<div class="who">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="dividerHeading">
								<h4><a href="<?=base_url();?>">Home</a> | <span>Tarif </span></h4>
							</div>
                            <section class="info_service">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInDown">
                           <h2>From: <?php echo $asal->branchName;?> | To: <?php echo $tujuan->branchName;?> </h2>
					<h2>Weight: <?php echo $this->input->post('berat');?> Kg</h2>
					<table border="1" width="100%" style="text-align: center;padding:10px;">
					<thead>
					<tr style="background-color:#056cda;color:#fff; font-weight: bold;">
					<td>ORIGIN</td>
					<td>DESTINATION</td>
					<td>MODA</td>
					<td>SERVICE</td>
					<td>MIN KG</td>
					<td>PRICE (/KG)</td>
					<td>QTY</td>
					<td>TOTAL PRICE</td>
					<td>ESTIMATED DELIVERY TIME</td>
					</tr>
					</thead>
					<tbody>
					<?php
					foreach($prices as $p){
						?>
					<tr>
					<td><?php echo $p->dari;?></td>
					<td><?php echo $p->ke;?></td>
					<td><?php echo $p->Via;?></td>
					<td><?php echo $p->Layanan;?></td>
					<td><?php echo $p->minKG;?></td>
					<td ><?php echo 'Rp '.number_format($p->KGS);?></td>
					<td ><?php echo $berat."Kg"; ?></td>
					<td ><?php if($berat < $p->minKG){
									echo 'Rp '.number_format($p->KGP);
								}else{ 
									echo 'Rp '.number_format($berat*$p->KGS);
								}?>			
					</td>
					<td><?php if($p->Estimasi ==1){
						echo $p->Estimasi.' Day';
					}
					else{
						echo $p->Estimasi.' Days';
					}?>
						
					</td>
					</tr>
					<?php
					}
					?>
					</tbody>
					</table><br/>
					<a class="link" href="<?php echo base_url();?>">Back</a>
						</div>                
            </div>

        </div>
    </section>
               
						</div>
						
						
					</div>
				</div>
                
                </div>
                </section>









