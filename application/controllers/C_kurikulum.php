<?php

class C_kurikulum extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kurikulum');
        $this->load->library('form_validation');
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
        $this->form_validation->set_rules('kode_matakuliah', 'Kode matakuliah', 'required');
        if($this->form_validation->run() == false) {
            $this->load->view('kurikulum/layouts/header');
            $this->load->view('kurikulum/V_tambah');
            $this->load->view('kurikulum/layouts/footer');
        } else {
            $this->M_kurikulum->tambahKurikulum();
            redirect('/');
        }
    }

    public function hapus($id)
    {
        $this->M_kurikulum->hapusKurikulum($id);
        redirect('/');
    }
}