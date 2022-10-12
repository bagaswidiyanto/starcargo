<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller 
{ 
   //set the class variable.
   var $template  = array();
   var $data      = array();
   //Load layout    
   public function layout() {
   	date_default_timezone_set("Asia/Jakarta"); 
     // making temlate and send data to view.
     $this->CI =& get_instance();
     $this->data['menu']=$this->menu(0,$h="");
     $this->data['website']=$this->CI->db->get('tbl_website')->row();
     $this->data['recnews']=$this->CI->db->get('tbl_posts')->result();
     $this->data['navigation']=$this->CI->db->get_where('tbl_navigation');
     $this->data['footer']=$this->CI->db->get_where('tbl_posts',array('slug'=>'about-us'))->row();
     $this->data['sosmed']=$this->CI->db->get('tbl_sosmed')->result();
     $this->data['footermenu']=$this->CI->db->get_where('tbl_navigation',array('parent'=>'0'))->result();
     $this->data['today']=$this->getCounter('today'); //hari ini
     $this->data['online']=$this->getCounter('online'); //hari ini online
     $this->data['all']=$this->getCounter('all'); //semua visitor
     $this->template['header']   = $this->load->view('layout/header', $this->data, true);
     $this->template['middle'] = $this->load->view($this->middle, $this->data, true);
     $this->template['footer'] = $this->load->view('layout/footer', $this->data, true);
     $this->load->view('layout/index', $this->template);

     $this->initCounter(); //insert statistik


   }
   
		private function menu($parent=0,$hasil){
		 $w = $this->CI->db->query("SELECT * from tbl_navigation where id not in(4,7) and parent=".$parent." order by `sort` asc");
	

			 if(($w->num_rows())>0 && $parent =='0')
			 {		
			 	
			 		$hasil .= '<ul class="nav navbar-nav">';
			 		
			 }else if(($w->num_rows())>0 && $parent !=0){

			 		$hasil .=  '<ul class="dropdown-menu">';
			 		
			}




			foreach($w->result() as $h)
			{
				$r = $this->CI->db->query("SELECT count(*) as jml from tbl_navigation where parent=".$h->id."")->row();

				if($h->isPost=='1'){
				$slug='pages/index/'.$h->slug;
				}else{
				$slug=$h->slug;
				}
				if(($r->jml)>0){
					
				$hasil .= '<li><a href="'.base_url($slug).'" ><span class="data-hover" data-hover="'.$h->title.'">'.$h->title.'</span></a>';
				}else{
				$hasil .= '<li ><a href="'.base_url($slug).'"><span class="data-hover" data-hover="'.$h->title.'">'.$h->title.'</span></a>';	
				}
				$hasil = $this->menu($h->id,$hasil);
				$hasil .= "</li>";
			}

			if(($w->num_rows)>0 && $parent !=0)
			{
					$hasil .= "</ul>";
			}
			return $hasil;

		}

		function initCounter() {
 				
		     $ip = $_SERVER['REMOTE_ADDR']; // menangkap ip pengunjung
		     $location = $_SERVER['PHP_SELF']; // menangkap server path
		 
		     //membuat log dalam tabel database 'counter'
		     $check=$this->db->query("select * from tbl_counter where ip='".$ip."' and date(`timestamp`)=CURDATE()");
		     $check2=$check->row();
		     if($check->num_rows()>0){

		     $create_log = $this->db->query("UPDATE tbl_counter SET `timestamp`=NOW() WHERE id='".$check2->id."'"); 
		     }else{
		     $create_log = $this->db->query("INSERT INTO tbl_counter(ip,location,`timestamp`)VALUES('$ip', '$location',NOW()) ");
		     }
		 
		}

		function getCounter($mode) {
			 
			// if(is_null($location)) {
			//      $location = $_SERVER['PHP_SELF'];
			// }
			if($mode == "today") // query perhitungan IP Address unik
			{
			     $get_res = $this->db->query("SELECT DISTINCT count(ip) as jml FROM tbl_counter where date(`timestamp`)=CURDATE()");
			}else if($mode=="online"){
			     $get_res = $this->db->query("SELECT DISTINCT count(ip) as jml FROM tbl_counter where `timestamp` < DATE_ADD(NOW(), INTERVAL -10 minute) AND date(`timestamp`)=CURDATE()");
			}     else{ // query perhitungan seluruh IP Address (tidak unik)
			     $get_res = $this->db->query("SELECT count(ip) as jml FROM tbl_counter");
			}
			 
			$res = $get_res->row();
			 
			return $res;
			 
		}
}

?>