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



	public function getCategory()
	{
		 $this->db->query('SELECT * FROM category');

		 $this->db->execute();
		 return $this->db->fetchAll();
	}

	public function add()
	{
		 
	}

	public function edite()
	{
		 
	}

	public function delete()
	{
		 
	}

	
}