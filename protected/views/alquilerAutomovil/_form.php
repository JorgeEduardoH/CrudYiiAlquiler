<?php
/* @var $this AlquilerAutomovilController */
/* @var $model AlquilerAutomovil */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'alquiler-automovil-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_Automovil'); ?>
		<?php 
         
         echo $form->dropDownList($model,'id_Automovil',
     CHtml::listData(Automovil::model()->findAll(),'id_Automovil','placa_Automovil')); 
 

		?>
		<?php echo $form->error($model,'id_Automovil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_Alquiler'); ?>
		<?php
            echo '<input name="AlquilerAutomovil[id_Alquiler]" id="AlquilerAutomovil_id_Alquiler" value='.$model->id_Alquiler.' type="text" readonly="true">';

		?>
		<?php echo $form->error($model,'id_Alquiler'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'galones_Alquiler_Automovil'); ?>
		<?php echo $form->textField($model,'galones_Alquiler_Automovil'); ?>
		<?php echo $form->error($model,'galones_Alquiler_Automovil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precio_Alquiler_Automovil'); ?>
		<?php echo $form->textField($model,'precio_Alquiler_Automovil'); ?>
		<?php echo $form->error($model,'precio_Alquiler_Automovil'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->