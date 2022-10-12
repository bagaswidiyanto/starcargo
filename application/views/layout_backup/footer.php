<!--start footer-->
    <footer class="footer">
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

                            <!-- <li class="tweet_content item">
                                <p class="tweet_link"><a href="#">>> Lorem ipsum dolor et </a> Lorem ipsum dolor et, consectetur adipiscing eli</p>
                                <span class="time">29 September 2015</span>
                            </li>
                            <li class="tweet_content item">
                                <p class="tweet_link"><a href="#">>> Lorem ipsum dolor et </a> Lorem ipsum dolor et, consectetur adipiscing eli</p>
                                <span class="time">29 September 2015</span>
                            </li> -->
                        </ul> 
                    </div>
                    <div class="widget_content">
                        <div class="tweet_go"></div>
                    </div>
                </div>
                
            </div>
        </div>
    </footer>
	<!--end footer-->
	
	<section class="footer_bottom">
		<div class="container">
			<div class="row wow fadeInUp">
            <div class="col-sm-6">
                <p class="copyright">&copy; Copyright 2017 | <a href="https://digitalindo.co.id/">EMCO DIGITALINDO</a> </p>
            </div>

            <div class="col-sm-6 ">
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
    (function () {
        var options = {
            whatsapp: "*628113515152", // WhatsApp number 8113515152
            call_to_action: "Hubungi kami di WhatsApp", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
        
    <![endif]-->
</body>
</html>

