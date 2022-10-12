<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Berita extends MY_Controller

{

	public function index()

	{

		$this->load->library('pagination');

		$jml = $this->db->count_all('tbl_posts');

		$config['base_url'] = base_url() . 'news/index/';

		$config['uri_segment'] = 3;

		$config['total_rows'] = $jml;

		$config['per_page'] = 5;

		$config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-left">';

		$config['full_tag_close'] = '</ul>';

		$config['cur_tag_open'] = '<li><a><b>';

		$config['cur_tag_close'] = '</b></a></li>';

		$config['num_tag_open'] = '<li>';

		$config['num_tag_close'] = '</li>';

		$config['next_tag_open'] = '<li>';

		$config['next_tag_close'] = '</li>';

		$config['prev_tag_open'] = '<li>';

		$config['prev_tag_close'] = '</li>';

		$config['first_tag_open'] = '<li>';

		$config['first_tag_close'] = '</li>';

		$config['last_tag_open'] = '<li>';

		$config['last_tag_close'] = '</li>';

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$this->pagination->initialize($config);







		$this->db->limit('5');

		$this->db->order_by('id', 'rand');

		$recent = $this->db->get('tbl_posts');

		// $cat=$this->db->get('tbl_kategori_berita');







		//$blog=$this->uri->segment(3);

		$this->db->limit($config['per_page']);

		$this->db->offset($page);

		$this->db->order_by('id', 'desc');

		$blog = $this->db->get('tbl_posts');



		if (($blog->num_rows()) > 0) {

			$this->data['blog'] = $blog->result();

			$this->data['recent'] = $recent->result();

			// $this->data['cat']=$cat->result();

			$this->data['pagination'] = $this->pagination->create_links();

			$this->middle = 'content/home.php';

			$this->layout();
		} //else{

		//	redirect(base_url());



		//}

	}



	public function baca()

	{

		$slug = $this->uri->segment(3);

		$blog = $this->db->get_where('tbl_posts', array('slug' => $slug));

		$this->data['blog'] = $blog->row();

		if ($blog->num_rows() > 0) {





			$this->db->order_by('id', 'desc');

			$this->db->limit('5');

			$this->data['recent'] = $this->db->get('tbl_posts')->result();

			$this->middle = 'content/v_berita_detail.php';

			$this->layout();
		} else {

			redirect(base_url() . 'news');
		}
	}
}
