<?php
/* @var $this MarcaController */
/* @var $model Marca */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'marca-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'id_Marca'); ?>
		<?php echo $form->textField($model,'id_Marca'); ?>
		<?php echo $form->error($model,'id_Marca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_Marca'); ?>
		<?php echo $form->textField($model,'nombre_Marca',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nombre_Marca'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->