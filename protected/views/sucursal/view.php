<?php
/* @var $this SucursalController */
/* @var $model Sucursal */

$this->breadcrumbs=array(
	'Sucursals'=>array('index'),
	$model->id_Sucursal,
);

$this->menu=array(
	array('label'=>'List Sucursal', 'url'=>array('index')),
	array('label'=>'Create Sucursal', 'url'=>array('create')),
	array('label'=>'Update Sucursal', 'url'=>array('update', 'id'=>$model->id_Sucursal)),
	array('label'=>'Delete Sucursal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_Sucursal),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sucursal', 'url'=>array('admin')),
);
?>

<h1>Viendo  Sucursal #<?php echo $model->id_Sucursal; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_Sucursal',
		'nombre_Sucursal',
		'direccion_Sucursal',
	),
)); ?>

<br>
<br>

<br>
<br>

<br>
<br>

<br>
<br>