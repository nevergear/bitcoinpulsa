<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Bitpulsa</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Protectly Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href="<?php echo base_url();?>/web/css/bootstrap.css" rel='stylesheet' type='text/css' />
  <link href="<?php echo base_url();?>/web/css/bootstrap.min.css" rel="stylesheet">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="<?php echo base_url();?>/web/css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<script type="text/javascript" src="<?php echo base_url();?>/web/js/jquery-1.11.1.min.js"></script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- Add fancyBox main JS and CSS files -->
<script src="<?php echo base_url();?>/web/js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="<?php echo base_url();?>/web/css/popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		</script>
<!--Animation-->
<script src="<?php echo base_url();?>/web/js/wow.min.js"></script>
<link href="<?php echo base_url();?>/web/css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
</head>
<body>

<div class="header">
   <div class="container">
      <div class="header_top">
      	<?php 
      	if (isset($notif)) {
      		echo $notif;
      	}
      	?>
      	
	      <div class="header-left">
					 <div class="logo wow bounceInDown" data-wow-delay="0.4s">
						<a href="index.html"><img src="<?php echo base_url();?>/web/images/logo2.png" alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li class="active"><a href="index.html">Home</a></li>
						    	<li><a href="industries.html">FAQ</a></li>
						    	<li><a href="pricing.html">Contact Us</a></li>
						    	<div class="clearfix"></div>
							</ul>
							<script type="text/javascript" src="<?php echo base_url();?>/web/js/responsive-nav.js"></script>
				    </div>
				    <div class="clearfix"></div>
	      </div>
	      <ul class="phone wow fadeInUpBig" data-wow-delay="0.4s">
	      
	      	<li><a href="#" data-toggle="modal" data-target="#basicModal"><p>Login di sini</p>
						</a></li>
	      </ul>
	      <div class="clearfix"> </div>
	   </div>
	   <div class="header_bottom">
	   	  <h1 class="m_head wow rollIn" data-wow-delay="0.4s">Cara Cepat<br> isi pulsa dengan bitcoin.</h1>
	   	  <div class="video_buttons">
		   	  <div class="video_but"> <a href="#" data-toggle="modal" data-target="#daftar" class="fa-btn btn-1 btn-1e">Daftar sekarang</a></div>
		   	  
		      <div class="clearfix"></div>
		 </div>
	   </div>
	   <div class="clearfix"></div>
	</div>
</div>
<div class="main">
     <div class="content_top">
     	<div class="container">
		   <ul class="clients wow fadeInUpBig" data-wow-delay="0.4s">
				<li><img src="<?php echo base_url();?>/web/images/indosat.png"  class="img-responsive" alt=""/></li>
				
				<li><img src="<?php echo base_url();?>/web/images/telkomsel.jpg" class="img-responsive" alt=""/></li>
				
				<li><img src="<?php echo base_url();?>/web/images/smartfren.jpeg" class="img-responsive" alt=""/></li>
				<li><img src="<?php echo base_url();?>/web/images/esia.jpg" class="img-responsive" alt=""/></li>
				<li><img src="<?php echo base_url();?>/web/images/ceria.jpg" class="img-responsive" alt=""/></li>
				<li><img src="<?php echo base_url();?>/web/images/axis.jpg" class="img-responsive" alt=""/></li>
				<div class="clearfix"></div>
			</ul>
			     	      
       </div>
     </div>
     <div class="content_bottom wow rollIn" data-wow-delay="0.4s">
       <div class="container">
	       <h2>Bitpulsa sangat mudah digunakan</h2>
	       <p> Ini benar-benar sederhana. Anda bahkan dapat menggunakannya untuk mengirim topup kepada teman dan keluarga dengan hanya tiga step</p>
		   <div class="grid_1 text-center">
		   	 <div class="col-md-4 span_1">
		   	 	<i class="fa fa-sign-in fa-5x"></i>
		   	 	<h3>Login di Bitpulsa</h3>
		   	</div>
		   	<div class="col-md-4 span_1">
		   	 	<i class="fa fa-mobile fa-5x"></i>
		   	 	<h3>Input Nomor Telepon dan pilih pulsa yang akan di Top Up</h3>
		   	 </div>
		   	 <div class="col-md-4 span_1">
		   	 	<i class="fa fa-btc fa-5x"></i>
		   	 	<h3>Bayar dengan Bitcoin</h3>
		   	 </div>
		   	 <div class="clearfix"> </div>
		   </div>
       </div>
	 </div>
