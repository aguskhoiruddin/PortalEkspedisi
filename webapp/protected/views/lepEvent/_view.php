<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('event_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->event_id), array('view', 'id' => $data->event_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('res_id')); ?>:
	<?php echo GxHtml::encode($data->res_id); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('user_id')); ?>:
	<?php echo GxHtml::encode($data->user_id); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('title')); ?>:
	<?php echo GxHtml::encode($data->title); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('event')); ?>:
	<?php echo GxHtml::encode($data->event); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('date')); ?>:
	<?php echo GxHtml::encode($data->date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('status')); ?>:
	<?php echo GxHtml::encode($data->status); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('created_at')); ?>:
	<?php echo GxHtml::encode($data->created_at); ?>
	<br />
	*/ ?>

</div>