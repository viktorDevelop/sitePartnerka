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

	public function getArticleIndex()
	{
		
			
			$this->db->query("SELECT * FROM article ORDER BY id DESC LIMIT 10");
			$this->db->execute();
			return $this->db->fetchAll();

	}

	public function getArticleByCategory($title_en)
	{ 
		$this->db->query("SELECT * FROM article WHERE id IN (SELECT id FROM category WHERE title_en = :title_en)");
		$this->db->bindValStr(':title_en',$title_en['alias']);
		$this->db->exec();
		return $this->db->fetchAll();
	 
	}
}