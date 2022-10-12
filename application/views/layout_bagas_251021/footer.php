<?
date_default_timezone_set('ASIA/JAKARTA');
$curr_time     = date('H:i:s');
?>

<!--start footer-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3 wow fadeInLeft"  data-wow-offset="200">
                 <div class="widget_title">
                        <!-- <h4><span></span></h4> -->
                        <br>
                        <br>
                    </div>
                    <div class="widget_content">
                        <img src="<?=base_url();?>assets/images/dgt/Logo_putih.png" width="227px" height="81px">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 wow fadeInLeft"  data-wow-offset="200">

                    <div class="widget_title">
                        <h4 style="color:#fff; font-weight: bold;"><span>Informasi</span></h4>
                    </div>

                    <div class="widget_content">
                        <p class="foot"><?=$website->address;?></p>
                       <!--  <ul class="contact-details-alt">
                            <li><i class="fa fa-map-marker"></i> <p><strong>Alamat</strong>: <br><?=$website->address1;?><br><?=$website->address2;?><br><?=$website->address3;?><br><?=$website->city.', '.$website->zipcode;?></p></li>
                            <li><i class="fa fa-user"></i> <p><strong>Telepon/Fax</strong>: <?=$website->phone;?>/<?=$website->fax;?></p></li>
                            <li><i class="fa fa-envelope"></i> <p><strong>Email</strong>: <a href="#"><?=$website->email;?></a></p></li>
                        </ul> -->
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 wow fadeInDown"  data-wow-offset="200">
                    <div class="widget_title">
                        <h4 style="color:#fff; font-weight: bold;"><span>Halaman</span></h4>
                    </div>
                    <div class="widget_content">

                         <ul class="links">
                            <li> <a href="<?=base_url();?>syarat">Syarat & Ketentuan</a></li>
                            <li> <a href="<?=base_url();?>kebijakan">Kebijakan Privasi</a></li>
                            <li> <a href="<?=base_url();?>faq">FAQS</a></li>
                        </ul>


                       <!--  <ul class="links">
                            <li> <a href="<?=base_url();?>syarat">Syarat & Ketentuan</a></li>
                            <li> <a href="<?=base_url();?>kebijakan">Kebijakan Privasi</a></li>
                            <li> <a href="<?=base_url();?>faq">FAQS</a></li>
                        </ul> -->
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 wow fadeInRight"  data-wow-offset="200">
                    <div class="widget_title">
                        <h4 style="color:#fff; font-weight: bold;"><span>Kontak Kami</span></h4>
                    </div>
                    <div class="widget_content">

                    <ul class="footbot_social">
                    <?php foreach($sosmed as $sosis){
                        echo ' <li><a class="" href="'.$sosis->link.'" data-placement="top" data-toggle="tooltip" title="'.$sosis->name.'"><i class="fa '.$sosis->icon.'"></i></a></li>';
                    }
                    ?>
                        <!-- <li><a class="fb" href="#." data-placement="top" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twtr" href="#." data-placement="top" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="gplus" href="#." data-placement="top" data-toggle="tooltip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li> -->
                    </ul>
                
                       <!-- <ul class="tweet_list"> -->
                       <!-- <?php 
                       // foreach($recnews as $r){
                       //  $date=strtotime($r->created_date);
                       //  $tgl=date('d',$date);
                       //  $bln=date('M',$date);
                       //      echo '<li class="tweet_content item">
                       //          <p class="tweet_link"><a href="'.base_url().'berita/read/'.$r->slug.'">>> '.$r->Title.'</p>
                       //          <span class="time">'.$r->created_date.'</span>
                       //      </li>';
                            
                       //  }
                        ?> -->

                            <!-- <li class="tweet_content item">
                                <p class="tweet_link"><a href="#">>> Lorem ipsum dolor et </a> Lorem ipsum dolor et, consectetur adipiscing eli</p>
                                <span class="time">29 September 2015</span>
                            </li>
                            <li class="tweet_content item">
                                <p class="tweet_link"><a href="#">>> Lorem ipsum dolor et </a> Lorem ipsum dolor et, consectetur adipiscing eli</p>
                                <span class="time">29 September 2015</span>
                            </li> -->
                        <!-- </ul>  -->
                    </div>
                    <div class="widget_content">
                        <div class="tweet_go"></div>
                    </div>
                </div>
                
            </div>
        </div>
    </footer>
    <!--end footer-->