</div>
<div class="footer_icon">
	<i class="icon"><img src="<?php echo base_url();?>/web/images/footer.png"> </i>
</div>
<div class="footer">
	<div class="container">
	 <div class="col-md-2 span_2">
	   	 <h3>Bitpulsa</h3>
	   	 <ul class="list1">
	   	 	<li><a href="contact.html">contact</a></li>
	   	 	<li><a href="#">Enterprise Features</a></li>
	   	 	<li><a href="#">Why Us?</a></li>
	   	 	<li><a href="#">Solution</a></li>
	   	 	<li><a href="#">Pricing</a></li>
	   	 </ul>
	   </div>
	   <div class="col-md-2 span_2">
	   	 <h3>About Us</h3>
	   	 <ul class="list1">
	   	 	<li><a href="#">Our Story</a></li>
	   	 	<li><a href="#">Our Leadership</a></li>
	   	 	<li><a href="#">Our Investors</a></li>
	   	 	<li><a href="#">Jobs</a></li>
	   	 </ul>
	   </div>
	   <div class="col-md-2 span_2">
	   	 <h3>Support</h3>
	   	 <ul class="list1">
	   	 	<li><a href="#">Help</a></li>
	   	 	<li><a href="#">Privacy Policy</a></li>
	   	 	<li><a href="#">Terms of Use</a></li>
	   	 	<li><a href="#">Solution</a></li>
	   	 	<li><a href="#">Pricing</a></li>
	   	 </ul>
	   </div>
	   <div class="col-md-6 span_3 wow fadeInRight" data-wow-delay="0.4s">
	   	   <ul class="list2 list3">
	   	   	 <i class="phone"> </i>
	   	   	 <li class="phone_desc"><p>+(62)8985-622-347</p></li>
	   	   	 <div class="clearfix"> </div>
	   	   </ul>
	   	   <ul class="list2">
	   	   	 <i class="msg"> </i>
	   	   	 <li class="phone_desc"><p><a href="mailto:info@demo.com"> info@bitpulsa.com</a></p></li>
	   	   	 <div class="clearfix"> </div>
	   	   </ul>
	   	   <p class="copy">&copy;2015 Template by <a href="http://w3layouts.com" target="_blank">w3layouts</a></p>
	   </div>
	</div>
</div>
<style type="text/css">
.modal-header {
	background-color: #3598dc;
}
.tengah{
	display: block;
    margin-left: auto;
    margin-right: auto
}
</style>
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
      	 <?php 
    $attributes = array('class'=>'form-signin','role'=>'form');
    echo form_open('login',$attributes);?>
        <div class="modal-content">
          <div class="modal-header">
           
           <img src="<?php echo base_url();?>/web/images/logo2.png" class="tengah"/>
          </div>
          <div class="modal-body">
            <div class="form-group">
   			 <label>Username</label>
   			 <input type="username" class="form-control" placeholder="Enter username" name="username">
  			</div>
  			<div class="form-group">
   			 <label>Password</label>
 			  <input type="password" class="form-control" placeholder="Enter Password" name="password">
 			 </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </div>
        </form>
      </div>
    </div>

    <div class="modal fade" id="daftar" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
      	 <?php 
    $attributes = array('class'=>'form-signin','role'=>'form');
    echo form_open('daftar',$attributes);?>

        <div class="modal-content">
          <div class="modal-header">
           
           <img src="<?php echo base_url();?>/web/images/logo2.png" class="tengah"/>
          </div>
          <div class="modal-body">
          	<div class="form-group">
   			 <label for="exampleInputEmail1">Nama Lengkap</label>
   			 <input type="text" class="form-control" placeholder="Enter nama" name="nama">
  			</div>
            <div class="form-group">
   			 <label for="exampleInputEmail1">Username</label>
   			 <input type="username" class="form-control" placeholder="Enter username" name="username">
  			</div>
  			<div class="form-group">
   			 <label for="exampleInputEmail1">Email</label>
   			 <input type="email" class="form-control" placeholder="Enter Email" name="email">
  			</div>
  			<div class="form-group">
   			 <label for="exampleInputPassword1">Password</label>
 			  <input type="password" class="form-control" placeholder="Enter Password" name="password">
 			 </div>
 			 
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-success">Daftar Sekarang</button>
          </div>
        </div>
        </form>
      </div>
    </div>

 <script src="https://code.jquery.com/jquery.js"></script>
    <script src="<?php echo base_url();?>/web/js/bootstrap.min.js"></script>
</body>
</html>		