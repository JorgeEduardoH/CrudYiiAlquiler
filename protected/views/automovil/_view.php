<?php
/* @var $this AutomovilController */
/* @var $data Automovil */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Automovil')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_Automovil), array('view', 'id'=>$data->id_Automovil)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('placa_Automovil')); ?>:</b>
	<?php echo CHtml::encode($data->placa_Automovil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modelo_Automovil')); ?>:</b>
	<?php echo CHtml::encode($data->modelo_Automovil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precioAlquiler_Automovil')); ?>:</b>
	<?php echo CHtml::encode($data->precioAlquiler_Automovil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_gama')); ?>:</b>
	<?php echo CHtml::encode($data->id_gama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_TipoVehiculo')); ?>:</b>
	<?php echo CHtml::encode($data->id_TipoVehiculo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Estado')); ?>:</b>
	<?php echo CHtml::encode($data->id_Estado); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Color')); ?>:</b>
	<?php echo CHtml::encode($data->id_Color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Marca')); ?>:</b>
	<?php echo CHtml::encode($data->id_Marca); ?>
	<br />

	*/ ?>

</div>