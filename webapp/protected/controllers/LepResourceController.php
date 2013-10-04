<?php

class LepResourceController extends GxController {


	public function actionView($id) {
		$this->layout = '//layouts/mws-admin/main';
		$this->render('view', array(
			'model' => $this->loadModel($id, 'LepResource'),
		));
	}

	public function actionCreate() {
		$model = new LepResource;


		if (isset($_POST['LepResource'])) {
			$model->setAttributes($_POST['LepResource']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->res_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$this->layout = '//layouts/mws-admin/main';
		
		
		$model = $this->loadModel($id, 'LepResource');


		if (isset($_POST['LepResource'])) {
			$model->setAttributes($_POST['LepResource']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->res_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'LepResource')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$this->layout = '//layouts/mws-admin/main';
		$dataProvider = new CActiveDataProvider('LepResource');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new LepResource('search');
		$model->unsetAttributes();

		if (isset($_GET['LepResource']))
			$model->setAttributes($_GET['LepResource']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}