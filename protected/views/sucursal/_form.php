<?php
/* @var $this SucursalController */
/* @var $model Sucursal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sucursal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

		<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
  

	<div class="row">
		<?php echo $form->labelEx($model,'id_Sucursal'); ?>
		<?php echo $form->textField($model,'id_Sucursal',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'id_Sucursal'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'nombre_Sucursal'); ?>
		<?php echo $form->textField($model,'nombre_Sucursal',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nombre_Sucursal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_Sucursal'); ?>
		<?php echo $form->textField($model,'direccion_Sucursal',array('size'=>60,'maxlength'=>90)); ?>
		<?php echo $form->error($model,'direccion_Sucursal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->