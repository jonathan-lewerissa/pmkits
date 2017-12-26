<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>ABOUT PMK ITS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Let's Party Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <!-- Custom Theme files -->
    <link href="public/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="public/css/style.css" type="text/css" rel="stylesheet" media="all">   
    <link href="public/css/font-awesome.css" rel="stylesheet">		<!-- font-awesome icons -->   
    <link rel="stylesheet" href="public/css/lightbox.css"> 
    <link rel="stylesheet" href="public/css/flexslider.css" type="text/css" media="screen" /> 
    <!-- //Custom Theme files --> 

    <!-- js -->
    <script src="public/js/jquery-2.2.3.min.js"></script>  
    <!-- //js -->

    <!-- web-fonts -->   
    <link href="//fonts.googleapis.com/css?family=Trochut:400,400i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <!-- //web-fonts -->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<!-- banner -->
	<div id="home" class="w3ls-banner w3-agilefireworks jarallax"> 
		<!-- header -->
		<div class="header-w3layouts"> 
			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header page-scroll">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Let's Party</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="welcome">PMK <span>ITS</span></a></h1>
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right cl-effect-15">
                            <li><a href="./welcome">Beranda</a></li>
                            <li><a href="./about">Tentang</a></li>
                            <li><a href="./renungan">Renungan Harian</a></li>
                            <li><a class="page-scroll" href="#activity" data-hover="Berita Penting">Berita Penting</a></li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container -->
			</nav>  
		</div>	
		<!-- //header -->
		<!-- banner-text -->
		<div class="banner-text" style="background:url(public/images/news.jpg);background-size:cover;"> 
