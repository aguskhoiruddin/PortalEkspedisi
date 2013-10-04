<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('comment_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->comment_id), array('view', 'id' => $data->comment_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('res_id')); ?>:
	<?php echo GxHtml::encode($data->res_id); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('user_id')); ?>:
	<?php echo GxHtml::encode($data->user_id); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('comment')); ?>:
	<?php echo GxHtml::encode($data->comment); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('status')); ?>:
	<?php echo GxHtml::encode($data->status); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('created_at')); ?>:
	<?php echo GxHtml::encode($data->created_at); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('subject')); ?>:
	<?php echo GxHtml::encode($data->subject); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('rating')); ?>:
	<?php echo GxHtml::encode($data->rating); ?>
	<br />
	*/ ?>

</div>