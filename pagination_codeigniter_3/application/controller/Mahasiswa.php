<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	function __construct(){
	 parent::__construct();
      $this->load->helper('url');
      $this->load->library('pagination');
	 }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
			$this->load->database();
			$jumlah_data = $this->M_Frontend->pagination_jumlah_data('tbl_mahasiswa'); //  nama tabel
			$this->load->library('pagination');
			$config['base_url'] =  base_url('mahasiswa'); // url segment di mulai dari 1
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 8;
			$from = $this->uri->segment('2'); // mengambil url segment ke 2
			$this->pagination->initialize($config);
			$this->data['hasil_pagination'] = $this->M_Frontend->pagination_data('tbl_mahasiswa',$config['per_page'],$from);

      $this->load->view('v_data',$this->data);
	}
}
