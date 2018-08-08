<?php
/* @var $this EstadoController */
/* @var $data Estado */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Estado')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_Estado), array('view', 'id'=>$data->id_Estado)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_Estado')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_Estado); ?>
	<br />


</div>