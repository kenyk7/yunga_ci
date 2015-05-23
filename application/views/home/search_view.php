<header id="main-header" class="text-center">
	<div class="container-fluid">
		<div class="content-title">
			<h2 class="text-center"><?php echo $titlepag ?></h2>
		</div>
	</div>
</header>

<section>
<div class="container-fluid">
  <?php if(count($results ) == 0){ echo '<h3 class="text-center">Aun no hay resultados para esta Búsqueda</h3>';} ?>
  <div class="row isotope-content">

  	<?php foreach ($results as $data) { ?>
    <div class="col-lg-3 col-md-4 col-xs-6 item">
      <div class="panel panel-default">
        <div class="panel-body posr">
          <a href="<?php echo $url_service.$data->imageName; ?>" title="<?php echo $data->imageTitulo; ?>" class="caption" data-gallery>
            <figure>
              <img src="<?php echo $url_service_small.$data->imageName; ?>" alt="<?php echo $data->imageTitulo; ?>" class="img-responsive" width="700" height="auto" >
              <figcaption><?php echo $data->imageTitulo; ?></figcaption>
            </figure>
            <div class="caption-hover">
              <div class="hover-details">
                <span><i class="fa fa-heart"></i> <b class="num-like" data-likes="<?php echo $data->imageLikes; ?>"><?php echo $data->imageLikes; ?></b> Likes</span><br>
                <span><i class="fa fa-user"></i> Keny Romero </span>
              </div>
            </div>
            <span class="btn-expand hidden" data-toggle="modal" data-target="#myModal"><i class="fa fa-external-link"></i></span>
          </a>
          <a href="<?php echo base_url(); ?>photo/<?php echo $data->tokenId; ?>" class="btn-external"><i class="fa fa-external-link"></i></a>
        </div>
        <div class="panel-footer posr">
          <div class="pull-left">
            <time><i class="fa fa-calendar"></i> <?php echo date_convert($data->imageDate); ?></time>
          </div>
          <div class="pull-right social-container">
            <div class="btn-group btn-group- btn-social">
              <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url().'photo/'.$data->tokenId; ?>" class="btn btn-default facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://twitter.com/share?url=<?php echo base_url().'photo/'.$data->tokenId; ?>" class="btn btn-default twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://plus.google.com/share?url=<?php echo base_url().'photo/'.$data->tokenId; ?>" class="btn btn-default google-plus"><i class="fa fa-google-plus"></i></a>
              <a class="btn btn-default btn-social-close"><i class="fa fa-times-circle"></i></a>
            </div>

            <div class="social-actions">
              <a data-action="<?php echo $this->base_service_likes.$data->tokenId ?>" data-toggle="tooltip" title="Like +" data-placement="top"><i class="fa fa-heart"></i></a>
              <a data-toggle="tooltip" title="Compartir" data-placement="top" class="open-share"><i class="fa fa-share-alt"></i> </a>
            </div>

          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <?php  } ?>

  </div>
</div>
</section>