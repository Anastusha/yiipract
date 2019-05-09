<?php

namespace app\controllers;

class NhlController extends \yii\web\Controller
{
    public function actionCreate()
    {
        return $this->render('create');
    }

    public function actionDelete()
    {
        return $this->render('delete');
    }

    public function actionEdit()
    {
        return $this->render('edit');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionNew()
    {
        return $this->render('new');
    }

    public function actionShow()
    {
        return $this->render('show');
    }

    public function actionUpdate()
    {
        return $this->render('update');
    }

}