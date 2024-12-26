<?php
defined('BASEPATH') or exit('No direct script access allowed');

class line2 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //is_logged_in();
    }

    public function index()
    {


        $data['title'] = 'Dashboard WIP';
        $data['user'] = 'Line 02 | End Line';
        $data['efficiency_line2'] = $this->Model_line2->cari_efficiency_line2();
        $data['defect_line2'] = $this->Model_line2->cari_defect_line2();
        $data['buyer'] = $this->Model_line2->getbuyer();
        $data['no_ws'] = $this->Model_line2->getno_ws();
        $data['actual'] = $this->Model_line2->cari_actual();
        $data['day_target'] = $this->Model_line2->cari_day_target();
        $data['variance'] = $this->Model_line2->cari_variance();
        $data['deffect'] = $this->Model_line2->cari_deffect();
        $data['rework'] = $this->Model_line2->cari_rework();
        $data['target_floor'] = $this->Model_line2->cari_target_floor();
        $data['target_menit'] = $this->Model_line2->cari_target_floor_menit();

        $this->load->view('templates/header', $data);
        $this->load->view('line2/landingpage', $data);
        $this->load->view('templates/footer', $data);
    }

    public function dashboard1()
    {

        // if (!$this->session->userdata('username')) {
        //     redirect('auth');
        //     log_message('error', 'Some variable did not contain a value.');

        // }

        $data['title'] = 'Dashboard WIP';
        $data['user'] = 'Line 02 | End Line';
        $data['buyer'] = $this->Model_line2->getbuyer();
        $data['no_ws'] = $this->Model_line2->getno_ws();
        $data['target_floor'] = $this->Model_line2->cari_target_floor();
        $data['target_floordom'] = $this->Model_line2->cari_target_floordom();
        $data['jamker'] = $this->Model_line2->cari_jamker();
        $data['actual'] = $this->Model_line2->cari_actual();
        $data['day_target'] = $this->Model_line2->cari_day_target();
        $data['deffect'] = $this->Model_line2->cari_deffect();
        $data['output7'] = $this->Model_line2->cari_output_jam7();
        $data['output8'] = $this->Model_line2->cari_output_jam8();
        $data['output9'] = $this->Model_line2->cari_output_jam9();
        $data['output10'] = $this->Model_line2->cari_output_jam10();
        $data['output11'] = $this->Model_line2->cari_output_jam11();
        $data['output13'] = $this->Model_line2->cari_output_jam13();
        $data['output14'] = $this->Model_line2->cari_output_jam14();
        $data['output15'] = $this->Model_line2->cari_output_jam15();
        $data['output16'] = $this->Model_line2->cari_output_jam16();
        //deffect
        $data['deffect7'] = $this->Model_line2->cari_deffect_jam7();
        $data['deffect8'] = $this->Model_line2->cari_deffect_jam8();
        $data['deffect9'] = $this->Model_line2->cari_deffect_jam9();
        $data['deffect10'] = $this->Model_line2->cari_deffect_jam10();
        $data['deffect11'] = $this->Model_line2->cari_deffect_jam11();
        $data['deffect13'] = $this->Model_line2->cari_deffect_jam13();
        $data['deffect14'] = $this->Model_line2->cari_deffect_jam14();
        $data['deffect15'] = $this->Model_line2->cari_deffect_jam15();
        $data['deffect16'] = $this->Model_line2->cari_deffect_jam16();


        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        $this->load->view('line2/landingpage2', $data);
        $this->load->view('templates/footer', $data);
        // redirect('landingpage');
        // redirect('landingpage/index');
    }


    public function dashboard2()
    {

        // if (!$this->session->userdata('username')) {
        //     redirect('auth');
        //     log_message('error', 'Some variable did not contain a value.');

        // }

        $data['title'] = 'Dashboard WIP';
        $data['user'] = 'Line 02 | End Line';
        $data['efficiency_line2'] = $this->Model_line2->cari_efficiency_line2();
        $data['defect_line2'] = $this->Model_line2->cari_defect_line2();
        $data['buyer'] = $this->Model_line2->getbuyer();
        $data['no_ws'] = $this->Model_line2->getno_ws();
        $data['actual'] = $this->Model_line2->cari_actual();
        $data['day_target'] = $this->Model_line2->cari_day_target();
        $data['variance'] = $this->Model_line2->cari_variance();
        $data['deffect'] = $this->Model_line2->cari_deffect();
        $data['rework'] = $this->Model_line2->cari_rework();
        $data['target_floor'] = $this->Model_line2->cari_target_floor();
        $data['target_menit'] = $this->Model_line2->cari_target_floor_menit();
        $data['jamker'] = $this->Model_line2->cari_jamker();

        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        $this->load->view('line2/landingpage3', $data);
        $this->load->view('templates/footer', $data);
        // redirect('landingpage');
        // redirect('landingpage/index');
    }


    public function block_page()
    {
        $this->load->view('block_page/block_page');
    }
}
