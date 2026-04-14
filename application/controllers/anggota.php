<?php

class anggota extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('anggota_model');
    }
    public function index(){

        $data['anggota']= $this->anggota_model->get_all();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('anggota/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('anggota/tambah');
        $this->load->view('templates/footer');
    }

    // ======================
    // SIMPAN
    // ======================
    public function simpan()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nomor_anggota', 'nomor_anggota', 'required');
        $this->form_validation->set_rules('nama_anggota', 'nama_anggota', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('telepon', 'telepon', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('tanggal_daftar', 'tanggal_daftar', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');
        if($this->form_validation->run()==FALSE){
            $this->tambah();
        } else{
            $data=[
                'nomor_anggota' => $this->input->post('nomor_anggota'),
                'nama_anggota' => $this->input->post('nama_anggota'),
                'alamat' => $this->input->post('alamat'),
                'telepon ' => $this->input->post('telepon'),
                'email' => $this->input->post('email'),
                'tanggal_daftar' => $this->input->post('tanggal_daftar'),
                'status' => $this->input->post('status')
            ];
            $this->anggota_model->insert($data);

            $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
            redirect('anggota');
        }
    }

     public function hapus($no)
    {
        $this->anggota_model->delete($no);
        $this->session->set_flashdata('success', 'Data Berhasil dihapus');

        redirect('anggota');
    }
    

    public function edit($no)
    {
        $data['anggota']= $this->anggota_model->get_by_id($no);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('anggota/edit', $data);
        $this->load->view('templates/footer');
    }
    public function update($no)
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nomor_anggota','nomor_nggota', 'required');
        $this->form_validation->set_rules('nama_anggota','nama_anggota', 'required');
        $this->form_validation->set_rules('alamat','alamat', 'required');
        $this->form_validation->set_rules('telepon','telepon', 'required');
        $this->form_validation->set_rules('email','email', 'required');
        $this->form_validation->set_rules('status','status', 'required');
        if($this->form_validation->run()==FALSE){

        }else{
            $data=[
                'nomor_anggota' => $this->input->post('nomor_anggota'),
                'nama_anggota' => $this->input->post('nama_anggota'),
                'alamat' => $this->input->post('alamat'),
                'telepon ' => $this->input->post('telepon'),
                'email' => $this->input->post('email'),
                'tanggal_daftar' => $this->input->post('tanggal_daftar'),
                'status' => $this->input->post('status')
            ];
            $this->anggota_model->update($no, $data);
            $this->session->set_flashdata('success','Data Berhasil di update');
            redirect('anggota');
        }
    }
}