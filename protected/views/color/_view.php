<?php
/* @var $this ColorController */
/* @var $data Color */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Color')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_Color), array('view', 'id'=>$data->id_Color)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_Color')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_Color); ?>
	<br />


</div>