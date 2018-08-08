<?php
/* @var $this VendedorController */
/* @var $model Vendedor */

$this->breadcrumbs=array(
	'Vendedors'=>array('index'),
	$model->cedula_Vendedor,
);

$this->menu=array(
	array('label'=>'List Vendedor', 'url'=>array('index')),
	array('label'=>'Create Vendedor', 'url'=>array('create')),
	array('label'=>'Update Vendedor', 'url'=>array('update', 'id'=>$model->cedula_Vendedor)),
	array('label'=>'Delete Vendedor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cedula_Vendedor),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vendedor', 'url'=>array('admin')),
);
?>

<h1>View Vendedor #<?php echo $model->cedula_Vendedor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cedula_Vendedor',
		'direccion_Vendedor',
		'nombre_Vendedor',
		'id_Sucursal',
		'id_user',
		'clave',
		'email',
	),
)); ?>

<br><br>

<h4>Telefonos </h4>
<br><br>

<?php  
    foreach ($model->telefonos as $key => $value)
    {
    	echo $value->telefono_Vendedor_telefonos.'<br>';
    	
    }
?>
<?php 






$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
    'id'=>'mydialog',
    // additional javascript options for the dialog plugin
    'options'=>array(
        'title'=>'Dialog box 1',
        'autoOpen'=>false,
    ),
));

    echo $this->renderPartial('//VendedorTelefonos/_form',array('model'=>$model_telefono));

$this->endWidget('zii.widgets.jui.CJuiDialog');

// the link that may open the dialog
echo CHtml::link('Agregar telefono ', '#', array(
   'onclick'=>'$("#mydialog").dialog("open"); return false;',
));
?>