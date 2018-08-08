
<div class = "container">
 <br><br>
 <div class="row">
                   <div class="tituloflores"> 
                  <div class="col-lg-1"></div>
         
                 <div class="col-lg-2">

                 <div class="rama1"><img  src="<?php echo Yii::app()->baseUrl;?>/images/Ramainterna1.png"   /></div>
                  </div>
   <div class="col-lg-6"><span><h1><?php echo "Recuperar contraseña"; ?></h1></span></div>
   <div class="col-lg-2"><div class="rama2"><img src="<?php echo Yii::app()->baseUrl;?>/images/Ramainterna2.png"/></div></div>
     <div class="col-lg-1"></div>

                </div>
               
                </div>
<br>
<div class="row" id="">
<div class="col-lg-3"></div>



<?php if(Yii::app()->user->hasFlash('pwdrecflash')): ?>
<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('pwdrecflash'); ?>
</div>
<?php else: ?>
<div class="form">
  <div class="col-lg-6 recu-form"> 
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pwdrcv-form',
	'enableClientValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>


	<div class="col-xs-12 col-xs-offset-0 col-sm-12 col-sm-offset-0 col-md-12 col-md-offset-0 col-lg-12 col-lg-offset-1 no-padding">
                	
            		<p>Los campos con <span>*</span> son requeridos:</p>
            	</div>
                
	<div class="row">
		<label for="">Correo<span> *</span></label>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>
	
	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<label for="">Código  de seguridad<span> *</span></label>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint"><?php echo "Por favor ingrese los caracteres o dígitos que vea en la imagen";?></div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>
	
	<div class="row buttons">
		<br /><br /><?php Yii::app()->user->ui->tbutton("Recuperar contraseña"); ?>
	</div>
	
			</div>
                    
                  <br><br>

 
 <div class="col-lg-3"></div>
<?php $this->endWidget(); ?>
</div></div>
<?php endif; ?>
</div>