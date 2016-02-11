<?php
$this->title = 'Show Services';
?>
<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"> <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Services</h3>
			</div>
			<div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<th>Service</th>
							<th>Status</th>
							<th width="120px;">Actions</th>
						</tr>	
					</thead>    
					<tbody>
						<?php 
						foreach ($listServices as $model) {
							?>

								<tr>
									<td><?=$model->name?></td>
									<td><div class="label label-<?php if($model->status == 'runing'){echo 'success';}else{echo 'danger';}?>"><?=$model->status?></div></td>
									<td>
										
										<?php if( $model->status == 'stoped' ):?>
											<a  href="?act=services.services.start&service=<?=$model->name?>" class="btn btn-success">
												<span class="glyphicon glyphicon-play"></span>
											</a>
										<?php endif ?>

										<?php if( $model->status == 'runing' ):?>
											<a href="?act=services.services.stop&service=<?=$model->name?>" class="btn btn-danger">
												<span class="glyphicon glyphicon-stop"></span>
											</a>

											<a href="?act=services.services.restart&service=<?=$model->name?>" class="btn btn-warning">
												<span class="glyphicon glyphicon-refresh"></span>
											</a>
										<?php endif ?>

									</td>
									
								</tr>
							<?php
						}
						?>
					</tbody>
				</table>
			</div>
			<div class="panel-footer">
			
			
			</div>
		</div>