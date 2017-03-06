<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Data_model extends CI_Model
{
	var $table;
	function __construct(){
  		parent::__construct();
		//$this->db2 = $this->load->database('additional', TRUE);	
		//$this->db3 = $this->load->database('secondhouse', TRUE);	
	}
	
	function setTable($table){
		$this->table = $table;
	}
	
	function setWhere($getwhere){
		if(is_array($getwhere)){
			foreach($getwhere as $key=>$where){
				if($key=='findinset'){
					$this->db->where("1","1 AND FIND_IN_SET($where)",FALSE);
					continue;
				}
				if(is_array($where)){
					$this->db->where_in($key, $where);
				}else{
					$this->db->where($key,$where);
				}
			}
		}else{
			$this->db->where($getwhere);
		}
	}
	function setSelect($selectstr){
		$this->db->select($selectstr);
	}
	function setJoin($jointable,$joincondition,$jointype){
		$this->db->join($jointable, $joincondition,$jointype);
	}

	function addData($data,$table=''){
		$table = $table==''?$this->table:$table;
		if($data){
			if($this->db->insert($table,$data)){
				return $this->db->insert_id();
			}else{
				return false;
			};
			
		}else{
			return false;
		}
	}

	function editData($datawhere,$data,$table=''){
		$table = $table==''?$this->table:$table;
		if(!empty($datawhere))
		{
			$this->db->where($datawhere);
		}
		$this->db->update($table,$data);
		return $this->db->affected_rows();
	}
	
	function updateData($sql){
		$this->db->query($sql);
	}

	function delData($sql){
		$this->db->query($sql);
	}

	function getData($sql){
		$data=$this->db->query($sql)->result_array();
		return $data;
	}
	
	function getSingle($sql){
		$row = $this->db->query($sql)->row_array();
		return $row;
	}

	function getDataNum($getwhere='',$table=''){
		$table = $table==''?$this->table:$table;
		if($getwhere){
			$this->setWhere($getwhere);
		}
		return $this->db->count_all_results($table);
	}
	
	function setHits($id,$table=''){
		$table = $table==''?$this->table:$table;
		$this->db->where('id',$id);
		$this->db->set('hits', 'hits+1',FALSE);
		$this->db->set('realhits', 'realhits+1',FALSE);
		$this->db->update($table);
	}
	
	function listOrder($ids,$res,$order='',$table=''){
		$table = $table==''?$this->table:$table;
		$num = count($ids);
		$data = array();
		for($i=0;$i<$num;$i++){
			$data[] = array('id'=>$ids[$i],'listorder'=>$res[$i]);
		}
		$this->db->update_batch($table,$data,'id');
		
		if($num>0){
			$this->db->where_in('id',$ids);
			if($order){
				$this->db->order_by($order);
			}
			$data = $this->db->get($table)->result_array();
			return $data;
		}
		
		return array();
	}
	
	function addData2($data,$table=''){
		$table = $table==''?$this->table:$table;
		if($data){
			if($this->db2->insert($table,$data)){
				return $this->db2->insert_id();	
			}else{
				return false;
			};
			
		}else{
			return false;
		}
	}

	function editData2($datawhere,$data,$table=''){
		$table = $table==''?$this->table:$table;
		if(!empty($datawhere))
		{
			$this->db2->where($datawhere);
		}
		$this->db2->update($table,$data);
		return $this->db2->affected_rows();
	}
	
	function delData2($sql){
		$this->db2->query($sql);
	}

	function getData2($sql){
		$data=$this->db2->query($sql)->result_array();
		return $data;
	}
	
	function getSingle2($sql){
		$row = $this->db2->query($sql)->row_array();
		return $row;
	}
	function addData3($data,$table=''){
		$table = $table==''?$this->table:$table;
		if($data){
			if($this->db3->insert($table,$data)){
				return $this->db3->insert_id();
			}else{
				return false;
			};
		}else{
			return false;
		}
	}
	
	function getData3($sql){
		$data=$this->db3->query($sql)->result_array();
		return $data;
	}
	
	function getSingle3($sql){
		$row = $this->db3->query($sql)->row_array();
		return $row;
	}
	
	function editData3($datawhere,$data,$table=''){
		$table = $table==''?$this->table:$table;
		if(!empty($datawhere))
		{
			$this->db3->where($datawhere);
		}
		$this->db3->update($table,$data);
		return $this->db3->affected_rows();
	}

	function delData3($sql){
		$this->db3->query($sql);
	}
}