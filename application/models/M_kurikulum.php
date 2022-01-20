<?php

class M_kurikulum extends CI_Model {
    public function ambilSemuaKurikulum()
    {
        $this->db->order_by('semester', 'asc');
        return $this->db->get('tbl_kurikulum')->result_array();
    }

    public function ambilKurikulum($limit, $start, $semester = null, $tahun_ajaran = null)
    {
        if ($semester) {
            $this->db->where('semester', $semester);
        }
        if ($tahun_ajaran) {
            $this->db->where('tahun_ajaran', $tahun_ajaran);
        }
        
        $this->db->order_by('tahun_ajaran', 'asc');
        $this->db->order_by('semester', 'asc');
        return $this->db->get('tbl_kurikulum', $limit, $start)->result_array();
    }

    public function hitungSemuaKurikulum()
    {
        return $this->db->get('tbl_kurikulum')->num_rows();
    }

    public function tambahKurikulum()
    {
        $data = [
            'kode_matakuliah' => $this->input->post('kode_matakuliah'),
            'nama_matakuliah' => $this->input->post('nama_matakuliah'),
            'sifat_perkuliahan' => $this->input->post('sifat_perkuliahan'),
            'tahun_ajaran' => $this->input->post('tahun_ajaran'),
            'semester' => $this->input->post('semester'),
            'jenis_matakuliah' => $this->input->post('jenis_matakuliah'),
            'bobot_sks' => $this->input->post('bobot_sks'),
        ];

        $this->db->insert('tbl_kurikulum', $data);
    }

    public function ambilKurikulumByID($id)
    {
        return $this->db->get_where('tbl_kurikulum', ['id' => $id])->row_array();
    }

    public function updateKurikulum()
    {
        $data = [
            'kode_matakuliah' => $this->input->post('kode_matakuliah'),
            'nama_matakuliah' => $this->input->post('nama_matakuliah'),
            'sifat_perkuliahan' => $this->input->post('sifat_perkuliahan'),
            'tahun_ajaran' => $this->input->post('tahun_ajaran'),
            'semester' => $this->input->post('semester'),
            'jenis_matakuliah' => $this->input->post('jenis_matakuliah'),
            'bobot_sks' => $this->input->post('bobot_sks'),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tbl_kurikulum', $data);
    }

    public function hapusKurikulum($id)
    {
        $this->db->delete('tbl_kurikulum', ['id' => $id]);
    }
}