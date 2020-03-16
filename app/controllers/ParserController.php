<?
namespace app\controllers;
use app\controllers\FrontController;
use app\libs\nokogiri;
defined('_access') or exit;


class ParserController extends FrontController
{
	
	 
//http://site.ru/parser/
	public function actionIndex($value='')
	{
		$html = file_get_contents('http://habrahabr.ru/');
		// echo $html;
		$saw = new nokogiri($html);

		$result = $saw->get('.nav-links')->toArray();


		echo "<pre>";
		print_r($result);

	 
	}
 
}