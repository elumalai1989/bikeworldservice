<?php 
	/*
	*	author: Elumalai Danotharan
	*	Date: 20/05/2018
	*/
?>

<?php 
 /* error_reporting(-1);
ini_set('display_errors', 'On'); */
	
	 require_once('helper/functions.php'); 
	 
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Bike world service | <?php echo getTitle(); ?> </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<script type="applijegleryion/x-javascript"> 
 // addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
 // function hideURLbar(){ window.scrollTo(0,1); } 
</script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600,800,300italic,400italic|Lato:400,700,400italic' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<script src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>

<!--/script-->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$('#header-wrapper').offset().top},900);
		});
	});
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120237507-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120237507-1');
</script>

</head> 
<body>
<!--start-home -->		
			<div class="header-top sticky" id="header-wrapper">
				<div class="container header-container">	
					<!--top-nav-->
					<?php 
						$route = explode('.' , basename($_SERVER['REQUEST_URI']))[0];
						$active = '';
						switch($route){							
							case 'about':
								$about_active = 'active';
								break;
							case 'services':
								$services_active = 'active';
								break;
							case 'full-service':
								$full_service_active = 'active';
								break;
							case 'contact':
								$contact_active = 'active';
								break;
							default:
								$home_active = 'active';
								break;
						}
					?>
					 <div class="logo">
							  <a href="/"><img src="img/logo.png" height="170"/></a>
					 </div>
					<span class="menu"> </span>
					<div class="top-menu">
						<nav>
							<ul class="cl-effect-16">
								<li><a class="<?php echo $home_active; ?>" href="/" data-hover="Home">Home</a></li>
								<li><a class="<?php echo $about_active; ?>" href="/about.php" data-hover="About">About</a></li>
								<li><a class="<?php echo $full_service_active; ?>" href="/full-service.php" data-hover="30+ points full service">30+ Points Full Service</a></li>
								<li><a class="<?php echo $services_active; ?>" href="/services.php" data-hover="Services">Services</a></li>
								<!-- <li><a class="scroll" href="#team" data-hover="Team">Team</a></li> -->
							    <!-- <li><a class="scroll" href="/gallery" data-hover="Gallery">Gallery</a></li>
								<li><a class="scroll" href="/testimonials" data-hover="Testimonials">Testimonials</a></li> -->
						        <li><a class="<?php echo $contact_active; ?>" href="/contact.php" data-hover="Contact">Contact</a></li>
								<div class="clearfix"></div>
							</ul>
						</nav>		
					</div>

				<!-- script-for-menu -->
					<script>
						$("span.menu").click(function(){
							$(".top-menu ul").slideToggle("slow" , function(){
							});
						});
					</script>
				<!-- script-for-menu -->

				 <div class="clearfix"></div>
			  </div>
		   </div>
		   <div class="dummy-header"></div>
			
			  