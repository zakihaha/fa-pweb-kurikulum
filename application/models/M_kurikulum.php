<?php

class M_kurikulum extends CI_Model {
    public function ambilKurikulum()
    {
        return $this->db->get('tbl_kurikulum')->result_array();
    }

    public function tambahKurikulum()
    {
        $data = [
            'kode_matakuliah' => $this->input->post('kode_matakuliah'),
            'nama_matakuliah' => $this->input->post('nama_matakuliah'),
            'sifat_perkuliahan' => $this->input->post('sifat_perkuliahan'),
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