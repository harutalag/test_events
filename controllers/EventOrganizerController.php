<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\EventOrganizer;

class EventOrganizerController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $models = EventOrganizer::find()->all();
        return $this->render('index',[
            "models" =>$models
        ]);
    }

}
