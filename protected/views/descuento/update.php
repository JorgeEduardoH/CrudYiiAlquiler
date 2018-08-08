<?php
/* @var $this DescuentoController */
/* @var $model Descuento */

$this->breadcrumbs=array(
	'Descuentos'=>array('index'),
	$model->id_Descuento=>array('view','id'=>$model->id_Descuento),
	'Update',
);

$this->menu=array(
	array('label'=>'List Descuento', 'url'=>array('index')),
	array('label'=>'Create Descuento', 'url'=>array('create')),
	array('label'=>'View Descuento', 'url'=>array('view', 'id'=>$model->id_Descuento)),
	array('label'=>'Manage Descuento', 'url'=>array('admin')),
);
?>

<h1>Update Descuento <?php echo $model->id_Descuento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>