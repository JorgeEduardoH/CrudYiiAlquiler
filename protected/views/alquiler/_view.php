<?php
/* @var $this AlquilerController */
/* @var $data Alquiler */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Alquiler')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_Alquiler), array('view', 'id'=>$data->id_Alquiler)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaFinal_Alquiler')); ?>:</b>
	<?php echo CHtml::encode($data->fechaFinal_Alquiler); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaInicio_Alquiler')); ?>:</b>
	<?php echo CHtml::encode($data->fechaInicio_Alquiler); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Sucursal')); ?>:</b>
	<?php echo CHtml::encode($data->id_Sucursal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula_Vendedor')); ?>:</b>
	<?php echo CHtml::encode($data->cedula_Vendedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula_Cliente')); ?>:</b>
	<?php echo CHtml::encode($data->cedula_Cliente); ?>
	<br />


</div>