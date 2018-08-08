<?php
/* @var $this GamaController */
/* @var $model Gama */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_gama'); ?>
		<?php echo $form->textField($model,'id_gama'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_gama'); ?>
		<?php echo $form->textField($model,'nombre_gama',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->