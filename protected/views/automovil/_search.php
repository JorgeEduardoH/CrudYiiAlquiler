<?php
/* @var $this AutomovilController */
/* @var $model Automovil */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_Automovil'); ?>
		<?php echo $form->textField($model,'id_Automovil'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'placa_Automovil'); ?>
		<?php echo $form->textField($model,'placa_Automovil',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modelo_Automovil'); ?>
		<?php echo $form->textField($model,'modelo_Automovil'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precioAlquiler_Automovil'); ?>
		<?php echo $form->textField($model,'precioAlquiler_Automovil'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_gama'); ?>
		<?php echo $form->textField($model,'id_gama'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_TipoVehiculo'); ?>
		<?php echo $form->textField($model,'id_TipoVehiculo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_Estado'); ?>
		<?php echo $form->textField($model,'id_Estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_Color'); ?>
		<?php echo $form->textField($model,'id_Color'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_Marca'); ?>
		<?php echo $form->textField($model,'id_Marca'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->