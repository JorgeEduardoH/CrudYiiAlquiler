<?php
/* @var $this GamaController */
/* @var $model Gama */

$this->breadcrumbs=array(
	'Gamas'=>array('index'),
	$model->id_gama=>array('view','id'=>$model->id_gama),
	'Update',
);

$this->menu=array(
	array('label'=>'List Gama', 'url'=>array('index')),
	array('label'=>'Create Gama', 'url'=>array('create')),
	array('label'=>'View Gama', 'url'=>array('view', 'id'=>$model->id_gama)),
	array('label'=>'Manage Gama', 'url'=>array('admin')),
);
?>

<h1>Actualizar Gama <?php echo $model->id_gama; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>