<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Autocomplete extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function search()
	{
		// tangkap variabel keyword dari URL
		$keyword = $this->input->get('term');

		// cari di database
		// $data = $this->db->from('log_dbranch')->like('branchName',$keyword)->get();	
		$data = $this->db->from('log_branch')->like('nama', $keyword)->get();

		// format keluaran di dalam array
		foreach ($data->result() as $row) {
			// $arr['query'] = $keyword;
			// $arr['suggestions'][] = array(
			// $arr[] = array(
			// 	'branchName'	=>$row->branchName,
			// 	'branchID'	=>$row->branchID

			// );
			$arr[] = array('value' => $row->kode, 'label' => $row->nama);
		}
		// minimal PHP 5.2
		echo json_encode($arr);
	}
	public function search1()
	{
		// tangkap variabel keyword dari URL
		$keyword = $this->input->get('term');

		// cari di database

		$data = $this->db->query("SELECT c.ID as ID, CONCAT(c.kecName,' Kab. ',d.kabName) as branchname  
		FROM log_kecamatan c
		left join log_kabupaten d on c.kabupaten=d.ID
		WHERE CONCAT(c.kecName,' Kab. ',d.kabName) LIKE '%$keyword%'");
		// $data = $this->db->from('log_dbranch')->like('branchName',$keyword)->get();	
		// $data = $this->db->from('log_branch')->join()->like('nama', $keyword)->get();

		// format keluaran di dalam array
		foreach ($data->result() as $row) {
			// $arr['query'] = $keyword;
			// $arr['suggestions'][] = array(
			// $arr[] = array(
			// 	'branchName'	=>$row->branchName,
			// 	'branchID'	=>$row->branchID

			// );
			$arr[] = array('value' => $row->ID, 'label' => $row->branchname);
		}
		// minimal PHP 5.2
		echo json_encode($arr);
	}
}
