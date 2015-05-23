<!DOCTYPE html>
<html lang="es">
<head>
  <base href="<?php echo base_url() ?>">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $this->layout->getTitle(); ?></title>
  <!-- meta data -->
  <meta name="author" content="Keny Romero">
  <meta name="description" content="<?php echo $this->layout->getDescripcion(); ?>">
  <!-- Bootstrap and css-->
  <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.paper.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/plugins/jasnyupload/jasny-bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/pnotify/pnotify.min.css">
  <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
  <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/app.css" rel="stylesheet">

  <!-- icons -->
  <link rel="shortcut icon" type="image/ico" href="<?php echo base_url(); ?>favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/icons/apple-touch-icon.png" />
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>assets/icons/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>assets/icons/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/icons/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/icons/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>assets/icons/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>assets/icons/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>assets/icons/apple-touch-icon-152x152.png" />

  <meta property="og:site_name" content="<?php echo $this->layout->getTitle(); ?>"/>
  <meta property="og:title" content="<?php echo $this->layout->getTitle(); ?>"/>
  <meta property="og:description" content="<?php echo $this->layout->getDescripcion(); ?>" />
  <meta property="og:url" content="<?php echo current_url(); ?>"/>
  <meta property="og:image" content="<?php echo $this->layout->getImage(); ?>" />
  
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?php echo $this->layout->getTitle(); ?>" />
  <meta name="twitter:description" content="<?php echo $this->layout->getDescripcion(); ?>" />
  <meta name="twitter:url" content="<?php echo current_url(); ?>" />
  <meta name="twitter:image:src" content="<?php echo $this->layout->getImage(); ?>"/>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<header>
<div class="welcome-home">
  <div class="container-fluid">
    <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Santa Rosa de la Yunga"></a>
    <h1><span class="hidden-xs">Bienvenidos a </span><br><strong class="welcome">Santa Rosa de la Yunga</strong></h1>
    <div class="social-header">
      <span>Síguenos en:</span>
      <a href="https://www.facebook.com/pages/Santa-Rosa-Ja%C3%A9n/541317689344111" target="_blank" class="fb " data-toggle="tooltip" title="Facebook" data-placement="left"><i class="fa fa-facebook"></i></a>
    </div>
  </div>
</div>
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid"><!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url(); ?>">Yunga</a>
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse actives">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url(); ?>proyecto">Proyecto</a></li>
        <li><a href="<?php echo base_url(); ?>historia">Historia</a></li>
      </ul>

      <div class="navbar-form navbar-left hidden">
        <a href="<?php echo base_url(); ?>submit" class="btn btn-info">Enviar Foto</a>
      </div>

      <?php echo form_open('search','class="navbar-form navbar-left" role="search"'); ?>
        <div class="form-group">
          <input type="text" name="keyValue" class="form-control" placeholder="Buscar..." required>
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
      <?php echo form_close(); ?>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url(); ?>favoritas">Favoritas</a></li>
        <li class="dropdown <?php echo actives('search').actives('photos'); ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categorías <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url(); ?>photos/catarata">Cataratas</a></li>
            <li><a href="<?php echo base_url(); ?>photos/paisaje">Paisajes</a></li>
            <li><a href="<?php echo base_url(); ?>photos/naturaleza">Naturaleza</a></li>
            <li><a href="<?php echo base_url(); ?>photos/atardecer">Atardecer</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>
</header>
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
  <!-- The container for the modal slides -->
  <div class="slides"></div>
  <!-- Controls for the borderless lightbox -->
  <h3 class="title"></h3>
  <a class="prev"><i class="fa fa-chevron-left"></i></a>
  <a class="next"><i class="fa fa-chevron-right"></i></a>
  <a class="close"><i class="fa fa-times-circle"></i></a>
  <a class="play-pause"></a>
  <ol class="indicator"></ol>
</div>

<?php echo $content_for_layout; ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="progress" style="position: fixed; top: 0px; left: 0; right: 0; z-index: 999; border-radius: 0px;">
  <div class="progress-bar progress-bar-success" style="width: 0;"></div>
</div>

<footer id="footer-page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
        &copy; 2015. Todos los Derechos Reservados. <em>PowerBy <strong>Keny Romero</strong></em>
      </div>
      <div class="col-sm-4 posr hidden-xs">
        <div class="social-footer text-right">
          <a href="https://www.facebook.com/kenyk7" target="_blank"><i class="fa fa-facebook"></i></a>
          <a href="https://www.twitter.com/kenyk7" target="_blank"><i class="fa fa-twitter"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/isotope.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/typed.min.js"></script>
<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/okzoom.js"></script>

<script src="<?php echo base_url(); ?>assets/plugins/pnotify/pnotify.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jasnyupload/jasny-bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/elevatezoom/elevatezoom.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/Kajax.js"></script>

<script>

var cur = location.href;
if($(".actives a[href='"+cur+"']").attr('href') == cur){
    $(".actives a[href='"+cur+"']").addClass('active');
    var parent = $(".actives a[href='"+cur+"']").parent();
    parent.addClass('active');
}

$('.open-share').click(function(e){
  e.preventDefault();
  $(this).parents('.social-container').children('.btn-social').toggleClass('right-normal');
});

$('.btn-social-close').click(function(e){
  e.preventDefault();
  $(this).parents('.btn-social').toggleClass('right-normal');
});

jQuery(document).ready(function($) {
  var forms = new Kajax();
  forms.sendFormFile('#form-image-upload');
});



$(function() {
  $('#blueimp-gallery').on('opened', function (event) {
      $('.slides img').okzoom({
        width: 250,
        height: 250,
        round: true,
        background: "#fff",
        backgroundRepeat: "repeat",
        border: "2px solid #ddd"
      });
  });

  $('.figure-center img').okzoom({
        width: 250,
        height: 250,
        round: true,
        background: "#fff",
        backgroundRepeat: "repeat",
        border: "2px solid #ddd"
      });
});


$(function () {

  $(".progress").fadeOut();
  $('[data-toggle="tooltip"]').tooltip();
  // init typed
  $(".welcome").typed({
    strings: ["Santa Rosa de la Yunga"],
    typeSpeed: 50,
    contentType: 'html',
    cursorChar: "",
  });

  $(".social-actions [data-action]").click(function(e) {
    e.preventDefault();
    $.get($(this).data('action'), function(data) {
      if(data['message'] === 'success'){
          new PNotify({title: 'Ok!',text: 'Gracias por el Like',type: 'success',styling: 'fontawesome'});
      }else{
        new PNotify({title: 'Info',text: 'Al parecer ya indicó que le gusta esta Foto',type: 'info',styling: 'fontawesome'});
      }
    });
  });
 
 var $K = $('.isotope-content');
    $K.imagesLoaded(function () {
      $K.masonry({itemSelector:'.item', isAnimated:true,layoutMode: 'masonry'});
      $(".facebook-page").css('padding-top', '0');

    });

  $(".btn-expand").click(function() {
    var loadimg = $(this).parents(".caption").children('figure');
    var img = loadimg.children('img').attr('src');
    $(".modal-img").attr('src', img);
  });

})
</script>
</body>
</html>