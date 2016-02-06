<?php 
namespace icaro\modules\services\models;

/**
* 
*/
class servicesDEBIAN implements servicesINTERFACE
{
	public function show()
	{
		$console = explode( '[', shell_exec( 'service --status-all' ) );
		
		$dataSet = array();

		foreach ($console as $key => $value) 
		{
			if ( trim( $value ) != '' )
			{
				$value = explode(']', $value);
				$servicesMODEL = new servicesMODEL;
				$servicesMODEL->name = trim( $value[1] ) ;
				if( trim( $value[0] ) == '+' ){
					$servicesMODEL->status = 'runing'; 
				}else{
					$servicesMODEL->status = 'stoped'; 
				}		
				$dataSet[] = $servicesMODEL;
			}	
		}
		return $dataSet;
	}

	public function stop($serviceName){
		$console = shell_exec( 'sudo service apache2 stop' ) ;
		echo '<pre>';
		var_dump( $console );
	}
}