<!DOCTYPE html>
<style type="text/css">
/*
#menu{
    background-color: white;
    opacity:0.6;
     filter: alpha(opacity=60);
     position: fixed;
     right: 60px;
    top: 0px;
  }*/
  #colorfondo:hover{
    background: #b4e391; /* Old browsers */
background: -moz-linear-gradient(top,  #b4e391 0%, #61c419 50%, #b4e391 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#b4e391), color-stop(50%,#61c419), color-stop(100%,#b4e391)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #b4e391 0%,#61c419 50%,#b4e391 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #b4e391 0%,#61c419 50%,#b4e391 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #b4e391 0%,#61c419 50%,#b4e391 100%); /* IE10+ */
background: linear-gradient(to bottom,  #b4e391 0%,#61c419 50%,#b4e391 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b4e391', endColorstr='#b4e391',GradientType=0 ); /* IE6-9 */
font-family: 'arial';
  color: #FFFCFE !important;

  }
  

  #headerSection{
    background-color: white;
  }
#carouselSection{
    background-color: white;
  }
</style>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CITEC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
  <link id="callCss" rel="stylesheet" href="themes/css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" />

  <link id="callCss"rel="stylesheet" href="themes/css/style.css" type="text/css" media="screen" charset="utf-8" />
  <link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet">

</head>
<body>
  <div id="headerSection">
  <div class="container">
  <div class="span3 logo"><a ><img src="themes/img/super_logo2.png" alt="" /></a></div>
    
    <div class="navbar">
    
      <div id="menu" >
      <div class="nav-collapse">
        <ul class="nav">

        <?php 
          foreach ($this->menu as $key => $value) {
        ?>
            <li>
              <a href="<?php echo $value['url']; ?>" id="colorfondo"><?php echo $value['label'];?></a>
            </li>
        <?php    
          }
        ?>

         <a href="?r=site/login" id="colorfondo">Iniciar Sesión</a>
        </ul>
      </div>
      </div>

      
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
  </div>
  </div>
<!--Header Ends================================================ -->

<div id="carouselSection" class="cntr"> 
      <div class="carousel-inner">
        <div class="item active">
          <a class="cntr" ><img src="themes/img/citec_logo.png" alt=""></a>
        </div>
      </div>   
</div>

<!-- Sectionone block ends======================================== -->

 <?php 
  
 echo $content; ?>

<!-- Our Services======================================== -->

<!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

<script src="themes/js/jquery-1.9.1.min.js"></script>
<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
<script src="themes/js/jquery.scrollTo-1.4.3.1-min.js" type="text/javascript"></script>
<script src="themes/js/jquery.easing-1.3.min.js"></script>
<script src="themes/js/default.js"></script>

<script type="text/javascript">

  $(document).ready(function() {
  $('#myCarousel').carousel({
    interval: 7000
  });
  
  });
  
  
  
  
 
</script>










</body>
</html>