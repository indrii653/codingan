<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penghargaan extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();		
		$this->load->model('M_penghargaan');
		$this->load->helper('url');
 
	}
	
	public function index()
	{
		$data['penghargaan'] = $this->M_penghargaan->tampil_data()->result();
		$this->load->view('v_aboutheader');
		$this->load->view('v_penghargaan',$data);
		$this->load->view('footer');
	}
}
