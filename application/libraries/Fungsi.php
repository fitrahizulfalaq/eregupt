<?php 

class Fungsi {

	protected $ci;
	
	function __construct()
	{
		$this->ci =& get_instance();
	}

	function user_login() {
		$this->ci->load->model('user_m');
		$userid = $this->ci->session->userdata('id');
		$query = $this->ci->user_m->get($userid)->row();
		return $query;
	}

	function tipe_user($tipe = null) {
		if ($tipe != null) {
			$tipe_user = $tipe;
		} else {
			$tipe_user = $this->ci->session->userdata('tipe_user');			
		}
		$this->ci->db->from('tb_tipe_user');
		$this->ci->db->where('id',$tipe_user);
		$query = $this->ci->db->get();
		return $query;
	}

	function setting($kode) {
		$this->ci->db->from('setting');
		$this->ci->db->where('kode',$kode);
		$query = $this->ci->db->get();
		return $query;
	}

	function pilihan($tabel) {		
		$query = $this->ci->db->get($tabel);
		return $query;
	}

	function pilihan_selected($tabel,$id) {		
		$this->ci->db->from($tabel);
		$this->ci->db->where('id',$id);
		$query = $this->ci->db->get();
		return $query;
	}

	function pilihan_advanced($tabel,$kode,$id) {		
		$this->ci->db->where($kode,$id);
		$query = $this->ci->db->get($tabel);
		return $query;
	}

	function pilihan_advanced_limit($tabel,$kode,$id,$limit,$dari,$urutkan,$berdasarkan) {		
		$this->ci->db->where($kode,$id);
		$this->ci->db->order_by($berdasarkan, $urutkan);
		$query = $this->ci->db->get($tabel,$limit,$dari);
		return $query;
	}

	function pilihan_aritmatika($tabel,$kode,$id,$perintah,$kolom) {		
		$this->ci->db->$perintah($kolom);
		$this->ci->db->where($kode,$id);
		$query = $this->ci->db->get($tabel)->row();
		return $query;
	}

	function pilihan_aritmatika_advanced($tabel,$kode,$id,$perintah,$kolom,$kode2,$kondisi) {		
		$this->ci->db->$perintah($kolom);
		$this->ci->db->where($kode,$id);
		$this->ci->db->where($kode2,$kondisi);
		$query = $this->ci->db->get($tabel)->row();
		return $query;
	}

	function progress_add($user_id,$pelatihan_id,$materi_id,$deskripsi,$skor) {		
		$params['user_id'] =  $user_id;	  
	  	$params['pelatihan_id'] =  $pelatihan_id;	  
	  	$params['materi_id'] =  $materi_id;
	  	$params['deskripsi'] =  $deskripsi;
	  	$params['skor'] =  $skor;
	  	$params['created'] =  date("Y:m:d:h:i:sa");
		$this->ci->db->insert('tb_progress',$params);		
	}

	function progress_selected($user_id,$pelatihan_id,$materi_id) {		
		$this->ci->db->where('user_id',$user_id);
		$this->ci->db->where('pelatihan_id',$pelatihan_id);
		$this->ci->db->where('materi_id',$materi_id);
		$query = $this->ci->db->get("tb_progress");
		return $query;
	}

}

?>