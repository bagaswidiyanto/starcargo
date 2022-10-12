<section class="content about">
	<div class="container">
		<div class="row ">
			<div class="col-md-12 wow fadeInRight" data-wow-offset="400">
				<div class="dividerHeading">
					<h2><img src="<?= base_url(); ?>assets/images/dgt/Group88.png" width="5px"><span> Lacak Kiriman</span></h2>
				</div>
				<form id="contactForm" method="post" action="<?php echo base_url() . 'tracking'; ?>">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 wow fadeInDown">
							<h2><img src="<?= base_url(); ?>assets/images/akar-icons_shipping-box-01.svg" alt="" width="20px"> LACAK KIRIMAN</h2>
							<div class="form-group inputtabs">
								<div class="col-lg-12 ">
									<p>Silakan masukkan Nomor Airwaybill satu Per baris Kemudian Klik 'Cari'.</p>
									<input id="tracking" class="form-control input" name="tracking" data-msg-required="Masukan No.Awb Anda" maxlength="5000" placeholder="available up to 20 Airwaybill" style="height: 80px;margin-top: 41px;">
								</div>
							</div>
						</div>
						<div class="col-lg-12 ">
							<div class="form-group">

								<div class="col-lg-2">
									<h5></h5>
									<input type="submit" data-loading-text="Loading..." class="btn btn-default2 btn-md" value="Cari">
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<style>
			div.scrollmenu {
				overflow: auto;
				white-space: nowrap;
			}
		</style>
		<div class="row sub_content">
			<div class="who">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<section class="info_service">
						<div class="container">
							<div class="row ">
								<div class="col-lg-12 col-md-12 col-sm-12 wow fadeInDown scrollmenu">
									<?php if ($this->input->post('tracking') == '') { ?>

										<h2>Data tidak ada, silahkan input data terlebih dahulu!</h2>

									<?php } else { ?>
										<h3>Status Kiriman AWB No: <?php echo $barcode; ?></h3>

										<table class="table table-bordered table-responsive" border="0" width="100%" style="text-align: center;padding:10px;">

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
												</tr>

											</thead>

											<tbody>

												<?php
												if ($tracking->statusDiterima == '2') {
													$stat = 'Delivered';
												} else if ($tracking->statusDiterima == '1') {

													$stat = 'Return to Sender';
												} else if ($tracking->statusDiterima == '0') {
													$stat = 'On Process';
												} else {
													$stat = '';
												}
												?>

												<tr>

													<td><?php echo $tracking->Konid; ?></td>

													<td><?php echo $tracking->namaPengirim; ?></td>

													<td><?php echo $tracking->nama; ?></td>
													<td><?php echo $tracking->namaPenerima; ?></td>
													<td><?php echo $tracking->desti; ?></td>
													<td><?php echo $tracking->Koli; ?></td>
													<td><?php echo $tracking->Kilo; ?></td>
													<td><?php echo $stat; ?></td>
													<td><?php echo $tracking->Diterima; ?></td>
													<td><?php echo $tracking->Tgl_Diterima; ?></td>

													<!--<td align="left"><?php //echo $t->nama;
																			?><!--</td>-->

												</tr>



											</tbody>

										</table><br />

										<?php
										$this->db->order_by('Tanggal', 'desc');
										$log = $this->db->get_where('em_log_tracking', array('barcode' => $barcode));
										?>
										<table class="table table-bordered table-responsive" border="0" width="100%" style="text-align: center;padding:10px;">
											<thead>

												<tr style="background-color:#056cda;color:#fff; font-weight: bold;">

													<td>Date</td>

													<td>Awb No.</td>

													<td>Status</td>

												</tr>

											</thead>
											<tbody>
												<?php
												if ($log->num_rows() > 0) {
													foreach ($log->result() as $l) { ?>
														<tr>
															<td><?php echo $l->Tanggal; ?></td>
															<td><?php echo $l->Barcode; ?></td>
															<td align="left"><?php echo $l->Status; ?></td>
														</tr>
												<?php }
												} else {
													echo "";
												}
												?>
											</tbody>
										</table>

										<br>

									<?php } ?>
								</div>
								<a class="link" href="<?php echo base_url(); ?>">Back</a>
							</div>
						</div>
					</section>

				</div>


			</div>
		</div>


	</div>
</section>