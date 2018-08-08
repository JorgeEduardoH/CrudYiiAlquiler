<?php
/* @var $this DescuentoController */
/* @var $data Descuento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Descuento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_Descuento), array('view', 'id'=>$data->id_Descuento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_Descuento')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_Descuento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descuento_Descuento')); ?>:</b>
	<?php echo CHtml::encode($data->Descuento_Descuento); ?>
	<br />


</div>