<!--start footer-->
   <!--  <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-4 wow fadeInLeft"  data-wow-offset="200">
                    <div class="widget_title">
                        <h4><span>Tentang Kami</span></h4>
                    </div>
                    <div class="widget_content">
                        <p><?=$website->description;?></p>
                        <ul class="contact-details-alt">
                            <li><i class="fa fa-map-marker"></i> <p><strong>Alamat</strong>: <br><?=$website->address1;?><br><?=$website->address2;?><br><?=$website->address3;?><br><?=$website->city.', '.$website->zipcode;?></p></li>
                            <li><i class="fa fa-user"></i> <p><strong>Telepon/Fax</strong>: <?=$website->phone;?>/<?=$website->fax;?></p></li>
                            <li><i class="fa fa-envelope"></i> <p><strong>Email</strong>: <a href="#"><?=$website->email;?></a></p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 wow fadeInDown"  data-wow-offset="200">
                    <div class="widget_title">
                        <h4><span>Link Terkait</span></h4>
                    </div>
                    <div class="widget_content">
                        <ul class="links">
                            <li> <a href="<?=base_url();?>syarat">Syarat & Ketentuan</a></li>
                            <li> <a href="<?=base_url();?>kebijakan">Kebijakan Privasi</a></li>
                            <li> <a href="<?=base_url();?>faq">FAQS</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 wow fadeInRight"  data-wow-offset="200">
                    <div class="widget_title">
                        <h4><span>Berita</span></h4>
                    </div>
                    <div class="widget_content">
                       <ul class="tweet_list">
                       <?php foreach($recnews as $r){
                        $date=strtotime($r->created_date);
                        $tgl=date('d',$date);
                        $bln=date('M',$date);
                            echo '<li class="tweet_content item">
                                <p class="tweet_link"><a href="'.base_url().'berita/read/'.$r->slug.'">>> '.$r->Title.'</p>
                                <span class="time">'.$r->created_date.'</span>
                            </li>';
                            
                        }
                        ?>

                            <li class="tweet_content item">
                                <p class="tweet_link"><a href="#">>> Lorem ipsum dolor et </a> Lorem ipsum dolor et, consectetur adipiscing eli</p>
                                <span class="time">29 September 2015</span>
                            </li>
                            <li class="tweet_content item">
                                <p class="tweet_link"><a href="#">>> Lorem ipsum dolor et </a> Lorem ipsum dolor et, consectetur adipiscing eli</p>
                                <span class="time">29 September 2015</span>
                            </li>
                        </ul> 
                    </div>
                    <div class="widget_content">
                        <div class="tweet_go"></div>
                    </div>
                </div>
                
            </div>
        </div>
    </footer> -->
	<!--end footer-->
	
	<section class="footer_bottom">
		<div class="container">
			<div class="row wow fadeInUp">
            <div class="col-sm-12">
                <p class="copyright">&copy; Copyright 2021 | <a href="https://digitalindo.co.id/">EMCO DIGITALINDO</a> </p>
            </div>

            <div class="col-sm-6 " hidden="">
                <div class="footer_social">
                    <ul class="footbot_social">
                    <?php foreach($sosmed as $sosis){
                        echo ' <li><a class="" href="'.$sosis->link.'" data-placement="top" data-toggle="tooltip" title="'.$sosis->name.'"><i class="fa '.$sosis->icon.'"></i></a></li>';
                    }
                    ?>
                        <!-- <li><a class="fb" href="#." data-placement="top" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twtr" href="#." data-placement="top" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="gplus" href="#." data-placement="top" data-toggle="tooltip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li> -->
                    </ul>
                </div>
            </div>
        </div>
		</div>
	</section>





     <!-- Whatsapp Chat -->

    <div class="whatsapp-chat-section">

      <div class="icon-section">
        <img src="https://starcargo.digitalindo.co.id/website/assets/images/whatsapp/ic_whatsapp.png" id="whatsapp_chat" onclick="chatWhatsApp();">
      </div>

      <div id="whatsapp-chat-popup" class="animated bounceOutDown" style="z-index: 999999; display: none;">

        <div id="list-chat-section" class="list-chat-section animated fadeIn" style="display: block;">

          <div class="header-section" style="background:#2f3562;">
            <img class="close-chat-section" src="https://starcargo.digitalindo.co.id/website/assets/images/whatsapp/ic_close_btn.png" onclick="closechatWhatsApp();">

            <div class="header-avatar-section">
                        <?php foreach($this->db->query("SELECT * FROM tbl_chat_wa order by id asc")->result() as $sec1) { ?>
              <div class="avatar">
                <img  src="https://starcargo.digitalindo.co.id/upload/wa_image/<?=$sec1->image;?>">   
              </div> 
              
                        <?}?>
            </div>

            <div class="header-desc-section" style="margin-top: 15px;">
              <p><?=(@$_GET['lang']!='eng') ? 'Kami siap membantu Anda, Silahkan chat dengan customer service kami.' : "We're ready to help you, Please chat our customer service. ";?> </p>
            </div>

          </div>  

          <div class="chat-section">
                    <?php foreach($this->db->query("SELECT a.*,a.user as nama,c.nama as cabang FROM tbl_chat_wa a  left join log_branch c ON a.branch=c.kode order by a.id asc")->result() as $sec2) { ?>
            <div class="cs-section" onclick="chatCustomer(<?=$sec2->id;?>);">
              <div class="avatar">
                <img class="avatar" src="https://starcargo.digitalindo.co.id/upload/wa_image/<?=$sec2->image;?>">
              </div>
              <div class="profile">
                <p class="position">CS <?=strtoupper($sec2->cabang);?></p>
                <h4 class="name" style="margin-top: -15px;"><?=strtoupper($sec2->nama);?></h4>
                            <?if(($curr_time >= $sec2->startOnline) && ($curr_time < $sec2->endOnline)){ ?>
                      <small class="status">Online <span class="online"><i class="fa fa-circle "></i></span> </small> 
                            <?}else{?>    
                                  <small class="status">Offline <span class="offline"><i class="fa fa-circle "></i></span> </small> 
                            <?}?>
              </div>
            </div> 
                     <?}?>
          </div>  
        </div>

            <?php foreach($this->db->query("SELECT a.*,a.user as nama,c.nama as cabang FROM tbl_chat_wa a  left join log_branch c ON a.branch=c.kode order by a.id asc")->result() as $sec3) { ?>
        <div class="chat-section animated fadeIn" id="customer_chat_<?=$sec3->id;?>" style="display: none;">

          <div class="header-section" style="background:#2f3562;">

            <img class="back-chat-section" src="https://starcargo.digitalindo.co.id/website/assets/images/whatsapp/ic_back_btn.png" onclick="backListChat(<?=$sec3->id;?>);">

            <div class="header-avatar-section">

              <div class="avatar">
                <img  src="https://starcargo.digitalindo.co.id/upload/wa_image/<?=$sec3->image;?>">  
              </div> 

            </div>

            <div class="header-desc-section" style="margin-top: -23px;">

              <h3><?=$sec3->nama;?></h3>
              <?php 
              $phone_split = implode(" ", str_split('+62'.$sec3->phone, 4))." "; 
              ?>
              <p><i class="fa fa-phone"></i> <?php echo $phone_split;?></p>

            </div>

          </div>

          <div class="inside-chat-section">

            <div class="chat">
              <div class="inside-chat">
                <span><?=(@$_GET['lang']!='eng') ? 'Halo, Saya '.ucwords(strtolower($sec3->nama)).', Customer Service dari Cabang '.strtoupper($sec3->cabang)  : "Hello, I'm ".ucwords(strtolower($sec3->nama)).', Customer Service from Branch '.strtoupper($sec3->cabang) ;?>
                  </span>
              </div>
              <div class="time">
                <span><?php echo date('H:i');?><img src="https://starcargo.digitalindo.co.id/website/assets/images/whatsapp/ic_check_wa.png"></span>
              </div>
            </div>

            <div class="chat">
              <div class="inside-chat">
                <span><?=(@$_GET['lang']!='eng') ?'Ada yang bisa saya bantu ?' : 'May I help you?';?></span>
              </div>
              <div class="time">
                <span><?php echo date('H:i');?><img src="https://starcargo.digitalindo.co.id/website/assets/images/whatsapp/ic_check_wa.png"></span>
              </div>
            </div>
          </div> 

          <div class="box-chat-section">
            <div class="text">
              <input type="hidden" id="telp_wa_<?=$sec3->id;?>" name="telp_wa_<?=$sec3->id;?>"  value="<?=$sec3->phone;?>" >
              <input type="text" class="input-message-whatsapp" id="chat_wa_<?=$sec3->id;?>" name="chat_wa_<?=$sec3->id;?>" onchange="textChatWhatsapp(<?=$sec3->id;?>);" onclick="textChatWhatsapp(<?=$sec3->id;?>);" onmouseover="textChatWhatsapp(<?=$sec3->id;?>);" onmouseout="textChatWhatsapp(<?=$sec3->id;?>);" onkeydown="textChatWhatsapp(<?=$sec3->id;?>);" value="" placeholder="<?=(@$_GET['lang']!='eng') ? 'Tulis Pesan' :'Type a message';?>" >
            </div>
            <div class="button-send">
              <a href="" id="btn_wa_<?=$sec3->id;?>" target="_blank"><img src="https://starcargo.digitalindo.co.id/website/assets/images/whatsapp/ic_send_message.png"></a>
            </div>
          </div> 
        </div> 
              <?}?>
        

        

      </div>
    </div>

    <!-- Preloader -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
   


    <!-- //endwa -->






   

    <script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>assets/js/jquery.easing.1.3.js"></script>
    <script src="<?=base_url();?>assets/js/retina-1.1.0.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/js/jquery.cookie.js"></script> <!-- jQuery cookie -->
    <script type="text/javascript" src="<?=base_url();?>assets/js/styleswitch.js"></script> <!-- Style Colors Switcher -->
