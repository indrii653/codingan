<?php 
 
class M_blog extends CI_Model{
	function tampil_data($limit, $start){
		$this->db->select('*');
		$this->db->from('blog');
		$this->db->limit($limit, $start);
		return $this->db->get();
	}

	public function jumlah_data()
    {
        $this->db->select('id');
        $this->db->from('blog');
        return $this->db->get()->num_rows();
    }

	function data_detail($id){
		return $this->db->get_where('blog', array('id'=>$id));
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
 
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
 
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}