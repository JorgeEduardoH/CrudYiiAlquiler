<?php
/* @var $this GamaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gamas',
);

$this->menu=array(
	array('label'=>'Create Gama', 'url'=>array('create')),
	array('label'=>'Manage Gama', 'url'=>array('admin')),
);
?>

<h1>Gamas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
