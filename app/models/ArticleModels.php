<?
namespace app\models;

 use app\vendor\core\DB;
 
class ArticleModels  
{
	private $db;
	function __construct()
	{
		$this->db = DB::getInstance(); 
	}

	public function getArticleByTitle($title_en = '')
	{
		$this->db->query("SELECT * FROM article WHERE title_en = :title_en"); 
		 $this->db->bindValStr(':title_en',$title_en['alias']);
		$this->db->exec();
		return $this->db->FetchAll();
	}
}