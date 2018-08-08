<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/mainhome'); ?>
<div class="container no-padding"> 
	<div class="col-sm-12 active-reg" style="margin-top:10px; margin-bottom:49px;">
    	<br /><br />
		<?php
            if(Yii::app()->user->isSuperAdmin){?>
                <div id="admin">
			<?php $this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Navegación',
			));
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'operations'),
			));
			$this->endWidget();?>
    </div>
           <?php }?>
	<div id="content">
               
		<?php echo $content; ?>
	</div><!-- content -->
       <div class="span-5 last">
	
</div> 
</div>
</div>
<?php $this->endContent(); ?>