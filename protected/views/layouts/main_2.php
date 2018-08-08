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
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
    <div class="top">
        <div class="container">
            <div class="social">
                <div class="top-a">
                    <?php 
                        echo Yii::app()->user->isGuest ? 
                                CHtml::link('Iniciar sesión',array('/cruge/ui/login'),array('class'=>' boton'))
                                :CHtml::link('Cerrar sesión',array('/cruge/ui/logout'),array('class'=>' boton'))
                            ; 
                    ?>
                </div>

                <div class="top-b">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/Twitter.png" alt="Curso" class="img-rounded">
                </div>
                <div class="top-c">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/Facebook.png" alt="Curso" class="img-rounded">
                </div>
                <div class="top-d">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/mensaje.png" alt="Curso" class="img-rounded">
                </div>
            </div>
        </div>
    </div>
    <div class="logo">
    <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo.jpg" alt="Curso" class="img-rounded">
    </div>
    <nav id="nav">
        <div class="container">
       <ul>
            <li> <?php echo Chtml::link('Home',array('/site/index'))?></li>
            <li><?php echo Chtml::link('Cómo participar',array('/site/page/view/participant'))?></li>
            <li><?php echo Chtml::link('Jurado 2015',array('/site/page/view/jurado'))?></li>
            <li><?php echo Chtml::link('Inscripción',array('/participantes/register'))?></li>
            <li><a href="contacto.htm">Linea del tiempo</a></li>
            <li><?php echo Chtml::link('Noticias',array('/site/page/view/noticias'))?></li>
          <li><?php echo CHtml::link('Contáctanos',array('/site/contact'),array('class'=>''))?></li>
        </ul>
        </div>
    </nav>
    
    <?php  
    $url = Yii::app()->request->url;
    $url =  explode('/', $url);
    if($url[2]=='site' && $url[3]=='index'  && Yii::app()->user->isGuest){?>  

    <div id="myCarousel" class="carousel slide">
        <div class="fondoopaco">	
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="1" class"active"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
        </div>

        <div class="carousel-inner">
                <div class="item active">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/slide1.jpg" alt="">
                </div>
                <div class="item">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/slide2.jpg" alt="">
                </div>
                <div class="item">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/slide3.jpg" alt="">
                </div>
        </div>
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>

    <div class="banner">	
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/imgbanner.jpg" alt="">
    </div>

    <div class="tips">
        <div class="container">
            <div class="columna1"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/tips_ecologico.png" alt=""></div>
            <div class="columna2"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/tipsverde.png" alt=""></div>
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
                            <?php echo CHtml::link('LEER MAE...',array('contenido/'.$latestNews->id),array('class'=>'LeeMas')); ?>
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
                    <?php echo $content; ?>
            </div>
        </div>
    </div>
    
    <div class="footer">
    <div class="container">
            <div class="footer-a"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono.png" alt="Curso" class="img-rounded"></div>
            <div class="footer-b">
                 <p>Departamento de Asuntos Corporativos Amway</p>
             <p>Diagonal 92 # 17a - 42 Piso 4</p>
             <p>Bogotá, Colombia</p>
             <p>644 4420 Ext. 4439</p></div>
            <div class="footer-c"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/linea.png" alt="Curso"></div>
            <div class="footer-d">
                  <ul>
                    <li>Inicio</li>
                    <li><?php echo CHtml::link('Contáctanos',array('/site/contact'),array('class'=>''))?></li>
                    <li><?php echo Chtml::link('Noticias',array('/site/page/view/noticias'))?></li>
                    <li>Preguntas frecuentes</li>
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
                                    <span1><?php echo Chtml::link('Inscripción',array('/participantes/register'))?></span1>
                                    <span1><a href="#">Linea del tiempo</a></span1>
                                    <span1><?php echo Chtml::link('Noticias',array('/site/page/view/noticias'))?></span1>
                                    <span1><?php echo CHtml::link('Contáctanos',array('/site/contact'),array('class'=>''))?></span1>
                            </div>
                    </div>
            </div>
    </div>
    </div>
</body>
</html>
