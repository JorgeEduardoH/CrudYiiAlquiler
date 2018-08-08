<?php
/* @var $this AutomovilController */
/* @var $model Automovil */

$this->breadcrumbs=array(
	'Automovils'=>array('index'),
	$model->id_Automovil=>array('view','id'=>$model->id_Automovil),
	'Update',
);

$this->menu=array(
	array('label'=>'List Automovil', 'url'=>array('index')),
	array('label'=>'Create Automovil', 'url'=>array('create')),
	array('label'=>'View Automovil', 'url'=>array('view', 'id'=>$model->id_Automovil)),
	array('label'=>'Manage Automovil', 'url'=>array('admin')),
);
?>

<h1>Actualizar Automovil <?php echo $model->placa_Automovil; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>