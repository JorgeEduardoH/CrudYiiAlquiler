<?php
/* @var $this TipovehiculoController */
/* @var $model Tipovehiculo */

$this->breadcrumbs=array(
	'Tipovehiculos'=>array('index'),
	$model->id_TipoVehiculo=>array('view','id'=>$model->id_TipoVehiculo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tipovehiculo', 'url'=>array('index')),
	array('label'=>'Create Tipovehiculo', 'url'=>array('create')),
	array('label'=>'View Tipovehiculo', 'url'=>array('view', 'id'=>$model->id_TipoVehiculo)),
	array('label'=>'Manage Tipovehiculo', 'url'=>array('admin')),
);
?>

<h1>Actualizar Tipovehiculo <?php echo $model->id_TipoVehiculo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>