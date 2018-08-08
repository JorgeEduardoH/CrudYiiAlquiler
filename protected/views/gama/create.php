<?php
/* @var $this GamaController */
/* @var $model Gama */

$this->breadcrumbs=array(
	'Gamas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Gama', 'url'=>array('index')),
	array('label'=>'Manage Gama', 'url'=>array('admin')),
);
?>

<h1>Crear Gama</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>