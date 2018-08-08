<?php /* @var $this Controller */ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />
    <script type="text/javascript"  src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.js"></script>
    <script type="text/javascript"  src="<?php echo Yii::app()->baseUrl; ?>/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript"  src="<?php echo Yii::app()->baseUrl; ?>/js/bootstrap.js"></script>
    <!-- blueprint CSS framework -->
    <!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />-->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
    <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css" />  -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <link rel="icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.png" type="image/gif" sizes="16x16">
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61459620-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>

    <div class="top">
        <div class="container">
            <div class="social">
                <div class="top-a">
                    <?php 
                        
            if( Yii::app()->user->isGuest ){ 
                                echo CHtml::link('Iniciar sesión',array('/cruge/ui/login'),array('class'=>' boton'));
                }else{
                                echo CHtml::link('Cerrar sesión',array('/cruge/ui/logout'),array('class'=>' boton')); echo CHtml::link('Ir a mi cuenta',array('/site/cuenta'),array('class'=>' boton'));
                } 
                    ?>
                </div>

                <div class="top-b">
                    <a href="https://twitter.com/PremioAmway" title="twitter" target="_blank">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/Twitter.png" alt="Curso" class="img-rounded">
                     </a>
                </div>
               <!--  <div class="top-c">
                    <a href="https://www.facebook.com/" title="facebook"> 
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/Facebook.png" alt="Curso" class="img-rounded">
                    </a>
                </div> -->
                <div class="top-d">
                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/contact" title="contact">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/mensaje.png" alt="Curso" class="img-rounded">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="logo">
    <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/index">
    <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo.jpg" alt="Curso" class="img-rounded">
    </a>
    </div>
    <nav id="nav">
        <div class="container">
       <ul>
            <li> <?php echo Chtml::link('Home',array('/site/index'))?></li>
            <li><?php echo Chtml::link('Cómo participar',array('/site/page/view/participant'))?></li>
            <li><?php echo Chtml::link('Jurado 2015',array('/site/page/view/jurado'))?></li>
            <!-- <li><?php //echo Chtml::link('Inscripción',array('/participantes/register'))?></li> -->
            
            <li><?php if(Yii::app()->user->isGuest){?><?php echo Chtml::link('Inscripción',array('/participantes/create'))?>
            <?php } else{?>
        <?php echo Chtml::link('Mi Cuenta',array('/site/cuenta'))?>
      <?php }?>
            </li>
           <li><?php echo Chtml::link('línea de tiempo',array('/site/page/view/linea_tiempo'))?></li>
            <li><?php echo Chtml::link('Noticias',array('/site/page/view/noticias'))?></li>
          <li><?php echo CHtml::link('Contáctanos',array('/site/contact'),array('class'=>''))?></li>
        </ul>
        </div>
    </nav>
    
    <?php  
    $url = Yii::app()->request->url;
    $url =  explode('/', $url);
    if((Yii::app()->controller->id=='site'  && end($url)=="index") || ($url[3]=='site'  && end($url)=="site") || ($url[3]==''  && end($url)=="")){?>  

<?php $baners = Contenido::model()->findAllByAttributes(array('tipo' => 'banner')); ?>
   
    <div id="myCarousel" class="carousel slide">
        <div class="fondoopaco">  
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="1" class"active"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
        </div>

        <div class="carousel-inner">
                 <?php  
                  $cont=0;
                  $activo="";
                 foreach ($baners as $baner) { 
                  // echo $cont;
                  if ($cont==0) {
                    $activo="active";
                  }else{
                     $activo="";
                  }
                  ?>
                    <div class="item <?php echo $activo; ?>">
                        <a href="<?php echo $baner->url; ?>">
                          <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/content/<?php echo $baner->imagen; ?>" alt="">
                        </a>
                    </div>
                <?php $cont++; } ?>
        </div>
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
    
    <div class="banner">  
    <a href="<?php echo Yii::app()->request->baseUrl;?>/participantes/create">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/imgbanner.jpg" alt="">
        </a>
    </div>

    <div class="tips">
        <div class="container">
             <a href="<?php echo Yii::app()->request->baseUrl;?>/site/page/view/noticias?i=1">
                <div class="columna1">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/tips_ecologico.png" alt="">
                </div>
            </a>
            <a href="<?php echo Yii::app()->request->baseUrl;?>/site/page/view/noticias?i=2">
            <div class="columna2"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/tipsverde.png" alt=""></div>
            </a>
        </div>
    </div>
         
    <div class="contenido">
         <div class="container">
          <div class="textboxint">
                    <div class="text">
                        <?php  $latestNews = Contenido::model()->latestNews()->find();?>
                        
                        <p style="height:60px">
                         <?php echo $latestNews->contenido;?>   
                        </p>
                        <span style="float:right;">
                            <?php echo CHtml::link('¿Cómo participar?',array('site/page/view/participant'),array('class'=>'LeeMas')); ?>
                        </span>
                        
                 </div>

            </div>
            <div class="titulo_convocatoria">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/tituloconvocatoria.png" alt="">
            </div>

         </div>
     </div>   
    <?php   }
       ?>
    <div class="contenido">
        <div class="container">
            <div class="tips2">
                    
                    <?php if(isset($this->breadcrumbs)):?>
                            <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                                    'links'=>$this->breadcrumbs,
                            )); ?><!-- breadcrumbs -->
                    <?php endif?>
                     <?php
                      if(Yii::app()->user->isSuperAdmin){ ?>
                          <div id="nav2">
                                <ul style="  list-style-type: none;">
                                <li>
                           <?php echo CHtml::link('Administrador de usuarios',array('/cruge/ui/usermanagementadmin'),array('class'=>''))?>
                                </li>
                                  <li>
                                  <a href="<?php echo Yii::app()->request->baseUrl; ?>/trabajos/admin">Trabajos</a>
                                </li>
                                <li>
                                  <a href="<?php echo Yii::app()->request->baseUrl; ?>/participantes/admin">Participantes</a>
                                </li>
                                  <li>
                           <?php echo CHtml::link('Ponderado Final',array('trabajos/PonderadoFinal'),array('class'=>''))?>
                                </li>
                                <li>
                                  <a href="<?php echo Yii::app()->request->baseUrl; ?>/contenido/admin">contenido</a>
                                </li>
                                   <li>
                                  <a href="<?php echo Yii::app()->request->baseUrl; ?>/preguntas/admin">preguntas</a>
                                </li>
                           </ul>
                        </div >
                      <?php  } ?>
                      <?php
                      if(Yii::app()->user->checkAccess('jury') && !Yii::app()->user->isSuperAdmin){ ?>
                          <div id="nav2">
                                <ul style="  list-style-type: none;">
                                <li>
                 <?php echo CHtml::link('Inicio',array('jurado/index_jurado'),array('class'=>''))?>
                                </li>
                                   <li>
                           <?php echo CHtml::link('Trabajos filtrados',array('trabajos/adminjuez'),array('class'=>''))?>
                                </li>
                               <li>
                           <?php echo CHtml::link('Trabajos calificados',array('trabajos/adminjuez2'),array('class'=>''))?>
                                </li> 
                                  <li>
                           <?php echo CHtml::link('Todos los trabajos',array('trabajos/adminjuez_todo'),array('class'=>''))?>
                                </li>
                                 <li>
                           <?php echo CHtml::link('Ponderado Final',array('trabajos/PonderadoFinal'),array('class'=>''))?>
                                </li>
                           </ul>
                        </div >
            <?php  } ?>
                    <?php echo $content; ?>
            </div>
        </div>
    </div>
    
    <div class="footer">
    <div class="container">
            <div class="footer-a"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono.png" alt="Curso" class="img-rounded"></div>
            <div class="footer-b">
            <p>Kreab</p>
                 <p>Consultora de Comunicaciones Amway</p>
             <p>Calle 86 No. 10-88 Of. 601B</p>
            
             <p>Tel. 57 1 7464797</p>
              <p>Bogotá, Colombia</p>
