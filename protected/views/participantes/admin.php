<?php
/* @var $this ParticipantesController */
/* @var $model Participantes */

// $this->breadcrumbs=array(
// 	'Participantes'=>array('index'),
// 	'Manage',
// );

// $this->menu=array(
// 	array('label'=>'List Participantes', 'url'=>array('index')),
// 	array('label'=>'Create Participantes', 'url'=>array('create')),
//         array('label'=>'Manage Jurado', 'url'=>array('/jurado/admin')),
//         array('label'=>'Manage Trabajos', 'url'=>array('/trabajos/admin')),
//         array('label'=>'Manage Contenido', 'url'=>array('/contenido/admin')),
// );

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#participantes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<?php
Yii::app()->clientScript->registerScript('search_cvs',"
	$('#s').on('blur focus change',function(){

		var s=$(this).val();
		var e=$('#e').val();
		if(s!=''&&e!=''){
			$('.ex_cvs').attr('href','export_2?s='+s+'&e='+e);
		}else{
			$('.ex_cvs').attr('href','export_2');
		}
	});
	$('#e').on('blur focus change',function(){

		var e=$(this).val();
		var s=$('#s').val();
		if(s!=''&&e!=''){
			$('.ex_cvs').attr('href','export_2?s='+s+'&e='+e);
		}else{
			$('.ex_cvs').attr('href','export_2');
		}
	});


	$('.ui-datepicker-trigger').on('click blur focus',function(e){
		
	
		var e=$('#e').val();
		var s=$('#s').val();
		if(s!=''&&e!=''){
			$('.ex_cvs').attr('href','export_2?s='+s+'&e='+e);
		}else{
			$('.ex_cvs').attr('href','export_2');
		}
	});
	");
?>

<div class="contenedor-adminparticipantes">

<h1 class = "elim_user">Administrador de participantes</h1>



<br>Fecha de inicio :
	<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'language'=>'es',
            'name'=>'s',
            'attribute'=>'fecha_creacion',
            'options'=>array(
					  'buttonText' => "Seleccionar",
					  'buttonImage' => Yii::app()->baseUrl . '/images/calendario.png',
					'buttomImageOnly'=>false,
					'buttonText'=>'Select',
					'showAnim'=>'fold',
					'showOn'=>'button',
					 'yearRange'=>'1990:2017',
					  'changeYear' => true,
            		  'showAnim'=>'fold',
                      'dateFormat'=>'yy-mm-dd',
                    ),
			'htmlOptions' => array('readonly'=>"readonly", 'style'=>'width:100px;')
            )
    	);
    	?>
	Fecha de finalización : 
		<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'language'=>'es',
	            'name'=>'e',
	            //'model'=>$model,
	            'attribute'=>'fecha_creacion',
	            'options'=>array(
						  'buttonText' => "Seleccionar",
						  'buttonImage' => Yii::app()->baseUrl . '/images/calendario.png',
						'buttomImageOnly'=>false,
						'buttonText'=>'Select',
						'showAnim'=>'fold',
						'showOn'=>'button',
						 'yearRange'=>'1990:2017',
						  'changeYear' => true,
	            		  'showAnim'=>'fold',
	                      //'jqueryOption'=>'jqueryOptionValue',
	                      'dateFormat'=>'yy-mm-dd',
	                    ),
				'htmlOptions' => array('readonly'=>"readonly", 'style'=>'width:100px;')
	            )
	    	);
	    	?>

	Exportar a:<a href="export_2" class="ex_cvs" target="_blank">Excel</a>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'participantes-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
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
		
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}{update}',
			'buttons'=>array(
				'view' => array(
					'label'=>'actualizar usuario',
					'url'=>'Yii::app()->createUrl("/participantes/update/id/$data->id")', //url de la acción nueva
				),			
			),
		),
	),
)); ?>
</div>