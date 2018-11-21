<?php

/**
 *
 */
class Data_agen extends CI_Controller
{

  public function __construct()   {
    parent::__construct();
    if (empty($this->session->userdata('is_login'))) {
      echo '<script>alert("anda harus login");window.location.href="'.base_url('login').'"</script>';
    }
  }

  public function index() {
    $data['agen'] = $this->all_model->get_agen(array(), 'agen');
    $this->load->view('admin/data_agen_view', $data);
  }

  public function edit($id) {
    $data['kategori'] = $this->all_model->get_where(array(), 'kategori');
    $data['agen'] = $this->all_model->get_agen(array('id_agen'=>$id), 'agen');
    $this->load->view('admin/edit_agen_view', $data);
  }

  public function tambah() {
    $data['kategori'] = $this->all_model->get_where(array(), 'kategori');
    $this->load->view('admin/tambah_agen_view', $data);
  }

  public function hapus($id) {
    $hapus = $this->all_model->delete(array('id_agen'=>$id), 'agen');
    if ($hapus) {
      redirect('data_agen');
    }
  }

  public function simpan() {
    $nama_agen = $this->input->post('nama_agen');
    $kategori = $this->input->post('kategori');
    $keterangan = $this->input->post('keterangan');
    $no_hp = $this->input->post('no_hp');
    $alamat = $this->input->post('alamat');
    $kota = $this->input->post('kota');
    $provinsi = $this->input->post('provinsi');
    $latitude = $this->input->post('latitude');
    $longitude = $this->input->post('longitude');
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
            'kategori' => $kategori,
            'nama_agen' => $nama_agen,
            'keterangan'       => $keterangan,
            'no_hp'        => $no_hp,
            'alamat'   => $alamat,
            'kota'   => $kota,
            'provinsi'   => $provinsi,
            'latitude'   => $latitude,
            'longitude'   => $longitude,
            'gambar'      => $filename,
          );
          $simpan = $this->all_model->insert($data_update, 'agen');
          if ($simpan) {
            redirect('data_agen');
          }
        }
    }else {
      $data_update = array(
            'kategori' => $kategori,
            'nama_agen' => $nama_agen,
            'keterangan'       => $keterangan,
            'no_hp'        => $no_hp,
            'alamat'   => $alamat,
            'kota'   => $kota,
            'provinsi'   => $provinsi,
            'latitude'   => $latitude,
            'longitude'   => $longitude,
      );
      $simpan = $this->all_model->insert($data_update, 'agen');
      if ($simpan) {
        redirect('data_agen');
      }
    }
  }

  public function simpan_edit() {
    $id_agen = $this->input->post('id_agen');
    $nama_agen = $this->input->post('nama_agen');
    $kategori = $this->input->post('kategori');
    $keterangan = $this->input->post('keterangan');
    $no_hp = $this->input->post('no_hp');
    $alamat = $this->input->post('alamat');
    $kota = $this->input->post('kota');
    $provinsi = $this->input->post('provinsi');
    $latitude = $this->input->post('latitude');
    $longitude = $this->input->post('longitude');
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
            'kategori' => $kategori,
            'nama_agen' => $nama_agen,
            'keterangan'       => $keterangan,
            'no_hp'        => $no_hp,
            'alamat'   => $alamat,
            'kota'   => $kota,
            'provinsi'   => $provinsi,
            'latitude'   => $latitude,
            'longitude'   => $longitude,
          );
          $simpan = $this->all_model->update(array('id_agen'=>$id_agen),$data_update, 'agen');
          if ($simpan) {
            redirect('data_agen');
          }
        }
    }else {
      $data_update = array(
            'kategori' => $kategori,
            'nama_agen' => $nama_agen,
            'keterangan'       => $keterangan,
            'no_hp'        => $no_hp,
            'alamat'   => $alamat,
            'kota'   => $kota,
            'provinsi'   => $provinsi,
            'latitude'   => $latitude,
            'longitude'   => $longitude,
      );
      $simpan = $this->all_model->update(array('id_agen'=>$id_agen),$data_update, 'agen');
      if ($simpan) {
        redirect('data_agen');
      }
    }
  }

}

 ?>
