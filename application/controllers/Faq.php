<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Faq extends MY_Controller {

  public function index() {
  	
  	$this->data['faq']=$this->db->get('tbl_faq')->row();
  

    $this->middle = 'content/v_faq.php'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

    $this->layout(); 

    

  }

}