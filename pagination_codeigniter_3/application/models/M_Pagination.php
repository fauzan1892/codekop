<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');

class M_Pagination extends CI_Model
{
  // pagination
  public function pagination_data($table,$number,$offset){
      $h = $this->db->get($table,$number,$offset);
      return $h->result_array();
  }

  public function pagination_jumlah_data($table){
      $r = $this->db->get($table);
      return $r->num_rows();
  }
}
?>
