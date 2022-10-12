<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kemitraan extends MY_Controller {

  public function index() {

  



  	$this->data['kemitraan']=$this->db->get('tbl_kemitraan')->row();

    $this->middle = 'content/v_kemitraan.php'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

    $this->layout(); 

    

  }

}