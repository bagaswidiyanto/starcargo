<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Layanan extends MY_Controller {

  public function index() {

  



  	$this->data['layanan']=$this->db->get('tbl_service')->result();

    $this->middle = 'content/v_layanan.php'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

    $this->layout(); 

    

  }

}