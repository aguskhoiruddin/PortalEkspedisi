<?php

class LepPromoController extends GxController {


	public function actionView($id) {
		$this->layout = '//layouts/mws-admin/main';
		$this->render('view', array(
			'model' => $this->loadModel($id, 'LepPromo'),
		));
	}

	public function actionCreate() {
		$this->layout = '//layouts/mws-admin/main';
		$model = new LepPromo;


		if (isset($_POST['LepPromo'])) {
			$model->setAttributes($_POST['LepPromo']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->promo_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$this->layout = '//layouts/mws-admin/main';
		$model = $this->loadModel($id, 'LepPromo');


		if (isset($_POST['LepPromo'])) {
			$model->setAttributes($_POST['LepPromo']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->promo_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'LepPromo')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$this->layout = '//layouts/mws-admin/main';
		$dataProvider = new CActiveDataProvider('LepPromo');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new LepPromo('search');
		$model->unsetAttributes();

		if (isset($_GET['LepPromo']))
			$model->setAttributes($_GET['LepPromo']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}