<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Destination extends MY_Controller {
  public function index() {
 

//  $cabang1 = $this->db->where_not_in('tbl_destination', $ignore); 
// $cabang2 = $this->db->get('tbl_destination');
// $this->data['cabang1']=$cabang1;
// $this->data['cabang2']=$cabang2;

$cabang=$this->db->get('tbl_destination');
$this->data['cabang']=$cabang;
  	
    $this->middle = 'content/v_destination'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
    $this->layout(); 
    
  }
}