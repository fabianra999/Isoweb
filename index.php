<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include 'views/components/header.php' ?>
    </head>
    
    <body id="page-top">
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

        <!-- Navigation -->
        <?php include 'views/components/navBar.php' ?>
        
        <!-- Home -->
        <?php include 'views/layout/home.php' ?>
        
        <!-- Banner top 1280 x 150 || 200-->
        <?php 

        $bannerDate = false;

        $paymentDate = new DateTime(); 
        $contractDateBegin = new DateTime('2018-12-04');
        $contractDateEnd  = new DateTime('2018-12-09');
        
        if (
          $paymentDate->getTimestamp() > $contractDateBegin->getTimestamp() && 
          $paymentDate->getTimestamp() < $contractDateEnd->getTimestamp()){
            $bannerDate = true;
        }else{
            $bannerDate = false;
        }

        ?>
        <?php  if($bannerDate) { ?>
        <div class="banner__top">
            <a href="#contact">
                <img src="img/banners/PROMO.png" alt=""> 
            </a>
        </div>
        <?php  } ?>

        <!-- Nosotros -->
        <?php include 'views/layout/nosotros.php' ?>
        
        <!-- Servicios -->
        <?php //include 'views/layout/servicios.php' ?>
        
        <!-- Portafolio -->
        <?php //include 'views/layout/portafolio.php' ?>
        
        <!-- Contacto -->
         <?php include 'views/layout/contacto.php' ?> 
        
        <!-- Contacto -->
         <?php include 'views/components/footer.php' ?> 
        
        <!-- Script -->
        <?php include 'views/components/script.php' ?>
        <!-- <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i> -->
   
</body>

</html>