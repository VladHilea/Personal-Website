<!DOCTYPE html>
<html>
<head>
	<title>Error 404 Page</title>
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
     
    <link href="https://fonts.googleapis.com/css?family=Poppins:600" rel="stylesheet">
</head>
<body>

<section class="bg-image-5 height-full">
            <section class="height-full opacity-black">
                <div class="container display-table">
                    <div class="row valign-middle ">                      
                        <div class="col-sm-12 color-white text-center">
                        
                            <p class="title-1"><strong >ERROR <span class="color-green">404</span></strong></p>

                            <p class="title-1-sm"><span class="color-green">PAGE</span> NOT FOUND</p>
                            <h2 class="pb">Wrong URL addres or the page has been removed</h2>
                            <a href='index.php' class="  btn btn-default" id="button-contact"><i class="fa fa-home"></i> HOME</a>
                           
                        </div> 
                    </div> 
                </div>
            </section>
</section>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="js/counterup.min.js"></script>
 <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
<script src="js/owl.carousel.js"></script>
<script src='js/typed.min.js'></script>
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
	
	var typed = new Typed("#typed", {
  strings: ["ERROR 404"],
  typeSpeed: 500,
  smartBackspace:true,
    loop: false,
  loopCount: Infinity,
   backSpeed: 50,
    backDelay: 800,

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