<?php
/**
 * The file upload form used as target for the file upload widget
 *
 * @var TbFileUpload $this
 * @var array $htmlOptions
 */
?>
<?php echo CHtml::beginForm($this->url, 'post', $this->htmlOptions); ?>
<div class="fileupload-buttonbar">
    <div class="span7 up-job-echo">
        <!-- The fileinput-button span is used to style the file input field as button -->
		<span class="btn  fileinput-button";> <i class="fa fa-plus" aria-hidden="true"></i><span>Añadir archivos</span>
			<?php
			if ($this->hasModel()) :
				echo CHtml::activeFileField($this->model, $this->attribute, $htmlOptions) . "\n"; else :
				echo CHtml::fileField($name, $this->value, $htmlOptions) . "\n";
			endif;
			?>
		</span>
        <button type="submit" class="btn  start" style="background:none; color:#000">
            <i class="fa fa-upload" aria-hidden="true"></i>
            <span>Iniciar</span>
        </button>
        <button type="reset" class="btn cancel" style="background:none; color:#000">
            <i class="fa fa-ban" aria-hidden="true"></i>
            <span>Cancelar</span>
        </button>
        <button type="button" class="btn  delete" style="background:none; color:#000">
            <i class="fa fa-trash" aria-hidden="true"></i>
            <span>Borrar</span>
        </button>
        <hr class = "sup-des"/>
    </div>
    <div class="span5 fileupload-progress fade">
        <!-- The global progress bar -->
        <div class="progress progress-success progress-striped active" role="progressbar">
            <div class="bar" style="width:0;"></div>
        </div>
        <!-- The extended global progress information -->
        <div class="progress-extended">&nbsp;</div>
    </div>
</div>
<!-- The loading indicator is shown during image processing -->
<div class="fileupload-loading"></div>
<br>
<!-- The table listing the files available for upload/download -->
<div class="row-fluid">
    <table class="table table-striped">
        <tbody class="files" data-toggle="modal-gallery" data-target="#modal-gallery"></tbody>
    </table>
</div>
<?php echo CHtml::endForm(); ?>

<?php echo CHtml::endForm(); ?>

