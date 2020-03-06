<?
namespace app\models;
use app\vendor\core\DB;
/**
 * 
 */
class CategoryModels  
{
	private $db;
	function __construct()
	{
		$this->db = DB::getInstance(); 
	}

	public function getArticleIndex()
	{
		
			
			$this->db->query("SELECT * FROM article ORDER BY id DESC LIMIT 10");
			$this->db->execute();
			return $this->db->fetchAll();

	}

	public function getArticleByCategory($title_en)
	{ 
		$this->db->query('SELECT * FROM  article WHERE article.id 
		 IN(SELECT postbindarticle.id_article FROM postbindarticle  WHERE postbindarticle.id_category IN(SELECT id FROM category WHERE category.title_en = :title_en))
		  ORDER BY  id DESC LIMIT 10');
		$this->db->bindValStr(':title_en',$title_en['alias']);
		$this->db->exec();
		return $this->db->fetchAll();
	 
	}

	public function getMenu()
	{
		 $this->db->query('SELECT * FROM category');

		 $this->db->execute();
		 return $this->db->fetchAll();
	}
}