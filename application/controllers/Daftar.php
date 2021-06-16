<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['menu'] = "Form Pendaftaran";
		$this->templateadmin->load('templateadmin','daftar/tambah',$data);
		redirect('daftar/culinarybc/');
	}

	public function culinarybc()
	{
		$data['menu'] = "Form Pendaftaran";
		$this->templateadmin->load('templateadmin','daftar/culinarybc',$data);
	}
		
}

