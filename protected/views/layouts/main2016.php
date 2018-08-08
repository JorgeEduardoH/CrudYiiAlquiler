<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>XIX Premio Amway</title>
   	 <!-- Bootstrap -->
    <link href ="<?php echo Yii::app()->baseUrl;?>/css/bootstrap.min.css" rel="stylesheet">
    <link href ="<?php echo Yii::app()->baseUrl;?>/css/form.css" />
    <link href = "<?php echo Yii::app()->baseUrl;?>/css/print.css" media="print"/>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?php echo Yii::app()->baseUrl;?>/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl;?>/css/custom.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl;?>/css/font-awesome.min.css"/>
    <!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl;?>css/style.css"/>-->
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif|PT+Sans' rel='stylesheet' type='text/css'>
    <!--script src="<?php echo Yii::app()->baseUrl;?>/js/lib/modernizr-2.6.2.min.js"></script-->
         <!--Google Analytics-->
     <script>
  		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78755252-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body>

 <!-- inicio panel superior  -->
  <header>
     <div class="container">
     <h2>hello lauu</h2>
  		<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 logo-header">
        	<img src="<?php echo Yii::app()->baseUrl;?>/images/logo.png" width="189" height="124" />
        </div>
        <div class="col-sm-2 col-md-4 col-lg-4"></div>
        
        <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
        
        <ul class="nav pull-right">
                  <?php if( Yii::app()->user->isGuest ){ ?>
                  <li class="active"><?php echo CHtml::link('INICIAR SESIÓN',array('/cruge/ui/login'),array('class'=>'boton2')); ?></li> 
              <?php }else{ ?>
                  <li class="active"><?php echo CHtml::link('CERRAR SESIÓN',array('/cruge/ui/logout'),array('class'=>'boton3')); ?></li> 
                  <li class="active"><?php  echo CHtml::link('IR A MI CUENTA',array('/site/cuenta'),array('class'=>'boton4')); ?></li> 
              <?php } ?>
   
              </ul>
        </div>
        
        <div class="col-xs-4 col-sm-2 col-md-1 col-lg-1 no-padding">
        	<div class="col-xs-12 col-sm-12 col-md-12  col-lg-12 redes-hader no-padding">
                <div class="col-xs-4 col-xs-offset-4 col-sm-6 col-sm-offset-0 col-md-6 col-md-offset-0  col-lg-6 col-lg-offset-0 no-padding">	
                	<a href="https://twitter.com/PremioAmway" target="_blank">
                		<i class="fa fa-twitter fa-lg" aria-hidden="true"></i>
                	</a>	
                 </div>
                 
                <div class="col-xs-4 col-sm-6 col-md-6 contacto-icon no-padding">
                		<a href="<?php echo Yii::app()->baseUrl;?>/site/contact">
            				<i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i>
            			</a>
                </div>
        	</div>
		</div>
     </div>
 </header>
 
<!-- fin panel superior-->

