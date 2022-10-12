<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testi extends MY_Controller {

  public function index() {

  	if($this->input->post('testi')=='' || $this->input->post('namatesti')=='' || $this->input->post('emailtesti')==''){

  		redirect(base_url());

  		//echo $this->input->post('tracking');

  	}else{

      $testi=$this->input->post('testi');
      $namatesti=$this->input->post('namatesti');
      $emailtesti=$this->input->post('emailtesti');

      $data=array("nama"=>$namatesti,"email"=>$emailtesti,"testi"=>$testi);

      $in=$this->db->insert('tbl_testimoni',$data);

      if($in=true){

   echo "Testi anda telah kami terima. Terima Kasih";
  }else{
    echo "Terjadi error dalam mengirim testi.";
  }

    }

  }

}