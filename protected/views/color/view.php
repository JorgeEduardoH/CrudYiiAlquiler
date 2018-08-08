<?php
/* @var $this ColorController */
/* @var $model Color */

$this->breadcrumbs=array(
	'Colors'=>array('index'),
	$model->id_Color,
);

$this->menu=array(
	array('label'=>'List Color', 'url'=>array('index')),
	array('label'=>'Create Color', 'url'=>array('create')),
	array('label'=>'Update Color', 'url'=>array('update', 'id'=>$model->id_Color)),
	array('label'=>'Delete Color', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_Color),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Color', 'url'=>array('admin')),
);
?>

<h1>View Color #<?php echo $model->id_Color; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_Color',
		'nombre_Color',
	),
)); ?>

<br><br>

<br><br>

<br><br>

<br><br>