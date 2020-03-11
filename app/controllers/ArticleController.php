<?
namespace app\controllers;
use app\controllers\FrontController;
use app\libs\TemplateBlog;
defined('_access') or exit;

/**
 * 
 */
class ArticleController extends FrontController
{
	
	 
//http://site.ru/article/ выводит список всех статей с пагинацией
	public function actionIndex($value='')
	{
		# code...
	}
//http://site.ru/article/php-title
	public function actionArticle()
	{
		//  $articleModels = $this->classLoad->models("articleModels");
		// $TemplateBlog = new TemplateBlog;

		//  $template->dataView = $articleModels->getArticleByTitle($this->routeParam);
		//  $template->render();

		  $categoryModels = $this->classLoad->models("ArticleModels");
		 $template = $this->classLoad->libs("TemplateBlog");
		 $template->dataView = $categoryModels->getArticleByTitle($this->routeParam);
		 $template->SetPages('article');
		 $template->render();
	}

//http://site.ru/admin/article/php
	public function actionListArticle($value='')
	{
		 
	}

//http://site.ru/admin/article/add

	public function actionAdd()
	{
		# code...
	}
//http://site.ru/admin/article/edite

	public function actionEdit()
	{
		 
	}
//http://site.ru/admin/article/delete
	public function actionDelete()
	{ 
		 
	}
}