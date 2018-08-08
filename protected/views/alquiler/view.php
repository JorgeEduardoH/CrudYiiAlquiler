<?php
/* @var $this AlquilerController */
/* @var $model Alquiler */

$this->breadcrumbs=array(
	'Alquilers'=>array('index'),
	$model->id_Alquiler,
);

$this->menu=array(
	array('label'=>'List Alquiler', 'url'=>array('index')),
	array('label'=>'Create Alquiler', 'url'=>array('create')),
	array('label'=>'Update Alquiler', 'url'=>array('update', 'id'=>$model->id_Alquiler)),
	array('label'=>'Delete Alquiler', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_Alquiler),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Alquiler', 'url'=>array('admin')),
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
<h1>Viendo Alquiler #<?php echo $model->id_Alquiler; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_Alquiler',
		'fechaFinal_Alquiler',
		'fechaInicio_Alquiler',
		'id_Sucursal',
		'cedula_Vendedor',
		'cedula_Cliente',
	),
)); ?>



<h4>Automoviles  </h4>
<br><br>

<?php  

     $suma=0;
    foreach ($model->vehiculos as $key => $value)
    {   
         $suma+=$value->precio_Alquiler_Automovil;
    	echo 
    	'automovil con Id  '.$value->id_Automovil.'  Galones '.$value->galones_Alquiler_Automovil.'  Precio alquiler '.$value->precio_Alquiler_Automovil.'<br>';
    	
    }

    echo "El precio total del alquiler es ".$suma."<br/>";
?>
<br><br>
<?php 


$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
    'id'=>'mydialog',
    // additional javascript options for the dialog plugin
    'options'=>array(
        'title'=>'Dialog box 1',
        'autoOpen'=>false,
         'height'=> 400,
      'width'=> 350,
      'modal'=> true,
    ),
));
   
    echo $this->renderPartial('/AlquilerAutomovil/_form',array('model'=>$model_alquilerauto));

$this->endWidget('zii.widgets.jui.CJuiDialog');

// the link that may open the dialog
echo CHtml::link('Agregar Automovil','#', 
  array(  'onclick'=>'jQuery("#mydialog").dialog("open"); return false;',
));


?>

