<div class="mws-panel grid_8">
	<div class="mws-panel-header">
		<span><i class="icon-table"></i> Data Table with Numbered Pagination</span>
	</div>
	<div class="mws-panel-body no-padding">
		<table class="mws-datatable-fn mws-table">
			<thead>
				<tr>
					<th>Company Name</th>
					<th>Owner Name</th>
					<th>Type</th>
					<th>Address</th>
					<th>City</th>
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
							<td style='text-align:center'>".$cat->title."</td>
							<td style='text-align:center'>".$m->address."</td>
							<td style='text-align:center'>".$m->city."</td>
							<td style='text-align:center'>
								<a href='".Yii::app()->request->baseUrl."/index.php/lepResource/update/".$m->res_id."' class='btn btn-primary'>
									Update
								</a>
							</td>
						</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
</div>
