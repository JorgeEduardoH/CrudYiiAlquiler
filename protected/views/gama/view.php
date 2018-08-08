<?php
/* @var $this GamaController */
/* @var $model Gama */

$this->breadcrumbs=array(
	'Gamas'=>array('index'),
	$model->id_gama,
);

$this->menu=array(
	array('label'=>'List Gama', 'url'=>array('index')),
	array('label'=>'Create Gama', 'url'=>array('create')),
	array('label'=>'Update Gama', 'url'=>array('update', 'id'=>$model->id_gama)),
	array('label'=>'Delete Gama', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_gama),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Gama', 'url'=>array('admin')),
);
?>

<h1>Viendo  Gama #<?php echo $model->id_gama; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_gama',
		'nombre_gama',
	),
)); ?>

<br><br>

<br><br>
<br><br>
<br><br>