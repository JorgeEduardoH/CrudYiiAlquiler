<?php
/* @var $this VendedorTelefonosController */
/* @var $model VendedorTelefonos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_vendedor_telefonos'); ?>
		<?php echo $form->textField($model,'id_vendedor_telefonos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cedula_Vendedor'); ?>
		<?php echo $form->textField($model,'cedula_Vendedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_Vendedor_telefonos'); ?>
		<?php echo $form->textField($model,'telefono_Vendedor_telefonos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->