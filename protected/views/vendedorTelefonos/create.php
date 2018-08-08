<?php
/* @var $this VendedorTelefonosController */
/* @var $model VendedorTelefonos */

$this->breadcrumbs=array(
	'Vendedor Telefonoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List VendedorTelefonos', 'url'=>array('index')),
	array('label'=>'Manage VendedorTelefonos', 'url'=>array('admin')),
);
?>

<h1>Create VendedorTelefonos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>