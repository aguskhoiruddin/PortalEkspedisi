<?php

class LepArticleController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'LepArticle'),
		));
	}

	public function actionCreate() {
		$this->layout = '//layouts/mws-admin/main';
		$model = new LepArticle;


		if (isset($_POST['LepArticle'])) {
			$model->setAttributes($_POST['LepArticle']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->article_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$this->layout = '//layouts/mws-admin/main';
		$model = $this->loadModel($id, 'LepArticle');


		if (isset($_POST['LepArticle'])) {
			$model->setAttributes($_POST['LepArticle']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->article_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'LepArticle')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$this->layout = '//layouts/mws-admin/main';
		$dataProvider = new CActiveDataProvider('LepArticle');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new LepArticle('search');
		$model->unsetAttributes();

		if (isset($_GET['LepArticle']))
			$model->setAttributes($_GET['LepArticle']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}