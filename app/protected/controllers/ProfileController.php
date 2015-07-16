<?php

class ProfileController extends Controller
{
    public $layout='column1';

    /**
     * Declares class-based actions.
     */
    public function actions()
    {
        return array();
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
    public function actionIndex()
    {
        $this->render('index');
    }
}
