<?php 
namespace icaro\modules\services\models;

/*
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

	/*
	* 
	*/
	public function stop($serviceName){
		return shell_exec( 'service '.$serviceName.' stop' ) ;
	}

	/*
	* 
	*/
	public function start($serviceName){
		return shell_exec( 'service '.$serviceName.' start' ) ;
	}

	/*
	* 
	*/
	public function restart($serviceName){
		return shell_exec( 'service '.$serviceName.' restart' ) ;
	}
}