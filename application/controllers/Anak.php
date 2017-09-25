<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anak extends CI_Controller {

	public function index($idPegawai)
	{
		
		$this->load->model('pegawai_model');
		$data["anak_list"] = $this->pegawai_model->getAnakByPegawai($idPegawai);
		$this->load->view('anak',$data);	
	
	}

}

/* End of file Anak.php */
/* Location: ./application/controllers/Anak.php */
 ?>