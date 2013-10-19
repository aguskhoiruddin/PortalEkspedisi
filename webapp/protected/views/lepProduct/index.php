<?php Yii::app()->language='fr'; ?>
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
		<span><i class="icon-table"></i><?php echo Yii::t('strings','Product');?></span>
	</div>
	<div class="mws-panel-body no-padding">
		<table class="mws-datatable-fn mws-table">
			<thead>
				<tr>
					<th><?php echo Yii::t('strings','Company Name');?></th>
					<th><?php echo Yii::t('strings','Product');?></th>
					<th><?php echo Yii::t('strings','Category');?></th>
					<th><?php echo Yii::t('strings','Description');?></th>
					<th><?php echo Yii::t('strings','Price');?></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php
					if (empty($_GET["res_id"])) 
						$lepProduct = LepProduct::model()->findAll();
					else
						$lepProduct=LepProduct::model()->findAll(array(
							'condition'=>'res_id=:res_id',
							'params'=>array(':res_id'=> $_GET["res_id"]),
						));
						
					foreach($lepProduct as $m){
						$res = LepResource::model()->findByAttributes(array("res_id"=>$m->res_id));
						$lepProdCategory = LepProdCategory::model()->findByAttributes(array("category_id"=>$m->prod_cat_id));
						echo "<tr>
							<td>".$res->title."</td>
							<td style='text-align:center'>".$m->title."</td>
							<td style='text-align:center'>".$lepProdCategory->title."</td>
							<td style='text-align:center'>".substr(Yii::t('strings',$m->description),0,100)."</td>
							<td style='text-align:center'>".$m->price."</td>
							<td style='text-align:center'>
								<a href='".Yii::app()->request->baseUrl."/lepProduct/update/".$m->product_id."' class='btn btn-primary'>
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
