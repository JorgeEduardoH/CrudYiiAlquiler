
<div class="container no-padding">
	
      <div class="row">
                   <div class="tituloflores"> 
                  <div class="col-lg-1"></div>
         
                 <div class="col-lg-2">

                 <div class="rama1"><img  src="<?php echo Yii::app()->baseUrl;?>/images/Ramainterna1.png"   /></div>
                  </div>
   <div class="col-lg-6"><span><h1>Ingreso</h1></span></div>
   <div class="col-lg-2"><div class="rama2"><img src="<?php echo Yii::app()->baseUrl;?>/images/Ramainterna2.png"/></div></div>
     <div class="col-lg-1"></div>

                </div>
               
                </div>
  	
    <div class="container" id="linecontenedor" >

    	<?php if(Yii::app()->user->hasFlash('loginflash')):?>
        	<div class="flash-error">
                <?php echo Yii::app()->user->getFlash('loginflash')?>
            </div>
        <?php else:?>
              
             <div class="col-lg-3"></div>  
        	 <div class="col-lg-6 form-login">  
            	<?php $form=$this->beginWidget('CActiveForm',array(
					'id'=>'logon-form',
					'enableClientValidation'=>false,
					'clientOptions'=>array(
						'validateSubmit'=>true,
					),
				)); 
				?>
                
                	<!--EMAIL-->
                    <br>
                    <div class = "line-text">E-MAIL O USUARIO <span>*</span></div>
                    <?php echo $form->textField($model,'username',array('maxlength'=>45,'class'=>'txtiniciarsesion'))?>
                    <?php echo $form->error($model,'username')?>
                    
                    <!--PASSWORD-->
                    <br>
                    <div class = "line-text2">CONTRASEÑA<span>*</span></div>
                    <?php echo $form->passwordField($model,'password',array('maxlength'=>45,'class'=>'txtiniciarsesion'))?>
                    <?php echo $form->error($model,'password')?> 
                    <br>
                    <!--RECORD-->
                    <div class = "check-pass">
                    	<?php echo $form->checkBox($model,'rememberMe')?>
                    	Recordar en este equipo
                        <?php echo $form->error($model,'rememberMe')?>
                    </div>
                
                    <!--BUTTON-->
                    
                    <!--button class="btn btn-danger boton-center btn-save" type="button">GUARDAR</button-->
                    </div>
                    <div class="col-lg-12">
                    <div class = "boton-login">
                   		 <?php Yii::app()->user->ui->tbutton(CrugeTranslator::t('logon', "INICIAR SESIÓN")); ?> 
                    
                  
                    
                    
          			
                    
                    <?php 
						if(Yii::app()->getComponent('crugeconnector')!=null){
							if(Yii::app()->crugeconnector->hasEnabledClients){	
                    ?>
                    <span><?php echo CrugeTranslator::t('logon', 'You also can login with');?>:</span>
                    <ul>
                    	<?php 
							$cc = Yii::app()->crugeconnector;
							foreach($cc->enableClients as $key=>$config){
								$image = Chtml::image($cc->getClientDefaultImage($key));
								echo "<li>".CHtml::link($image,
									$cc->getClientLoginUrl($key))."</li>";
							}
                        ?>
                    </ul>
                    <?php }}?>
                <?php $this->endWidget();?>
            </div><!--.form of login-->   

             <div class="col-lg-3"></div>   	
        <?php endif?>
    </div>
</div>
