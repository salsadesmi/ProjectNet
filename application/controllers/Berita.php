<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Berita');
    }
    public function index()
    {
        $data['data'] = $this->Model_Berita->tampil_data_berita();
        $this->load->view('v_berita', $data);
    }

    function tambah_berita()
    {
        $this->load->view('v_add_berita',);
    }
    function simpan_berita()
    {
        $id = $this->input->post('xid');
        $nama_lengkap = $this->input->post('xnama_lengkap');
        $tgl_lahir = $this->input->post('xtgl_lahir');
        $alamat = $this->input->post('xalamat');
        $email = $this->input->post('xemail');
        $jabatan = $this->input->post('xjabatan');
        $this->Model_Berita->simpan_berita($id, $nama_lengkap, $tgl_lahir, $alamat, $email, $jabatan);
        echo $this->session->set_flashdata('pesan', 'Data Berhasil Terimpan...!!!');
        redirect('Berita');
    }
    function update_berita()
    {
        $id = $this->input->post('xid');
        $nama_lengkap = $this->input->post('xnama_lengkap');
        $tgl_lahir = $this->input->post('xtgl_lahir');
        $alamat = $this->input->post('xalamat');
        $email = $this->input->post('xemail');
        $jabatan = $this->input->post('xjabatan');
        $this->Model_Berita->update_berita($id, $nama_lengkap, $tgl_lahir, $alamat, $email, $jabatan);
        echo $this->session->set_flashdata('pesan', 'Data Berhasil diUpdate..!!!');
        redirect('Berita');
    }
    function edit_berita($id)
    {
        $data['data'] = $this->Model_Berita->edit_berita($id);
        $this->load->view('v_edit_berita', $data);
    }
    function hapus_berita($id)
    {
        $this->Model_Berita->hapus_berita($id);
        echo $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('Berita');
    }
}
