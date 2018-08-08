<?php
/* @var $this ClienteController */
/* @var $data Cliente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula_Cliente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cedula_Cliente), array('view', 'id'=>$data->cedula_Cliente)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_Cliente')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_Cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_Cliente')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_Cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_Cliente')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_Cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio_Descuento_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->precio_Descuento_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_Descuento_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_Descuento_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cliente_Recomendado')); ?>:</b>
	<?php echo CHtml::encode($data->Cliente_Recomendado); ?>
	<br />


</div>