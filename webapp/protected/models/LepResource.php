<?php

Yii::import('application.models._base.BaseLepResource');

class LepResource extends BaseLepResource
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}