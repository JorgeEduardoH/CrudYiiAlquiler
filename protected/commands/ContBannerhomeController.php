<?php

class ContBannerhomeController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/main';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new ContBannerhome;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ContBannerhome']))
		{   

			$model->attributes=$_POST['ContBannerhome'];
			if($model->save())
			{
			
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ContBannerhome']))
		{
			$model->attributes=$_POST['ContBannerhome'];
			if($model->save())
			{
				$this->redirect(array('view','id'=>$model->id));
			}
		}
       
		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('ContBannerhome');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		//$model=new ContBannerhome('search2');
            //como solo es un banner le enviamos el id que  es 1 
		//  $model=  ContBannerhome::model()->findAll('id ='.1);

		$model=$this->loadModel(1);

		$instrucciones =new ContInstruccioneshome('search');
		$call=new ContCalltoactionhome('search');
		
		$destacados=new ContDestacadoshome('search');

		//$model->unsetAttributes();  // clear any default values
		$instrucciones->unsetAttributes();
		$call->unsetAttributes();
		$destacados->unsetAttributes();
	
		if(isset($_POST['ContBannerhome']))
		{
			$unique = date('Ymdhi');
			$model->attributes=$_POST['ContBannerhome'];
			
			$banner = CUploadedFile::getInstance($model,'imagenprincipal');
            $fondo = CUploadedFile::getInstance($model,'imagenfondo');

			
			if (is_object($fondo) && get_class($fondo)==='CUploadedFile' || ( is_object($banner) && get_class($banner)==='CUploadedFile' ))
			 {          
						$fileName1 = "{$unique}-{$banner}";
						$fileName2 = "{$unique}-{$fondo}";
						
						$model->imagenprincipal = $fileName1;
						$model->imagenfondo = $fileName2;
            }
			if($model->save())

			{
				if (is_object($fondo) && get_class($fondo)==='CUploadedFile' || ( is_object($banner) && get_class($banner)==='CUploadedFile' ))
			 {
                 $banner->saveAs(Yii::app()->basePath.'/../images/contentHome/'.$fileName1);
                 $fondo->saveAs(Yii::app()->basePath.'/../images/contentHome/'.$fileName2);
			 }
				$this->redirect(array('view','id'=>$model->id));
				
			}
		}

     $this->render('admin',array(
                    'model'=>$model,
                    'instrucciones'=>$instrucciones,
                    'destacados'=>$destacados,
                    'call'=>$call
                    

                ));

	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ContBannerhome the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ContBannerhome::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ContBannerhome $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='cont-bannerhome-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
