<?php Yii::app()->language='fr'; ?>
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
		<span><i class="icon-table"></i><?php echo Yii::t('strings','Promo');?></span>
	</div>
	<div class="mws-panel-body no-padding">
		<table class="mws-datatable-fn mws-table">
			<thead>
				<tr>
					<th><?php echo Yii::t('strings','Company Name');?></th>
					<th><?php echo Yii::t('strings','Promo');?></th>
                    <th></th>
				</tr>
			</thead>
			<tbody>
				<?php
					if (empty($_GET["res_id"])) 
						$lepPromo = LepPromo::model()->findAll();
					else
						$lepPromo = LepPromo::model()->findAll(array(
							'condition'=>'res_id=:res_id',
							'params'=>array(':res_id'=> $_GET["res_id"]),
						));
						
					foreach($lepPromo as $m){
						$res = LepResource::model()->findByAttributes(array("res_id"=>$m->res_id));
						echo "<tr>
							<td>".$res->title."</td>
							<td>".$m->promo."</td>
							<td style='text-align:center'>
								<a href='".Yii::app()->request->baseUrl."/lepPromo/update/".$m->promo_id."' class='btn btn-primary'>
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
