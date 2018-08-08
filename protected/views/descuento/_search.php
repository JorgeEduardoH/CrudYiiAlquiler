<?php
/* @var $this DescuentoController */
/* @var $model Descuento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_Descuento'); ?>
		<?php echo $form->textField($model,'id_Descuento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_Descuento'); ?>
		<?php echo $form->textField($model,'fecha_Descuento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descuento_Descuento'); ?>
		<?php echo $form->textField($model,'Descuento_Descuento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->