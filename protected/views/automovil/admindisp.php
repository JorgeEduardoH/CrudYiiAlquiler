<?php
/* @var $this AutomovilController */
/* @var $model Automovil */

$this->breadcrumbs=array(
	'Automovils'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Automovil', 'url'=>array('index')),
	array('label'=>'Create Automovil', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#automovil-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1> Automoviles disponibles </h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'automovil-grid',
	'dataProvider'=>$model->searchdisp(),
	'filter'=>$model,
	'columns'=>array(
		//'id_Automovil',
		'placa_Automovil',
		'modelo_Automovil',
		'precioAlquiler_Automovil',
	 //	'id_gama',
		//'id_TipoVehiculo',
		/*
		'id_Estado',
		'id_Color',
		'id_Marca',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<div class="btnAddTrabajo">
<?php

 echo CHtml::link('Nuevo ', array('/automovil/create'),array('class'=>'register-btn','style'=>'background: #FFF;
    color: #62AD00;'));

?>

</div>