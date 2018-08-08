<?php
/* @var $this VendedorTelefonosController */
/* @var $model VendedorTelefonos */

$this->breadcrumbs=array(
	'Vendedor Telefonoses'=>array('index'),
	$model->id_vendedor_telefonos,
);

$this->menu=array(
	array('label'=>'List VendedorTelefonos', 'url'=>array('index')),
	array('label'=>'Create VendedorTelefonos', 'url'=>array('create')),
	array('label'=>'Update VendedorTelefonos', 'url'=>array('update', 'id'=>$model->id_vendedor_telefonos)),
	array('label'=>'Delete VendedorTelefonos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_vendedor_telefonos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage VendedorTelefonos', 'url'=>array('admin')),
);
?>

<h1>View VendedorTelefonos #<?php echo $model->id_vendedor_telefonos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_vendedor_telefonos',
		'cedula_Vendedor',
		'telefono_Vendedor_telefonos',
	),
)); ?>
