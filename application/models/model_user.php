<?php

/**
 * 
 */
class Model_user extends CI_Model
{
	public function all_mahasiswa(){
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->join('fakultas','fakultas.id_fakultas = mahasiswa.id_fakultas');
		$this->db->join('prodi','prodi.id_prodi = mahasiswa.id_prodi');
		$this->db->join('agama','agama.id_agama = mahasiswa.id_agama');
		$query=$this->db->get();
		return $query->result();
	}

	public function get_mahasiswa($where)
	{
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->join('fakultas','fakultas.id_fakultas = mahasiswa.id_fakultas');
		$this->db->join('prodi','prodi.id_prodi = mahasiswa.id_prodi');
		$this->db->join('agama','agama.id_agama = mahasiswa.id_agama');
		$this->db->where(array('id_mahasiswa' => $where));
		$query=$this->db->get();
		return $query->result();
	}

	public function get_agama(){
		$query = $this->db->query('SELECT * FROM agama');
		return $query->result();
	}

	public function get_prodi(){
		$query = $this->db->query('SELECT * FROM prodi');
		return $query->result();
	}

	public function get_fakultas(){
		$query = $this->db->query('SELECT * FROM fakultas');
		return $query->result();
	}
	
	public function update($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function hapus($where){
		$this->db->where($where);
		$this->db->delete('mahasiswa');
	}

	public function tambah_data($data,$table){
		$this->db->insert($table,$data);
	}

	
}
?>