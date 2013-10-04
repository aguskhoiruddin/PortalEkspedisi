<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->res_id)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->res_id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'res_id',
'category_id',
'title',
'status',
'description',
'url',
'owner_name',
'email',
'hits',
'created_at',
'submit_code',
'address',
'city',
'state',
'zip',
'country',
'last_update',
'featured',
'featured_expired',
'seo_title',
'tag',
'user_id',
'ar_number_votes',
'ar_total_points',
'ar_dec_avg',
'ar_whole_avg',
'ss_googlepr',
'ss_alexarank',
'ss_google_indexed',
'ss_yahoo_indexed',
'ss_msn_indexed',
'ss_google_linkback',
'ss_yahoo_linkback',
'ss_last_update',
'vote',
'reciprocal_url',
'last_checked_online',
'last_checked_reciprocal',
'online',
'reciprocal',
'phone',
'fax',
'logo',
'suspended',
'suspended_reason',
'listing_type',
'phone2',
'phone3',
	),
)); ?>

