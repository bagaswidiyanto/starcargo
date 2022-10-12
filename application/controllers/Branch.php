<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Branch extends MY_Controller {

  public function index() {
  	$this->load->library('pagination');
		$jml=$this->db->count_all('tbl_branch');
		$config['base_url'] = base_url().'branch/index/';
		$config['uri_segment'] = 3;
		$config['total_rows'] = $jml;
		$config['per_page'] = 3;
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
		$hub=$this->db->get('tbl_branch')->result();


  



  	$this->data['hub']=$hub;
  	$this->data['pagination']=$this->pagination->create_links();

    $this->middle = 'content/v_hub.php'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

    $this->layout(); 
}


  public function view(){
  	$id=$this->uri->segment(3);
	$hub=$this->db->get_where('tbl_branch',array('id'=>$id));
	$this->data['hub']=$hub->row();;
		if($hub->num_rows()>0){ 
		$this->middle = 'content/v_hub_detail.php'; 
    	$this->layout();  
		}else{
		redirect(base_url().'branch');	
		}
	
	}
    

 }

