<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('res_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->res_id), array('view', 'id' => $data->res_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('category_id')); ?>:
	<?php echo GxHtml::encode($data->category_id); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('title')); ?>:
	<?php echo GxHtml::encode($data->title); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('status')); ?>:
	<?php echo GxHtml::encode($data->status); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('description')); ?>:
	<?php echo GxHtml::encode($data->description); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('url')); ?>:
	<?php echo GxHtml::encode($data->url); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('owner_name')); ?>:
	<?php echo GxHtml::encode($data->owner_name); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('email')); ?>:
	<?php echo GxHtml::encode($data->email); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('hits')); ?>:
	<?php echo GxHtml::encode($data->hits); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('created_at')); ?>:
	<?php echo GxHtml::encode($data->created_at); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('submit_code')); ?>:
	<?php echo GxHtml::encode($data->submit_code); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('address')); ?>:
	<?php echo GxHtml::encode($data->address); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('city')); ?>:
	<?php echo GxHtml::encode($data->city); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('state')); ?>:
	<?php echo GxHtml::encode($data->state); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('zip')); ?>:
	<?php echo GxHtml::encode($data->zip); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('country')); ?>:
	<?php echo GxHtml::encode($data->country); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('last_update')); ?>:
	<?php echo GxHtml::encode($data->last_update); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('featured')); ?>:
	<?php echo GxHtml::encode($data->featured); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('featured_expired')); ?>:
	<?php echo GxHtml::encode($data->featured_expired); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('seo_title')); ?>:
	<?php echo GxHtml::encode($data->seo_title); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tag')); ?>:
	<?php echo GxHtml::encode($data->tag); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('user_id')); ?>:
	<?php echo GxHtml::encode($data->user_id); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ar_number_votes')); ?>:
	<?php echo GxHtml::encode($data->ar_number_votes); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ar_total_points')); ?>:
	<?php echo GxHtml::encode($data->ar_total_points); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ar_dec_avg')); ?>:
	<?php echo GxHtml::encode($data->ar_dec_avg); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ar_whole_avg')); ?>:
	<?php echo GxHtml::encode($data->ar_whole_avg); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ss_googlepr')); ?>:
	<?php echo GxHtml::encode($data->ss_googlepr); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ss_alexarank')); ?>:
	<?php echo GxHtml::encode($data->ss_alexarank); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ss_google_indexed')); ?>:
	<?php echo GxHtml::encode($data->ss_google_indexed); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ss_yahoo_indexed')); ?>:
	<?php echo GxHtml::encode($data->ss_yahoo_indexed); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ss_msn_indexed')); ?>:
	<?php echo GxHtml::encode($data->ss_msn_indexed); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ss_google_linkback')); ?>:
	<?php echo GxHtml::encode($data->ss_google_linkback); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ss_yahoo_linkback')); ?>:
	<?php echo GxHtml::encode($data->ss_yahoo_linkback); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ss_last_update')); ?>:
	<?php echo GxHtml::encode($data->ss_last_update); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('vote')); ?>:
	<?php echo GxHtml::encode($data->vote); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('reciprocal_url')); ?>:
	<?php echo GxHtml::encode($data->reciprocal_url); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('last_checked_online')); ?>:
	<?php echo GxHtml::encode($data->last_checked_online); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('last_checked_reciprocal')); ?>:
	<?php echo GxHtml::encode($data->last_checked_reciprocal); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('online')); ?>:
	<?php echo GxHtml::encode($data->online); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('reciprocal')); ?>:
	<?php echo GxHtml::encode($data->reciprocal); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('phone')); ?>:
	<?php echo GxHtml::encode($data->phone); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fax')); ?>:
	<?php echo GxHtml::encode($data->fax); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('logo')); ?>:
	<?php echo GxHtml::encode($data->logo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('suspended')); ?>:
	<?php echo GxHtml::encode($data->suspended); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('suspended_reason')); ?>:
	<?php echo GxHtml::encode($data->suspended_reason); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('listing_type')); ?>:
	<?php echo GxHtml::encode($data->listing_type); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('phone2')); ?>:
	<?php echo GxHtml::encode($data->phone2); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('phone3')); ?>:
	<?php echo GxHtml::encode($data->phone3); ?>
	<br />
	*/ ?>

</div>