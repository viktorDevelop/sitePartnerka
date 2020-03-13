<?
namespace app\libs;

use app\vendor\core\View;
use app\vendor\core\loader; 

class TemplateAdmin  
{
	private $view;
	public $dataView = [];
	private $classLoad;
	private $pages = "index";

	function __construct()
	{
		 $this->view = view::getInstance(); 
		  $this->classLoad = loader::getInstance();
	}



	public function render()
	{
		$this->view->asideMenu =  $this->getDataMenuAside();
		$this->view->view =  $this->getDataView();
		$this->view->title = $this->getHead('title');
		$this->view->keyword = $this->getHead('keyword');
		$this->view->description = $this->getHead('description');

		$this->view->load('admin/index.php'); 
	}


	private function getDataView()
	{


		 $this->view->arResult = $this->dataView;
		 $this->view->error = "Данная страница была удалена или  у вас нет прав";
		 
		return 	$this->view->render('/admin/pages/'.$this->pages.'_view.php');
	}

	private function getDataMenuAside()
		{
			 
 
		}
	public function SetPages($value='')
	{
		 if (!empty($value)) {
		 		$this->pages = $value;
		 }
	}

	private function getHead($value)
	{
		 
	}

}
 
