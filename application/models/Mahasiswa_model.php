<?php
 // write your name and student id here
class Mahasiswa_model extends CI_model
{

	public function getAllMahasiswa()
	{
		//use query builder to get data table "mahasiswa"
		$query = $this->db->get('mahasiswa');
		return $query->result_array();
	}

	public function tambahDataMahasiswa()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"nim" => $this->input->post('nim', true),
			"email" => $this->input->post('email', true),
			"jurusan" => $this->input->post('jurusan', true),
		];

		//use query builder to insert $data to table "mahasiswa"
		$this->db->insert('mahasiswa', $data);
	}

	public function hapusDataMahasiswa($id)
	{
		//use query builder to delete data based on id 
		$this->db->where('id', $id);
		$this->db->delete('mahasiswa');
	}

	public function getMahasiswaById($id)
	{
		//get data mahasiswa based on id 
		$this->db->where('id', $id);
		$data = $this->db->get('mahasiswa');
		return $data->result_array(); ///not clear.. data null
	}

	public function ubahDataMahasiswa()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"nim" => $this->input->post('nim', true),
			"email" => $this->input->post('email', true),
			"jurusan" => $this->input->post('jurusan', true),
		];
		//use query builder class to update data mahasiswa based on id
		$this->db->where('id', $data['id']);
		$this->db->update('mahasiswa', $data);
	}

	public function cariDataMahasiswa()
	{
		$keyword = $this->input->post('keyword', true);
		//use query builder class to search data mahasiswa based on keyword
		//"nama" or "jurusan" or "nim" or "email"
		$this->db->where('nama', $keyword);
		$this->db->or_where('email', $keyword);
		$this->db->or_where('jurusan', $keyword);
		$this->db->or_where('nim', $keyword);

		//return data mahasiswa that has been searched
		$query = $this->db->get('mahasiswa');
		return $query->result_array();
		
	}
}
