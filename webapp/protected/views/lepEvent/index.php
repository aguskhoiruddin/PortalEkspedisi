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
					<th><?php echo Yii::t('strings','Title');?></th>
					<th><?php echo Yii::t('strings','Description');?></th>
					<th><?php echo Yii::t('strings','Date');?></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php
					if (empty($_GET["res_id"])) 
						$lepEvent = LepEvent::model()->findAll();
					else
						$lepEvent=LepEvent::model()->findAll(array(
							'condition'=>'res_id=:res_id',
							'params'=>array(':res_id'=> $_GET["res_id"]),
						));
						
					foreach($lepEvent as $m){
						$res = LepResource::model()->findByAttributes(array("res_id"=>$m->res_id));
						echo "<tr>
							<td>".$res->title."</td>
							<td style='text-align:center'>".$m->title."</td>
							<td style='text-align:center'>".substr(Yii::t('strings',$m->event),0,100)."</td>
							<td style='text-align:center'>".$m->date."</td>
							<td style='text-align:center'>
								<a href='".Yii::app()->request->baseUrl."/lepEvent/update/".$m->event_id."' class='btn btn-primary'>
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
