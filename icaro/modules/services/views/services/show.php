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
							<th>Actions</th>
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
											<button type="button" class="btn btn-success">
												<span class="glyphicon glyphicon-play"></span>
											</button>
										<?php endif ?>


										<button type="button" class="btn btn-danger">
											<span class="glyphicon glyphicon-stop"></span>
										</button>


										<button type="button" class="btn btn-warning">
											<span class="glyphicon glyphicon-refresh"></span>
										</button>

									</td>
									
								</tr>
							<?php
						}
						?>
					</tbody>
				</table>
			</div>
			<div class="panel-footer">
			<button type="button" class="btn btn-default" aria-label="Left Align">
			  	<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Manager Services
			</button>
			</div>
		</div>