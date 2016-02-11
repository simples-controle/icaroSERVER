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

?>


<div class="row">
	<div class="col-md-3">
		<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"> 
				<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> 
				CPU
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

	<div class="col-md-3">
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
		</div>
		<div class="panel-footer">
		</div>
		</div>
	</div>
</div>
