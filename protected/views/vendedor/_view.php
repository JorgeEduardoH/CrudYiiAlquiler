<?php
/* @var $this VendedorController */
/* @var $data Vendedor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula_Vendedor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cedula_Vendedor), array('view', 'id'=>$data->cedula_Vendedor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_Vendedor')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_Vendedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_Vendedor')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_Vendedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Sucursal')); ?>:</b>
	<?php echo CHtml::encode($data->id_Sucursal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clave')); ?>:</b>
	<?php echo CHtml::encode($data->clave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />


</div>