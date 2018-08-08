<?php 
header("Access-Control-Allow-Origin: *");
class ServerController extends CController {
	public function actionRecoveryPw()
    {
    	 $r=array(
                  'success'=>false,
                  'data'=>"",
                  'message'=>"",
          );
        $my_array = array();
    	$model = Yii::app()->user->um->getNewCrugeLogon('pwdrec');
         if (isset($_REQUEST['username_r'])) {  
            if ($_REQUEST['username_r']!="") {
                $usuario = Yii::app()->user->um->loadUser(trim($_REQUEST['username_r']),true);
                if ($usuario) {
                    $newPwd = CrugeUtil::passwordGenerator();
                    Yii::app()->user->um->changePassword($usuario, $newPwd);
                    Yii::app()->crugemailer->sendPasswordTo($usuario, $newPwd);
                    Yii::app()->user->um->save($usuario);
                    $r['success']=true;   
                    $r['message']="Una nueva clave ha sido enviada a su correo";  
                }else{
                   $r['message']="No se ha podido recuperar la contraseña, los datos ingresados no son correctos,Intente nuevamente";  
                }
            }else{
              $r['message']="E-mail no puede ser vacio";  
            }
        }
        echo CJSON::encode($r);
        return $r;
    }
}

?>