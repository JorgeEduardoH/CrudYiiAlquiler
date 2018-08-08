<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
        'aliases' => array(
        'booster' =>realpath(__DIR__ . '/../extensions/yiibooster'),
        'ext' =>realpath(__DIR__ . '/../extensions'),
    ),
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Alquiler ud ',
	'sourceLanguage' => 'es',
    'language'=>'es',

	// preloading 'log' component
	'preload'=>array('log','bootstrap'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
                'application.extensions.yiibooster.widgets.*',
                'application.modules.cruge.components.*',
                'application.modules.cruge.extensions.crugemailer.*',
                'application.extensions.yiifilemanager.*',
    'application.extensions.yiifilemanagerfilepicker.*', // <<--THIS
	),
        //'defaultController' => 's',
	'modules'=>array(
		'cruge'=>array(
                    'tableprefix'=>'cruge_',

                    // para que utilice a protected.modules.cruge.models.auth.CrugeAuthDefault.php
                    //
                    // en vez de 'default' pon 'authdemo' para que utilice el demo de autenticacion alterna
                    // para saber mas lee documentacion de la clase modules/cruge/models/auth/AlternateAuthDemo.php
                    //
                    'availableAuthMethods'=>array('default'),

                    'availableAuthModes'=>array('username','email'),

                                    // url base para los links de activacion de cuenta de usuario
                    'baseUrl'=>'http://www.domain.com/',

                     // NO OLVIDES PONER EN FALSE TRAS INSTALAR
                     'debug'=>false,
                     'rbacSetupEnabled'=>true,
                     'allowUserAlways'=>false,

                    // MIENTRAS INSTALAS..PONLO EN: false
                    // lee mas abajo respecto a 'Encriptando las claves'
                    //
                    'useEncryptedPassword' => false,

                    // Algoritmo de la función hash que deseas usar
                    // Los valores admitidos están en: http://www.php.net/manual/en/function.hash-algos.php
                    'hash' => 'md5',

                    // Estos tres atributos controlan la redirección del usuario. Solo serán son usados si no
                    // hay un filtro de sesion definido (el componente MiSesionCruge), es mejor usar un filtro.
                    //  lee en la wiki acerca de:
                                    //   "CONTROL AVANZADO DE SESIONES Y EVENTOS DE AUTENTICACION Y SESION"
                                    //
                    // ejemplo:
                    //      'afterLoginUrl'=>array('/site/welcome'),  ( !!! no olvidar el slash inicial / )
                    //      'afterLogoutUrl'=>array('/site/page','view'=>'about'),
                    //
                    'afterLoginUrl'=>array('/site/cuenta'),
                    'afterLogoutUrl'=>array('/site/index'),
                    'afterSessionExpiredUrl'=>array('/site/index'),

                    // manejo del layout con cruge.
                    //
                    'loginLayout'=>'//layouts/main',
                    'registrationLayout'=>'//layouts/main',
                    'activateAccountLayout'=>'//layouts/main',
                    'editProfileLayout'=>'//layouts/column2',
                    // en la siguiente puedes especificar el valor "ui" o "column2" para que use el layout
                    // de fabrica, es basico pero funcional.  si pones otro valor considera que cruge
                    // requerirá de un portlet para desplegar un menu con las opciones de administrador.
                    //
                    'generalUserManagementLayout'=>'ui',

                    // permite indicar un array con los nombres de campos personalizados, 
                    // incluyendo username y/o email para personalizar la respuesta de una consulta a: 
                    // $usuario->getUserDescription(); 
                    'userDescriptionFieldsArray'=>array('email'), 

                ),
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'amway',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			//'ipFilters'=>array('127.0.0.1','::1','190.147.152.250'),
		),
		/**/
	),

	// application components
	'components'=>array(

//                'bootstrap' => array(
//                    'class' => 'booster.components.Booster',
//                ),
//                'booster' => array(
//                    'class' => 'booster.components.Booster',a
//                ),
// 		 'booster' => array(
//     'class' => 'estensions .Booster',
// ),
	
		'bootstrap' => array(
            'class' => 'booster.components.Booster',
        ),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
                        'class' => 'application.modules.cruge.components.CrugeWebUser',
                        'loginUrl' => array('/cruge/ui/login'),
		),
                'authManager' => array(
                    'class' => 'application.modules.cruge.components.CrugeAuthManager',
                ),
                'crugemailer'=>array(
                    'class' => 'application.modules.cruge.components.CrugeMailer',
                    'mailfrom' => 'contacto@gmail.com',
                    'subjectprefix' => ' mipage - ',
                    'debug' => true,
                ),
                'format' => array(
                    'datetimeFormat'=>"d M, Y h:m:s a",
                ),
				'mail' => array(
					 'class' => 'ext.yii-mail.YiiMail',
					 'transportType' => 'php',
					 'transportOptions' => array(
					 'host' => 'mail.domain.com',
					  'username' => 'contacto@gmail.com',
					  'password' => 'xxxxxxx',
						 ), 
						  'viewPath' => 'application.views.mail',
					'logging' => true,
					'dryRun' => false
				),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
                        'urlFormat' => 'path',
                        'showScriptName' =>false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		//'db'=>array(
		//	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		//),
		// uncomment the following to use a MySQL database
		
	 'db'=>array(
	 	'connectionString' => 'mysql:host=localhost;dbname=alquilerautos',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
	 	'charset' => 'utf8',
		),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
		'listPerPage'=>10,
	),
	
);