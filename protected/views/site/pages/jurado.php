<?php
/* @var $this SiteController */

// $this->pageTitle=Yii::app()->name . ' - Participar';
// $this->breadcrumbs=array(
// 	'Participar',
// );
?>

<div class = "container">
 <br><br>
         
     <div class="row">
                   <div class="tituloflores"> 
                  <div class="col-lg-1"></div>
         
                 <div class="col-lg-2">

                 <div class="rama1"><img  src="<?php echo Yii::app()->baseUrl;?>/images/Ramainterna1.png"   /></div>
                  </div>
   <div class="col-lg-6"><span><h1>Jurados</h1></span></div>
   <div class="col-lg-2"><div class="rama2"><img src="<?php echo Yii::app()->baseUrl;?>/images/Ramainterna2.png"/></div></div>
     <div class="col-lg-1"></div>

                </div>
               
                </div>
<br><br>
<div class="row" id="linecontenedor">



<div class="container no-padding">
 <div class="col-lg-1"></div>   
 <div class="col-lg-11">   

<div class="jure-cont">
  <?php 
   //$content = Contenido::model()->findAll('tipo="notice"');
   $jurados = new CArrayDataProvider(Contenido::model()->findAll('tipo="jurados" order by orden ASC'),array());
   
   $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$jurados,
	'itemView'=>'/contenido/_viewJurado',
)); 
   //echo $this->renderPartial('/jurado/_view')
   ?> 
   </div>
</div>  
</div>
</div>
