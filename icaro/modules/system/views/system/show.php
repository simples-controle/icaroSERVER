<?php
$this->title = 'System infos';
?>
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"> 
						<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> 
						Basic infos
					</h3>
				</div>
				<div class="panel-body">
					
					
					<ul class="list-group">
					    <li class="list-group-item">
					    	<b>Hostname</b> - <?=$hostname?>
					    </li>
					    <li class="list-group-item">
					    	<b>Operating System</b> - <?=$operatingSystem?>
					    </li>
					    <li class="list-group-item">
							<b>Kernel Release</b> - <?=$kernelRelease?>
					    </li>
					    <li class="list-group-item">
					    	<b>Kernel Version</b> - <?=$kernelVersion?>
					    </li>
					     <li class="list-group-item">
					    	<b>Hard Plataform</b> - <?=$hardwarePlataform?>
					    </li>
					   
					</ul>
					
				</div>
			</div>
	</div>
</div>	