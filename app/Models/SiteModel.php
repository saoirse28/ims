<?php
namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class SiteModel extends Model
{
  /*  protected $table = 'templates';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['template_name', 'text'];*/

    protected $db;
	public function __construct(ConnectionInterface &$db) {
		$this->db =& $db;
	}


  function add($data) {
		return $this->db
           ->table('templates')
           ->insert($data);
	}
}
