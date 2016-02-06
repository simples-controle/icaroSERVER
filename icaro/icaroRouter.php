<?php 

namespace icaro;

/**
* Icaro Server Object
*/
class icaroRouter
{
  
  private $module;
  private $controller;
  private $method;

  public function run($command)
  {
    try {
      
      $act = explode('.', $command);

      $this->module     = $act[0];
      $this->controller = $act[1];
      $this->method     = $act[2];

      $controller = 'icaro\\modules\\'.$this->module . '\\' . $this->controller . 'Controller';
      $method = $this->method;


      $moduleController = new $controller;

      $moduleController->template = 'main';
      $moduleController->viewPath = 'icaro\modules\\'.$this->module . '\\views\\'.$this->controller;

     
      $moduleController->$method();


    } catch (Exception $e) {
      throw($e);
      
    }
  }



}
?>