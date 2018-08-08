<?php
/* @var $this SiteController */

// $this->pageTitle=Yii::app()->name . ' - Noticias';
// $this->breadcrumbs=array(
// 	'Noticias',
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
   <div class="col-lg-6"><span><h1>Noticias</h1></span></div>
   <div class="col-lg-2"><div class="rama2"><img src="<?php echo Yii::app()->baseUrl;?>/images/Ramainterna2.png"/></div></div>
     <div class="col-lg-1"></div>

                </div>
               
                </div>
<br><br>
<div class="row" id="linecontenedor">
   

 <div class="col-lg-1"></div>   


 <div class="col-lg-10">   

   <?php 
   if(isset($_GET['i']) &&  $_GET['i']!=""){
   	$noticias = new CArrayDataProvider(Contenido::model()->findAll('tipo="NOTICIAS" and interna="'.$_GET['i'].'"'),array());
   }else{

   	$noticias = new CArrayDataProvider(Contenido::model()->findAll(array("condition"=>"tipo =  'NOTICIAS'","order"=>"fecha DESC")),array());
   }
   //$content = Contenido::model()->findAll('tipo="notice"');
   
   
   $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$noticias,
	'itemView'=>'/contenido/_view',
)); 
   //echo $this->renderPartial('/jurado/_view')
   ?> 
</div>
 <div class="col-lg-1"></div>   
</div>

</div>
