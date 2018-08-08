<?php
/* @var $this ColorController */
/* @var $model Color */

$this->breadcrumbs=array(
	'Colors'=>array('index'),
	$model->id_Color=>array('view','id'=>$model->id_Color),
	'Update',
);

$this->menu=array(
	array('label'=>'List Color', 'url'=>array('index')),
	array('label'=>'Create Color', 'url'=>array('create')),
	array('label'=>'View Color', 'url'=>array('view', 'id'=>$model->id_Color)),
	array('label'=>'Manage Color', 'url'=>array('admin')),
);
?>

<h1>Actualizar Color <?php echo $model->id_Color; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>