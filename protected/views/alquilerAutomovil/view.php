<?php
/* @var $this AlquilerAutomovilController */
/* @var $model AlquilerAutomovil */

$this->breadcrumbs=array(
	'Alquiler Automovils'=>array('index'),
	$model->id_Alquiler_Automovil,
);

$this->menu=array(
	array('label'=>'List AlquilerAutomovil', 'url'=>array('index')),
	array('label'=>'Create AlquilerAutomovil', 'url'=>array('create')),
	array('label'=>'Update AlquilerAutomovil', 'url'=>array('update', 'id'=>$model->id_Alquiler_Automovil)),
	array('label'=>'Delete AlquilerAutomovil', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_Alquiler_Automovil),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AlquilerAutomovil', 'url'=>array('admin')),
);
?>

<h1>View AlquilerAutomovil #<?php echo $model->id_Alquiler_Automovil; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_Alquiler_Automovil',
		'id_Automovil',
		'id_Alquiler',
		'galones_Alquiler_Automovil',
		'precio_Alquiler_Automovil',
	),
)); ?>
