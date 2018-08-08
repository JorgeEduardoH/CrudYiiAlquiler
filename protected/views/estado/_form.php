<?php
/* @var $this EstadoController */
/* @var $model Estado */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estado-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_Estado'); ?>
		<?php echo $form->textField($model,'id_Estado'); ?>
		<?php echo $form->error($model,'id_Estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_Estado'); ?>
		<?php echo $form->textField($model,'nombre_Estado',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nombre_Estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->