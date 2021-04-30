<?php 
if(!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != "on"){
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    
    header('Location: ' . $redirect);
    exit();
} ?>
<section id="supraheader">
  <div class="container">
     <div class="row">
        <div class="col-sm-6 col-xs-12">
            <h5><i class="fa fa-map-marker" style="color:#77DA55 ; margin-top: 5px;"></i> Bucuresti, Romania</h5>

        </div>
        
        <div class="col-sm-6 col-xs-12 text-right">

         <a target="_blank" href="https://www.facebook.com/vladHilea/?fref=ts"><span class="fa-stack fa-lg">
            <i class="fa fa-square fa-stack-2x"></i>
             <i class="fa fa-facebook fa-stack-1x fa-inverse social-top"></i>
        </span></a>
          <a target="_blank" href="https://twitter.com/vortex1313" class="social-top"><span class="fa-stack fa-lg social-top">
            <i class="fa fa-square fa-stack-2x"></i>
             <i class="fa fa-twitter fa-stack-1x fa-inverse social-top"></i>
        </span></a>
         <a target="_blank" href="contact.php" class="social-top"><span class="fa-stack fa-lg">
            <i class="fa fa-square fa-stack-2x"></i>
             <i class="fa fa-envelope fa-stack-1x fa-inverse social-top" ></i>
        </span></a>
       
          <span class=" pull-right" id="phone">
              <i class='fa fa-phone'></i>
              <a href='tel:+40732374671'>+40732 374 671</a>
          </span>
         
        </div> 

     </div>
  </div>
</section>

<header id="header">
<nav id="nav" class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="pull-right navbar-toggle collapsed desktop-show" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
              
      <a class="navbar-brand  opacity-60" href="index.php">VladHilea</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right text-center ">
          <li><a  href="index.php">Home</a></li>
        <li><a  href="webdesign.php">Creare Site</a></li>
        <li><a  href="seo.php">SEO si Administrare</a></li>
        <li><a href="landing-page.php">Landing Page</a></li>
        <li><a  href="pricing.php">Pret Site</a></li>
        <li><a  href="portofoliu.php">Portofoliu</a></li>
        
        <li><a  href="contact.php">Contact</a></li>
    
      </ul>

        </div> 
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- sfarsit menu transparent --> 
</header>