<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessController;
use yii\web\Controller;
// use app\models\FormularioForm;
use app\models\FormularioForm AS ModelsFormularioForm;

class SitioController extends Controller
{
    public function actionInicio(){
        
        $model= new ModelsFormularioForm;
        $valorRespuesta = null;

        if($model->load(Yii::$app->request->post())&& $model->validate()){

            $valorRespuesta=("El resultado es= ".$model->valora+$model->valorb);

        }

        return $this->render('inicio',['mensaje'=>$valorRespuesta, 'model'=>$model]);
    }


}

?>