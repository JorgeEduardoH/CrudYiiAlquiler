<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$Criteria = new CDbCriteria();
$Criteria->condition = "tipo ='NOTICIAS'";
$Criteria->limit=1;
$Criteria->order="fecha DESC";
$contenido = Contenido::model()->findAll($Criteria);
// $contenido = Contenido::model()->findAll(array('limit'=>'4','order'=>' fecha DESC'));

?>
<h1>heloo  2</h1>