<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Prices extends MY_Controller
{

  public function index()
  {

    if ($this->input->post('dari') == '' || $this->input->post('tujuan') == '') {

      $this->middle = 'content/v_prices'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

      $this->layout();

      //echo $this->input->post('tracking');

    } else {

      //$this->db->order_by('Tanggal','asc');

      // $this->data['prices']=$this->db->query("SELECT mp.Layanan, mp.MataUang, mp.KGP, mp.KGS, mp.Estimasi, mp.Via FROM master_price mp
      //   INNER JOIN city CAsal ON CAsal.city_id  = mp.IDAsal AND CAsal.city_id = '".$this->input->post('dari')."'
      //   INNER JOIN city CTujuan ON CTujuan.city_id = mp.IDTujuan AND CTujuan.city_id = '".$this->input->post('tujuan')."'")->result();

      // $this->data['prices'] = $this->db->query("SELECT b.serviceID,b.serviceName as Layanan,mp.minKG,mp.Tarif_Kg1 KGP, mp.Tarif KGS, mp.leadTime Estimasi, e.modaBy Via 
      //         FROM log_customers_discount mp
      //   left join log_services b on b.serviceID=mp.serviceID      
      //   left join log_kabupaten c on c.ID=mp.Origin 
      //   left join log_kabupaten d on d.ID=mp.Destination


      //   left join log_branch f on f.kode=mp.Origin
      //   left join log_dbranch g on g.branchID=f.kode_dbranch
      //   left join log_area h on h.areaID=g.provinsi
      //   left join log_kabupaten i on i.provinsi=h.areaID 


      //   left join log_moda e on e.modaID=mp.Moda 
      //   WHERE mp.custID='1' AND i.ID = '" . $this->input->post('dari') . "' AND mp.Destination = '" . $this->input->post('tujuan') . "'")->result();


      $cek = $this->db->query("SELECT count(*) as jml from log_customers_discount a
      
      where a.custID = 1 AND a.Origin='" . $this->input->post('dari') . "' AND a.Destination='" . $this->input->post('tujuan') . "'");
      $get_kec = $this->db->query("SELECT * from log_kecamatan where ID = '" . $this->input->post('tujuan') . "' ")->row();

      if ($cek->row()->jml > 0) {
        $this->data['price'] = $this->db->query("SELECT a.serviceID,a.serviceName as Layanan,mp.minKG, mp.serviceID, mp.Tarif_Kg1 KGP,mp.Destination dst, mp.Tarif KGS, mp.leadTime Estimasi, e.modaBy Via, b.kecName, c2.kabName
        from log_customers_discount mp
        left join log_services a on a.serviceID=mp.serviceID
        left join log_kecamatan b on b.ID=mp.Destination
        left join log_kabupaten c on c.ID=b.kabupaten
        left join log_kabupaten c2 on mp.kabupatenCode=c2.ID
       

        left join log_moda e on e.modaID=mp.Moda 
        where mp.custID = 1 AND mp.Origin='" . $this->input->post('dari') . "' and mp.Destination='" . $this->input->post('tujuan') . "' and mp.kabupatenCode='" . $get_kec->kabupaten . "' ORDER BY FIELD(mp.serviceID, 3) DESC")->result();
      } else {
        $this->data['price'] = $this->db->query("SELECT a.serviceID,a.serviceName as Layanan,mp.minKG, mp.serviceID, mp.Tarif_Kg1 KGP,mp.Destination dst, mp.Tarif KGS, mp.leadTime Estimasi, e.modaBy Via, b.kecName, c2.kabName
        from log_customers_discount mp
        left join log_services a on a.serviceID=mp.serviceID
        left join log_kecamatan b on b.ID=mp.Destination
        left join log_kabupaten c on c.ID=b.kabupaten
        left join log_kabupaten c2 on mp.kabupatenCode=c2.ID
        

        left join log_moda e on e.modaID=mp.Moda 
        where mp.custID = 1 AND mp.Origin='" . $this->input->post('dari') . "' and mp.kabupatenCode='" . $get_kec->kabupaten . "' ORDER BY FIELD(mp.serviceID, 3) DESC")->result();
      }

      // $this->db->order_by('Tanggal','asc');

      //      $this->db->select('em_customers_discount.*,b.nama as origin,c.nama as destination,d.keterangan as services');

      //  $this->db->join('em_branch b', 'b.kode = em_customers_discount.Origin', 'left');

      //   $this->db->join('em_branch c', 'c.kode = em_customers_discount.Destination', 'left');

      //   $this->db->join('em_services d', 'd.kode = em_customers_discount.Satuan', 'left');



      // $this->data['prices']=$this->db->get_where('em_customers_discount',array('origin'=>$this->input->post('dari'),'destination'=>$this->input->post('tujuan'),'custID'=>'CUST00001'))->result();



      $this->data['asal'] = $this->db->get_where('log_branch a', array('a.kode' => $this->input->post('dari')))->row();

      $this->data['tujuan'] = $this->db->get_where('log_kecamatan b', array('b.ID' => $this->input->post('tujuan')))->row();

      $this->data['berat'] = $this->input->post('berat');

      $this->middle = 'content/v_prices'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

      $this->layout();
    }
  }
}
