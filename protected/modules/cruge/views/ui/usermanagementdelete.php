<h1 class="elim_user"><?php echo ucwords(CrugeTranslator::t("eliminar usuario "));?></h1>
<div class="form" id = "elim_user_cond">
<?php
	/*
		$model:  es una instancia que implementa a ICrugeStoredUser
	*/
?>
<?php $form = $this->beginWidget('CActiveForm', array(
    'id'=>'crugestoreduser-form',
    'enableAjaxValidation'=>false,
    'enableClientValidation'=>false,
)); ?>
<h2 class="elim_user"><?php echo $model->username; ?>
    <?php echo $model->email; ?>
</h2>
<p>
	<?php echo ucfirst(CrugeTranslator::t("marque la casilla para confirmar la eliminacion")); ?>
	<?php echo $form->checkBox($model,'deleteConfirmation'); ?>
	<?php echo $form->error($model,'deleteConfirmation'); ?>
</P>
<div class="row buttons" id = "btn-elimuser">
	<?php Yii::app()->user->ui->tbutton("Eliminar Usuario"); ?>
	<?php Yii::app()->user->ui->bbutton("Volver",'cancelar'); ?>
</div>
<?php echo $form->errorSummary($model); ?>
<?php $this->endWidget(); ?>
</div>