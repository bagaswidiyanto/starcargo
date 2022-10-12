<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cabang extends MY_Controller
{

	public function index()
	{





		$this->data['cabang'] = $this->db->get('tbl_branch')->result();

		$this->middle = 'content/v_cabang.php'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

		$this->layout();
	}


	public function view()
	{
		$id = $this->uri->segment(3);
		$cabang = $this->db->get_where('tbl_branch', array('id' => $id));
		$this->data['branch'] = $this->db->get('tbl_branch')->result();
		$this->data['agent'] = $this->db->get('em_agent')->result();
		$this->data['cabang'] = $cabang->row();;
		if ($cabang->num_rows() > 0) {
			$this->middle = 'content/v_cabang_detail.php';
			$this->layout();
		} else {
			redirect(base_url() . 'cabang');
		}
	}
}
