<?
namespace app\libs;

use app\vendor\core\View;
use app\vendor\core\loader; 

class TemplateBlog  
{
	private $view;
	public $dataView = [];
	private $classLoad;

	function __construct()
	{
		 $this->view = view::getInstance(); 
		  $this->classLoad = loader::getInstance();
	}



	public function render()
	{
		$this->view->asideMenu =  $this->getDataMenuAside();
		$this->view->view =  $this->getDataView();
		 $this->view->load('blog/index.php'); 
	}


	private function getDataView()
	{


		 $this->view->arResult = $this->dataView;
		 $this->view->error = "Данная страница была удалена или  у вас нет прав";
		 
		return 	$this->view->render('/blog/pages/index_view.php');
	}

	private function getDataMenuAside()
		{
			 $this->view->arResult =  $this->classLoad->models('categoryModels')->getMenu();
			  

			return 	$this->view->render('/blog/blocks/asideMenu.php');
 
		}

}
 
