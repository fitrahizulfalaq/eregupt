<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function perizinan()
	{
		$data['menu'] = "Jadwal Perizinan";
		$this->templateadmin->load('templateadmin','table/perizinan/jadwal',$data);
	}
		
}

