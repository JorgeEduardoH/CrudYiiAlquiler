<?php
/* @var $this AlquilerController */
/* @var $model Alquiler */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_Alquiler'); ?>
		<?php echo $form->textField($model,'id_Alquiler'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaFinal_Alquiler'); ?>
		<?php echo $form->textField($model,'fechaFinal_Alquiler'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaInicio_Alquiler'); ?>
		<?php echo $form->textField($model,'fechaInicio_Alquiler'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_Sucursal'); ?>
		<?php echo $form->textField($model,'id_Sucursal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cedula_Vendedor'); ?>
		<?php echo $form->textField($model,'cedula_Vendedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cedula_Cliente'); ?>
		<?php echo $form->textField($model,'cedula_Cliente'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->