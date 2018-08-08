<?php
/* @var $this AlquilerAutomovilController */
/* @var $data AlquilerAutomovil */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Alquiler_Automovil')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_Alquiler_Automovil), array('view', 'id'=>$data->id_Alquiler_Automovil)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Automovil')); ?>:</b>
	<?php echo CHtml::encode($data->id_Automovil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Alquiler')); ?>:</b>
	<?php echo CHtml::encode($data->id_Alquiler); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('galones_Alquiler_Automovil')); ?>:</b>
	<?php echo CHtml::encode($data->galones_Alquiler_Automovil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio_Alquiler_Automovil')); ?>:</b>
	<?php echo CHtml::encode($data->precio_Alquiler_Automovil); ?>
	<br />


</div>