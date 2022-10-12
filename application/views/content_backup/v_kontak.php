<section class="content about">
			<div class="container">
				<div class="row sub_content">
					<div class="who">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="dividerHeading">
								<h4><a href="<?=base_url();?>">Home</a> | <span>Kontak </span></h4>
							</div>
                            <section class="contact_2">
        						<div class="maps wow fadeInDown">
            						<?=$website->map;?>
        						</div>
        <div class="container mintop60">
            <div class="row sub_content mintop60" style="margin-top:10px">
                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInRight">
                    <div class="dividerHeading">
                        <h4><span>Kontak Kami</span></h4>
                    </div>
                    <p>Untuk pertanyaan seputar Himeji Express , mohon isi form di bawah ini</p>

                    <div class="alert alert-success hidden alert-dismissable" id="contactSuccess">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Success!</strong> Pesan anda telah kami terima.
                    </div>

                    <div class="alert alert-error hidden" id="contactError">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Error!</strong> error meengirim pesan.
                    </div>

                    <form id="kontakin" >
                        <div class="row">
                            <div class="form-group">
                                <div class="col-lg-6 ">
                                    <input type="text" id="name" name="name" class="form-control" maxlength="100" data-msg-required="Masukan nama anda" placeholder="Nama" required>
                                </div>
                                <div class="col-lg-6 ">
                                    <input type="email" id="email" name="email" class="form-control" maxlength="100" data-msg-email="Masukan alamat email dengan benar" data-msg-required="Masukan almat email" placeholder="E-mail" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" id="subject" name="subject" class="form-control" maxlength="100" data-msg-required="Masukan subjek pesan"  placeholder="Subjek" required>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <textarea id="message" class="form-control" name="message" rows="10" cols="50" data-msg-required="Masukan pesan anda" maxlength="5000" placeholder="Pesan" required></textarea>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-right">
                            <button type="submit" data-loading-text="Loading..." class="btn btn-default btn-lg">Kirim Pesan</button>
                                
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInLeft">
                    <div class="sidebar">
                        <div class="widget_info">
                            <div class="dividerHeading">
                                <h4><span>Kantor Pusat</span></h4>
                            </div>
                            <p></p>
                            <ul class="widget_info_contact">
                                <li><i class="fa fa-map-marker"></i><strong>Alamat</strong> <p>: <?=$website->address1;?>
                                    <br><?=$website->address2;?>
                                     <br><?=$website->address3;?>
                                      <br><?=$website->city.', '.$website->zipcode;?>
                                </p></li>
                                <li><i class="fa fa-envelope"></i><strong>Email</strong> <p>: <a href="#"><?=$website->email;?></a></p></li>
                                <li><i class="fa fa-phone"></i><strong>Telepon/Fax</strong> <p>: <?=$website->phone;?>/</p><p><?=$website->fax;?></p></li>
                            </ul>
                        </div>

                        <div class="widget_social">
                            <ul class="widget_social">
                             <?php foreach($sosmed as $sos){
                                echo '<li><a class="" href="'.$sos->link.'" data-placement="bottom" data-toggle="tooltip" title="'.$sos->name.'"><i class="fa '.$sos->icon.'"></i></a></li>';
                             
                            }
                            ?>
                               <!--  <li><a class="twtr" href="#." data-placement="bottom" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="gmail" href="#." data-placement="bottom" data-toggle="tooltip" title="Google"><i class="fa fa-google-plus"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInDown">
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

                <script type="text/javascript">
$( document ).ready(function() {

    base_url = '<?php echo base_url();?>';

    $("#kontakin").submit(function() {

    $("#kontakin .btn").attr("disabled", true);

    var data = {

    name: $("#name").val(),

    email: $("#email").val(),

    subject: $("#subject").val(),

    message: $("#message").val()

    };

    $.ajax({

        type: "POST",

        url: base_url+"sendmail",

        data: data,

        success: function(){

            $('.success').fadeIn(1000);

            $("#kontakin .btn").attr("disabled", false);

            alert('Terima Kasih, Pesan anda akan kami proses secepatnya.')

            setInterval(function(){ window.location=base_url+'kontak'; }, 3000);

        },

        error: function(){

            $('.error').fadeIn(1000);

            $("#kontakin .btn").attr("disabled", false);

        }

    });

     return false;

;    });

});

</script>