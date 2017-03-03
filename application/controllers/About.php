
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data = array(
			'nama' => " Novia Dwi Hardhini" ,
			'alamat' => "Jln. Simpang Remujung 03 Malang" ,
			'notlp' => " 085745943609" ,
			'email' => " noviadhinih@gmail.com" ,
			'nim' => " 1541180017" ,
			 );
		$this->load->view('about',$data);
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */
?>