<?php

/**
 * This is the model base class for the table "lep_resource".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "LepResource".
 *
 * Columns in table "lep_resource" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $res_id
 * @property string $category_id
 * @property string $title
 * @property string $status
 * @property string $description
 * @property string $url
 * @property string $owner_name
 * @property string $email
 * @property integer $hits
 * @property string $created_at
 * @property string $submit_code
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $country
 * @property string $last_update
 * @property string $featured
 * @property string $featured_expired
 * @property string $seo_title
 * @property string $tag
 * @property integer $user_id
 * @property integer $ar_number_votes
 * @property integer $ar_total_points
 * @property double $ar_dec_avg
 * @property integer $ar_whole_avg
 * @property string $ss_googlepr
 * @property string $ss_alexarank
 * @property string $ss_google_indexed
 * @property string $ss_yahoo_indexed
 * @property string $ss_msn_indexed
 * @property string $ss_google_linkback
 * @property string $ss_yahoo_linkback
 * @property string $ss_last_update
 * @property integer $vote
 * @property string $reciprocal_url
 * @property string $last_checked_online
 * @property string $last_checked_reciprocal
 * @property string $online
 * @property string $reciprocal
 * @property string $phone
 * @property string $fax
 * @property string $logo
 * @property string $suspended
 * @property string $suspended_reason
 * @property string $listing_type
 * @property string $phone2
 * @property string $phone3
 *
 */
