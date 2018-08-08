<?php

//las imagenes de la inscripcion estan en ../imagenes/contconfiguracion
$inscripcion=ContInscripcion::model()->find('id=1');

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
 $this->renderPartial('_form', array('model'=>$model)); 

?>