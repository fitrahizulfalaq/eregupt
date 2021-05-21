<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		//Load librarynya dulu
		$this->load->library('form_validation');
		//Atur validasinya
		$this->form_validation->set_rules('nama', 'nama', 'min_length[3]|max_length[50]');

		//Pesan yang ditampilkan
		$this->form_validation->set_message('min_length', '{field} Setidaknya  minimal {param} karakter.');
		$this->form_validation->set_message('max_length', '{field} Seharusnya maksimal {param} karakter.');
		$this->form_validation->set_message('is_unique', 'Data sudah ada');
		//Tampilan pesan error
		$this->form_validation->set_error_delimiters('<span class="badge badge-danger">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$data['menu'] = "Form Pendaftaran";
			$this->templateadmin->load('templateadmin','daftar/tambah',$data);
	    } else {
        $post = $this->input->post(null, TRUE);	                        

        //CEK GAMBAR
        $config['upload_path']          = 'assets/dist/img/foto-daftar/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 5000;
        $config['file_name']            = strtoupper($post['judul']);

				$this->load->library('upload', $config);
				if (@$_FILES['foto']['name'] != null) {						
						$this->upload->initialize($config);
				  	if ($this->upload->do_upload('foto')) {
				  	 	$post['foto'] = $this->upload->data('file_name');
	        	} else {
							$pesan = $this->upload->display_errors();
							$this->session->set_flashdata('danger',$pesan);
							redirect('daftar/tambah');
		        }			    	  	 	
				}

				//CEK GAMBAR
        $config2['upload_path']          = 'assets/dist/img/file-daftar/';
        $config2['allowed_types']        = 'doc|docx|pdf|ppt|pptx';
        $config2['max_size']             = 6000;
        $config2['file_name']            = strtoupper($post['judul']);

				$upload_2 = $this->load->library('upload', $config2);
				if (@$_FILES['file']['name'] != null) {
						$this->upload->initialize($config2);
				  	if ($this->upload->do_upload('file')) {
				  	 	$post['file'] = $this->upload->data('file_name');
	        	} else {
							$pesan = $this->upload->display_errors();
							$this->session->set_flashdata('danger',$pesan);
							redirect('daftar/tambah');
		        }
		    }				
			 
				$this->daftar_m->simpan($post);
	    	if ($this->db->affected_rows() > 0) {
	    		$this->session->set_flashdata('success','Berhasil Di Publish');
	    	}	  	 	
	      redirect('daftar');	        	
	    }
	}


		
}

