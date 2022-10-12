<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Pages extends MY_Controller
{
	public function index()
	{
		$pages = $this->uri->segment(3);
		$nav = $this->db->get_where('tbl_navigation', array('slug' => $pages));
		// $profile=$this->db->get('tbl_profile');

		$latar = $this->db->get_where('tbl_profile', array('id' => 1));
		$visi = $this->db->get_where('tbl_profile', array('id' => 2));
		$misi = $this->db->get_where('tbl_profile', array('id' => 3));
		$sasaran = $this->db->get_where('tbl_profile', array('id' => 4));
		$fokus = $this->db->get_where('tbl_profile', array('id' => 5));
		$ceo = $this->db->get_where('tbl_profile', array('id' => 6));
		$img = $this->db->get_where('tbl_profile', array('id' => 7));

		if (($nav->num_rows()) > 0) {
			$this->data['nav'] = $nav->row();
			// $this->data['profile']=$profile->row();
			$this->data['latar'] = $latar->row();
			$this->data['visi'] = $visi->row();
			$this->data['misi'] = $misi->row();
			$this->data['sasaran'] = $sasaran->row();
			$this->data['fokus'] = $fokus->row();
			$this->data['ceo'] = $ceo->row();
			$this->data['img'] = $img->row();


			$this->middle = 'content/v_pages.php';
			$this->layout();
		} else {
			redirect(base_url());
		}
	}
}
