<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->cedula_Cliente=>array('view','id'=>$model->cedula_Cliente),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cliente', 'url'=>array('index')),
	array('label'=>'Create Cliente', 'url'=>array('create')),
	array('label'=>'View Cliente', 'url'=>array('view', 'id'=>$model->cedula_Cliente)),
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
<h1>Actualizar Cliente <?php echo $model->cedula_Cliente; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>