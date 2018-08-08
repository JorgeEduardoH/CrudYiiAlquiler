<?php
/* @var $this SucursalController */
/* @var $model Sucursal */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_Sucursal'); ?>
		<?php echo $form->textField($model,'id_Sucursal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_Sucursal'); ?>
		<?php echo $form->textField($model,'nombre_Sucursal',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_Sucursal'); ?>
		<?php echo $form->textField($model,'direccion_Sucursal',array('size'=>60,'maxlength'=>90)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->