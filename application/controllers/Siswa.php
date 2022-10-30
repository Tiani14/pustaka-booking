<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller{

    public function index()
    {
        $data['judul'] = "Data Siswa";
        $data['siswa'] = $this->ModelSiswa->getSiswa()->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/footer');

    }
     
    public function tambah_siswa()
    {
        $data['judul'] = "Tambah Data Siswa";
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('siswa/tambah_siswa', $data);
        $this->load->view('templates/footer');

    }

    public function simpanDataSiswa()
    {
        $this->form_validation->set_rules(
            'nama',
            'nis',
            'kelas',
            'tanggal_lahir',
            'tempat_lahir',
            'alamat',
            'required', [
                'required' => 'Semua data harus diisi'
            ]
        );

        $data = array(
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'agama' => $this->input->post('agama'),            
        );

        $this->load->model('ModelSiswa');
        $this->ModelSiswa->simpanDataSiswa($data);
        redirect('siswa');
    }

    public function edit()
    {
        $data['judul'] = "Edit Data Siswa";
        $data['siswa'] = $this->ModelSiswa->getSiswa()->result_array();
        $where = ['id_siswa' => $this->uri->segment(3)];
        $data['siswa'] = $this->ModelSiswa->siswaWhere($where)->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('siswa/edit_siswa', $data);
        $this->load->view('templates/footer');

    }

    public function editDataSiswa()
    {
        $this->form_validation->set_rules(
            'nama',
            'nis',
            'kelas',
            'tanggal_lahir',
            'tempat_lahir',
            'alamat',
            'required', [
                'required' => 'Semua data harus diisi'
            ]
        );

        $data = array(
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'agama' => $this->input->post('agama'),            
        );

        $this->load->model('ModelSiswa');
        $this->ModelSiswa->editDataSiswa(['id_siswa' => $this->input->post('id_siswa')] ,$data);
        redirect('siswa');
    }

    public function hapus()
    {
        $where = ['id_siswa' => $this->uri->segment(3)];
        $this->ModelSiswa->hapus($where);
        redirect('siswa');
    }

}