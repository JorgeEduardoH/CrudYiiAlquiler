<?php
/* @var $this TipovehiculoController */
/* @var $data Tipovehiculo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_TipoVehiculo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_TipoVehiculo), array('view', 'id'=>$data->id_TipoVehiculo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_TipoVehiculo')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_TipoVehiculo); ?>
	<br />


</div>