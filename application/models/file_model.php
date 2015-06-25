<?php
class File_model extends CI_Model {
	
	private $tbl_cf= 'cf';
	private $tbl_ga= 'ga';
	private $tbl_gl= 'gl';
	private $tbl_ir= 'ir';
	
	function __construct(){
		parent::__construct();
	}
	
	function list_all(){
		$this->db->order_by('id','asc');
		return $this->db->get($tbl);
	}

	function count_cf(){
		return $this->db->select('count(*) as sum_cf',false)
         ->from('cf')
         ->get()
         ->result();
	}
	function insert_cf($datas){
		return $this->db->insert($this->tbl_cf, $datas);
	}

	function count_ga(){
		return $this->db->select('count(*) as sum_ga',false)
         ->from('ga')
         ->get()
         ->result();
	}
	function insert_ga($datas){
		return $this->db->insert($this->tbl_ga, $datas);
	}

	function count_gl(){
		return $this->db->select('count(*) as sum_gl',false)
         ->from('gl')
         ->get()
         ->result();
	}

	function insert_gl($datas){
		return $this->db->insert($this->tbl_gl, $datas);
	}

	function count_ir(){
		return $this->db->select('count(*) as sum_ir',false)
         ->from('ir')
         ->get()
         ->result();
	}

	function insert_ir($datas){
		return $this->db->insert($this->tbl_ir, $datas);
	}
}
?>