</div>
            <div class="footer-c"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/linea.png" alt="Curso"></div>
            <div class="footer-d">
                  <ul>
                    <li><?php echo CHtml::link('Inicio',array('/site/index'),array('class'=>''))?></li>
                    <li><?php echo CHtml::link('Contáctanos',array('/site/contact'),array('class'=>''))?></li>
                    <li><?php echo Chtml::link('Noticias',array('/site/page/view/noticias'))?></li>
                     <li><?php echo Chtml::link('Preguntas frecuentes',array('/site/page/view/preguntas'))?></li>
                    <!-- <li>Preguntas frecuentes</li> -->
                   </ul>
            </div>
    </div>
    <div class="submenu1">
         <div class="submenu">
            <div class="row-fluid">
                            <a href="#" class="brand"></a>
                            <div class="span">
                                    <span1>
                                        <?php echo CHtml::link('Home',array('/site/index'),array('class'=>''))?>
                                    </span1>
                                    <span1><?php echo Chtml::link('Cómo participar',array('/site/page/view/participant'))?></span1>
                                    <span1><?php echo Chtml::link('Jurado 2015',array('/site/page/view/jurado'))?></span1>
                                    <!-- <span1><?php //echo Chtml::link('Inscripción',array('/participantes/register'))?></span1> -->
                                    <span1><?php echo Chtml::link('Inscripción',array('/participantes/create'))?></span1>
                                    <span1><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/page/view/linea_tiempo">línea de tiempo</a></span1>
                                    <span1><?php echo Chtml::link('Noticias',array('/site/page/view/noticias'))?></span1>
                                    <span1><?php echo CHtml::link('Contáctanos',array('/site/contact'),array('class'=>''))?></span1>
                            </div>
                    </div>
            </div>
    </div>
    </div>
