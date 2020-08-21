<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reject extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }


    public function reject_plain()
    {
        if (!$this->session->userdata('username')) {
            redirect('');
        }

        $data['title'] = 'Reject Plain';
        $data['user'] = $this->Admin_model->getUser('username', $this->session->userdata('username'));
        $data['total_susu'] = $this->security->xss_clean($this->Admin_model->countTotalSusuDiagram('plain'));
        $data['total_susu_perbulan'] = $this->Admin_model->getTotalSusuPerBulan('plain');
        $data['persenan_reject_produksi'] = $this->Admin_model->getPersenanSusu('plain');
        $data['c_chart'] = $this->Admin_model->getLineChartSusu('plain');
        $data['susu'] = $this->Admin_model->getBocorSusu('plain');
        $data['sigma'] = $this->Admin_model->getNilaiSigma('plain');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/reject_plain', $data);
    }

    public function reject_chocolate()
    {
        if (!$this->session->userdata('username')) {
            redirect('');
        }

        $data['title'] = 'Reject Chocolate';
        $data['user'] = $this->Admin_model->getUser('username', $this->session->userdata('username'));
        $data['total_susu'] = $this->security->xss_clean($this->Admin_model->countTotalSusuDiagram('chocolate'));
        $data['total_susu_perbulan'] = $this->Admin_model->getTotalSusuPerBulan('chocolate');
        $data['persenan_reject_produksi'] = $this->Admin_model->getPersenanSusu('chocolate');
        $data['c_chart'] = $this->Admin_model->getLineChartSusu('chocolate');
        $data['susu'] = $this->Admin_model->getBocorSusu('chocolate');
        $data['sigma'] = $this->Admin_model->getNilaiSigma('chocolate');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/reject_chocolate', $data);
    }

    public function reject_nonfat()
    {
        if (!$this->session->userdata('username')) {
            redirect('');
        }

        $data['title'] = 'Reject Non-fat';
        $data['user'] = $this->Admin_model->getUser('username', $this->session->userdata('username'));
        $data['total_susu'] = $this->security->xss_clean($this->Admin_model->countTotalSusuDiagram('not_fat'));
        $data['total_susu_perbulan'] = $this->Admin_model->getTotalSusuPerBulan('not_fat');
        $data['persenan_reject_produksi'] = $this->Admin_model->getPersenanSusu('not_fat');
        $data['c_chart'] = $this->Admin_model->getLineChartSusu('not_fat');
        $data['susu'] = $this->Admin_model->getBocorSusu('not_fat');
        $data['sigma'] = $this->Admin_model->getNilaiSigma('not_fat');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/reject_nonfat', $data);
    }
}
