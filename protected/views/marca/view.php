<?php
/* @var $this MarcaController */
/* @var $model Marca */

$this->breadcrumbs=array(
	'Marcas'=>array('index'),
	$model->id_Marca,
);

$this->menu=array(
	array('label'=>'List Marca', 'url'=>array('index')),
	array('label'=>'Create Marca', 'url'=>array('create')),
	array('label'=>'Update Marca', 'url'=>array('update', 'id'=>$model->id_Marca)),
	array('label'=>'Delete Marca', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_Marca),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Marca', 'url'=>array('admin')),
);
?>

<h1>Viendo  Marca #<?php echo $model->id_Marca; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_Marca',
		'nombre_Marca',
	),
)); ?>

<br><br>
<br><br>
<br><br>
