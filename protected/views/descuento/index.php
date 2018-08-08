<?php
/* @var $this DescuentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Descuentos',
);

$this->menu=array(
	array('label'=>'Create Descuento', 'url'=>array('create')),
	array('label'=>'Manage Descuento', 'url'=>array('admin')),
);
?>

<h1>Descuentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
