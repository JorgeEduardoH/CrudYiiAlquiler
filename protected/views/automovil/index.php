<?php
/* @var $this AutomovilController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Automovils',
);

$this->menu=array(
	array('label'=>'Create Automovil', 'url'=>array('create')),
	array('label'=>'Manage Automovil', 'url'=>array('admin')),
);
?>

<h1>Automovils</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
