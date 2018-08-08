<?php
/* @var $this AlquilerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Alquilers',
);

$this->menu=array(
	array('label'=>'Create Alquiler', 'url'=>array('create')),
	array('label'=>'Manage Alquiler', 'url'=>array('admin')),
);
?>

<h1>Alquilers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
