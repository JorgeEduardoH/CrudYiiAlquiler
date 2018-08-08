

<div class = "container">
 <br><br>
             
 
     <div class="row">
                   <div class="tituloflores"> 
                  <div class="col-lg-1"></div>
         
                 <div class="col-lg-2">

                 <div class="rama1"><img  src="<?php echo Yii::app()->baseUrl;?>/images/Ramainterna1.png"   /></div>
                  </div>
   <div class="col-lg-6"><span><h1>Contáctenos</h1></span></div>
   <div class="col-lg-2"><div class="rama2"><img src="<?php echo Yii::app()->baseUrl;?>/images/Ramainterna2.png"/></div></div>
     <div class="col-lg-1"></div>

                </div>
               
                </div>
<br>
<div class="row" id="linecontenedor">
<div class="col-lg-3"></div>  
     
     <?php if(Yii::app()->user->hasFlash('contact')):?>
     	<div class="flash-success">
        	<?php echo Yii::app()->user->getFlash('contact');?>
        </div>
     <?php else: ?>


                <div class="col-lg-6 text-form"> 
            	<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'contact-form',
					'enableClientValidation'=> true,
					'clientOptions'=>array(
							'validateOnSubmit'=>true,
					),
				));
				?>
 
               	<div class="col-xs-12 col-xs-offset-0 col-sm-12 col-sm-offset-0 col-md-12 col-md-offset-0 col-lg-12 col-lg-offset-1 no-padding">
                	<br /><br />
            		<p>Los campos con <span>*</span> son requeridos:</p>
            	</div>
                
               	<br />
                	<!--NOMBRE-->
                	NOMBRE<span> *</span><br />
                    <?php echo $form->textField($model,'name')?>
                    <?php echo $form->error($model,'name')?>
                    
                    <!--CORREO-->
                	<br />CORREO <span> *</span><br />
                    <?php echo $form->textField($model,'email')?>
                    <?php echo $form->error($model,'email')?>
                    
                    <!--TELEFONO-->
               		<br />CELULAR<span> *</span><br />
					<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
					<?php echo $form->error($model,'subject'); ?>
                    
                    <!--MENSAJE-->
                    <br />MENSAJE <span> *</span><br />
                    <?php echo $form->textArea($model,'body')?>
                    <?php echo $form->error($model,'body');?>
                	
                    <br><br>
                    <div class="row buttons">
                    <?php
                    	echo CHtml::tag('Button', array('class' => 'btn btn-danger boton-sub'),
        					'<i class="fa fa-envelope-o fa-2x" " aria-hidden="true"></i> Enviar');
                		?>
						
					</div>
                    
                  <br><br>

 
 <div class="col-lg-3"></div> 
                
                
                <?php $this->endWidget();?>
            </div>
         </div>
<div class="row">
  <div class="col-lg-2"></div>  
  <div class="col-lg-8 text-form">  
                        <p class="text-email">O escríbenos directamente a
                        <a href="mailto:contacto@premioamwaydeperiodismoambiental.com">                                                                                         contacto@premioamwaydeperiodismoambiental.com
                        </a>
                </p>
            </div>
  
</div>
  <div class="col-lg-2"></div>  
     <?php endif?>


     </div>
   