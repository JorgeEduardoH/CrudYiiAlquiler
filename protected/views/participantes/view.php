
<?php

//las imagenes de la inscripcion estan en ../imagenes/contconfiguracion
$inscripcion=ContInscripcion::model()->find('id=1');

$this->menu=array(
	array('label'=>'List Participantes', 'url'=>array('index')),
	array('label'=>'Create Participantes', 'url'=>array('create')),
	array('label'=>'Update Participantes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Participantes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Participantes', 'url'=>array('admin')),
);
?>

<div class="container no-padding">



<div class="row">
                   <div class="tituloflores">
                  <div class="col-lg-1"></div>

                 <div class="col-lg-2">

                 <div class="rama1"><img  src="<?php echo Yii::app()->baseUrl;?>/images/Ramainterna1.png"   /></div>
                  </div>
   <div class="col-lg-6"><span><h1><?php echo ucfirst($model->nombre)?></h1></span></div>
   <div class="col-lg-2"><div class="rama2"><img src="<?php echo Yii::app()->baseUrl;?>/images/Ramainterna2.png"/></div></div>
     <div class="col-lg-1"></div>

                </div>

                </div>


<?php



  if ($inscripcion->estado=="0")
  {
     // se valida si hay imagen


		 $this->widget('zii.widgets.jui.CJuiTabs', array(
		     'id'=>'profil',
		     'tabs' => array(
		             'VER' => array('content'=>$this->renderPartial('viewbasic',array('model'=>$model),true)),

		          

		     ),
		     // additional javascript options for the tabs plugin
		     'options' => array(
		             'collapsible' => true,
		     ),
		 ));

}else {

 $this->widget('zii.widgets.jui.CJuiTabs', array(
		 'id'=>'profil',
		 'tabs' => array(
						 'VER' => array('content'=>$this->renderPartial('viewbasic',array('model'=>$model),true)),

						'VER TRABAJOS' => array('content' => $this->renderPartial('/trabajos/viewbasic',array('model'=>$jobs),true)),

						 'EDITAR PERFIL' => array('content' => $this->renderPartial('updatebasic',array('model'=>$model),true)),
						 // panel 3 contains the content rendered by a partial view

		 ),
		 // additional javascript options for the tabs plugin
		 'options' => array(
						 'collapsible' => true,
		 ),
 ));
}



?>



</div>
