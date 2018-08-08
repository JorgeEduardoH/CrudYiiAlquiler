<?php
/* @var $this AlquilerAutomovilController */
/* @var $model AlquilerAutomovil */

$this->breadcrumbs=array(
	'Alquiler Automovils'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AlquilerAutomovil', 'url'=>array('index')),
	array('label'=>'Manage AlquilerAutomovil', 'url'=>array('admin')),
);
?>

<h1>Create AlquilerAutomovil</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>