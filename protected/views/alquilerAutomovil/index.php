<?php
/* @var $this AlquilerAutomovilController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Alquiler Automovils',
);

$this->menu=array(
	array('label'=>'Create AlquilerAutomovil', 'url'=>array('create')),
	array('label'=>'Manage AlquilerAutomovil', 'url'=>array('admin')),
);
?>

<h1>Alquiler Automovils</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
