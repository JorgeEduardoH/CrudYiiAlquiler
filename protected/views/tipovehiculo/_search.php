<?php
/* @var $this TipovehiculoController */
/* @var $model Tipovehiculo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_TipoVehiculo'); ?>
		<?php echo $form->textField($model,'id_TipoVehiculo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_TipoVehiculo'); ?>
		<?php echo $form->textField($model,'nombre_TipoVehiculo',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->