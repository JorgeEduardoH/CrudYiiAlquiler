<?php
/* @var $this MarcaController */
/* @var $model Marca */

$this->breadcrumbs=array(
	'Marcas'=>array('index'),
	$model->id_Marca=>array('view','id'=>$model->id_Marca),
	'Update',
);

$this->menu=array(
	array('label'=>'List Marca', 'url'=>array('index')),
	array('label'=>'Create Marca', 'url'=>array('create')),
	array('label'=>'View Marca', 'url'=>array('view', 'id'=>$model->id_Marca)),
	array('label'=>'Manage Marca', 'url'=>array('admin')),
);
?>

<h1>Update Marca <?php echo $model->id_Marca; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>