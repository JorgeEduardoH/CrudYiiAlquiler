<?php
Yii::import('application.extensions.phpmailer.JPhpMailer');
use Yii\data\pagination;
 
class SiteController extends Controller
{
	
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
                    
		);
	}
	
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'

		$this->layout='mainhome';
		$this->render('index');
	}
	
	public function actionCuenta()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		if(Yii::app()->user->checkAccess('vendedor'))
		{
			//Ir a calificaciones
			$this->redirect(Yii::app()->request->baseUrl.'/alquiler/admin');
		}
		else
			$this->redirect(Yii::app()->request->baseUrl.'/cliente/admin');
		 
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$mail = new JPhpMailer;
                //$mail->IsSMTP();
               // $mail->Host = 'mail.premioamwaydeperiodismoambiental.com';
                //$mail->SMTPAuth = true;
                //$mail->Port = '25'; 
                // $mail->SMTPSecure = 'tsl';
                //$mail->Mailer = "smtp"; 
                //$mail->Username = 'contacto@premioamwaydeperiodismoambiental.com';
                //$mail->Password = 'gSR^u?LK0b7[';


				//Usamos el SetFrom para decirle al script quien envia el correo
				//$mail->SetFrom("contacto@premioamwaydeperiodismoambiental.com", " PREMIO AMWAY");
				 
				//Usamos el AddReplyTo para decirle al script a quien tiene que responder el correo
				$mail->AddReplyTo("contacto@premioamwaydeperiodismoambiental.com","PREMIO AMWAY ");
				 
			
                $mail->SetFrom($model->email, 'Contacto Premio amway XX');
                $mail->SetFrom("jorgeeduardohernandez@mwonline.com.co", 'Contacto Premio amway XX');
                
                $mail->Subject = $model->subject;
                $mail->AltBody = 'Contacto Premio amway XX';
                $mail->CharSet = 'utf-8';
                $mail->MsgHTML('<h1>Contacto Premio amway XX </h1>

				<p>
				DE : '.$model->email.'

				</p>
				<p>
				Nombre :'.$model->name.'

				</p>
				<p>
				Mensaje :'.$model->body.'

				</p>
                	');
                //$mail->AddAddress('lprada@kreab.com', 'contacto');
                $mail->AddAddress('contacto@premioamwaydeperiodismoambiental.com', 'contacto');
                
                if ($mail->Send()) {
                   Yii::app()->user->setFlash('contact','¡Gracias por contactarnos! Reponderemos tu mensaje a la mayor brevedad posible.');
                }else{
                     Yii::app()->user->setFlash('contact','UPS! hubo un error en el envio de su correo!');
                }

				// $name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				// $subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				// $headers="From: $name <{$model->email}>\r\n".
				// 	"Reply-To: {$model->email}\r\n".
				// 	"MIME-Version: 1.0\r\n".
				// 	"Content-Type: text/plain; charset=UTF-8";

				// mail("lprada@kreab.com",$subject,$model->body,$headers);
				
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
            $this->redirect('/cruge/ui/login');
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}