<!-- navbar responsive -->
<nav class="navbar navbar-default">
  <div class="container-fluid no-padding">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Menú</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse no-padding" id="bs-example-navbar-collapse-1">
     <div class="container  no-padding">
     	<div id="nav-active">
      		<ul class="nav navbar-nav">
        		<li>
					<?php echo Chtml::link('HOME',array('/site/index'))?><span class="sr-only">(current)</span>
        		</li>
        		<li>
					<?php echo Chtml::link('CÓMO PARTICIPAR', array('/site/page/view/participant'))?>
        		</li>
        
        		<li>
			 		<?php if(Yii::app()->user->isGuest){
              				echo Chtml::link('INSCRIPCIÓN',array('/participantes/create'));
            			} else{ ?>
                        	<div class="active-cuenta">
                				<?php echo Chtml::link('MI CUENTA',array('/site/cuenta'));?>
                            </div>    
      					<?php } ?>
        </li>
   		<li>
			<?php echo Chtml::link('LÍNEA DE TIEMPO', array('/site/page/view/linea_tiempo'))?>
        </li>
        <li>
			<?php echo Chtml::link('NOTICIAS',array('/site/page/view/noticias'))?>
        </li>
        <li>
        	<?php echo Chtml::link('CONTÁCTENOS',array('/site/contact'))?>
        </li>
      </ul>
      </div>
      </div><!--/. div active-->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- fin navbar responsive -->

                    
                    <?php if(isset($this->breadcrumbs)):?>
                            <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                                    'links'=>$this->breadcrumbs,
                            )); ?><!-- breadcrumbs -->
                    <?php endif?>
                     <?php
                      if(Yii::app()->user->isSuperAdmin){ ?>
                      <div class="container">
                        <div class="row-fluid">
                            <div class="span2">
                            </div >
                            <div class="span8 admin-menu">
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
                                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/contenido/admin">contenido</a>
                                  </li>
                                     <li>
                                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/preguntas/admin">preguntas</a>
                                  </li>
                                   <li>
                                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/trabajos/Calificaciones_juez">Calificaciones jueces</a>
                                  </li>
                                   <li>
                                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/trabajos/Calificaciones_agencia">Calificaciones precalificadores</a>
                                  </li>
                                   <li>
                                          <?php echo CHtml::link('ponderado parcial Agencias',array('trabajos/PonderadoAgencia'),array('class'=>''))?>
                                      </li>
                                      <li>
                                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/Trabajos_participantes/admin">Trabajos y participantes</a>
                                  </li>
                                  <li>
                             <?php echo CHtml::link('Calificación final Profesional',array('trabajos/PonderadoFinal'),array('class'=>''))?>
                                  </li>
                                  <li>
                                        <?php echo CHtml::link('Calificación final Estudiante',array('trabajos/PonderadoFinalest'),array('class'=>''))?>
                                      </li>
                             </ul>
                            </div >
                            </div >
                             <div class="span2">
                            </div >
                          </div >
                        </div >
                      <?php  } ?>
  
 <?php  
    $url = Yii::app()->request->url;
    $url =  explode('/', $url);
    if((Yii::app()->controller->id=='site'  && end($url)=="index") || ($url[3]=='site'  && end($url)=="site") || ($url[3]==''  && end($url)=="")){?>  
<style>
  .mispacio{
    height: 27px;
    background: rgb(222, 224, 187);
  }
</style>


<!-- slide -->
  <?php $baners = Contenido::model()->findAllByAttributes(array('tipo' => 'banner')); ?>
<!-- fin slide -->

<!--Body-->
<div class = "container">
	<div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding image-central">
    		<img src="<?php echo Yii::app()->baseUrl;?>/images/imgIndex.png"/>
    </div>
    
    <div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding text-font">
    
    	<h1>¡Muchas gracias por participar de la XIX versión del<br />
        	<strong>Premio Amway de Periodismo Ambiental!</strong></h1>
        <p class="hometext">
        	Pronto estaremos informando sobre la convocatoria para el 2017, para que puedas postular tus trabajos y ser parte de esta iniciativa que desde el ámbito periodístico busca generar cambios en la realidad medioambiental de nuestro país.
        </p>
        
        <div class = "col-sm-12 col-md-12 col-lg-12" id="image">
        	<nav class = "image-info">
            	<ul>
                	<li>
                    	<a href="<?php echo Yii::app()->baseUrl;?>/participantes/create"><img src="<?php echo Yii::app()->baseUrl;?>/images/homepage.png"  /></a>
                    </li>
                    <li>
                    	<a href="<?php echo Yii::app()->baseUrl;?>/site/page/view/basesdelpremio"><img src="<?php echo Yii::app()->baseUrl;?>/images/basePremio.png" width="299" height="157" /></a>
                    </li>
                    <li>
                    	<a href="<?php echo Yii::app()->baseUrl;?>/site/page/view/noticias?i=1">
                        	<img src="<?php echo Yii::app()->baseUrl;?>/images/ecologico.png" width="206" height="166" />
                        </a>
                    </li>
                </ul>
            </nav>
    </div>
    
    <div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding image-central">
    	<img src="<?php echo Yii::app()->baseUrl;?>/images/convocatoria.png"/>
        <hr class = "separator-dis"/>
    </div>
</div>

<!--Fin Body-->
<!-- notice -->
<div class="contenido">
       
<!-- fin notice -->
    <?php   }
       ?>
