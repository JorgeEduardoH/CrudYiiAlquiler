<?php
/* @var $this VendedorController */
/* @var $model Vendedor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vendedor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cedula_Vendedor'); ?>
		<?php echo $form->textField($model,'cedula_Vendedor'); ?>
		<?php echo $form->error($model,'cedula_Vendedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_Vendedor'); ?>
		<?php echo $form->textField($model,'direccion_Vendedor',array('size'=>60,'maxlength'=>90)); ?>
		<?php echo $form->error($model,'direccion_Vendedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_Vendedor'); ?>
		<?php echo $form->textField($model,'nombre_Vendedor',array('size'=>60,'maxlength'=>90)); ?>
		<?php echo $form->error($model,'nombre_Vendedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_Sucursal'); ?>
		<?php 
         echo $form->dropDownList($model,'id_Sucursal',
     CHtml::listData(Sucursal::model()->findAll(),'id_Sucursal','nombre_Sucursal')); 
 

		 ?>
		<?php echo $form->error($model,'Sucursal'); ?>
	</div>



	<div class="row">
		<?php echo $form->labelEx($model,'clave'); ?>
		<?php echo $form->textField($model,'clave',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'clave'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->