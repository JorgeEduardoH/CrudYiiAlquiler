<?php
/* @var $this ParticipantesController */
/* @var $model Participantes */
/* @var $form CActiveForm */
?>

<div class="container no-padding">



<div class="row">

  <div class="col-lg-1"></div>
   <div class="col-lg-10 participantes">



	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-ins" id = "edperfil">
		<div class="col-xs-12 col-ms-12 col-md-12 col-lg-12 text-form">
        	<?php $form=$this->beginWidget('CActiveForm',array(
				'id'=>'participantes-form',
				'enableAjaxValidation'=>false,
				'htmlOptions'=>array('enctype'=>'multipart/form-data'),
			));

			?>

      
<div class="row">
                   <div class="tituloflores"> 
                  <div class="col-lg-4"></div>
         
   <div class="col-lg-4">
<?php if(!$model->isNewRecord){?>
                  <?php if($model->imagen!=""){?>
              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/imagen-perfil/'.$model->imagen); ?>
          <?php }else{?>
              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/img/defaiult-perfil.png'); ?>
          <? }?></div>
  <div class="col-lg-4"></div>
     </div>
     </div>
            	

                    <div class = "separator"></div>
                    <br>
                    <!--IMAGEN-->
                    <div class="sep-img">
                    	IMAGEN<span> * </span><br />
                    	<?php echo CHtml::activeFileField($model,'imagen')?>
						<?php }?>
                        
                		
                	</div>
                    <?php // echo $form->errorSummary($model); ?>

                     <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 columnaformtrabajos">
                  <p>Los campos con <span>*</span> son requeridos</p>
                    <!--NOMBRE-->
                	NOMBRE<span> * </span><br />
					<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlenght'=>100))  
           
          ?>
                	
        
                  <?php echo $form->error($model,'nombre') 
              
                  ?>

                    <!--DOCUMENTO-->
                    DOCUMENTO<span> * </span><br />
                    <?php echo $form->textField($model,'documento',array('size'=>60,'maxlenght'=>100))?>
                    <?php echo $form->error($model,'documento')?>
                    <br />
                    <!--CORREO-->

                    CORREO<span> * </span><br />
                    <?php echo $form->textField($model,'correo',array('size'=>60,'maxlenght'=>100))?>
                    <?php echo $form->error($model,'correo')?>
                    <br />
                    <!-- CONFIRMACION CORREO-->
                    CONFIRMAR CORREO<span> * </span><br />
                    <?php echo $form->textField($model,'correo_confirmar',array('size'=>60,'maxlenght'=>100))?>
                    <?php echo $form->error($model,'correo_confirmar')?>

                    <br />
                     <!-- CLAVE-->
                    CLAVE<span> * </span><br />
                    <?php echo $form->passwordField($model,'clave',array('size'=>60,'maxlenght'=>100))?>
                    <?php echo $form->error($model,'clave')?>
                    <br />
                     <!-- CONFIMACION CLAVE-->
                    CONFIRMAR CLAVE<span> * </span><br />
                    <?php echo $form->passwordField($model,'clave_confirmar',array('size'=>60,'maxlenght'=>100))?>
                    <?php echo $form->error($model,'clave_confirmar')?>

                   <br />
									 <!--DIRECCIÓN-->
									 DIRECCIÓN <span>*</span><br />
									 <?php  echo $form->textField($model,'direccion',array('size'=>60,'maxlenght'=>100))?>
									 <?php echo $form->error($model,'direccion')?>

                </div> <!--.FINAL FIRST COLUMN-->
  <div class="col-lg-1"></div>
          <div class="col-xs-12 col-xs-offset-1 col-sm-5 col-sm-offset-0  col-md-5 col-md-offset-0 col-lg-5 col-lg-offset-0 no-padding columnaformtrabajos columderForm" >
            <div class="separator"></div>     
                 	<!--APELLIDOS-->
                  <br><br>
                    APELLIDOS <span>*</span><br />
                    <?php echo $form->textField($model,'apellidos',array('size'=>60,'maxlenght'=>100))?>
                    <?php echo $form->error($model,'apellidos')?>

                    <!--TIPO DOCUMENTO-->
                    <br />TIPO DE DOCUMENTO <span>*</span><br />
                    <?php echo $form->dropDownList($model,'tipo_documento',array('1'=>'Cédula de Ciudadanía','2'=>'Cédula de Extranjería'),array('class'=>'form-control'))?>


										<!--CELULAR-->
										<br />CELULAR <span>*</span><br />
										<?php echo $form->textField($model,'celular',array('size'=>45,'maxlenght'=>45))?>
										<?php echo $form->error($model,'celular')?>
										<!--TELEFONO-->
										<br />TELÉFONO<span></span><br />
										<?php echo $form->textField($model,'telefono')?>
										<?php echo $form->error($model,'telefono')?>



										<!--DEPARTAMENTO-->
									 DEPARTAMENTO <span>*</span>
										 <?php echo CHtml::activeDropDownList($model,'depto_ciudad',CHtml::listData(Departamento::model()->findAll(),
						'id','nombre'),array('empty'=>'Seleccione','ajax'=>array('type'=>'POST','url'=>CController::createUrl('participantes/Ciudad_depto'),'update'=>'#Participantes_ciudad',))

					 );
					 ?>
										 <?php  echo $form->error($model,'depto_ciudad')?>
                    
                    <!--CIUDAD-->
                    <br /> CIUDAD <span>*</span><br />
                
									 <?php if (isset($model->depto_ciudad) && $model->depto_ciudad!=" " && Departamento::model()->findByPk($model->depto_ciudad)) { ?>

    <?php echo $form->dropDownList($model,'ciudad',CHtml::listData(Ciudad::model()->findAll(array("condition"=>"id_departamento =  $model->depto_ciudad")), 'id_Ciudad', 'nombre')); ?>
                        <?php } else {
                            echo $form->dropDownList($model,'ciudad', array(''=>'Seleccione '));

                        }?>
                        <?php  echo $form->error($model,'ciudad')?>
                    <!--GENERO-->
                    <br />GÉNERO<span>*</span><br />
                     <?php echo $form->radioButtonList($model,'genero', array('1'=>'Masculino', '2'=>'Femenino'),
					 		array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'  ',)
                     ); ?>
                     <?php echo $form->error($model,'genero')?>



                 </div> <!--.FINAL SECOND COLUMN-->
								 <!--TERMINOS-->
								<br/>
								<br/><br/>

                 <div class="row">



									 <div class="col-lg-12"></div>
							  <div class="col-lg-4"></div>
								<div class="col-lg-4 seccioncontinuar" >

								<?php if($model->isNewRecord){?>
								<span style="display:block">
								 <?php echo $form->checkBox($model,'terminos',array('value'=>1,'uncheckValue'=>0,'style'=>'margin-top:7px;')); ?>
								 <label style="width:400px;display:inline"class="gender">
										 <?php echo 'Acepta Términos y condiciones';?>
								 </label>
								</span>
								<span style="display:block">
								 <br />
										<?php echo CHtml::link('VER TÉRMINOS Y CONDICIONES',array('/site/page/view/terms'), array('target'=>'_blank','class'=>'terminoslink')); ?>
								</span>

								<?php } ?>


								<?php echo $form->error($model,'terminos')?>

                 <!--BUTTON-->
              <div class="row buttons guardarRegistro">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar'); ?>
    </div>


		 </div>

		 <div class="col-lg-4"></div>
	 </div>

            <?php $this->endWidget();?>
       
   
</div>
<div class="col-lg-1"></div>
        </div>
    </div>
</div>