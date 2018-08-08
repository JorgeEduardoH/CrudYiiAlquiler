<?php
/* @var $this AlquilerController */
/* @var $model Alquiler */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'alquiler-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
  
	<div class="row">
		<?php echo $form->labelEx($model,'fechaFinal_Alquiler'); ?>
		<?php 
        
          $this->widget( 'ext.EJuiTimePicker.EJuiTimePicker', array(
                        'model' => $model,
                        'attribute' => 'fechaFinal_Alquiler',
                        'mode' => 'date',
                        'options'=>array(
                            'defaultDate'=>date("Y-m-d"),
                            'dateFormat'=>'yy-mm-dd',
                            'changeYear' => true,
                            'buttonText' => 'Open calendar',
                            'yearRange' => '2010:2017',
                            'language'=> 'es',
                            


                        ),
                      ));



		?>
		<?php echo $form->error($model,'fechaFinal_Alquiler'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaInicio_Alquiler'); ?>
		<?php 
         $this->widget( 'ext.EJuiTimePicker.EJuiTimePicker', array(
                        'model' => $model,
                        'attribute' => 'fechaInicio_Alquiler',
                        'mode' => 'date',
                        'options'=>array(
                            'defaultDate'=>date("Y-m-d"),
                            'dateFormat'=>'yy-mm-dd',
                            'changeYear' => true,
                            'buttonText' => 'Open calendar',
                            'yearRange' => '2010:2017',
                            'language'=> 'es',
                            


                        ),
                      ));


		?>
		<?php echo $form->error($model,'fechaInicio_Alquiler'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_Sucursal'); ?>
		<?php 
         
          echo $form->dropDownList($model,'id_Sucursal',
     CHtml::listData(Sucursal::model()->findAll(),'id_Sucursal','nombre_Sucursal')); 

		?>
		<?php echo $form->error($model,'id_Sucursal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cedula_Vendedor'); ?>
		<?php echo '<input name="Alquiler[cedula_Vendedor]" id="Alquiler_cedula_Vendedor" value='.$model->cedula_Vendedor.' type="text" readonly="true">' ?>
		<?php echo $form->error($model,'cedula_Vendedor'); ?>
	</div>
  
	<div class="row">
		<?php echo $form->labelEx($model,'cedula_Cliente'); ?>
		<?php echo $form->textField($model,'cedula_Cliente'); ?>
		<?php echo $form->error($model,'cedula_Cliente'); ?>
	</div>

	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->