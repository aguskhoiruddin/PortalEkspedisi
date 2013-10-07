<?php Yii::app()->language='fr'; ?>
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
		<span><i class="icon-table"></i><?php echo Yii::t('strings','Company');?></span>
	</div>
	<div class="mws-panel-body no-padding">
		<table class="mws-datatable-fn mws-table">
			<thead>
				<tr>
					<th><?php echo Yii::t('strings','Company Name');?></th>
					<th><?php echo Yii::t('strings','Owner Name');?></th>
					<th><?php echo Yii::t('strings','Type');?></th>
					<th><?php echo Yii::t('strings','Address');?></th>
					<th><?php echo Yii::t('strings','City');?></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php
					$lepResource = LepResource::model()->findAll();
					foreach($lepResource as $m){
						$cat = lepCategory::model()->findByAttributes(array("category_id"=>$m->category_id));
						echo "<tr>
							<td>".$m->title."</td>
							<td style='text-align:center'>".$m->owner_name."</td>
							<td style='text-align:center'>".Yii::t('strings',$cat->title)."</td>
							<td style='text-align:center'>".$m->address."</td>
							<td style='text-align:center'>".$m->city."</td>
							<td style='text-align:center'>
								<a href='".Yii::app()->request->baseUrl."/index.php/lepResource/update/".$m->res_id."' class='btn btn-primary'>
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
