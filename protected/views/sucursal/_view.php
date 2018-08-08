<?php
/* @var $this SucursalController */
/* @var $data Sucursal */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Sucursal')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_Sucursal), array('view', 'id'=>$data->id_Sucursal)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_Sucursal')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_Sucursal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_Sucursal')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_Sucursal); ?>
	<br />


</div>