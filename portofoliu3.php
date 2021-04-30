<!DOCTYPE html>
<html>
<head>
	<title>Social Network. Portofoliu 3</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="user-scalable=yes, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> 
  <?php include_once("analyticstracking.php") ?>   
    <link href="https://fonts.googleapis.com/css?family=Poppins:600" rel="stylesheet">
</head>
<body>
<?php include "header.php" ?>

<section class="bg-parallax-3 height-full">
            <section class="height-full opacity-black-portofolio">
                <div class="container display-table">
                    <div class="row valign-middle ">                      
                        <div class="col-sm-12 color-white text-center">
                            <p class="title-1"><strong>Social Network</strong></p>
                            <h3 class="pb-20">Social Media, PHP+MySql, HTML+CSS, Bootstrap, Reponsive, JQuery </h3>
                            <a target="_blank" href='https://socialnetwork.vlad-hilea.com' class="  btn btn-default">Vezi Site-ul</a>
                           
                        </div> 
                    </div> 
                </div>
            </section>
</section>
<section class="pb pt">
	<div class="container">
		<div class="row text-center">
			<div class="col-sm-2">
				<h2>Despre <strong></strong></h2>
				<hr class=" hr-8">

			</div>
			<div class="col-sm-10 text-left  pl">
			<h2>Descriere :</h2>
			<h4><strong>!!! ACESTA ESTE UN PROIECT PERSONAL, FARA NICIO UTILIZARE IN SCOP COMERCIAL !!!</strong></h4>
				<h4>Aceasta este un site de prezentare creat pentru un concurs. Cu ajutorul acestui site m-am calificat la faza internatiopnala a acestuia. Este un site de social network.  Site-ul este realizat in totalitate pentru concurs. Acest website nu a fost folosit in mod comercial. Acesta a reprezentat doar un proiect personal pentru portofoliul meu.</h4>
			</div>
		</div>
	</div>
</section>
<section  class="pb">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 pt"><img class="img-responsive img-portofolio" src="images/socialnetwork3.png"></div>
			<div class="col-sm-4 pt"><img class="img-responsive img-portofolio" src="images/socialnetwork1.png"></div>
			<div class="col-sm-4 pt"><img class="img-responsive img-portofolio" src="images/socialnetwork2.png"></div>
		
		</div>
	</div>
</section>
<section class="pt pb">
	<div class="container">
		<div class="row">
			<div class="col-sm-2 text-center">
				<h2>Despre <strong>Proiect</strong></h2>
				<hr class="hr-9">
			</div>
			<div class="col-sm-10 text-left  pl">
			<h2>Descriere :</h2>
				<h4>This website feed is a full scale social networking website. It includes features such as newsfeeds, picture posting, profiles, friend system, chat system, trending hashtags and much more ! This social website can connect people, students and can be used to discuss any kind of project or just to waste some time on the internet with your friends. URL = www.socialnetwork.vlad-hilea.com !</h4>
        <h4>The social media uses the latest technologies , which improves the protection of the database. It includes password encryption and, also it contains email verification, which protect users against fake accounts !
        This website, also has an android app which can be used for a better experience on mobile devices !
        </h4>
				<h2>Ce Contine :</h2>
				<h4>It includes all the features needed for a good and easy to use social media website.</h4>
				<h4>- Newsfeed
        - Post writing and post edit
        - Comments and Likes
        - Pictures Post
        - Profile
        - Friend system
        - Message System
        - Hashtags and Popular hashtags
        - Notifications
        - Profile Settings Edit
        - Embed yotube links
        - Profile Description
        - Post on profile
        </h4>
        <h2>Limbaje de programare folosite: </h2>
        <h4>frameworks used. Security .
        This website uses the latest technologies of global web design and web development :
        - PHP + MySql for backend development
        - HTML + CSS for front-end design
        - Bootstrap for front-end and user experience
        - Javascript for front-end design and user experience
        - JQuery for user experience
        - AJAX for search and newsfeed development
        </h4>

			</div>
		</div>
	</div>
</section>
<section id="project" class=" pb pt">

  <div class="container">
    <div class="row text-center wow bounceInUp">
      <div class="col-sm-12">
        <h1 class="pb-20 " style="font-size: 40px;"><strong>Sa Incepem Proiectul de Astazi</strong></h1>
        <h3 class="pb">Va voi ajuta sa dati viata ideilor dumneavoastra</h3>
        <a href='contact.php' class="  btn btn-default" id="button-1">Incepe Acum</a>
      </div>
    </div>
  </div>
</section>
<?php include "footer.php" ?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="js/counterup.min.js"></script>
 <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
<script src="js/owl.carousel.js"></script>
<script>  
jQuery(window).scroll(function() {
    if (jQuery(".navbar").offset().top > 50) {
        jQuery(".navbar-fixed-top").addClass("nav-collapsed");

        } 
    else
        {
        jQuery(".navbar-fixed-top").removeClass("nav-collapsed");

        }
});
</script>
<script>
var width = $(window).width();
if (width > 768) {jQuery(window).scroll(function() {
    if (jQuery(".navbar").offset().top > 50) {
        jQuery(".navbar-fixed-top").addClass("nav-collapsed");

        } 
    else
        {
        jQuery(".navbar-fixed-top").removeClass("nav-collapsed");

        }
});
}
 else{
 	 jQuery(".navbar-fixed-top").addClass("nav-collapsed");
 }


 
    $('.navbar-collapse ul li a:not(.dropdown-toggle)').click(function() {
    $('.navbar-toggle:visible').click();
});

     jQuery('.page-scroll').bind('click', function(e) {
            e.preventDefault();
            jQuery('html,body').animate({scrollTop: jQuery(this.hash).offset().top - 50});                                                         
               });
       $(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 1250) {  
       
        $("#goto").removeClass("dn");
    }
    else{
 $("#goto").addClass("dn");
    }
}); 
</script>
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script>

<script>
 $("#carousel").owlCarousel({ // id-ul carouselului, daca avem mai multe schimbam id-ul
      autoPlay: 9000, //Set AutoPlay to 9 seconds
      items : 1,
      itemsDesktop : [1199,1],
      itemsDesktopSmall : [979,1],
      itemsTablet :[768,1],
      itemsTabletSmall:[600,1],
      itemsMobile : [479,1],
      stopOnHover : false
  });
</script>
<script>  
  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 200) {
    
        
         $("#nav").addClass("navbar-fixed-top");
         
        
    }
    else{
      
        $("#nav").removeClass("navbar-fixed-top");
         
    }
}); 



</script>

</body>
</html>