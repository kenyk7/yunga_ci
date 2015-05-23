<header id="main-header" class="text-center">
	<div class="container-fluid">
		<div class="content-title wow slideInUp">
			<h2 class="text-center"><?php echo $data_photo->imageTitulo; ?></h2>
		</div>
	</div>
</header>

<section>
<div class="container-fluid">
	<div class="col-lg-12 item">
      <div class="panel panel-default wow slideInUp">
      	<div class="panel-heading">
      	  <div class="pull-left heading-photo-data">
            <span><i class="fa fa-calendar"></i> <?php echo date_convert($data_photo->imageDate); ?></span>
            <span class="left-10"><i class="fa fa-user"></i> <a href="#">Keny Romero</a></span>
          	<span class="left-10"><i class="fa fa-heart"></i> <?php echo $data_photo->imageLikes; ?> Likes</span>
          </div>
          <div class="pull-right social-container">
            <div class="btn-group btn-group- btn-social">
              <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo current_url(); ?>" class="btn btn-default facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://twitter.com/share?url=<?php echo current_url(); ?>" class="btn btn-default twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://plus.google.com/share?url=<?php echo current_url(); ?>" class="btn btn-default google-plus"><i class="fa fa-google-plus"></i></a>
              <a class="btn btn-default btn-social-close"><i class="fa fa-times-circle"></i></a>
            </div>

            <div class="social-actions">
              <a data-action="<?php echo $this->base_service_likes.$data_photo->tokenId ?>" data-toggle="tooltip" title="Like +" data-placement="top"><i class="fa fa-heart"></i></a>
              <a data-toggle="tooltip" title="Compartir" data-placement="top" class="open-share"><i class="fa fa-share-alt"></i> </a>
            </div>

          </div>
          <div class="clearfix"></div>
      	</div>
        <div class="panel-body">
            <figure class="figure-center">
              <img src="<?php echo $url_service.$data_photo->imageName; ?>" alt="<?php echo $data_photo->imageTitulo; ?>" class="img-responsive img-thumbnail" width="auto" height="auto">
            </figure>
        </div>
      </div>
    </div>
</div>
</section>