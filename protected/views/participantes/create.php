<?php

//las imagenes de la inscripcion estan en ../imagenes/contconfiguracion
$inscripcion=ContInscripcion::model()->find('id=1');

 
?>



<?php 

  if ($inscripcion->estado=="0")
  {
    // se valida si hay imagen 
    if ($inscripcion->imagencierre!="" || $inscripcion->imagencierre!=null ) 
     echo CHtml::image(Yii::app()->request->baseUrl.'/images/contconfiguracion/'.$inscripcion->imagencierre, '', array(
'style' => 'width:100%;'));
    else
      echo "<h1>El formulario se encuentra en mantenimiento , recuerda que debes agregar la imagen de cierre de inscripcion</h1>";
   # code...
 }
 else
 {


 ?>

<div class = "container">
<br><br>

     <div class="row">
                   <div class="tituloflores"> 
                  <div class="col-lg-1"></div>
         
                 <div class="col-lg-2">

                 <div class="rama1"><img  src="<?php echo Yii::app()->baseUrl;?>/images/Ramainterna1.png"   /></div>
                  </div>
   <div class="col-lg-6"><span><h1>Inscripción</h1></span></div>
   <div class="col-lg-2"><div class="rama2"><img src="<?php echo Yii::app()->baseUrl;?>/images/Ramainterna2.png"/></div></div>
     <div class="col-lg-1"></div>

                </div>
               
                </div>
	<div class="row" id="linecontenedor">
	<br>
	<?php $this->renderPartial('_form', array('model'=>$model)); ?>
	</div>


</div>

<?php } ?>