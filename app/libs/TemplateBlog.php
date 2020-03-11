<?
namespace app\libs;

use app\vendor\core\View;
use app\vendor\core\loader; 

class TemplateBlog  
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

		$this->view->load('blog/index.php'); 
	}


	private function getDataView()
	{


		 $this->view->arResult = $this->dataView;
		 $this->view->error = "Данная страница была удалена или  у вас нет прав";
		 
		return 	$this->view->render('/blog/pages/'.$this->pages.'_view.php');
	}

	private function getDataMenuAside()
		{
			 $this->view->arResult =  $this->classLoad->models('categoryModels')->getMenu();
			  

			return 	$this->view->render('/blog/blocks/asideMenu.php');
 
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
 
