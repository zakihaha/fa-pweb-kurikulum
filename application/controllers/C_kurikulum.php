<?php

class C_kurikulum extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kurikulum');
        $this->load->library('form_validation');
    }

    private function dataPerkuliahan()
    {
        return $data = [
            'tahun_ajaran' => [
                '2019/2020',
                '2020/2021',
                '2021/2022',
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
                'Praktek',
                'Teori'
            ],
            'sifat_perkuliahan' => [
                'Wajib',
                'Pilihan',
                'Konsentrasi',
            ],
        ];
    }

    public function index()
    {
        // load library
        $this->load->library('pagination');

        if ($this->input->post('submit')) {
            $data['semester'] = $this->input->post('semester');
            $data['tahun_ajaran'] = $this->input->post('tahun_ajaran');
            
            $this->session->set_userdata('semester', $data['semester']);
            $this->session->set_userdata('tahun_ajaran', $data['tahun_ajaran']);
        } else {
            $data['semester'] = $this->session->userdata('semester');
            $data['tahun_ajaran'] = $this->session->userdata('tahun_ajaran');
        }
        
        // config
        $this->db->like('semester', $data['semester']);
        $this->db->like('tahun_ajaran', $data['tahun_ajaran']);
        $this->db->from('tbl_kurikulum');

        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = 5;

        // initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['kurikulum'] = $this->M_kurikulum->ambilKurikulum($config['per_page'], $data['start'], $data['semester'], $data['tahun_ajaran']);

        $data['tahun_ajaran'] = $this->dataPerkuliahan()['tahun_ajaran'];
        $data['semester'] = $this->dataPerkuliahan()['semester'];
        
        $this->load->view('kurikulum/layouts/header');
        $this->load->view('kurikulum/V_kurikulum', $data);
        $this->load->view('kurikulum/layouts/footer');
    }

    public function tambah()
    {
        $data['sifat_perkuliahan'] = $this->dataPerkuliahan()['sifat_perkuliahan'];
        $data['tahun_ajaran'] = $this->dataPerkuliahan()['tahun_ajaran'];
        $data['semester'] = $this->dataPerkuliahan()['semester'];
        $data['jenis_matakuliah'] = $this->dataPerkuliahan()['jenis_matakuliah'];

        $this->form_validation->set_rules('kode_matakuliah', 'kode matakuliah', 'required|max_length[5]');
        $this->form_validation->set_rules('nama_matakuliah', 'nama matakuliah', 'required');
        $this->form_validation->set_rules('sifat_perkuliahan', 'sifat perkuliahan', 'required');
        $this->form_validation->set_rules('tahun_ajaran', 'tahun ajaran', 'required');
        $this->form_validation->set_rules('semester', 'semester', 'required|numeric');
        $this->form_validation->set_rules('jenis_matakuliah', 'jenis matakuliah', 'required');
        $this->form_validation->set_rules('bobot_sks', 'bobot sks', 'required|numeric');

        if ($this->form_validation->run() == false) {
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
        $data['sifat_perkuliahan'] = $this->dataPerkuliahan()['sifat_perkuliahan'];
        $data['tahun_ajaran'] = $this->dataPerkuliahan()['tahun_ajaran'];
        $data['semester'] = $this->dataPerkuliahan()['semester'];
        $data['jenis_matakuliah'] = $this->dataPerkuliahan()['jenis_matakuliah'];

        $this->form_validation->set_rules('kode_matakuliah', 'kode matakuliah', 'required|max_length[5]');
        $this->form_validation->set_rules('nama_matakuliah', 'nama matakuliah', 'required');
        $this->form_validation->set_rules('sifat_perkuliahan', 'sifat perkuliahan', 'required');
        $this->form_validation->set_rules('tahun_ajaran', 'tahun ajaran', 'required');
        $this->form_validation->set_rules('semester', 'semester', 'required|numeric');
        $this->form_validation->set_rules('jenis_matakuliah', 'jenis matakuliah', 'required');
        $this->form_validation->set_rules('bobot_sks', 'bobot sks', 'required|numeric');

        if ($this->form_validation->run() == false) {
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