<!--
    <script src="js/jquery.fractionslider.js" type="text/javascript" charset="utf-8"></script>
-->
    <script type="text/javascript" src="<?=base_url();?>assets/js/jquery.smartmenus.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/js/jquery.smartmenus.bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/js/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/js/jflickrfeed.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/js/swipe.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/js/jquery-scrolltofixed-min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/js/jquery.flexslider-min.js"></script>

    <script src="<?=base_url();?>assets/js/main.js"></script>
        

    <!-- Start Style Switcher -->
    
    <!-- End Style Switcher -->
    <script>
        $('.flexslider.top_slider').flexslider({
            animation: "fade",
            controlNav: false,
            directionNav: true,
            prevText: "&larr;",
            nextText: "&rarr;"
        });
    </script>
    <!-- WARNING: Wow.js doesn't work in IE 9 or less -->
    <!--[if gte IE 9 | !IE ]><!-->
        <script type="text/javascript" src="<?=base_url();?>assets/js/wow.min.js"></script>
        <script>
            // WOW Animation
            new WOW().init();


        </script>
        
        <script type="text/javascript">
    // (function () {
    //     var options = {
    //         whatsapp: "*628113515152", // WhatsApp number 8113515152
    //         call_to_action: "Hubungi kami di WhatsApp", // Call to action
    //         position: "right", // Position may be 'right' or 'left'
    //     };
    //     var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
    //     var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
    //     s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
    //     var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    // })();



