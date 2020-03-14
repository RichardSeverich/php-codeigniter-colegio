<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->helper('form');
		$this->load->view('vista_pagina_principal');
		//$this->load->view('vista_menu_principal_primer_incremento');
		//$this->load->view('vista_menu_principal_segundo_incremento');

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
