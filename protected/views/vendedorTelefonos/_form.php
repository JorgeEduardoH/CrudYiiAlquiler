<?php
/* @var $this VendedorTelefonosController */
/* @var $model VendedorTelefonos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vendedor-telefonos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	

	<div class="row">
		<?php echo $form->labelEx($model,'cedula_Vendedor'); ?>
		<?php echo $form->textField($model,'cedula_Vendedor'); ?>
		<?php echo $form->error($model,'cedula_Vendedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_Vendedor_telefonos'); ?>
		<?php echo $form->textField($model,'telefono_Vendedor_telefonos'); ?>
		<?php echo $form->error($model,'telefono_Vendedor_telefonos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->