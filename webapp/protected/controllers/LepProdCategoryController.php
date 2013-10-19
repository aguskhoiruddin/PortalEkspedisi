<?php

class LepProdCategoryController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'LepProdCategory'),
		));
	}

	public function actionCreate() {
		$model = new LepProdCategory;


		if (isset($_POST['LepProdCategory'])) {
			$model->setAttributes($_POST['LepProdCategory']);

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
		$model = $this->loadModel($id, 'LepProdCategory');


		if (isset($_POST['LepProdCategory'])) {
			$model->setAttributes($_POST['LepProdCategory']);

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
			$this->loadModel($id, 'LepProdCategory')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('LepProdCategory');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new LepProdCategory('search');
		$model->unsetAttributes();

		if (isset($_GET['LepProdCategory']))
			$model->setAttributes($_GET['LepProdCategory']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}