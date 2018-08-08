<?php
/* @var $this SiteController */

//$this->pageTitle=Yii::app()->name . ' - Participar';
//$this->breadcrumbs=array(
//	'Participar',
//);
$participant =  Participantes::model()->isParticipant();
if(isset($participant->id) && !Yii::app()->user->isGuest){
    $this->redirect(Yii::app()->request->baseUrl.'/participantes/'.$participant->id);
}else{?>
	 <div class="container">

  <div class="comoparticipar">
          <br><br>
          <div class="row">
        <div class="col-lg-2"></div>
       <div class="col-lg-8">  
                <div class="logo2">
                <div class="row">
                   <div class="tituloflores"> 
                  <div class="col-lg-1"></div>
         
                 <div class="col-lg-2"><div class="rama1"><img  src="<?php echo Yii::app()->baseUrl;?>/images/Ramainterna1.png"   /></div> </div>
   <div class="col-lg-6"><span><h1>Cómo participar</h1></span></div>
   <div class="col-lg-2"><div class="rama2"><img src="<?php echo Yii::app()->baseUrl;?>/images/Ramainterna2.png"/></div></div>
     <div class="col-lg-1"></div>
      

                

                </div>
               
                </div>
                <div class="textoSecciones">
                 <br><br>
               <p>Este año… ¡Vamos por el Periodismo Ecológico!</p>
                <p>Por vigésima vez, lanzamos el Premio Amway de Periodismo Ambiental y queremos invitarte a participar con tus trabajos, noticias y artículos relacionados con temas medioambientales de interés general. </p>
               <p>Para saber si tus trabajos cumplen los requisitos para entrar en esta convocatoria, visita las <a href="<?php echo Yii::app()->baseUrl;?>/site/page/view/basesdelpremio">Bases del Premio</a> </p>

              <p>¡Anímate!</p>

            </div>
            <br>
            </div>
             
        </div>

        <div class="col-lg-2"></div>
        </div>
         
  </div>
 </div>

<div class="containerMw" id="seccionPasos">

  <div class="container">
 

  <div class="row">
  <br><br><br>
  
  <div class="col-lg-12"></div> 
      
  <div class="col-lg-8">  
               
             <div class="textoSecciones">
               <h2 class="tituloparte1">Pasos para </h2><h2 class="tituloparte2">participar</h2><h1>01. </h1>
              
               <p>Regístrate con tus datos personales haciendo <a href="<?php echo Yii::app()->baseUrl;?>/participantes/create">Clic Aquí </a></p>
                
       
            </div>
        </div>
         <div class="col-lg-4"></div>


  </div> 


   <div class="row">
 
  <div class="col-lg-12"></div> 
       <div class="col-lg-4"></div>
  <div class="col-lg-8">  
               
             <div class="textoSecciones">
               <h1>02. </h1>
              
               <p>Una vez inscrito, sube tu trabajo en tu perfil. Aunque puedes subir trabajos de cualquier tamaño y peso, te recomendamos que no excedan estas especificaciones, pues así la carga tendrá menos posibilidades de caerse.</p>
               
            </div>
        </div>
        



  </div>  

</div><!-- fin container bootstrap -->

</div> <!-- fin container mw  -->

 <div class="container">

          <br><br>
          <div class="row">
        <div class="col-lg-2"></div>
       <div class="col-lg-8">  
                   <div class="videoparticipar"> 
                 <h1>Mira este video sobre cómo hacer este proceso </h1>

               
                 <iframe width="100%"  frameborder="0" height="420" src="https://www.youtube.com/embed/wnR--VFf3e0" allowfullscreen></iframe>
                 <br><br>
                  <P>Si tienes dudas contáctanos dando  <a href="<?php echo Yii::app()->baseUrl;?>/site/contact">Clic Aquí </a></P>
            </div>
            
        </div>

        <div class="col-lg-2"></div>
        </div>
         
 </div>

<?php }?>

