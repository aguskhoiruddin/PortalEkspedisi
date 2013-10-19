<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('category_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->category_id), array('view', 'id' => $data->category_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('parent_id')); ?>:
	<?php echo GxHtml::encode($data->parent_id); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('title')); ?>:
	<?php echo GxHtml::encode($data->title); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('seo_title')); ?>:
	<?php echo GxHtml::encode($data->seo_title); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('status')); ?>:
	<?php echo GxHtml::encode($data->status); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('path')); ?>:
	<?php echo GxHtml::encode($data->path); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('path_url')); ?>:
	<?php echo GxHtml::encode($data->path_url); ?>
	<br />

</div>