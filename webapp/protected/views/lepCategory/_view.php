<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('category_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->category_id), array('view', 'id' => $data->category_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('parent_id')); ?>:
	<?php echo GxHtml::encode($data->parent_id); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('order_num')); ?>:
	<?php echo GxHtml::encode($data->order_num); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('title')); ?>:
	<?php echo GxHtml::encode($data->title); ?>
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
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('parents')); ?>:
	<?php echo GxHtml::encode($data->parents); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('description')); ?>:
	<?php echo GxHtml::encode($data->description); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('meta_keyword')); ?>:
	<?php echo GxHtml::encode($data->meta_keyword); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('seo_title')); ?>:
	<?php echo GxHtml::encode($data->seo_title); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('has_child')); ?>:
	<?php echo GxHtml::encode($data->has_child); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('num_res')); ?>:
	<?php echo GxHtml::encode($data->num_res); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('created_at')); ?>:
	<?php echo GxHtml::encode($data->created_at); ?>
	<br />
	*/ ?>

</div>