<!--            background:url(../images/1.jpg)no-repeat right 0px;-->
            <h2>Berita Penting</h2>
            <p>Informasi Untuk <span>Para Sobat PMK</span> </p>
		</div> 
		<!-- //banner-text -->   
	</div>	
	<!-- //banner -->
    
    <div id="activity" class="activity">
	
    <!-- blog -->
	<div id="blog" class="blog gallery">
		<div class="container">  
			<div class="blog-agileinfo">
				<div class="col-md-7 blog-w3grid-img">
					<a href="#kabarkita" data-toggle="modal" class="wthree-blogimg">  
						<img src="public/images/img1.jpg" class="img-responsive" alt=""/>
					</a>  
				</div>
				<div class="col-md-5 blog-w3grid-text"> 
					<h4><a href="#kabarkita" data-toggle="modal">Kabar Kita</a></h4>
					<h6>EVENT By <a href="#"> peemkaitees</a> - May 5th, 2017 </h6>
					<p>Syalom sobat PMK! untuk pertama kalinya Humas PMK menerbitkan buletin “Kabar Kita” secara online.</p>
				</div> 
				<div class="clearfix"> </div>
			</div> 
			<div class="blog-agileinfo blog-agileinfo-mdl">
				<div class="col-md-7 blog-w3grid-img blog-img-rght">
					<a href="#menaradoa" data-toggle="modal" class="wthree-blogimg">  
						<img src="public/images/img2.jpg" class="img-responsive" alt=""/>
					</a>  
				</div>
				<div class="col-md-5 blog-w3grid-text"> 
					<h4><a href="#menaradoa" data-toggle="modal">Menara Doa Online</a></h4>
					<h6>By <a href="#"> peemkaitees</a> - Feb 13th, 2017 </h6>
					<p>Syalom teman-teman kami dari DPK ingin mengajak temen-temen untuk mensharingkan pokok doa temen-temen melalui form doa online...</p>
				</div> 
				<div class="clearfix"> </div>
			</div> 
			<div class="blog-agileinfo">
				<div class="col-md-7 blog-w3grid-img">
					<a href="#myModal" data-toggle="modal" class="wthree-blogimg">  
						<img src="public/images/img3.jpg" class="img-responsive" alt=""/>
					</a>  
				</div>
				<div class="col-md-5 blog-w3grid-text"> 
					<h4><a href="#myModal" data-toggle="modal">Mattis earum rerum</a></h4>
					<h6>ARTICLE By <a href="#"> Admin</a> - Dec 25th, 2016 </h6>
					<p>Sed interdum interdum accumsan. Aenean nec purus ac orci finibus facilisis. In sit amet placerat nisl, in auctor sapien. Donec ultricies faucibus ante rerum hic a sapiente delectus in auctor sapien. </p>
				</div> 
				<div class="clearfix"> </div>
			</div> 
		</div>
	</div>
	<!-- //blog -->     

	@include('user.footer') 
	
	<!-- pemuridan -->
	<div class="modal about-modal w3-agileits fade" id="kabarkita" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>			
				</div> 
				<div class="modal-body" align="justify">
					<img src="public/images/img1.jpg" alt=""> 
					<h5>Kabar Kita</h5>
					<p>Syalom sobat PMK! untuk pertama kalinya Humas PMK menerbitkan buletin “Kabar Kita” secara online. Buletin ini berisikan kegiatan kegiatan PMK yang telah dilakukan pada saat kepengurusan PMK 2016/2017. Selamat Membaca sobat :) God Bless You!</p>
                    
				</div> 
			</div>
		</div>
	</div>
	<!-- //pemuridan -->
	
    <!-- medfo -->
	<div class="modal about-modal w3-agileits fade" id="menaradoa" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body">
					<img src="public/images/img2.jpg" alt=""> 
					<h5>Menara Doa</h5>
					<p>Syalom teman-teman kami dari DPK ingin mengajak temen-temen untuk mensharingkan pokok doa temen-temen melalui form doa online yang telah kami persiapkan. Disini kami mau memudahkan teman-teman yang memiliki pokok doa untuk bisa mengirimkan pokok doa teman-teman melalui form online tersebut.</p>
                    <p>Jadi buat teman-teman yang tidak bisa hadir di PJ atau sedang mengalami pergumulan gak perlu bingung lagi kalau mau melegakan hati temen-temen dengan mensharing pokok doanya untuk didoakan bersama.</p>
                    <p>So tunggu apalagi, kami menunggu pokok doa temen-temen karena kami rindu untuk membantu menguatkan temen-temen melalui setiap doa yang kami panjatkan kepada-Nya. Ditunggu yah temen2:)))</p>
                    <p>Adapun link untuk form doanya:</p> <h3><a href="tpkk.its.ac.id/menaradoaonline">tpkk.its.ac.id/menaradoaonline</a></h3>
				</div> 
			</div>
		</div>
	</div>
	<!-- //medfo -->
    
    
	<!-- fireworks scripts --> 
	<script type="text/javascript" src="public/js/jquery.fireworks.js"></script>
	<script>	
		setTimeout(function() {
			$('.w3-agilefireworks').fireworks();   
		});
	</script>
	<!-- //fireworks scripts -->
	<!-- timer scripts --> 
	<script type="text/javascript" src=" public/js/moment.js"></script>
	<script type="text/javascript" src=" public/js/moment-timezone-with-data.js"></script>
	<script type="text/javascript" src="public/js/timer.js"></script>
	<!-- //scripts -->  
	<!-- jarallax -->
	<script src="public/js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<!-- //jarallax --> 
	<!-- ResponsiveTabs js -->
	<script src="public/js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
	<!-- //ResponsiveTabs js --> 
	<!-- Scrolling Nav JavaScript --> 
    <script src="public/js/scrolling-nav.js"></script>  
	<!-- //fixed-scroll-nav-js --> 
	<!-- pop-up-box -->    
	<script src="public/js/jquery.magnific-popup.js" type="text/javascript"></script>
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
	<!-- //pop-up-box -->
	<!-- start-smooth-scrolling --> 
	<script type="text/javascript" src="public/js/move-top.js"></script>
	<script type="text/javascript" src="public/js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	 
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="public/js/bootstrap.js"></script>
    </div>
</body>
</html>