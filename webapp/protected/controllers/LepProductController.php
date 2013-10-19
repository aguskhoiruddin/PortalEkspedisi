<?php

class LepProductController extends GxController {


	public function actionView($id) {
		$this->layout = '//layouts/mws-admin/main';
		$this->render('view', array(
			'model' => $this->loadModel($id, 'LepProduct'),
		));
	}

	public function actionCreate() {
		$this->layout = '//layouts/mws-admin/main';
		$model = new LepProduct;


		if (isset($_POST['LepProduct'])) {
			$model->setAttributes($_POST['LepProduct']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->product_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$this->layout = '//layouts/mws-admin/main';
		$model = $this->loadModel($id, 'LepProduct');


		if (isset($_POST['LepProduct'])) {
			$model->setAttributes($_POST['LepProduct']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->product_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'LepProduct')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$this->layout = '//layouts/mws-admin/main';
		$dataProvider = new CActiveDataProvider('LepProduct');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new LepProduct('search');
		$model->unsetAttributes();

		if (isset($_GET['LepProduct']))
			$model->setAttributes($_GET['LepProduct']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}