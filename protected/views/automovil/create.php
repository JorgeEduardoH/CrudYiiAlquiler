<?php
/* @var $this AutomovilController */
/* @var $model Automovil */

$this->breadcrumbs=array(
	'Automovils'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Automovil', 'url'=>array('index')),
	array('label'=>'Manage Automovil', 'url'=>array('admin')),
);
?>

<h1>Crear Automovil</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>