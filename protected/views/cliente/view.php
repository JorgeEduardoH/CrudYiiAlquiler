<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->cedula_Cliente,
);

$this->menu=array(
	array('label'=>'List Cliente', 'url'=>array('index')),
	array('label'=>'Create Cliente', 'url'=>array('create')),
	array('label'=>'Update Cliente', 'url'=>array('update', 'id'=>$model->cedula_Cliente)),
	array('label'=>'Delete Cliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cedula_Cliente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cliente', 'url'=>array('admin')),
);
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

<h1>View Cliente #<?php echo $model->cedula_Cliente; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cedula_Cliente',
		'telefono_Cliente',
		'direccion_Cliente',
		'nombre_Cliente',
		'precio_Descuento_cliente',
		'fecha_Descuento_cliente',
		'Cliente_Recomendado',
	),
)); ?>
