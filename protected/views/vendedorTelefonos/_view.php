<?php
/* @var $this VendedorTelefonosController */
/* @var $data VendedorTelefonos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_vendedor_telefonos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_vendedor_telefonos), array('view', 'id'=>$data->id_vendedor_telefonos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula_Vendedor')); ?>:</b>
	<?php echo CHtml::encode($data->cedula_Vendedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_Vendedor_telefonos')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_Vendedor_telefonos); ?>
	<br />


</div>