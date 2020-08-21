<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index()
    {
        if (!$this->session->userdata('username')) {
            redirect('');
        }
        $data['title'] = 'Dashboard';
        $data['user'] = $this->Admin_model->getUser('username', $this->session->userdata('username'));
        $data['total_susu'] = $this->security->xss_clean($this->Admin_model->countTotalSusu('v_total_susu'));
        $data['total_susu_perbulan'] = $this->Admin_model->getSemuaTotalSusuPerBulan();
        $data['persenan_reject_produksi'] = $this->Admin_model->getSemuaPersenanSusu();
        $data['sigma'] = $this->Admin_model->getNilaiSigma('v_total_susu');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
    }

    public function page_404()
    {
        if (!$this->session->userdata('username')) {
            redirect('');
        }
        $data['title'] = '404 Not Found';
        $data['user'] = $this->Admin_model->getUser('username', $this->session->userdata('username'));
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/404page', $data);
    }
}
