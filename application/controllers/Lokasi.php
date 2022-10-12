<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Lokasi extends MY_Controller

{

  public function index()

  {



    $this->data['maps'] = $this->db->get('tbl_maps')->row();



    $this->middle = 'content/v_lokasi'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

    $this->layout();
  }
}
