<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="user-scalable=yes, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> 
   <?php include_once("analyticstracking.php") ?>  
    <link href="https://fonts.googleapis.com/css?family=Poppins:600" rel="stylesheet">
</head>
<body>
<?php include "header.php" ?>
<section class="bg-image-2 height-480" id="contact-top">
            <section class="height-480 opacity-black">
                <div class="container display-table">
                    <div class="row valign-middle ">                      
                        <div class="col-sm-12 color-white text-center">
                            <p class="title-1"><strong>Contact</strong></p>
                           
                            
                            <a href='tel:+40732 374 671' class="  btn btn-default" id="button-tel"><i class="fa fa-phone"></i>+40732 374 671</a>
                        </div> 
                    </div> 
                </div>
            </section>
</section>
<section class="pb pt">
	<div class="container">
		<div class="row text-center">
			<div id="contact-info" class="col-sm-6 ">
				<h2 class="pb text-center"><strong>Contact info</strong></h2>

				<h4><a href="tel:+40732374671" style="color: #333;"><i class="fa fa-phone"></i> +40732 374 671</a></h4>
				<h4 class="pb"><i class="fa fa-envelope"></i> vlad.hilea@gmail.com</h4>
				<hr class="hr-2">
				<h2 class="pt pb text-center"><strong>Social Links</strong></h2>

				 <a target="_blank" href="https://www.facebook.com/vladHilea"><span class="fa-stack fa-lg">
            <i class="fa fa-square fa-stack-2x"></i>
             <i class="fa fa-facebook fa-stack-1x fa-inverse social-top"></i>
        </span></a>
          <a target="_blank" href="https://twitter.com/vortex1313" class="social-top"><span class="fa-stack fa-lg social-top">
            <i class="fa fa-square fa-stack-2x"></i>
             <i class="fa fa-twitter fa-stack-1x fa-inverse social-top"></i>
        </span></a>
         <a href="" class="social-top"><span class="fa-stack fa-lg">
            <i class="fa fa-square fa-stack-2x"></i>
             <i class="fa fa-google-plus fa-stack-1x fa-inverse social-top" ></i>
        </span></a>
				
			</div>
			<div class="col-sm-6 text-left">
<form action="mail.php" method="post">
<h4><strong>Nume :</strong></h4>
	<input required type="text" name="nume"  class="form-control">
	<h4><strong>Email :</strong></h4>
	<input type="email" required name="email"  class="form-control">
	<h4><strong>Telefon :</strong></h4>
	<input type="text" required name="telefon" class="form-control">
<h4><strong>Mesaj :</strong></h4>
<textarea class="form-control" placeholder="" name="mesaj"></textarea>
<button class="btn btn-default btn-margin" type="submit">Trimite Cererea</button>
</form>
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



</script>

</body>
</html>