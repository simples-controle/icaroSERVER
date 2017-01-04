<?php
$this->title = 'System infos';
?>
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"> 
						<span class="glyphicon glyphicon-info" aria-hidden="true"></span> 
						Basic infos
					</h3>
				</div>
				<div class="panel-body">
					
					
					<ul class="list-group">
					    <li class="list-group-item">
					    	<b>Hostname</b>  <?=$model->hostname()?>
					    </li>
					    <li class="list-group-item">
					    	<b>Operating System</b> - <?=$model->operatingSystem()?>
					    </li>
					    <li class="list-group-item">
							<b>Kernel Release</b> - <?=$model->kernelRelease()?>
					    </li>
					    <li class="list-group-item">
					    	<b>Kernel Version</b> - <?=$model->kernelVersion()?>
					    </li>
					   
					   

					</ul>
					
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"> 
						<span class="glyphicon glyphicon-th-large" aria-hidden="true"></span> 
						Hardware Platform
					</h3>
				</div>
				<div class="panel-body">
					
					
					<ul class="list-group">
					    
					    <li class="list-group-item">
					    	<b>Manufacturer Name</b> - <?=$model->manufacturerName()?>
					    </li>
					   						    <li class="list-group-item">
					    	<b>Hard Plataform</b> - <?=$model->hardwarePlataform()?>
					    </li>
					   	
					   	<li class="list-group-item">
					    	<b>CPU Name</b> - <?=$model->cpuName()?>
					    </li>

					    <li class="list-group-item">
					    	<b>MONTHERBOAD Name</b> - <?=$model->motherboardName()?>
					    </li>
					   

					</ul>
					
				</div>
			</div>
		</div>	
	</div>	