//     function chatWhatsApp(){
//   var cek_class = document.getElementById('whatsapp-chat-popup');

//   if(cek_class.classList.contains('bounceOutDown')){
//     cek_class.classList.remove("bounceOutDown");
//     cek_class.classList.add("bounceInUp");
//     cek_class.style.display = "block"; 
//   }else{
//     cek_class.classList.remove("bounceInUp");
//     cek_class.classList.add("bounceOutDown");
    
//   }

// }

// function chatCustomer(id){
  
//   var list_chat =  document.getElementById("list-chat-section");
//   var chat =  document.getElementById('customer_chat_'+id);

//   if(id!=0 && id!=''){
//     list_chat.style.display = "none"; 
//     chat.style.display = "block"; 
//   }
// }

// function closechatWhatsApp(){
//   var cek_class = document.getElementById('whatsapp-chat-popup');

//   if(cek_class.classList.contains('bounceInUp')){
//     cek_class.classList.remove("bounceInUp");
//     cek_class.classList.add("bounceOutDown");
//   }
// }


// function backListChat(id){
//   var list_chat =  document.getElementById("list-chat-section");
//   var chat =  document.getElementById('customer_chat_'+id);
//   if(id!=0 && id!=''){
//     chat.style.display = "none"; 
//     list_chat.style.display = "block"; 
//     $("#chat_wa_"+id).val('');
//   }
// }

