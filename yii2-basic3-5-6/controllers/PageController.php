<?php

namespace app\controllers;
 use yii\web\Controller;
class PageController extends Controller
{
    public function afterAction()
    {
        return $this->renderContent('<h1>Heloo</h1>');
    }


}?>