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
          	<span class="left-10"><i class="fa fa-thumbs-up"></i> <?php echo $data_photo->imageLikes; ?> Likes</span>
          </div>
          <div class="pull-right social-container">
            <div class="btn-group btn-group- btn-social">
              <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo current_url(); ?>" class="btn btn-default facebook" target="social"><i class="fa fa-facebook"></i></a>
              <a href="https://twitter.com/share?url=<?php echo current_url(); ?>" class="btn btn-default twitter" target="social"><i class="fa fa-twitter"></i></a>
              <a href="https://plus.google.com/share?url=<?php echo current_url(); ?>" class="btn btn-default google-plus" target="social"><i class="fa fa-google-plus"></i></a>
              <a class="btn btn-default btn-social-close"><i class="fa fa-times-circle"></i></a>
            </div>

            <div class="social-actions">
              <span class="likes"><?php echo $data->imageLikes; ?></span>
              <a data-action="<?php echo $this->base_service_likes.$data_photo->tokenId ?>" data-toggle="tooltip" title="Like +" data-placement="top" class="action-like"><i class="fa fa-thumbs-up"></i></a>
              <a data-toggle="tooltip" title="Compartir" data-placement="left" class="open-share"><i class="fa fa-share-alt"></i> </a>
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