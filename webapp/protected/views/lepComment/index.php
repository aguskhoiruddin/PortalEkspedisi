<div class="mws-panel grid_8">
	<div class="mws-panel-header">
		<span><i class="icon-table"></i> Data Table with Numbered Pagination</span>
	</div>
	<div class="mws-panel-body no-padding">
		<table class="mws-datatable-fn mws-table">
			<thead>
				<tr>
					<th>Subject</th>
					<th>User</th>
					<th>Company</th>
					<th>Comment</th>
					<th>Rating</th>
					<th>Date</th>
					<th>Approve</th>
					<th>Delete</th>
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
									Approve
								</a>
							</td>
							<td style='text-align:center'>
								<a href='".Yii::app()->request->baseUrl."/index.php/lepComment/update/".$m->comment_id."' class='btn btn-danger'>
									Delete
								</a>
							</td>
						</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
</div>
