<?php

class LepCategoryController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'LepCategory'),
		));
	}

	public function actionCreate() {
		$model = new LepCategory;


		if (isset($_POST['LepCategory'])) {
			$model->setAttributes($_POST['LepCategory']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->category_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$this->layout = '//layouts/mws-admin/main';
		$model = $this->loadModel($id, 'LepCategory');


		if (isset($_POST['LepCategory'])) {
			$model->setAttributes($_POST['LepCategory']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->category_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'LepCategory')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$this->layout = '//layouts/mws-admin/main';
		$dataProvider = new CActiveDataProvider('LepCategory');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new LepCategory('search');
		$model->unsetAttributes();

		if (isset($_GET['LepCategory']))
			$model->setAttributes($_GET['LepCategory']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}