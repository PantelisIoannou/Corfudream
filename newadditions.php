<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include './php/SEO.php' ?>

	<?php echo $description;
		  echo $keywords; ?>
    <meta name="author" content="">

    <title>New Additions - Corfu Dream</title>
	<link rel="icon" type="image/ico" href="img/cd.ico"

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

	  <link rel="stylesheet" href="css/card.css">
    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
    <link rel="stylesheet" href="css/accommodation.css" type="text/css">
	<link rel="stylesheet" href="css/new.css" type="text/css">
	<!-- PHP Connections -->
	<?php include './php/navbar.php' ?>
	<?php include './php/footer.php' ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <!-- Navbar -->
     <?php $navbar = new Navbar(); ?>
	 <!-- Navbar End -->
   <div style="height: 85%;background-image:url(http://bit.ly/1T1jUEA);background-size:cover;" class="bg"></div>
   <div style="height: 85%;background: transparent"class="jumbotron">
       <div class="row" style="margin-right:0px;">
     <div class="content-title" style="margin-top:120px;font-weight: 100;">
       Hidden Gems
     </div>
     <div>

         <a href="#"><i style="font-size: 60px;" id="scroll" class="fa fa-angle-double-down"></i></a>

     </div>
       </div>
   </div>


   <div class="row" style="margin-right:0px;padding-right:0px;" id="villas">
     <p style="font-size:50px; text-align:center; font-weight:300;">Our Collection</p>
     <p style="text-align:justify; padding-bottom:0px; font-size:19px;font-weight:300;padding-left:50px;padding-right:50px;">Our goal is to provide truly unique stylish accommodation to guests by marketing beautiful and unique properties around the island, inspiring discerning guests every step of their stay.
     <br>Our properties are privately owned and offer to our guest a stylish break from every day.
     <br>We visit each home personally and meet the owners, to ensure that each property has the type of quality requested by us.
     <br>With this in mind and knowing the even increasing needs of our guests, we at Corfudream proudly present to you, our collections!</p>

   </div>
   <hr style="border-color:#676258; margin-top:0px;margin-bottom:5px; border-width:1px;" >

    <div class="container"  style="padding-top:0px;">
    <div class="row">
	<?php
		createVilla("Villa Anna","0829K10000270301","8","&euro; 435 - &euro; 780","Greece, Corfu, Dassia","./room.php?villa=anna","https://lh3.googleusercontent.com/5aACgc3lCChwIw-FkSGqoGxlvjHP9AOGwwPvW_iyroOt6EOy3C4VgRqhqIjkWqXPmrMRD6sUguBkbR0tZi14eZv5qNVXaV2o5-0K5zJ6csuOIsiJ5GDNpUSyLjZ1eyB0lnhhV8HcyiZkyTeotjktZrdrzTj4tsNT0Iqch-HvCANcO3gNA4sFgq3JfU78E7gL2tUi_L3DysoSW2lR9t9mDlwjh4w2DU_SfIJlpMjDm3y2kXNjytd55WQSHc3Gdk2BYmyJhGdCXqxTPLgxPGxnsnLMcPOWFMR7SVe6Gixl0EMCuHJ-jSyViWYNDHLPH4GhuYB4dde9bd_4688WLyeVQlPEwhaXPwn8S_b4NgP-RYVlGMOdeX-UYk5onpBDP3yhLzfEF27M8Bcc_DlRhQXJTRVtfAqxx4mWDbuArpDbZdLDurjC5fTK9YICd38UEedX2aAyCFzcD0EHD-tUCu2QQIdKP-t5inGIvit-ypf5EI8GtbBRcFgX5savNu5GEQZJ3JTljnxcRiYJ599vWmwZ-wQl8Im8qKDueoYd9DuSVOc=w965-h643-no");
		createVilla("Villa Sissy","0829K121K77826001","6","&euro; 750 - &euro; 1,250","Greece, Corfu, Dassia","./room.php?villa=sissy","https://lh3.googleusercontent.com/lhguGQcBhT1CE20fpG-BMdLzA2En2MHo7IPj4KGY9W7GlrdIEQ0ZCicjCpiTBZmvU0Qq-3TxAQdSgVQuQSSW7mq5wp8E_ZmQc1dvp05xFTiSVxmWGHmsYJVM1ag6Y0eT3WQjwusVAZSQ21dD4HiUsvGYZRsZPN6xUavbZ209eKb_VK9vFaRxLSBhNHrqghOcpvJpASvaV6gBq3n23jEpXHrDPOOFFs5jwObzbOpSn1mUO2QpVunhcECnNxw201FsOPtFl5c9ryX-86_96UF_TPgSFSfCZ27nxGzMU0jb_QiPfSUimUevxeL1FUW0UThajMIwrqhg03CAkaYS5CRVCJL4TqWe7IP-gVTDmtyz1v7-uaFHtW1jlKrskETqprB0bzDcfjkihkOiIJe--UCjO0ViXlBVqZQPS5qj4QHd1pYnZhA5-tzP7qQz6Kl_Q4XEnOdwf6a3mzYnj8ElvPb4ujgIZ3WBhKkoV1BTqyNoAgnrUFjxWL3H6wUBHBRiiEK5L8sO8ocWLbi-eOy9P2CsbX4vw3c8gfxHHf73T-3h9gA=w899-h599-no");
		createVilla("Villa Barbati","0829K10000479301","8+2","&euro; 690 - &euro; 1,320","Greece, Corfu, Barbati","./room.php?villa=barbati","https://lh3.googleusercontent.com/yUUoou8qMrZlatBzSmX104FvCy2pJrX0as5_9KOXWbO01LrB-E_gh9eFYGfdwCtHqNgZR9Aptjj0LL4EJAo0k_WCcSWJJ4AC-HfenWgc6VHnJYfhUJocGaFXNAzrPA_oX5fnGCV8stCD_tJ91N2gz0gbch4KFsuAge-kEjC85WngdQQn08j0Zbk82dItMpwjdTFw-y3VdhGQ19Me6khAQMUXs_AtzwhFLY0Y7Pu77WreA1i716KwHL59gvdV8IGYqYrYycZOnkJgup_7KElYNTbuQK96xBqKnpLgUj9V7N0wQZ7x1mAoiKN_rSSm7QGkM-VHoiX9wlsAAglNog0GLpSwU4v9CnNH1dPKZR1OYJsy6AfjItqFcKBaJKDQYISX8e2e2TSSiEJqOv8uhDiAogjcJ5Z-uESkX9MACbvaBa27L3_fRG69fbqQjPwhHWk17GtGf3q6kCcQBYRtBY4lnpJE0Z7MWvcddAu-GLoi5xsSn5tM_fh8BneVdBXH8GFldnH4j2OkZd8Tu7FCHqexubV7k2sO-kdPiTGWhyIKCc4=w901-h599-no");
		createVilla("Villa Olympia","0829K121K77826001","6","&euro; 750 - &euro; 1,250","Greece, Corfu, Dassia","./room.php?villa=olympia","https://lh3.googleusercontent.com/Fso8Vvcq5LnaQdRVta_SpHZ6fSrhX2iSECuFIPzZuXa5NTDT11zUUkX7PR7m6IV33IKM2SFStBZ0xdpGmsjUC9jUMpZPgjYOOj3ajxIHA27TnBXD5qNbiPYYU7y2QViiX628FZtp45fh7ypL-w7Y6BZg-eqS-YnhRPK6Pg1v_7CwcX8lp9pB-j2JeVefgOgooV-Vr5Gtf6AopevkqNwHkQz5jll8yIZqG-9wwjBAbWHvknaLDjHkpege0S7jg3In2aD_85HWecknPwAJ8R4DCXQ-oqOMmrhiFEHygQaTb7ZbgmQTRpaKtUIO7hkX54mqaONxfyDdnTP5u95RDs9NPxI0SRGSNMYM3jrKfzBpI_PFu0f7cwtYD9JMF-4qxwuyZ0fs288XSaSbFd4NA4TXOKlFGjxpMz90ePN7eJaxiHGqfHGSw5vBZhm4gIXzcDQcDiFO9jyxb1LIlGiwTWAsIdlrW3z7xr0xgZTsn9wm5kEU_LXZ-Hajgm_0HLJttnWnHftKTFuOgIObiEwTLJl1SlsrxhfXaM8QK-LCuSvF0pg=w965-h643-no");
		createVilla("Villa Lilly","0829K10000270301","6","&euro; 365 - &euro; 680","Greece, Corfu, Dassia","./room.php?villa=lilly","https://lh3.googleusercontent.com/PezU23AIrHirDtXXHXd_UrjZOetb8wQrBxPNbX960-Kq3vo_Djo_6DFEsHtShsLMvSKqDYqH82gX3ipBRukA_yEzR7x4s44MzjIY0rPBQuTD9P6FYXLi0P5NEFcZ0pJmd921ZuqwWdfRcdgVZzTtzaqsu3ziIE-atDSi11Tz2fd7xHTNwsLWRWUMd6t1J6Wlf3apu5Tu0ZHPzPDeiazU1Y1JESvDVBSb3ONZQ8Yb1-S2I41Fl4I9Z3FJwHVL4UxBAE6MJJHfqx_nHqTD7D61jHXLA2F0LSPWsNQQkCOes-Co4SJxYcmjcn4VVZQ2u_bHASvLaGItUUP2_Rfd4X7sT1tHaiN4213tejdn-HqbDzUget1ihinmvQJxu-HGWSriAjdWqjhTckX2oGOKpuc3Q5iLC_YM26R2udIow7rdcgOLr3waQ0pm-hfqvxU098vHq7brgYaNiEUwB_9_2P9yFi81saLOofqvI2TMxlrshCPwuiZ7Mv6MzVSxnP1Q7dyB5kxb1JRhHU-S0v3OE6yB7rfAmTQQZImaEDAkvLE-Qh4=w965-h643-no");
		createVilla("Villa Daphne","0829K10000270301","4","&euro; 350 - &euro; 580","Greece, Corfu, Dassia","./room.php?villa=daphne","https://lh3.googleusercontent.com/v8ptZRfCUqILBJ-tSxJDuR1woUw_FG4S56k75RUvmww-8VqdyyTOLK7bt1Y0o4vNPGnqwwsYvGeoeo7qLYk1eM0YrVxvYZstf2R3YvS78oecjB6SwlMNgW1uZzlaYt63TFGAecKCSw_JKnK8BTe1vM294IWlT_N_Xi3nxbDXiSPoElvaw8-J-S9c0Sd1WN2J6lXTBoUj5137b-ghUbd1LbOh76j18rqWmZH6tdx3lV9IYHT0Vx8YizWPGhl9KvyvwI9hVAhb58sqtLi92VSrQgOKXxtqbvTb2O7NBy3Maz6-UuyybfRyT1X-MGARj5nTY4JDe1lPGe8wNIRF3pwlfIP5zIpZ-IXWKeEZfAE3LeTirtbZcK-qCuhWBYMSalht62QcIIWC61q8uFwL9lo5hcJ5-Tbvnuf326tuLD1bsjvxjGn3mcdMtQLJajfFWt_dR10czXu6ypwTvtPloJoQMwWjmkLcjmDYu9a7-uR4m-i6qXehaWMpuT2kD4plMcLgkYRtY_gtWkoWKOs1PtGjC8HM2iOv3oZslzD39ub8Mbk=w965-h643-no");
    createVilla("Villa Kastraki","0829K10000398201","7+3","&euro; 380 - &euro; 930","Greece, Corfu, Spartilas","./room.php?villa=kastraki","https://lh3.googleusercontent.com/QS4G_3g34vc4r741ynlXrLLBuZG4Kk_vYMTLqtqZICXKkOSm27Ci40N5OFytMCG1dv4goAqMckGmF3dAMSNhosocm0K0bGlQhIyaebSlx_9yOqKOotyntYzJlQaCIbn1qFPigAUzIz1Lbu-ih22kpJ6Mq_1IxmUPQPy_f5Jl5FIm7_DHx5hqUA8A9gwWaoiMGyfRHKzAKDG-32dAIhGpiJvfRyuJAz5N-scTqeJ7KopfZOTPDxcsdaoZnvThbJWIu_sSB1uZd6tGyBb_1D6pDz6zEaby2GpvgEJZ9XH95ju2MuLVla0gnyqYBSRFERQKmI2VAPvUt9kZmhn5Gb7yZd4zALIE2zIm_38XYir66Uy0OLixolMqcPxAG2LAD2jZzHG-Uav9xObTB88etOMOHq_jqGkMSMK1Mr826tU4Fr3kg4okgxt7WUD7BfRQ0DwfPtHlL92g0Ssx2ydNgJM5Uay28-RLPyEvzw9WocmaBd63kT_YQ7tN6fx3CIry_hyOcutu42tAb7_yG8fPpV2PR-9JCeLNTXVaqrBuL7leK4EOLv4ghtO16u7w9Y3_NOoltTnE=w904-h599-no");


	function createVilla($name, $id, $persons, $price, $location, $url, $img){

		echo '<div class="col-md-6">
      <div class="card-section">
		<article class="card">
		  <header class="card__thumb" style="background-image: url('.$img.');background-size: cover;">

		  </header>
		  <div class="card__body">
			<div class="card__category">New Addition</div>
			<p class="card__title"><a href="http://46.101.142.74/corfudream/room.php">'. $name .'</a></p>

		  </div>
		  <footer class="card__footer">
      		  <div class="left-div width-50">
            		  <div class="card__subtitle">'.$location.'
            		  </div>
            		  <div class="card__subtitle">
                    <span class="tourist-license">GNTO/R.T.E
                  		  <img width="30px" src="http://bit.ly/1Tcle8d" style="
                  			-webkit-filter: grayscale(100%);
                  			filter: grayscale(100%);"> '.$id.'</span>
                  			<ul class="acc-list inline">
                    				<li><span>'.$persons.' </span><i class="fa fa-male"></i> </li>
                    				<li></li>
                    				<li> '.$price.' / night</li>
                  			</ul>
            			</div>
      			</div><a href="'.$url.'"><button type="button" class="btn btn-default btn-right">View Villa</button></a>
      			<div class="right-div width-50">

      			</div>
		   </footer>
		</article>
		</div>
	</div>';
	}
	?>
    </div>
  </div><!-- /container -->



    <!--Footer-->
    <?php $footer= new Footer(); ?>
	<!--Footer End-->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>
    <script>
    	$("#scroll").click(function() {
    		$('html, body').animate({
    			scrollTop: $("#villas").offset().top-80
    		}, 900);
    		});
    </script>

</body>

</html>
