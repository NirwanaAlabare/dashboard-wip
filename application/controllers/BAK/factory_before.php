<?php
defined('BASEPATH') or exit('No direct script access allowed');

class factory_before extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //is_logged_in();
    }

    public function index()
    {


        $data['title'] = 'Dashboard WIP';
        $data['user'] = 'factory';
        // $data['efficiency_factory'] = $this->Model_factory_before->cari_efficiency_factory();
        $data['under5line'] = $this->Model_factory_before->cari_under5line();
        $data['top5line'] = $this->Model_factory_before->cari_top5line();
        $data['sum_effi'] = $this->Model_factory_before->cari_sum_effi();
        $data['sum_rft'] = $this->Model_factory_before->cari_sum_rft();
        $data['defectno1'] = $this->Model_factory_before->cari_defectno1();
        $data['val_defectno1'] = $this->Model_factory_before->cari_val_defectno1();
        $data['defectno2'] = $this->Model_factory_before->cari_defectno2();
        $data['val_defectno2'] = $this->Model_factory_before->cari_val_defectno2();
        $data['defectno3'] = $this->Model_factory_before->cari_defectno3();
        $data['val_defectno3'] = $this->Model_factory_before->cari_val_defectno3();
        $data['defectno4'] = $this->Model_factory_before->cari_defectno4();
        $data['val_defectno4'] = $this->Model_factory_before->cari_val_defectno4();
        $data['defectno5'] = $this->Model_factory_before->cari_defectno5();
        $data['val_defectno5'] = $this->Model_factory_before->cari_val_defectno5();
        $data['tanggal_kerja'] = $this->Model_factory_before->cari_tanggal();
        // $data['actual'] = $this->Model_factory_before->cari_actual();
        // $data['smv'] = $this->Model_factory_before->cari_smv();
        // $data['menpower'] = $this->Model_factory_before->cari_menpower();

        $this->load->view('templates_factory/header', $data);
        $this->load->view('factory_before/landingpage', $data);
        $this->load->view('templates_factory/footer', $data);
    }




    public function block_page()
    {
        $this->load->view('block_page/block_page');
    }
}
