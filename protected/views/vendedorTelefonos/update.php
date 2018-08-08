<?php
/* @var $this VendedorTelefonosController */
/* @var $model VendedorTelefonos */

$this->breadcrumbs=array(
	'Vendedor Telefonoses'=>array('index'),
	$model->id_vendedor_telefonos=>array('view','id'=>$model->id_vendedor_telefonos),
	'Update',
);

$this->menu=array(
	array('label'=>'List VendedorTelefonos', 'url'=>array('index')),
	array('label'=>'Create VendedorTelefonos', 'url'=>array('create')),
	array('label'=>'View VendedorTelefonos', 'url'=>array('view', 'id'=>$model->id_vendedor_telefonos)),
	array('label'=>'Manage VendedorTelefonos', 'url'=>array('admin')),
);
?>

<h1>Update VendedorTelefonos <?php echo $model->id_vendedor_telefonos; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>