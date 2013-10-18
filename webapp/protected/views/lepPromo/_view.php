<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('promo_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->promo_id), array('view', 'id' => $data->promo_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('res_id')); ?>:
	<?php echo GxHtml::encode($data->res_id); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('user_id')); ?>:
	<?php echo GxHtml::encode($data->user_id); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('promo')); ?>:
	<?php echo GxHtml::encode($data->promo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('status')); ?>:
	<?php echo GxHtml::encode($data->status); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('created_at')); ?>:
	<?php echo GxHtml::encode($data->created_at); ?>
	<br />

</div>