// function textChatWhatsapp(id){
//   var link_wa = 'https://web.whatsapp.com/send?';
//   if(id!=0 && id!=''){
//     var telp = $("#telp_wa_"+id).val();
//     var chat = $("#chat_wa_"+id).val();
//     var link = 'https://web.whatsapp.com/send?phone=62'+telp+'&text='+chat;
    
//     var btn = document.getElementById("btn_wa_"+id);
//       btn.setAttribute("href", link);
//   }
// }


// (function () {
    //     var options = {
    //         whatsapp: "*628113515152", // WhatsApp number 8113515152
    //         call_to_action: "Hubungi kami di WhatsApp", // Call to action
    //         position: "right", // Position may be 'right' or 'left'
    //     };
    //     var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
    //     var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
    //     s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
    //     var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    // })();



    function chatWhatsApp(){
  var cek_class = document.getElementById('whatsapp-chat-popup');

  if(cek_class.classList.contains('bounceOutDown')){
    cek_class.classList.remove("bounceOutDown");
    cek_class.classList.add("bounceInUp");
    cek_class.style.display = "block"; 
  }else{
    cek_class.classList.remove("bounceInUp");
    cek_class.classList.add("bounceOutDown");
    
  }

}

function chatCustomer(id){
  
  var list_chat =  document.getElementById("list-chat-section");
  var chat =  document.getElementById('customer_chat_'+id);

  if(id!=0 && id!=''){
    list_chat.style.display = "none"; 
    chat.style.display = "block"; 
  }
}

function closechatWhatsApp(){
  var cek_class = document.getElementById('whatsapp-chat-popup');

  if(cek_class.classList.contains('bounceInUp')){
    cek_class.classList.remove("bounceInUp");
    cek_class.classList.add("bounceOutDown");
  }
}


function backListChat(id){
  var list_chat =  document.getElementById("list-chat-section");
  var chat =  document.getElementById('customer_chat_'+id);
  if(id!=0 && id!=''){
    chat.style.display = "none"; 
    list_chat.style.display = "block"; 
    $("#chat_wa_"+id).val('');
  }
}

function textChatWhatsapp(id){
  var link_wa = 'https://web.whatsapp.com/send?';
  if(id!=0 && id!=''){
    var telp = $("#telp_wa_"+id).val();
    var chat = $("#chat_wa_"+id).val();
    var link = 'https://web.whatsapp.com/send?phone=62'+telp+'&text='+chat;
    
    var btn = document.getElementById("btn_wa_"+id);
      btn.setAttribute("href", link);
  }
}







</script>
        
    <![endif]-->
</body>
</html>

