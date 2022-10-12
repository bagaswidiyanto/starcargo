<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Karir extends MY_Controller
{

  public function index()
  {


    $this->middle = 'content/v_karir.php'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

    $this->layout();
  }

  public function read()
  {
    $slug = $this->uri->segment(3);
    $blog = $this->db->get_where('tbl_karir', array('slug' => $slug));
    $this->data['detail'] = $blog->row();

    if ($blog->num_rows() > 0) {


      $this->db->order_by('id', 'desc');
      $this->db->limit('5');
      $this->data['recent'] = $this->db->get('tbl_karir')->result();
      $this->middle = 'content/v_karir_detail.php';
      $this->layout();
    } else {
      redirect(base_url() . 'news');
    }
  }
}
