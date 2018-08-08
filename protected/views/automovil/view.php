<?php
/* @var $this AutomovilController */
/* @var $model Automovil */

$this->breadcrumbs=array(
	'Automovils'=>array('index'),
	$model->id_Automovil,
);

$this->menu=array(
	array('label'=>'List Automovil', 'url'=>array('index')),
	array('label'=>'Create Automovil', 'url'=>array('create')),
	array('label'=>'Update Automovil', 'url'=>array('update', 'id'=>$model->id_Automovil)),
	array('label'=>'Delete Automovil', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_Automovil),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Automovil', 'url'=>array('admin')),
);
?>

<h1>Viendo  Automovil #<?php echo $model->id_Automovil; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_Automovil',
		'placa_Automovil',
		'modelo_Automovil',
		'precioAlquiler_Automovil',
		'id_gama',
		'id_TipoVehiculo',
		'id_Estado',
		'id_Color',
		'id_Marca',
	),
)); ?>
<br><br>

<br><br>

<br><br>

<br><br>

<br><br>