<?php
/* @var $this AutomovilController */
/* @var $model Automovil */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'automovil-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'placa_Automovil'); ?>
		<?php echo $form->textField($model,'placa_Automovil',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'placa_Automovil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modelo_Automovil'); ?>
		<?php echo $form->textField($model,'modelo_Automovil'); ?>
		<?php echo $form->error($model,'modelo_Automovil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precioAlquiler_Automovil'); ?>
		<?php echo $form->textField($model,'precioAlquiler_Automovil'); ?>
		<?php echo $form->error($model,'precioAlquiler_Automovil'); ?>
	</div>
    <div class="row">
		<?php echo $form->labelEx($model,'id_Estado'); ?>
		<?php   
		 echo $form->dropDownList($model,'id_Estado',
     CHtml::listData(Estado::model()->findAll(),'id_Estado','nombre_Estado')); 
 
		?>
		<?php echo $form->error($model,'id_Estado'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'gama'); ?>
		<?php 
          echo $form->dropDownList($model,'id_gama',
     CHtml::listData(Gama::model()->findAll(),'id_gama','nombre_gama')); 

		 ?>
		<?php echo $form->error($model,'id_gama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TipoVehiculo'); ?>
		<?php 
		echo $form->dropDownList($model,'id_TipoVehiculo',
     CHtml::listData(TipoVehiculo::model()->findAll(),'id_TipoVehiculo','nombre_TipoVehiculo')); 


		?>
		<?php echo $form->error($model,'id_TipoVehiculo'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'Color'); ?>
		<?php  
	

		echo $form->dropDownList($model,'id_Color',
     CHtml::listData(Color::model()->findAll(),'id_Color','nombre_Color')); 
		?>
		<?php echo $form->error($model,'id_Color'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Marca'); ?>
		<?php 
          echo $form->dropDownList($model,'id_Marca',
     CHtml::listData(Marca::model()->findAll(),'id_Marca','nombre_Marca')); 

		 ?>
		<?php echo $form->error($model,'id_Marca'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->