<?php
/* @var $this DescuentoController */
/* @var $model Descuento */

$this->breadcrumbs=array(
	'Descuentos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Descuento', 'url'=>array('index')),
	array('label'=>'Manage Descuento', 'url'=>array('admin')),
);
?>

<h1>Create Descuento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>