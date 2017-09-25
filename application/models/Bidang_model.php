<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bidang_model extends CI_Model {

	public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	

	public function bidangJson()
	{
		$this->datatables->from("bidang_keahlian");
		return $this->datatables->generate();
	}
}

/* End of file Bidang_model.php */
/* Location: ./application/models/Bidang_model.php */

 ?>