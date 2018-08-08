<?php
/* @var $this TipovehiculoController */
/* @var $model Tipovehiculo */

$this->breadcrumbs=array(
	'Tipovehiculos'=>array('index'),
	$model->id_TipoVehiculo,
);

$this->menu=array(
	array('label'=>'List Tipovehiculo', 'url'=>array('index')),
	array('label'=>'Create Tipovehiculo', 'url'=>array('create')),
	array('label'=>'Update Tipovehiculo', 'url'=>array('update', 'id'=>$model->id_TipoVehiculo)),
	array('label'=>'Delete Tipovehiculo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_TipoVehiculo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tipovehiculo', 'url'=>array('admin')),
);
?>

<h1>Viendo Tipovehiculo #<?php echo $model->id_TipoVehiculo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_TipoVehiculo',
		'nombre_TipoVehiculo',
	),
)); ?>

<br><br>
<br><br>
<br><br>
<br><br>
