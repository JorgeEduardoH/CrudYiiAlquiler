<?php
/* @var $this AlquilerController */
/* @var $model Alquiler */

$this->breadcrumbs=array(
	'Alquilers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Alquiler', 'url'=>array('index')),
	array('label'=>'Create Alquiler', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#alquiler-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



<h1>Menu vendedor</h1>

<div class="container no-padding">
	<div class="col-lg-12 list-jure">
    	<div id="nav2">
           	<ul>
               	<li>
					<?php echo CHtml::link('Clientes ',array('cliente/admin'),array('class'=>''))?>
                </li>
                <li>
					<?php echo CHtml::link('Clientes Referidos ',array('cliente/adminrec'),array('class'=>''))?>
                </li>
               
              <li>
                   	<?php echo CHtml::link('Alquiler',array('alquiler/admin'),array('class'=>''))?>
                </li>
               
                
           	</ul>
    	</div >
	</div > 
	</div> 




<h1>Administrador de Alquileres </h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'alquiler-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_Alquiler',
		'fechaFinal_Alquiler',
		'fechaInicio_Alquiler',
		'id_Sucursal',
		'cedula_Vendedor',
		'cedula_Cliente',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<div class="btnAddTrabajo">
<?php

 echo CHtml::link('Nuevo Alquiler ', array('/alquiler/create'),array('class'=>'register-btn','style'=>'background: #FFF;
    color: #62AD00;'));

?>

</div>