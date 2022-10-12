<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tracking extends MY_Controller
{

  public function index()
  {

    if ($this->input->post('tracking') == '') {

      $this->middle = 'content/v_tracking'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

      $this->layout();

      //echo $this->input->post('tracking');

    } else {

      $oldstr = $this->input->post('tracking');

      $track = preg_replace('/\s+/', '', $oldstr);

      $this->db->order_by('id');
      //$this->db->join('em_branches b', 'em_log_tracking.Location = Barcode');

      $this->db->select('em_konos_detail.*, b.branchName as dari,c.branchName as ke, f.nama, CONCAT(d.kecName,", ",e2.kabName) as desti', FALSE);
      $this->db->join('log_dbranch b', 'em_konos_detail.Asal=b.branchID', 'left');
      $this->db->join('log_dbranch c', 'em_konos_detail.Tujuan=c.branchID', 'left');
      $this->db->join('log_kecamatan d', 'em_konos_detail.Tujuan=d.ID', 'left');
      $this->db->join('log_kabupaten e', 'em_konos_detail.Asal=e.ID', 'left');
      $this->db->join('log_kabupaten e2', 'e2.ID=d.kabupaten', 'left');
      $this->db->join('log_branch f', 'em_konos_detail.Asal=f.kode', 'left');
      $this->db->from('em_konos_detail');
      $this->db->where('Konid', $track);
      $this->data['tracking'] = $this->db->get()->row();

      $this->data['barcode'] = $track;

      $this->middle = 'content/v_tracking'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

      $this->layout();
    }
  }
}
