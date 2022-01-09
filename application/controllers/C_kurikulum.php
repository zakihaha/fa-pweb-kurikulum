<?php

class C_kurikulum extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kurikulum');
        $this->load->library('form_validation');
    }

    private function dataJenisPerkuliahan()
    {
        return $data = [
            'sifat_perkuliahan' => [
                'Praktek',
                'Teori'
            ],
            'semester' => [
                '1',
                '2',
                '3',
                '4',
                '5',
                '6',
            ],
            'jenis_matakuliah' => [
                'Wajib',
                'Pilihan',
                'Konsentrasi',
            ],
        ];
    }

    public function index()
    {
        $data['kurikulum'] = $this->M_kurikulum->ambilKurikulum();
        $this->load->view('kurikulum/layouts/header');
        $this->load->view('kurikulum/V_kurikulum', $data);
        $this->load->view('kurikulum/layouts/footer');
    }

    public function tambah()
    {
        $data['sifat_perkuliahan'] = $this->dataJenisPerkuliahan()['sifat_perkuliahan'];
        $data['semester'] = $this->dataJenisPerkuliahan()['semester'];
        $data['jenis_matakuliah'] = $this->dataJenisPerkuliahan()['jenis_matakuliah'];

        $this->form_validation->set_rules('kode_matakuliah', 'kode matakuliah', 'required|max_length[5]');
        $this->form_validation->set_rules('nama_matakuliah', 'nama matakuliah', 'required');
        $this->form_validation->set_rules('sifat_perkuliahan', 'sifat perkuliahan', 'required');
        $this->form_validation->set_rules('semester', 'semester', 'required|numeric');
        $this->form_validation->set_rules('jenis_matakuliah', 'jenis matakuliah', 'required');
        $this->form_validation->set_rules('bobot_sks', 'bobot sks', 'required|numeric');
        
        if($this->form_validation->run() == false) {
            $this->load->view('kurikulum/layouts/header');
            $this->load->view('kurikulum/V_tambah', $data);
            $this->load->view('kurikulum/layouts/footer');
        } else {
            $this->M_kurikulum->tambahKurikulum();
            $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
            redirect('/');
        }
    }

    public function edit($id)
    {
        $data['kurikulum'] = $this->M_kurikulum->ambilKurikulumByID($id);
        $data['sifat_perkuliahan'] = $this->dataJenisPerkuliahan()['sifat_perkuliahan'];
        $data['semester'] = $this->dataJenisPerkuliahan()['semester'];
        $data['jenis_matakuliah'] = $this->dataJenisPerkuliahan()['jenis_matakuliah'];

        $this->form_validation->set_rules('kode_matakuliah', 'kode matakuliah', 'required|max_length[5]');
        $this->form_validation->set_rules('nama_matakuliah', 'nama matakuliah', 'required');
        $this->form_validation->set_rules('sifat_perkuliahan', 'sifat perkuliahan', 'required');
        $this->form_validation->set_rules('semester', 'semester', 'required|numeric');
        $this->form_validation->set_rules('jenis_matakuliah', 'jenis matakuliah', 'required');
        $this->form_validation->set_rules('bobot_sks', 'bobot sks', 'required|numeric');

        if($this->form_validation->run() == false) {
            $this->load->view('kurikulum/layouts/header');
            $this->load->view('kurikulum/V_edit', $data);
            $this->load->view('kurikulum/layouts/footer');
        } else {
            $this->M_kurikulum->updateKurikulum();
            $this->session->set_flashdata('success', 'Data berhasil diupdate');
            redirect('/');
        }
    }

    public function hapus($id)
    {
        $this->M_kurikulum->hapusKurikulum($id);
        $this->session->set_flashdata('danger', 'Data berhasil dihapus');
        redirect('/');
    }
}