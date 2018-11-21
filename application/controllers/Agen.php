<?php

/**
 *
 */
class Agen extends CI_Controller {

  public function __construct() {
    parent::__construct();
    if (empty($this->session->userdata('is_login'))) {
      echo '<script>alert("anda harus login");window.location.href="'.base_url('login').'"</script>';
    }
  }

  public function index() {
    $data['agen'] = $this->all_model->get_agen(array());
    $this->load->view('agen_view', $data);
  }

  public function detail($id = null) {
    $data['detail'] = $this->all_model->get_agen(array('id_agen'=>$id));
    $this->load->view('agen_detail_view', $data);
  }

  public function kategori($kat = null) {
    $where = (!empty($kat)) ? array('agen.kategori'=>$kat) : array();
    $data['agen'] = $this->all_model->get_agen($where);
    $this->load->view('agen_view', $data);
  }

}

 ?>
