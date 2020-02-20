<?
namespace app\controllers;
use app\vendor\core\loader;
use app\vendor\core\View;
defined('_access') or exit;

use app\libs\templates;
 
 
class FrontController  
{
	public $classLoad;
	public $view;
	public $routeParam;
	function __construct($routeParam)
	{
		 $this->classLoad = loader::getInstance();
		 $this->view = view::getInstance();
		 $this->routeParam = $routeParam; 
	}


	 public function template($layouts,$subView = '')
		 {
		 	 
			// echo $path = (empty($subView)) ? $layouts.'/'.$layouts.'View' : $subView.'/'.$layouts.'View';
		 
		 	// $this->view->TopMenu = $categoryMod->getMenu(1); 
		 	// $this->view->asideMenu = $categoryMod->getMenu(0);
	 	   // $this->view->view = $this->view->render($path);
	 	  	$this->view->load('index');
	 	  	 
		 }
}