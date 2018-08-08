<?php
/* @var $this ParticipantesController */
/* @var $model Participantes */

$this->breadcrumbs=array(
	'Participantes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Participantes', 'url'=>array('index')),
	array('label'=>'Create Participantes', 'url'=>array('create')),
	array('label'=>'Update Participantes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Participantes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Participantes', 'url'=>array('admin')),
);
?>

<h1>View Participantes #<?php echo $model->id; ?></h1>


<?php $this->widget('zii.widgets.jui.CJuiTabs', array(
    'tabs' => array(
            'VER' => array('content'=>$ver),
            'EDITAR PERFIL' => array('content' => 'Content for tab 2', 'id' => 'tab2'),
            // panel 3 contains the content rendered by a partial view
            'VER TRABAJOS' => array('ajax' => $this->createUrl('/AjaxModule/ajax/reqTest01')),
    ),
    // additional javascript options for the tabs plugin
    'options' => array(
            'collapsible' => true,
    ),
));?>


<?php $ver = $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'apellidos',
		'documento',
		'tipo_documento',
		'correo',
		'perfil',
		'universidad',
		'pais',
		'depto_ciudad',
		'genero',
		'celular',
		'telefono',
		'medio_trabajo',
		'url_cedula',
		'terminos',
		'fecha',
		'iduser',
	),
)); ?>
