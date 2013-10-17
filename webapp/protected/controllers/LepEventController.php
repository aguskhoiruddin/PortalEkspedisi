<?php

class LepEventController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'LepEvent'),
		));
	}

	public function actionCreate() {
		$model = new LepEvent;


		if (isset($_POST['LepEvent'])) {
			$model->setAttributes($_POST['LepEvent']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->event_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'LepEvent');


		if (isset($_POST['LepEvent'])) {
			$model->setAttributes($_POST['LepEvent']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->event_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'LepEvent')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('LepEvent');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new LepEvent('search');
		$model->unsetAttributes();

		if (isset($_GET['LepEvent']))
			$model->setAttributes($_GET['LepEvent']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}