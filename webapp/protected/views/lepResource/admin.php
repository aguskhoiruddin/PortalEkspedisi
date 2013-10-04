<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('lep-resource-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage') . ' ' . GxHtml::encode($model->label(2)); ?></h1>

<p>
You may optionally enter a comparison operator (&lt;, &lt;=, &gt;, &gt;=, &lt;&gt; or =) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo GxHtml::link(Yii::t('app', 'Advanced Search'), '#', array('class' => 'search-button')); ?>
<div class="search-form">
<?php $this->renderPartial('_search', array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'lep-resource-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'res_id',
		'category_id',
		'title',
		'status',
		'description',
		'url',
		/*
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
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>