<?php

/**
 *
 */
class Daftaragen extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $this->load->view('daftaragen_view');
  }

  public function simpan()  {
    $nama_agen = $this->input->post('nama_agen');
    $kategori = $this->input->post('kategori');
    $keterangan = $this->input->post('keterangan');
    $no_hp = $this->input->post('no_hp');
    $alamat = $this->input->post('alamat');
    $kota = $this->input->post('kota');
    $provinsi = $this->input->post('provinsi');
    $latitude = $this->input->post('latitude');
    $longitude = $this->input->post('longitude');
    $status = $this->input->post('status');
    $data = array(
            'nama_agen' => $nama_agen,
            'kategori' => $kategori,
            'keterangan'       => $keterangan,
            'no_hp'        => $no_hp,
            'alamat'   => $alamat,
            'kota'   => $kota,
            'provinsi'   => $provinsi,
            'latitude'   => $latitude,
            'longitude'   => $longitude,
            'gambar'      => $filename,
    );
    $a = $this->all_model->insert($data, 'agen');
    if ($a) {
      $this->session->set_flashdata('msg', '<div class="alert alert-success">Anda Berhasil mendaftar, silahkan tunggu verifikasi dari admin</div>');
      redirect('daftar');
    }else {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger">Anda gagal mendaftar, coba lagi</div>');
      redirect('daftar');
    }
  }
}

 ?>
