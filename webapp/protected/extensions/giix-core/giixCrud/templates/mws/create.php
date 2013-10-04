<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php
echo "<?php\n
\$this->breadcrumbs = array(
	\$model->label(2) => array('index'),
	Yii::t('app', 'Create'),
);\n?>";
?>

<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><?php echo '<?php'; ?> echo GxHtml::encode($model->label()); ?></span>
    </div>
    <div class="mws-panel-body no-padding">
    	<?php echo "<?php\n"; ?>
		$this->renderPartial('_form', array(
				'model' => $model));
		<?php echo '?>'; ?>
    </div>    	
</div>