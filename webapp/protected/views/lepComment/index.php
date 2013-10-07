<?php Yii::app()->language='fr'; ?>
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
		<span><i class="icon-table"></i><?php echo Yii::t('strings','Comment');?></span>
	</div>
	<div class="mws-panel-body no-padding">
		<table class="mws-datatable-fn mws-table">
			<thead>
				<tr>
					<th><?php echo Yii::t('strings','Subject');?></th>
					<th><?php echo Yii::t('strings','User');?></th>
					<th><?php echo Yii::t('strings','Company');?></th>
					<th><?php echo Yii::t('strings','Coment');?></th>
					<th><?php echo Yii::t('strings','Reting');?></th>
					<th><?php echo Yii::t('strings','Date');?></th>
					<th><?php echo Yii::t('strings','Approve');?></th>
					<th><?php echo Yii::t('strings','Delete');?></th>
				</tr>
			</thead>
			<tbody>
				<?php
					$lepComment = LepComment::model()->findAll();
					foreach($lepComment as $m){
						$usr = LepUser::model()->findByAttributes(array("user_id"=>$m->user_id));
						$res = LepResource::model()->findByAttributes(array("res_id"=>$m->res_id));
						echo "<tr>
							<td>".$m->subject."</td>
							<td style='text-align:center'>".$usr->username."</td>
							<td style='text-align:center'>".$res->title."</td>
							<td style='text-align:center'>".$m->comment."</td>
							<td style='text-align:center'>".$m->rating."</td>
							<td style='text-align:center'>".$m->created_at."</td>
							<td style='text-align:center'>
								<a href='".Yii::app()->request->baseUrl."/index.php/lepComment/update/".$m->comment_id."' class='btn btn-primary'>
									".Yii::t('strings','Approve')."
								</a>
							</td>
							<td style='text-align:center'>
								<a href='".Yii::app()->request->baseUrl."/index.php/lepComment/update/".$m->comment_id."' class='btn btn-danger'>
									".Yii::t('strings',"Delete")."
								</a>
							</td>
						</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
</div>
