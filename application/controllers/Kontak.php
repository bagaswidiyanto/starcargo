<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Kontak extends MY_Controller
{
  public function index()
  {
    // $this->data['branch']=$this->db->get('tbl_branch')->result();
    $this->data['branch'] = $this->db->get('log_branch')->result();
    $agent = $this->db->get_where('em_agent', array('status' => 'Y'));
    $this->data['agent'] = $agent->result();
    $this->middle = 'content/v_kontak.php';
    $this->layout();
  }
}
