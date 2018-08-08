<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cliente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'cedula_Cliente'); ?>
		<?php echo $form->textField($model,'cedula_Cliente'); ?>
		<?php echo $form->error($model,'cedula_Cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_Cliente'); ?>
		<?php echo $form->textField($model,'telefono_Cliente'); ?>
		<?php echo $form->error($model,'telefono_Cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_Cliente'); ?>
		<?php echo $form->textField($model,'direccion_Cliente',array('size'=>60,'maxlength'=>90)); ?>
		<?php echo $form->error($model,'direccion_Cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_Cliente'); ?>
		<?php echo $form->textField($model,'nombre_Cliente',array('size'=>60,'maxlength'=>90)); ?>
		<?php echo $form->error($model,'nombre_Cliente'); ?>
	</div>
     <?php 
        if (!$model->isNewRecord) {
        	# code...
       ?>
	<div class="row">
		<?php echo $form->labelEx($model,'precio_Descuento_cliente'); ?>
		<?php echo $form->textField($model,'precio_Descuento_cliente'); ?>
		<?php echo $form->error($model,'precio_Descuento_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha hasta cuando aplica el descuento '); ?>
		<?php  
         $this->widget( 'ext.EJuiTimePicker.EJuiTimePicker', array(
                        'model' => $model,
                        'attribute' => 'fecha_Descuento_cliente',
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
		<?php echo $form->error($model,'fecha_Descuento_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cedula de Cliente_Recomendado'); ?>
		<?php echo $form->textField($model,'Cliente_Recomendado'); ?>
		<?php echo $form->error($model,'Cliente_Recomendado'); ?>
	</div>
       <?php
       }
      ?>
	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->