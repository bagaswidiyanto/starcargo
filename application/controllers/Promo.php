<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Promo extends MY_Controller
{

  public function index()
  {





    $this->data['promo'] = $this->db->get('tbl_promo')->result();

    $this->middle = 'content/v_promo.php'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

    $this->layout();
  }
}
