<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Syarat extends MY_Controller {

  public function index() {
  	
  	$this->data['syarat']=$this->db->get('tbl_syarat')->row();
  	$this->data['kebijakan']=$this->db->get('tbl_kebijakan')->row();
  	$this->data['faq']=$this->db->get('tbl_faq')->row();
  

    $this->middle = 'content/v_syarat.php'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

    $this->layout(); 

    

  }

}