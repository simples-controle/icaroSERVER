<?php
?>
<div class="row">
	<div class="col-md-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">CPU</h3>
			</div>
			<div class="panel-body">
				Panel content
			</div>
			<div class="panel-footer">
			</div>
		</div>	
	</div>
	<div class="col-md-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">RAM</h3>
			</div>
			<div class="panel-body">
				Panel content
			</div>
			<div class="panel-footer">
			</div>
		</div>	
	</div>
	<div class="col-md-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">DISK I/O</h3>
			</div>
			<div class="panel-body">
				Panel content
			</div>
			<div class="panel-footer">
			</div>
		</div>	
	</div>
	<div class="col-md-6">
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
									<td></td>
									
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
	</div>
</div>

<div class="row">
	<div class="col-md-6">
	</div>	
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"> <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Cron</h3>
			</div>
			<div class="panel-body">
				Panel content
			</div>
			<div class="panel-footer">
			<button type="button" class="btn btn-default" aria-label="Left Align">
			  	<span class="glyphicon glyphicon-new" aria-hidden="true"></span> New Cron
			</button>
			<button type="button" class="btn btn-default" aria-label="Left Align">
			  	<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Manage Cron
			</button>

			</div>
		</div>	
	</div>
</div>