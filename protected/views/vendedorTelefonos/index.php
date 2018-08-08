<?php
/* @var $this VendedorTelefonosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vendedor Telefonoses',
);

$this->menu=array(
	array('label'=>'Create VendedorTelefonos', 'url'=>array('create')),
	array('label'=>'Manage VendedorTelefonos', 'url'=>array('admin')),
);
?>

<h1>Vendedor Telefonoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
