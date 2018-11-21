<?php

/**
 *
 */
class Pengaturan extends CI_Controller {

  public function __construct() {
     parent::__construct();
    if (empty($this->session->userdata('is_login'))) {
      echo '<script>alert("anda harus login");window.location.href="'.base_url('login').'"</script>';
    }
  }

  public function index() {
    $data['pengaturan'] = $this->all_model->get_where(array(),'pengaturan');
    $this->load->view('admin/data_pengaturan_view', $data);
  }

  public function simpan() {
    $pengaturan_id = $this->input->post('pengaturan_id');
    $judul = $this->input->post('judul');
    $isi = $this->input->post('isi');
    $header_text = $this->input->post('header_text');
    if (!empty($_FILES)) {
      $config['upload_path']          = getcwd().'/upload/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 1024;
      // $config['max_width']            = 1024;
      // $config['max_height']           = 768;
      $config['encrypt_name']         = true;
      $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('gambar')) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $data = array('upload_data' => $this->upload->data());
          $filename = $data['upload_data']['file_name'];
          $data_update = array(
            'judul' => $judul,
            'isi' => $isi,
            'header_text'=> $header_text,
          );
          $simpan = $this->all_model->update(array('pengaturan_id'=>$pengaturan_id),$data_update, 'pengaturan');
          if ($simpan) {
            redirect('pengaturan');
          }
        }
    }else {
      $data_update = array(
            'judul' => $judul,
            'isi' => $isi,
            'header_text'=> $header_text,
      );
      $simpan = $this->all_model->update(array('pengaturan_id'=>$pengaturan_id),$data_update, 'pengaturan');
      if ($simpan) {
        redirect('pengaturan');
      }
    }
  }
}
 ?>
