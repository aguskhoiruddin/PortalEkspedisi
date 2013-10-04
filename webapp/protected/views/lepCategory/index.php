<div class="mws-panel grid_8">
	<div class="mws-panel-header">
		<span><i class="icon-table"></i> Data Table with Numbered Pagination</span>
	</div>
	<div class="mws-panel-body no-padding">
		<table class="mws-datatable-fn mws-table">
			<thead>
				<tr>
					<th>Category</th>
					<th>Description</th>
					<th>Meta</th>
					<th>SEO</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php
					$lepCategory = LepCategory::model()->findAll();
					foreach($lepCategory as $m){
						echo "<tr>
							<td>".$m->title."</td>
							<td style='text-align:center'>".$m->description."</td>
							<td style='text-align:center'>".$m->meta_keyword."</td>
							<td style='text-align:center'>".$m->seo_title."</td>
							<td style='text-align:center'>
								<a href='".Yii::app()->request->baseUrl."/index.php/lepCategory/update/".$m->category_id."' class='btn btn-primary'>
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
