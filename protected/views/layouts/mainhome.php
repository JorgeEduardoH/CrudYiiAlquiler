<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
<meta name="MobileOptimized" content="320">
<title>Alquiler </title>
<!-- Bootstrap -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <link href ="<?php echo Yii::app()->baseUrl;?>/css/bootstrap.min.css" rel="stylesheet">
    <link href ="<?php echo Yii::app()->baseUrl;?>/css/form.css" />
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="jquery-1.3.2.min.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl;?>/css/customMediaQuery.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl;?>/css/font-awesome.min.css"/>
    <!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl;?>css/style.css"/>-->
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif|PT+Sans' rel='stylesheet' type='text/css'>
 
</head>
<body>
 <header class="headerhome">
    <div class="container">


 <div class="row">
               <div class="col-lg-2"><div class="logo"> <a ><img  src="<?php echo Yii::app()->baseUrl;?>/images/Logo.png"   width="166" height="110" /></div></div>
               <div class="col-lg-3"></div>
               <div class="col-lg-2"></div>



                <div class="col-lg-4">
                 <div class="botonInicio">


              <ul class="nav pull-right">
                  <?php //if( Yii::app()->user->isGuest ){ ?>
                  <li class="active">
                 <div class="contentBtniniciar">
                    <?php 

                      
                 

                 // $image = 'Iniciar Sesión<img class="deals_product_image" src="/images/Icono_Iniciar.png"/>';
      
                    echo CHtml::link("Iniciar sesion ",array('/cruge/ui/login'),array('class'=>'btn btn-danger header-button')); ?>

                  </div>

                  </li>
              <?php //}else{ ?>
                  <li class="active"><?php echo CHtml::link('CERRAR SESIÓN',array('/cruge/ui/logout'),array('class'=>'boton3')); ?></li>
                  <li class="active"><?php  echo CHtml::link('IR A MI CUENTA',array('/site/cuenta'),array('class'=>'boton4')); ?></li>
              <?php// } ?>

              </ul>
              </div>
               </div>

               



<div class="row">

  <div class="col-lg-12">


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

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse no-padding" id="bs-example-navbar-collapse-1">
     <div class="container-nav-mw">
      <div id="nav-active">
          
      </div>
      </div><!--/. div active-->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
 </div>




 </div>
</div>



          </div>






 
  

 </header>



         <?php echo $content;  ?>




<footer>
  
</footer>

</body>
</html>
