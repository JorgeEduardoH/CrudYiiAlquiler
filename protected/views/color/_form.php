<?php
/* @var $this ColorController */
/* @var $model Color */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'color-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	

	<div class="row">
		<?php echo $form->labelEx($model,'id_Color'); ?>
		<?php echo $form->textField($model,'id_Color'); ?>
		<?php echo $form->error($model,'id_Color'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_Color'); ?>
		<?php echo $form->textField($model,'nombre_Color',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nombre_Color'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->