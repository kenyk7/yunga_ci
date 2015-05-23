<header id="main-header" class="text-center">
	<div class="container-fluid">
		<div class="content-title">
			<h2 class="text-center">Enviar una Foto</h2>
		</div>
	</div>
</header>

<section>
<div class="container-fluid wow slideInUp">
	<div class="col-md-6 col-xs-10 panel-form-upload col-md-offset-3 col-xs-offset-1">
      <div class="panel panel-default panel-upload">
        <?php echo form_open_multipart('http://www.creatipro.com/apps/apiyunga/api/new_image','id="form-image-upload"'); ?>
        <div class="panel-heading">
          <input type="text" class="form-control" name="imagetitle" placeholder="Donde se tomó esta foto" required>
        </div>
        <div class="panel-body">
          <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 100%; height: 280px;" ></div>
            <div class="text-center">
              <span class="btn btn-info btn-sm btn-file"><span class="fileinput-new">Seleccionar Foto</span><span class="fileinput-exists"><i class="fa fa-refresh"></i> Cambiar</span>
              <input type="file" name="userfile" id="userfile" required></span>
              <a href="#" class="btn btn-danger btn-sm fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash"></i> Eliminar</a>
            </div>
          </div>
        </div>
        <div class="panel-footer">
          <span><i class="fa fa-send"></i> Enviar una foto</span>
          <button class="btn btn-primary btn-sm pull-right" type="submit">Enviar <i class="fa fa-cloud-upload"></i></button>
          <span class="clearfix"></span>
        </div>
        <?php echo form_close() ?>
      </div>
    </div>
</div>
</section>