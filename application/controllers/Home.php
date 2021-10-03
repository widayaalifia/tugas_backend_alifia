<?php
defined('BASEPATH') or exit('No direct script access allowed');




class Home extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_model');
  }
  //halaman

  //halaman awal
  public function index()
  {
    $data['data'] = $this->m_model->tampil();
    $this->load->view('index', $data);
  }
  //awal
  public function halaman_update($id_user)
  {
    $data['data'] = $this->m_model->tampil_update($id_user)->row_array();
    $this->load->view('update', $data);
  }

  //proses
  //proses penambahan data
  public function tambah()
  {
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $jabatan = $this->input->post('jabatan');
    $alamat = $this->input->post('alamat');

    $data = array(
      'nama' => $nama,
      'email' => $email,
      'jabatan' => $jabatan,
      'alamat' => $alamat,
    );

    $this->m_model->tambah($data);
    redirect('home/index');
  }
  //update
  public function update($id_user)
  {
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $jabatan = $this->input->post('jabatan');
    $alamat = $this->input->post('alamat');

    $data = array(
      'nama' => $nama,
      'email' => $email,
      'jabatan' => $jabatan,
      'alamat' => $alamat,
    );

    $this->m_model->update($id_user, $data);
    redirect('home/index');
  }
  //hapus
  public function delete($id_user)
  {
    $this->m_model->delete($id_user);
    redirect('home/index');
  }
}


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */