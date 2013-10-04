<?php

/**
 * This is the model base class for the table "lep_user".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "LepUser".
 *
 * Columns in table "lep_user" available as properties of the model,
 * and there are no model relations.
 *
 * @property string $user_id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $status
 * @property string $code
 * @property string $created_at
 * @property string $first_name
 * @property string $last_name
 *
 */
abstract class BaseLepUser extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'lep_user';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'LepUser|LepUsers', $n);
	}

	public static function representingColumn() {
		return 'username';
	}

	public function rules() {
		return array(
			array('username, password, email, created_at', 'required'),
			array('username, password, email, first_name, last_name', 'length', 'max'=>255),
			array('status', 'length', 'max'=>1),
			array('code', 'length', 'max'=>6),
			array('created_at', 'length', 'max'=>10),
			array('status, code, first_name, last_name', 'default', 'setOnEmpty' => true, 'value' => null),
			array('user_id, username, password, email, status, code, created_at, first_name, last_name', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'user_id' => Yii::t('app', 'User'),
			'username' => Yii::t('app', 'Username'),
			'password' => Yii::t('app', 'Password'),
			'email' => Yii::t('app', 'Email'),
			'status' => Yii::t('app', 'Status'),
			'code' => Yii::t('app', 'Code'),
			'created_at' => Yii::t('app', 'Created At'),
			'first_name' => Yii::t('app', 'First Name'),
			'last_name' => Yii::t('app', 'Last Name'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('user_id', $this->user_id, true);
		$criteria->compare('username', $this->username, true);
		$criteria->compare('password', $this->password, true);
		$criteria->compare('email', $this->email, true);
		$criteria->compare('status', $this->status, true);
		$criteria->compare('code', $this->code, true);
		$criteria->compare('created_at', $this->created_at, true);
		$criteria->compare('first_name', $this->first_name, true);
		$criteria->compare('last_name', $this->last_name, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}