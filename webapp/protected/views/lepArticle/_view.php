<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('article_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->article_id), array('view', 'id' => $data->article_id)); ?>
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
	<?php echo GxHtml::encode($data->getAttributeLabel('content')); ?>:
	<?php echo GxHtml::encode($data->content); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('status')); ?>:
	<?php echo GxHtml::encode($data->status); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('created_at')); ?>:
	<?php echo GxHtml::encode($data->created_at); ?>
	<br />

</div>