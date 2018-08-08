<?php
/* @var $this TipovehiculoController */
/* @var $model Tipovehiculo */

$this->breadcrumbs=array(
	'Tipovehiculos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tipovehiculo', 'url'=>array('index')),
	array('label'=>'Manage Tipovehiculo', 'url'=>array('admin')),
);
?>

<h1>Create Tipovehiculo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>