<!-- contenido -->
<div class="row-fluid">
        <div class="span12">
          &nbsp;
        </div>
    </div>
<div class="container">
  <div class="row-fluid">

        <div class="span12">
          <?php echo $content; ?>
        </div>
 
      </div>
 </div>
<!--fin  contenido -->

<!-- footer -->
   <footer>
	   <div class = "container final-tmt">
    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        	<div class = "col-ms-12 col-md-12 col-lg-12 img-title">
                  <img src="<?php echo Yii::app()->baseUrl;?>/images/titulo.png" width="196" height="73" />
          </div>
            	
          <div class = "col-xs-12 col-ms-12 col-lg-12 text-sub">
            	<p>
                	Premio Amway de Periodismo Ambiental<br />
                    Kreab Colombia- Equipo Digital<br />
					Tel. +57 1 7464797 Ext. 107 - 108<br />
					Email:<br /> 
                    contacto@premioamwaydeperiodismoambiental.com<br />
					www.premioamwaydeperiodismoambiental.com<br />
              	</p>
            </div>
        </div>
        
		    <div class = "col-xs-12 col-sm-4 col-md-4 col-lg-4">
        	<ul class = "list-menu">
            	<li>
                	<i class="fa fa-angle-right" aria-hidden="true"></i><?php echo Chtml::link(' HOME',array('/site/index'))?>
               	</li>
                <li>
                	<i class="fa fa-angle-right" aria-hidden="true"></i>
                    <?php echo Chtml::link('JURADOS',array('/site/page/view/jurado'))?>
                </li>
                <li>
                	<i class="fa fa-angle-right" aria-hidden="true"></i>
                    <?php echo Chtml::link('PREGUNTAS FRECUENTES',array('/site/page/view/preguntas'))?>
                </li>
                <li>
                	<i class="fa fa-angle-right" aria-hidden="true"></i>
                    <?php echo Chtml::link('NOTICIAS',array('/site/page/view/noticias'))?>
                </li>
                <li>
                	<i class="fa fa-angle-right" aria-hidden="true"></i>
                    <?php echo Chtml::link('CONTACTANOS', array('/site/contact'), array('class' => ''))?>
                </li>
            </ul>
        </div>  
         
        <div class = "col-xs-12 col-sm-4 col-md-4 col-lg-4 redes-footer no-padding">
        	<div class = "col-xs-4 col-xs-offset-1 col-sm-6  col-sm-offset-2 col-md-4 col-md-offset-3 col-lg-4 col-lg-offset-2 no-padding">
              <div class = "col-xs-6 col-xs-4 col-sm-4 col-md-4 no padding">
                	<a href="https://twitter.com/PremioAmway" target="_blank"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a>
              </div>
            </div>
            <div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12 text-copy">
  				<p>Copyright &copy; 2016 Amway Colombia</p>
            </div>
        </div>    
     </div>
	</footer>
</body>
</html>

 <script type="text/java">
 $(function (){
			setNavigation();
	  });
	  
	  function setNavigation(){
	  	var path = window.location.pathname;
		path = path.replace(/\/$/,"");
		path = decodeURIComponent(path);
		
		$(".nav li a").each(function(index, element) {
            var href = $(this).attr('href');
			if(path.substring(0,href.length) == href){
				$(this).closest('li').addClass('active');
			}
        });
	  }
  //$('.dropdown-toggle').dropdown();
</script>  

<script>
	//$('.dropdown-toggle').dropdown();
</script>