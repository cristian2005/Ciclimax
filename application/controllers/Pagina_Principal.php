<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina_Principal extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('plantilla/header');
		$this->load->view('Pagina_Principal');
		$this->load->view('plantilla/footer');
	}
}
