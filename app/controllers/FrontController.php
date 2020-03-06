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

	

	 
}