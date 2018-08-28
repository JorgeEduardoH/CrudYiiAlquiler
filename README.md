###Descripcion
es un crud basico y login realizado en php con el framework yii 1.1, la extencion cruge para yii,con la base de datos mysql, 
para el control de roles y usuarios se encuentra las tablas con el prefijo cruge_

Realizado con la arquitectura mvc que se  encuentra en

/protected/

    vistas 
    /protected/views
    controladores 
    /protected/controllers
     modelos 
    /protected/models

###intalacion 

####1 crear base de datos 

 importar  estructura de base "alquilerautos"
 
    ``` /BD.sql```


####2 configurar base de datos por defecto : (usuario ="root"; password = "")

 ir a ```/protected/config/main.php```

 array bd en archivo 
```
  'db'=>array(
	 	'connectionString' => 'mysql:host=localhost;dbname=alquilerautos',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
	 	'charset' => 'utf8',
		)
  ```
####3 crear permisos de escritura para las carpetas 

    *   ``` /protected/runtime```

    * ``` /assets```

ejemplo de linux 

   - estando en /protected
   ```
      $ sudo chmod -R 0777 runtime
   ```
   - estando en la raiz del proyecto /
     ```
      $ sudo chmod -R 0777 assets
```
####4 correr en navegador

ejemplo en local

link login 

http://localhost/alquiler/cruge/ui/login

    * accesos  
     ```user : admin```

     ```password : admin```

link home 

http://localhost/alquiler/site/index
