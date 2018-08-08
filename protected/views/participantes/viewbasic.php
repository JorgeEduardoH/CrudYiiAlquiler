<?php
/* @var $this ParticipantesController */
/* @var $model Participantes */
?>
<div class="container no-padding">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-ins" id = "p-sold">
    	<div class="col-xs-12 col-ms-12 col-md-12 col-lg-12 text-form">
        	

<div class="row">
                   <div class="tituloflores"> 
                  <div class="col-lg-4"></div>
         
   <div class="col-lg-4">

   <?php if($model->imagen!=""){?>
          <?php echo CHtml::image(Yii::app()->request->baseUrl.'/imagen-perfil/'.$model->imagen); ?> 
      <?php }else{?>
          <?php echo CHtml::image(Yii::app()->request->baseUrl.'/img/defaiult-perfil.png'); ?> 
      <? }?></div>
  <div class="col-lg-4"></div>
     </div>
     </div>


           
            <br />

            <div class="row">
              <div class="col-lg-4"></div>
              <div class="col-lg-6">
                <div class="profile-view">
    				<span><?php echo CHtml::encode($model->getAttributeLabel('nombre'))?>:</span>
                	<?php echo ucwords($model->nombre)?>
                	<?php echo ucwords($model->apellidos)?>
                	<br />
               	 	<span><?php echo CHtml::encode($model->getAttributeLabel('correo'))?>:</span>
               	 	<?php echo $model->correo?>
                	<br />
                	<span><?php echo CHtml::encode($model->getAttributeLabel('Día de Registro'))?></span>
                	<?php echo $model->fecha?>	
            	</div>
              </div>
                 <div class="col-lg-2"></div>
          </div>
        </div>
    </div>
</div>
