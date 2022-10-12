<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends MY_Controller {

  public function index() {
  	$this->load->library('pagination');
	$jml=$this->db->count_all('tbl_gallery');
	$config['base_url'] = base_url().'gallery/index/';
	$config['uri_segment'] = 3;
	$config['total_rows'] = $jml;
	$config['per_page'] = 4;
	$config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin">';
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

  


	$this->db->limit($config['per_page']);
	$this->db->offset($page);
  	$this->data['gallery']=$this->db->get('tbl_gallery')->result();
  	$this->data['pagination']=$this->pagination->create_links();

    $this->middle = 'content/v_gallery.php'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

    $this->layout(); 

    

  }

}