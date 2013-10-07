<?php Yii::app()->language='fr'; ?>
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
		<span><i class="icon-table"></i><?php echo Yii::t('strings','Category');?></span>
	</div>
	<div class="mws-panel-body no-padding">
		<table class="mws-datatable-fn mws-table">
			<thead>
				<tr>
					<th><?php echo Yii::t('strings','Category');?></th>
					<th><?php echo Yii::t('strings','Description');?></th>
					<th><?php echo Yii::t('strings','Meta');?></th>
					<th><?php echo Yii::t('strings','SEO');?></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php
					$lepCategory = LepCategory::model()->findAll();
					foreach($lepCategory as $m){
						echo "<tr>
							<td>".Yii::t('strings',$m->title)."</td>
							<td style='text-align:center'>".Yii::t('strings',$m->description)."</td>
							<td style='text-align:center'>".Yii::t('strings',$m->meta_keyword)."</td>
							<td style='text-align:center'>".Yii::t('strings',$m->seo_title)."</td>
							<td style='text-align:center'>
								<a href='".Yii::app()->request->baseUrl."/index.php/lepCategory/update/".$m->category_id."' class='btn btn-primary'>
									".Yii::t('strings','Update')."
								</a>
							</td>
						</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
</div>
