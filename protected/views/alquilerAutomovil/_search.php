<?php
/* @var $this AlquilerAutomovilController */
/* @var $model AlquilerAutomovil */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_Alquiler_Automovil'); ?>
		<?php echo $form->textField($model,'id_Alquiler_Automovil'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_Automovil'); ?>
		<?php echo $form->textField($model,'id_Automovil'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_Alquiler'); ?>
		<?php echo $form->textField($model,'id_Alquiler'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'galones_Alquiler_Automovil'); ?>
		<?php echo $form->textField($model,'galones_Alquiler_Automovil'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precio_Alquiler_Automovil'); ?>
		<?php echo $form->textField($model,'precio_Alquiler_Automovil'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->