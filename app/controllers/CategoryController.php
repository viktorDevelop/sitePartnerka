<?
namespace app\controllers;
use app\controllers\FrontController;
use app\libs\TemplateBlog;
defined('_access') or exit;

/**
 * 
 */
class CategoryController extends FrontController
{
	
	 
//http://site.ru/  //http://site.ru/category/    выводит список всех категорий с пагинацией

	public function actionIndex()
	{
		 
		 $categoryModels = $this->classLoad->models("categoryModels");
		 $template = new TemplateBlog;
		 $template->dataView = $categoryModels->getArticleIndex();
		 $template->render();
		
	}
//http://site.ru/category/php
	public function actionListArticle()
	{
		 
	 	 
		 $categoryModels = $this->classLoad->models("categoryModels");
		 $template = new TemplateBlog;
		 $template->dataView = $categoryModels->getArticleByCategory($this->routeParam);
		 $template->render();
		 
	}

 

//http://site.ru/admin/category/add

	public function actionAdd($value='')
	{
		 
	}
//http://site.ru/admin/category/edite

	public function actionEdit()
	{
		 
	}
//http://site.ru/admin/category/delete
	public function actionDelete()
	{ 
		 
	}

 
 
}

 

 

 