<?php
/* @var $this GamaController */
/* @var $data Gama */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_gama')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_gama), array('view', 'id'=>$data->id_gama)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_gama')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_gama); ?>
	<br />


</div>