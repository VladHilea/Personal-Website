<!DOCTYPE html>
<html>
<head>
	<title></title>
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

<section class="bg-parallax-2 height-full">
            <section class="height-full opacity-black-portofolio">
                <div class="container display-table">
                    <div class="row valign-middle ">                      
                        <div class="col-sm-12 color-white text-center">
                            <p class="title-1"><strong>Nutrimaniac</strong></p>
                            <h3 class="pb-20">Site de prezentare . Multi Page . Mobile Responsive . Web Design . Blog</h3>
                            <a target="_blank" href='http://www.nutrimaniac.ro/test2' class="  btn btn-default">Vezi Site-ul</a>
                           
                        </div> 
                    </div> 
                </div>
            </section>
</section>
<section class="pb pt">
	<div class="container">
		<div class="row text-center">
			<div class="col-sm-2">
				<h2>Despre <strong>Client</strong></h2>
				<hr class=" hr-8">

			</div>
			<div class="col-sm-10 text-left  pl">
			<h2>Descriere :</h2>
			<h4><strong>Site de nutritie ce promoveaza o viata sanatoasa!</strong></h4>
				<h4>Aceasta este un site de prezentare creat pentru o firma de nutritie. Este un site web <a style="color: #77DA55;" href="webdesign.php#one-page">multi Page</a>.  Site-ul contine si un Blog realizat cu ajutorul platformei Wordpress si un sistem de newsletter creat in PHP si MySql.</h4>
			</div>
		</div>
	</div>
</section>
<section  class="pb">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 pt"><img class="img-responsive img-portofolio" src="images/nutrimaniac1.png"></div>
			<div class="col-sm-4 pt"><img class="img-responsive img-portofolio" src="images/nutrimaniac2.png"></div>
			<div class="col-sm-4 pt"><img class="img-responsive img-portofolio" src="images/nutrimaniac3.png"></div>
		
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
				<h4>Pentru realizarea acestui site am folosit cele mai noi tehnologii si standarde ale Web Design-ului global: HTML 5, CSS 3, JQuery, PHP, Bootstrap si Font Awesome. Acest site este Mobile Responsive. Am folosit Bootstrap si Media Query pentru a putea fi folosit atat pe dektop cat si pe un dispozitiv mobil cu usurinta.
				Partea de back-end a fost realizata cu ajutorul PHP + MySql. Blog-ul a fost creat in Wordpress, astfel fiind foarte usor de utilizat .</h4>
				<h2>Probleme intampinate si rezolvate :</h2>
				<h4>Meniul era mult prea mic pe dispozitivele mobile. Am reconstruit un alt meniu de la 0 pentru a crea cea mai placuta experienta utilizatorilor site-ului.</h4>
				<h4>Anumite portiuni de pe site erau prea mari pentru dispozitivele mobile. Am folosit MedaiQuery pentru a le rezolva.</h4>
        <h4>Blog-ul Wordpress nu se putea folosi din cauza unei erori a bazei de date, dar a fost remediata in foarte putin timp.</h4>
        


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