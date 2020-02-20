<?
namespace app\controllers;
use app\controllers\FrontController;
defined('_access') or exit;

/**
 * 
 */
class CategoryController extends FrontController
{
	
	 
//http://site.ru/  //http://site.ru/category/    выводит список всех категорий с пагинацией

	public function actionIndex($value='')
	{
		 $this->template('blog','index');
	}
//http://site.ru/category/php
	public function actionListArticle($value='')
	{
		 
	}

//http://site.ru/admin/category/php
	// public function actionListArticle($value='')
	// {
	// 	# code...
	// }

//http://site.ru/admin/category/add

	public function actionAdd($value='')
	{
		# code...
	}
//http://site.ru/admin/category/edite

	public function actionEdit($value='')
	{
		 
	}
//http://site.ru/admin/category/delete
	public function actionDelete($value='')
	{ 
		 
	}
}