<?php

namespace App\Controllers;
use App\Models\SiteModel;
//use CodeIgniter\API\ResponseTrait;

class Home extends BaseController
{
	public function __construct()
	{
		// Loading db instance

		$db = db_connect();
		$this->SiteModel = new SiteModel($db);
		$request = service('request');

	}

	public function index()
	{
		return 'Access Denied!';
	}

	public function template()
	{

		$angularPost = $this->request->getRawInput();
		foreach( $angularPost as $key => $val) {
			$parameters = json_decode($key, true);
		}


		//$data = $this->db->query("CALL get_template(?)",$parameters['template_name'])->getRow();

	//return $this->response->setJSON($this->request->getRawInput());
  	//$template_name	= $this->request->getPost('template_name');



	 $data = [
			'template_name'		=> $parameters['template_name'],
			'template'		=> '<p>Text Here</p>',

		];

		$result = $this->SiteModel->add($data);
		if($result) {
			return "New user is registered successfully.";
		} else {
			return "Something went wrong";
		}
// return $this->response->setJSON($parameters);
	}
}
