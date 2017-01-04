<?php
use Khill\Lavacharts\Lavacharts;

$this->title = 'Show All Proccess';

$lava = new Lavacharts;

$cpuDataTable = $lava->DataTable();
$cpuDataTable->addNumberColumn('cpu');
$cpuDataTable->addRow( array($cpuUsage) );
$lava->GaugeChart('cpuUsage', $cpuDataTable, [
	'greenFrom'   => 0,
    'greenTo'     => 79,
    'yellowFrom'   => 80,
    'yellowTo'     => 89,
    'redFrom'   => 90,
    'redTo'     => 100,

]);

$memTotal = intval( round($memTotal/1024,0) );
$memFree = intval( round($memFree/1024,0) );

$memDataTable = $lava->DataTable();

$memDataTable->addNumberColumn('mem');
$memDataTable->addRow( array($memTotal - $memFree) );
$lava->GaugeChart('memUsage', $memDataTable, [
	'yellowFrom'   => $memTotal-256,
    'yellowTo'     => $memTotal -128,
    'redFrom'   => $memTotal-128,
    'redTo'     => $memTotal,
    'min'		=> 0,
    'max'		=> $memTotal,


]);

	

$memDataTable = $lava->DataTable();
$memDataTable->addStringColumn('hour');
$memDataTable->addNumberColumn('mem');

$memDataTable->addRow( array(date('H:i:s'), $memTotal - $memFree) );

$lava->LineChart('memUsageHour', $memDataTable, [
    'title' => 'Mem Usage x time'
]);

?>


<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"> 
				<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> 
				CPU <?=$system->cpuName()?>
			</h3>
		</div>
		<div class="panel-body">
			<?php echo $lava->render('GaugeChart', 'cpuUsage', 'cpuUsage-placehold', ['width'=>256, 'height'=>256]); ?>
			<div id="cpuUsage-placehold"></div>
		</div>
		<div class="panel-footer">
		</div>
		</div>
	</div>

	<div class="col-md-12">
		<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"> 
				<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> 
				RAM
			</h3>
		</div>
		<div class="panel-body">
			<?php echo $lava->render('GaugeChart', 'memUsage', 'memUsage-placehold', ['width'=>256, 'height'=>256]); ?>
			<div id="memUsage-placehold"></div>

			<?php echo $lava->render('LineChart', 'memUsageHour', 'memUsageHour-placehold', ['width'=>1000, 'height'=>256]); ?>
			<div id="memUsageHour-placehold"></div>

		</div>
		<div class="panel-footer">
		</div>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"> 
				<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> 
				Proccess
			</h3>
		</div>
		<div class="panel-body">
			<table class="table">
	<thead>
		<tr>
			<th>User</th>
			<th>PID</th>
			<th>Cmd</th>
			<th>% CPU</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		foreach ($proccess as $model) {
			?>
			<tr>
				<td><?=$model->user?></td>
				<td><?=$model->pid?></td>
				<td><?=$model->command?></td>
				<td><?=$model->cpuUsage?></td>
				
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
	</div>

	
</div>

<script>
	

	window.onload = function() {
	  
		setInterval(function(){
		  	$.getJSON('?act=services.proccess.memUsage', function (dataTableJson) {
				lava.loadData('memUsage', dataTableJson, function (chart) {
					//console.log(chart);
				});
			});
	  	},2000);

	  	setInterval(function(){
		  	$.getJSON('?act=services.proccess.memUsageHour', function (dataTableJson) {
				lava.loadData('memUsageHour', dataTableJson, function (chart) {
					console.log(dataTableJson);
				});
			});
	  	},2000);




	  	
	};

	

</script>