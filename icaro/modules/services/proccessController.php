<?php
namespace icaro\modules\services;

use icaro\mvc\icaroController;
use icaro\modules\system\models\system;
use icaro\modules\services\models\services;
use icaro\modules\services\models\proccess;
use Khill\Lavacharts\Lavacharts;

class proccessController extends icaroController
{
	function show()
	{	
		$proccess = new proccess;
		$system = new system;

		$this->render('show', array(
							'system' => $system,
							'proccess' => $proccess->show(),
							'cpuUsage' => $proccess->cpuUsage(),
							'memTotal' => $proccess->memTotal(),
							'memFree' => $proccess->memFree()
							)
					);
	}

	public function memUsage()
	{

		$proccess = new proccess;
		$lava = new Lavacharts;

		$memTotal = intval( round($proccess->memTotal()/1024,0) );
		$memFree = intval( round($proccess->memFree()/1024,0) );
		$value = $memTotal - $memFree;

		$memDataTable = $lava->DataTable();
		$memDataTable->addNumberColumn('mem');
		$memDataTable->addRow( array( $value ) );

		echo $memDataTable->toJson();
	}


	public function memUsageHour()
	{

		session_start();

		$proccess = new proccess;
		$lava = new Lavacharts;

		$memTotal = intval( round($proccess->memTotal()/1024,0) );
		$memFree = intval( round($proccess->memFree()/1024,0) );
		$value = $memTotal - $memFree;
		
		//var_dump($_SESSION["_MA"]);

		if($_SESSION["_MA"] == ''){
			$memDataTable = $lava->DataTable();
			$memDataTable->addStringColumn('hour');
			$memDataTable->addNumberColumn('mem');
		}else{
			$memDataTable = $_SESSION["_MA"];
		}
		$memDataTable->addRow( array(date('H:i:s'), $value ) );
		
		$_SESSION["_MA"] =  $memDataTable;

		echo $memDataTable->toJson();
	}

	

}