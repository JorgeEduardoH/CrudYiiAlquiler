<?php
/* @var $this DescuentoController */
/* @var $model Descuento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'descuento-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_Descuento'); ?>
		<?php echo $form->textField($model,'fecha_Descuento'); ?>
		<?php echo $form->error($model,'fecha_Descuento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Descuento_Descuento'); ?>
		<?php echo $form->textField($model,'Descuento_Descuento'); ?>
		<?php echo $form->error($model,'Descuento_Descuento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->