			<section class="content about">
			<div class="container">
				<div class="row sub_content">
					<div class="who">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="dividerHeading">
								<h4><a href="<?=base_url();?>">Home</a> | <span>Status Kiriman</span></h4>
							</div>
                            <section class="info_service">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInDown">

					<h3>Status Kiriman AWB No: <?php echo $barcode;?></h3>

					<table border="0" width="100%" style="text-align: center;padding:10px;">

					<thead>

					<tr style="background-color:#056cda;color:#fff; font-weight: bold;">

					<td>AWB No.</td>

					<td>Sender</td>

					<td>Origin</td>

					<td>Receiver</td>

					<td>Destination</td>

					<td>Item Quantity</td>

					<td>Weight</td>

					<td>Status</td>

					<td>Received By</td>

					<td>Received On</td>
<!-- 
					<td>LOKASI</td> -->

					</tr>

					</thead>

					<tbody>

					<?php
					if($tracking->statusDiterima=='2'){
						$stat='Delivered';
					}
					else if($tracking->statusDiterima=='1'){

					$stat='Return to Sender';


					}
					else if($tracking->statusDiterima=='0'){
						$stat='On Process';
					}
					else{
						$stat='';
					}
					?>

					<tr>

					<td><?php echo $tracking->Konid;?></td>

					<td><?php echo $tracking->namaPengirim;?></td>

					<td ><?php echo $tracking->dari;?></td>
					<td ><?php echo $tracking->namaPenerima;?></td>
					<td ><?php echo $tracking->ke;?></td>
					<td ><?php echo $tracking->Koli;?></td>
					<td ><?php echo $tracking->Kilo;?></td>
					<td ><?php echo $stat;?></td>
					<td ><?php echo $tracking->Diterima;?></td>
					<td ><?php echo $tracking->Tgl_Diterima;?></td>

					<!--<td align="left"><?php //echo $t->nama;?><!--</td>-->

					</tr>

					

					</tbody>

					</table><br/>

					<?php
					$this->db->order_by('Tanggal','desc');
						$log=$this->db->get_where('em_log_tracking',array('barcode'=>$barcode));



					?>
					<table border="0" width="100%" style="text-align: center;padding:10px;">
					<thead>

					<tr style="background-color:#056cda;color:#fff; font-weight: bold;">

					<td>Date</td>

					<td>Awb No.</td>

					<td>Status</td>

					</tr>

					</thead>
					<tbody>
					<?php 
					if($log->num_rows()>0){
					foreach($log->result() as $l){?>
					<tr>
						<td><?php echo $l->Tanggal; ?></td>
						<td><?php echo $l->Barcode; ?></td>
						<td align="left"><?php echo $l->Status; ?></td>
					</tr>
					<?php } 
					}else{
					echo"";
					}
						?>
						</tbody>
					</table>
				
<br>
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



