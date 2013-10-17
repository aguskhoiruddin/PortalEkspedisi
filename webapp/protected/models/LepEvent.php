<?php

Yii::import('application.models._base.BaseLepEvent');

class LepEvent extends BaseLepEvent
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}