abstract class BaseLepResource extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'lep_resource';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'LepResource|LepResources', $n);
	}

	public static function representingColumn() {
		return 'category_id';
	}

	public function rules() {
		return array(
			array('category_id, description, url, owner_name, tag, ss_googlepr, ss_alexarank, ss_google_indexed, ss_yahoo_indexed, ss_msn_indexed, ss_google_linkback, ss_yahoo_linkback, ss_last_update', 'required'),
			array('hits, user_id, ar_number_votes, ar_total_points, ar_whole_avg, vote', 'numerical', 'integerOnly'=>true),
			array('ar_dec_avg', 'numerical'),
			array('category_id, title, url, owner_name, email, submit_code, address, city, state, zip, country, seo_title, ss_googlepr, ss_alexarank, ss_google_indexed, ss_yahoo_indexed, ss_msn_indexed, ss_google_linkback, ss_yahoo_linkback, reciprocal_url, phone, fax, logo, suspended_reason, listing_type, phone2, phone3', 'length', 'max'=>255),
			array('status, featured, online, reciprocal, suspended', 'length', 'max'=>1),
			array('created_at, last_update, featured_expired, ss_last_update, last_checked_online, last_checked_reciprocal', 'length', 'max'=>10),
			array('title, status, email, hits, created_at, submit_code, address, city, state, zip, country, last_update, featured, featured_expired, seo_title, user_id, ar_number_votes, ar_total_points, ar_dec_avg, ar_whole_avg, vote, reciprocal_url, last_checked_online, last_checked_reciprocal, online, reciprocal, phone, fax, logo, suspended, suspended_reason, listing_type, phone2, phone3', 'default', 'setOnEmpty' => true, 'value' => null),
			array('res_id, category_id, title, status, description, url, owner_name, email, hits, created_at, submit_code, address, city, state, zip, country, last_update, featured, featured_expired, seo_title, tag, user_id, ar_number_votes, ar_total_points, ar_dec_avg, ar_whole_avg, ss_googlepr, ss_alexarank, ss_google_indexed, ss_yahoo_indexed, ss_msn_indexed, ss_google_linkback, ss_yahoo_linkback, ss_last_update, vote, reciprocal_url, last_checked_online, last_checked_reciprocal, online, reciprocal, phone, fax, logo, suspended, suspended_reason, listing_type, phone2, phone3', 'safe', 'on'=>'search'),
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
			'res_id' => Yii::t('app', 'Res'),
			'category_id' => Yii::t('app', 'Category'),
			'title' => Yii::t('app', 'Title'),
			'status' => Yii::t('app', 'Status'),
			'description' => Yii::t('app', 'Description'),
			'url' => Yii::t('app', 'Url'),
			'owner_name' => Yii::t('app', 'Owner Name'),
			'email' => Yii::t('app', 'Email'),
			'hits' => Yii::t('app', 'Hits'),
			'created_at' => Yii::t('app', 'Created At'),
			'submit_code' => Yii::t('app', 'Submit Code'),
			'address' => Yii::t('app', 'Address'),
			'city' => Yii::t('app', 'City'),
			'state' => Yii::t('app', 'State'),
			'zip' => Yii::t('app', 'Zip'),
			'country' => Yii::t('app', 'Country'),
			'last_update' => Yii::t('app', 'Last Update'),
			'featured' => Yii::t('app', 'Featured'),
			'featured_expired' => Yii::t('app', 'Featured Expired'),
			'seo_title' => Yii::t('app', 'Seo Title'),
			'tag' => Yii::t('app', 'Tag'),
			'user_id' => Yii::t('app', 'User'),
			'ar_number_votes' => Yii::t('app', 'Ar Number Votes'),
			'ar_total_points' => Yii::t('app', 'Ar Total Points'),
			'ar_dec_avg' => Yii::t('app', 'Ar Dec Avg'),
			'ar_whole_avg' => Yii::t('app', 'Ar Whole Avg'),
			'ss_googlepr' => Yii::t('app', 'Ss Googlepr'),
			'ss_alexarank' => Yii::t('app', 'Ss Alexarank'),
			'ss_google_indexed' => Yii::t('app', 'Ss Google Indexed'),
			'ss_yahoo_indexed' => Yii::t('app', 'Ss Yahoo Indexed'),
			'ss_msn_indexed' => Yii::t('app', 'Ss Msn Indexed'),
			'ss_google_linkback' => Yii::t('app', 'Ss Google Linkback'),
			'ss_yahoo_linkback' => Yii::t('app', 'Ss Yahoo Linkback'),
			'ss_last_update' => Yii::t('app', 'Ss Last Update'),
			'vote' => Yii::t('app', 'Vote'),
			'reciprocal_url' => Yii::t('app', 'Reciprocal Url'),
			'last_checked_online' => Yii::t('app', 'Last Checked Online'),
			'last_checked_reciprocal' => Yii::t('app', 'Last Checked Reciprocal'),
			'online' => Yii::t('app', 'Online'),
			'reciprocal' => Yii::t('app', 'Reciprocal'),
			'phone' => Yii::t('app', 'Phone'),
			'fax' => Yii::t('app', 'Fax'),
			'logo' => Yii::t('app', 'Logo'),
			'suspended' => Yii::t('app', 'Suspended'),
			'suspended_reason' => Yii::t('app', 'Suspended Reason'),
			'listing_type' => Yii::t('app', 'Listing Type'),
			'phone2' => Yii::t('app', 'Phone2'),
			'phone3' => Yii::t('app', 'Phone3'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('res_id', $this->res_id);
		$criteria->compare('category_id', $this->category_id, true);
		$criteria->compare('title', $this->title, true);
		$criteria->compare('status', $this->status, true);
		$criteria->compare('description', $this->description, true);
		$criteria->compare('url', $this->url, true);
		$criteria->compare('owner_name', $this->owner_name, true);
		$criteria->compare('email', $this->email, true);
		$criteria->compare('hits', $this->hits);
		$criteria->compare('created_at', $this->created_at, true);
		$criteria->compare('submit_code', $this->submit_code, true);
		$criteria->compare('address', $this->address, true);
		$criteria->compare('city', $this->city, true);
		$criteria->compare('state', $this->state, true);
		$criteria->compare('zip', $this->zip, true);
		$criteria->compare('country', $this->country, true);
		$criteria->compare('last_update', $this->last_update, true);
		$criteria->compare('featured', $this->featured, true);
		$criteria->compare('featured_expired', $this->featured_expired, true);
		$criteria->compare('seo_title', $this->seo_title, true);
		$criteria->compare('tag', $this->tag, true);
		$criteria->compare('user_id', $this->user_id);
		$criteria->compare('ar_number_votes', $this->ar_number_votes);
		$criteria->compare('ar_total_points', $this->ar_total_points);
		$criteria->compare('ar_dec_avg', $this->ar_dec_avg);
		$criteria->compare('ar_whole_avg', $this->ar_whole_avg);
		$criteria->compare('ss_googlepr', $this->ss_googlepr, true);
		$criteria->compare('ss_alexarank', $this->ss_alexarank, true);
		$criteria->compare('ss_google_indexed', $this->ss_google_indexed, true);
		$criteria->compare('ss_yahoo_indexed', $this->ss_yahoo_indexed, true);
		$criteria->compare('ss_msn_indexed', $this->ss_msn_indexed, true);
		$criteria->compare('ss_google_linkback', $this->ss_google_linkback, true);
		$criteria->compare('ss_yahoo_linkback', $this->ss_yahoo_linkback, true);
		$criteria->compare('ss_last_update', $this->ss_last_update, true);
		$criteria->compare('vote', $this->vote);
		$criteria->compare('reciprocal_url', $this->reciprocal_url, true);
		$criteria->compare('last_checked_online', $this->last_checked_online, true);
		$criteria->compare('last_checked_reciprocal', $this->last_checked_reciprocal, true);
		$criteria->compare('online', $this->online, true);
		$criteria->compare('reciprocal', $this->reciprocal, true);
		$criteria->compare('phone', $this->phone, true);
		$criteria->compare('fax', $this->fax, true);
		$criteria->compare('logo', $this->logo, true);
		$criteria->compare('suspended', $this->suspended, true);
		$criteria->compare('suspended_reason', $this->suspended_reason, true);
		$criteria->compare('listing_type', $this->listing_type, true);
		$criteria->compare('phone2', $this->phone2, true);
		$criteria->compare('phone3', $this->phone3, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}