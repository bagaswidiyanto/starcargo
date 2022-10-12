<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kebijakan extends MY_Controller {

  public function index() {
  	
  	$this->data['kebijakan']=$this->db->get('tbl_kebijakan')->row();
  

    $this->middle = 'content/v_kebijakan.php'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

    $this->layout(); 

    

  }

}