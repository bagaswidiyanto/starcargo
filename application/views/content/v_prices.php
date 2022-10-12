<section class="bg-white">
	<div class="container">
		<div class="row ">

			<div class="col-md-12 wow fadeInRight" data-wow-offset="400">
				<div class="dividerHeading">
					<?php $bn2 = $this->db->query('Select * from tbl_banner where id = 2')->row(); ?>
					<!-- <h2><span>Keuatamaan Pelayanan Kami</span></h2> -->
					<h2><img src="<?= base_url(); ?>assets/images/dgt/Group88.png" width="5px"><span> Tarif Kiriman</span></h2>
				</div>
				<form id="cekTarif" method="post" action="<?php echo base_url(); ?>prices" role="form">
					<div class="row">
						<div class="col-lg-12 ">
							<h2><img src="<?= base_url(); ?>assets/images/Cek Tarif (active).svg" alt="" width="20px"> CEK TARIF</h2>
							<div class="form-group inputtabs">
								<div class="col-lg-4 ">
									<h5>Dari (Origin):</h5>
									<input type="text" id="hint" name="asal" class="form-control input ui-autocomplete-input" maxlength="100" data-msg-required="Masukan Kota Asal" value="" style="height: 41px;">
									<input type="hidden" id="asal" name="dari" class="form-control" />
								</div>
								<div class="col-lg-4">
									<h5>Ke (Destination):</h5>
									<input type="text" id="hint2" name="ke" class="form-control input ui-autocomplete-input" maxlength="100" data-msg-required="Masukan Kota Tujuan" value="" style="height: 41px;">
									<input type="hidden" id="tujuan" name="tujuan" class="form-control" />
								</div>
								<div class="col-lg-4">
									<h5>Berat (Weight):</h5>
									<input type="text" name="berat" id="weight" placeholder="Kg" class="form-control input" maxlength="100" data-msg-required="Masukan Berat" value="" style="height: 41px;" onkeypress="return hanyaAngka(event)">
								</div>
							</div>
						</div>
						<div class="col-lg-12 ">
							<div class="form-group">
								<div class="col-lg-4">
									<!-- <h5>Masukan kode di atas</h5>
									<input type="text" name="berat" id="berat" class="form-control input" maxlength="100" data-msg-required="Masukan Berat" style="height: 50px;"> -->
								</div>
								<div class="col-lg-4">
									<h5></h5>
									<input type="submit" data-loading-text="Loading..." class="btn btn-default2 btn-md" style="height: 50px;" value="Cek">
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>


<div class="container" data-animate="fadeInUp">
	<div class="row">
		<?php if ($this->input->post('dari') == '' || $this->input->post('tujuan') == '') { ?>
			<h2>Data tidak ada, silahkan input data terlebih dahulu!</h2>
		<?php } else { ?>
			<div class="heading">

				<h3 style="color: black; text-align: center;"><?= $asal->nama; ?> ke <?= $tujuan->kecName; ?><br><?= $this->input->post('berat'); ?> kg</h3>

				<div data-animate="fadeInUp">

				</div>
			</div>


			<table border="1" cellspacing="1" cellpadding="1" class="table" style="border-color:#35498E;  ">
				<tr style="background: linear-gradient(293.8deg, #033498 0%, #00C0FF 170.7%);;color:#fff;">
					<th>Service</th>
					<th>Kecamatan</th>
					<th>Tarif</th>
					<th>Min KG</th>
					<th>Estimasi</th>
				</tr>
				<?php

				foreach ($price as $p) {
					$berat = $this->input->post('berat');
					$hargaKGP = $p->KGP;
					$hargaKGS = $p->KGS;
					$real = $hargaKGS * $berat;
				?>



					<tr style="color: black;">
						<td><?= $p->Layanan; ?></td>
						<?php if ($p->dst != 0) { ?>
							<td><?= $p->kecName; ?></td>
						<?php } else { ?>
							<td><?= $p->kabName; ?></td>
						<?php } ?>
						<td align="right">Rp <?= number_format($hargaKGS, 0); ?></td>
						<td align="right"><?= $p->minKG; ?></td>
						<td align="center"><?= $p->Estimasi; ?> Hari</td>
					</tr>
					<!-- <div class="col-lg-12 col-xs-6">
							<div class="info-box">
								<span class="info-box-icon bg-yellow">
									<i class="ion ion-ios-gear-outline"><b><?= $p->Layanan; ?></b></i>
								</span>
								<div class="info-box-content">
									<span class="info-box-text" style="font-size: 24px;margin-top: 10%;"><b>Rp <?= number_format($real, 0); ?></b></span>
									<small><?= $p->Estimasi; ?> Hari</small>
									</span>
								</div>
							</div>
						</div> -->



				<?php

				}


				?>
			</table>

			<div class="remark" style="font-weight:bold; text-align: center;">


				Untuk informasi lebih lanjut silakan menghubungi CALL CENTER : <?= $website->phone; ?>, E-MAIL : <?= $website->email; ?><br>
				<a href="<?php echo base_url(); ?>">Klik, Harga lainnya</a>

			</div>
		<?php } ?>
	</div>
</div>

<style>
	.ui-autocomplete {
		max-height: 200px;
		overflow-y: auto;
		/* background-color: #c8ba37; */
		/* prevent horizontal scrollbar */
		overflow-x: hidden;
		/* add padding to account for vertical scrollbar */
		padding-right: 20px;
		z-index: 1000;
	}

	th {
		text-align: center;
	}
</style>
<script>
	function hanyaAngka(evt) {
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))

			return false;
		return true;
	}

	$(document).ready(function() {
		base_url = '<?= base_url(); ?>';
		$("#hint").autocomplete({
			source: base_url + "autocomplete/search/" + $("#hint").val(),
			select: function(event, ui) {
				event.preventDefault();
				$("#hint").val(ui.item.label); // display the selected text
				$("#asal").val(ui.item.value); // save selected id to hidden input
			},
			focus: function(event, ui) {
				event.preventDefault();
				$("#hint").val(ui.item.label);
			},

			minLength: 3
		});

		$("#hint2").autocomplete({
			source: base_url + "autocomplete/search1/" + $("#hint").val(),
			select: function(event, ui) {
				event.preventDefault();
				$("#hint2").val(ui.item.label); // display the selected text
				$("#tujuan").val(ui.item.value); // save selected id to hidden input
			},
			focus: function(event, ui) {
				event.preventDefault();
				$("#hint2").val(ui.item.label);
			},

			minLength: 3
		});

	});
</script>

<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<link rel=" stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />