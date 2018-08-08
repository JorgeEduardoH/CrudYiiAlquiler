<?php
/* @var $this SiteController */

// $this->pageTitle=Yii::app()->name . ' - Participar';
// $this->breadcrumbs=array(
// 	'Participar',
// );
?>
<div class="container no-padding">
	
      <br><br>

     <div class="row">
                   <div class="tituloflores"> 
                  <div class="col-lg-1"></div>
         
                 <div class="col-lg-2">

                 <div class="rama1"><img  src="<?php echo Yii::app()->baseUrl;?>/images/Ramainterna1.png"   /></div>
                  </div>
   <div class="col-lg-6"><span><h1>Preguntas frecuentes</h1></span></div>
   <div class="col-lg-2"><div class="rama2"><img src="<?php echo Yii::app()->baseUrl;?>/images/Ramainterna2.png"/></div></div>
     <div class="col-lg-1"></div>

                </div>
               
                </div>
 
  <div class="container" id="linecontenedor">
    <div class="row">
     
   <div class="col-lg-2"></div>
    <div class = "col-lg-8">
   <br><br>
	<div class="question-frec">
<p id = "ins">
	A continuación encontrarás una lista de las preguntas frecuentes que recibimos a diario en la plataforma de Premio Amway de 		 	Periodismo Ambiental. Lee detenidamente las respuestas… ¡Seguro encontrarás la información que necesitas!
</p>
<p>
	Si no encuentras aquí lo que quieres saber, escríbenos a <a href = "mailto:contacto@premioamwaydeperiodismoambiental.com">contacto@premioamwaydeperiodismoambiental.com</a> y con gusto te responderemos a la mayor brevedad posible.
</p>
<div>
  <?php 
   //$content = Contenido::model()->findAll('tipo="notice"');
   $preguntas = new CArrayDataProvider(Preguntas::model()->findAll(),array());
   
   $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$preguntas,
	'itemView'=>'/preguntas/_view',
)); 
   //echo $this->renderPartial('/jurado/_view')
   ?> 
</div>
</div>
 </div>
   <div class="col-lg-2"></div>

    </div>
</div>