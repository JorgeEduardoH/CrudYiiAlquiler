<?php
/* @var $this MarcaController */
/* @var $data Marca */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Marca')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_Marca), array('view', 'id'=>$data->id_Marca)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_Marca')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_Marca); ?>
	<br />


</div>