</body>
</html>

<style>
#nav2 ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

#nav2 ul li {
    float: left;

}

 #nav2  ul li a {
    display: block;
    width: 60px;
    background-color: #898f00;
    color: #fff;
    margin: 5px;
      padding: 5px;
        width: 100%;
         /*border-right: 1px solid #000000;*/
}

</style>
<script>
    $('#myCarousel').carousel({
  interval: 4000
})
</script>


 <div class="container navegacion">
  <div class="row-fluid">
    <div class="span1">
    </div>
      <div class="span10">
          <nav id="nav">
          <div class="row-fluid">
          <div class="span1">
          </div>
          <div class="span10">
             <ul>
                <li> <?php echo Chtml::link('Home',array('/site/index'))?></li>
                <li><?php echo Chtml::link('Cómo participar',array('/site/page/view/participant'))?></li>
                <li><?php echo Chtml::link('Jurado 2015',array('/site/page/view/jurado'))?></li>
                <!-- <li><?php //echo Chtml::link('Inscripción',array('/participantes/register'))?></li> -->
            
                <li><?php if(Yii::app()->user->isGuest){?><?php echo Chtml::link('Inscripción',array('/participantes/create'))?>
                <?php } else{?>
                 <?php echo Chtml::link('Mi Cuenta',array('/site/cuenta'))?>
                <?php }?>
                </li>
                <li><?php echo Chtml::link('LÍNEA DE TIEMPO',array('/site/page/view/linea_tiempo'))?></li>
                <li><?php echo Chtml::link('Noticias',array('/site/page/view/noticias'))?></li>
                <li><?php echo CHtml::link('Contáctanos',array('/site/contact'),array('class'=>''))?></li>
             </ul>
             </div>
             <div class="span1">
          </div>
             </div>
          </nav>
      </div>
    <div class="span1">
    </div>
  </div>
</div>