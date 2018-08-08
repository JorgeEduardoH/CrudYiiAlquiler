

<div class="row-fluid">
	<div class="span3">
	</div>
	<div class="span6">
		<h1><?php echo CrugeTranslator::t('logon',"Ingreso"); ?></h1>
		<?php if(Yii::app()->user->hasFlash('loginflash')): ?>
		<div class="flash-error">
			<?php echo Yii::app()->user->getFlash('loginflash'); ?>
		</div>
		<?php else: ?>

		<div class="form">
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'logon-form',
			'enableClientValidation'=>false,
			'clientOptions'=>array(
				'validateOnSubmit'=>true,
			),
		)); ?>

			<div class="row-fluid">
				<label>USUARIO O EMAIL: *</label>
				<?php //echo $form->labelEx($model,'username'); ?>
				<?php echo $form->textField($model,'username'); ?>
				<?php echo $form->error($model,'username'); ?>
			</div>

			<div class="row-fluid">
			<label>CONTRASEÑA: *</label>
				<?php //echo $form->labelEx($model,'password'); ?>
				<?php echo $form->passwordField($model,'password'); ?>
				<?php echo $form->error($model,'password'); ?>
			</div>

			<div class="row-fluid rememberMe">
			
				<?php echo $form->checkBox($model,'rememberMe'); ?>
				<label>RECORDAR EN ESTE EQUIPO</label>
				<?php //echo $form->label($model,'rememberMe'); ?>
				<?php echo $form->error($model,'rememberMe'); ?>
			</div>

			<div class="row-fluid buttons">
				<?php Yii::app()->user->ui->tbutton(CrugeTranslator::t('logon', "Ingresar")); ?>
				
				<p><?php echo Yii::app()->user->ui->passwordRecoveryLink; ?>
		        </BR>
		        <a href="<?php echo Yii::app()->request->baseUrl; ?>/participantes/create">Regístrese</a>
				 
		        </p>
			</div>

			<?php
				//	si el componente CrugeConnector existe lo usa:
				//
				if(Yii::app()->getComponent('crugeconnector') != null){
				if(Yii::app()->crugeconnector->hasEnabledClients){ 
			?>
			<div class='crugeconnector'>
				<span><?php echo CrugeTranslator::t('logon', 'You also can login with');?>:</span>
				<ul>
				<?php 
					$cc = Yii::app()->crugeconnector;
					foreach($cc->enabledClients as $key=>$config){
						$image = CHtml::image($cc->getClientDefaultImage($key));
						echo "<li>".CHtml::link($image,
							$cc->getClientLoginUrl($key))."</li>";
					}
				?>
				</ul>
	</div>
	<?php }} ?>
	

<?php $this->endWidget(); ?>
</div>
	<?php endif; ?>
	</div>
	<div class="span3">
	</div>
</div>