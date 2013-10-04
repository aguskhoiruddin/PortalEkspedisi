<?php

class LepCommentController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'LepComment'),
		));
	}

	public function actionCreate() {
		$model = new LepComment;


		if (isset($_POST['LepComment'])) {
			$model->setAttributes($_POST['LepComment']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->comment_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'LepComment');


		if (isset($_POST['LepComment'])) {
			$model->setAttributes($_POST['LepComment']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->comment_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'LepComment')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$this->layout = '//layouts/mws-admin/main';
		$dataProvider = new CActiveDataProvider('LepComment');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new LepComment('search');
		$model->unsetAttributes();

		if (isset($_GET['LepComment']))
			$model->setAttributes($_GET['LepComment']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}