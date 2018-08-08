<?php
/* @var $this AlquilerAutomovilController */
/* @var $model AlquilerAutomovil */

$this->breadcrumbs=array(
	'Alquiler Automovils'=>array('index'),
	$model->id_Alquiler_Automovil=>array('view','id'=>$model->id_Alquiler_Automovil),
	'Update',
);

$this->menu=array(
	array('label'=>'List AlquilerAutomovil', 'url'=>array('index')),
	array('label'=>'Create AlquilerAutomovil', 'url'=>array('create')),
	array('label'=>'View AlquilerAutomovil', 'url'=>array('view', 'id'=>$model->id_Alquiler_Automovil)),
	array('label'=>'Manage AlquilerAutomovil', 'url'=>array('admin')),
);
?>

<h1>Update AlquilerAutomovil <?php echo $model->id_Alquiler_Automovil; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>