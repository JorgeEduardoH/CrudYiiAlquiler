<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cedula_Cliente'); ?>
		<?php echo $form->textField($model,'cedula_Cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_Cliente'); ?>
		<?php echo $form->textField($model,'telefono_Cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_Cliente'); ?>
		<?php echo $form->textField($model,'direccion_Cliente',array('size'=>60,'maxlength'=>90)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_Cliente'); ?>
		<?php echo $form->textField($model,'nombre_Cliente',array('size'=>60,'maxlength'=>90)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precio_Descuento_cliente'); ?>
		<?php echo $form->textField($model,'precio_Descuento_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_Descuento_cliente'); ?>
		<?php echo $form->textField($model,'fecha_Descuento_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cliente_Recomendado'); ?>
		<?php echo $form->textField($model,'Cliente_Recomendado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->