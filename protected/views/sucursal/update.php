<?php
/* @var $this SucursalController */
/* @var $model Sucursal */

$this->breadcrumbs=array(
	'Sucursals'=>array('index'),
	$model->id_Sucursal=>array('view','id'=>$model->id_Sucursal),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sucursal', 'url'=>array('index')),
	array('label'=>'Create Sucursal', 'url'=>array('create')),
	array('label'=>'View Sucursal', 'url'=>array('view', 'id'=>$model->id_Sucursal)),
	array('label'=>'Manage Sucursal', 'url'=>array('admin')),
);
?>

<h1>actualizar Sucursal <?php echo $model->id_Sucursal; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>