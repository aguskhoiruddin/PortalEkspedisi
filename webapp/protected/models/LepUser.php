<?php

Yii::import('application.models._base.BaseLepUser');

class LepUser extends BaseLepUser
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}