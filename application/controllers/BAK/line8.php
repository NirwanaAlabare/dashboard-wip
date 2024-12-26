<?php
defined('BASEPATH') or exit('No direct script access allowed');

class line8 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //is_logged_in();
    }

    public function index()
    {


        $data['title'] = 'Dashboard WIP';
        $data['user'] = 'Line 08 | End Line';
        $data['efficiency_line8'] = $this->Model_line8->cari_efficiency_line8();
        $data['defect_line8'] = $this->Model_line8->cari_defect_line8();
        $data['buyer'] = $this->Model_line8->getbuyer();
        $data['no_ws'] = $this->Model_line8->getno_ws();
        $data['actuall8'] = $this->Model_line8->cari_actual();
        $data['day_target8'] = $this->Model_line8->cari_day_target();
        $data['variance'] = $this->Model_line8->cari_variance();
        $data['deffectl8'] = $this->Model_line8->cari_deffect();
        $data['rework'] = $this->Model_line8->cari_rework();
        $data['target_floor'] = $this->Model_line8->cari_target_floor();
        $data['target_menit'] = $this->Model_line8->cari_target_floor_menit();
        $data['jamkerl8'] = $this->Model_line8->cari_jamker();
        $data['smvl8'] = $this->Model_line8->cari_smv();
        $data['menpowerl8'] = $this->Model_line8->cari_menpower();

        $this->load->view('templates/header', $data);
        $this->load->view('line8/landingpage', $data);
        $this->load->view('templates/footer', $data);
    }

    public function dashboard1()
    {

        // if (!$this->session->userdata('username')) {
        //     redirect('auth');
        //     log_message('error', 'Some variable did not contain a value.');

        // }

        $data['title'] = 'Dashboard WIP';
        $data['user'] = 'Line 08 | End Line';
        $data['buyer'] = $this->Model_line8->getbuyer();
        $data['no_ws'] = $this->Model_line8->getno_ws();
        $data['target_floor'] = $this->Model_line8->cari_target_floor();
        $data['target_floordom'] = $this->Model_line8->cari_target_floordom();
        $data['jamkerl8'] = $this->Model_line8->cari_jamker();
        $data['actuall8'] = $this->Model_line8->cari_actual();
        $data['day_target8'] = $this->Model_line8->cari_day_target();
        $data['deffectl8'] = $this->Model_line8->cari_deffect();
        $data['output7'] = $this->Model_line8->cari_output_jam7();
        $data['output8'] = $this->Model_line8->cari_output_jam8();
        $data['output9'] = $this->Model_line8->cari_output_jam9();
        $data['output10'] = $this->Model_line8->cari_output_jam10();
        $data['output11'] = $this->Model_line8->cari_output_jam11();
        $data['output13'] = $this->Model_line8->cari_output_jam13();
        $data['output14'] = $this->Model_line8->cari_output_jam14();
        $data['output15'] = $this->Model_line8->cari_output_jam15();
        $data['output16'] = $this->Model_line8->cari_output_jam16();
        //deffect
        $data['deffect7'] = $this->Model_line8->cari_deffect_jam7();
        $data['deffect8'] = $this->Model_line8->cari_deffect_jam8();
        $data['deffect9'] = $this->Model_line8->cari_deffect_jam9();
        $data['deffect10'] = $this->Model_line8->cari_deffect_jam10();
        $data['deffect11'] = $this->Model_line8->cari_deffect_jam11();
        $data['deffect13'] = $this->Model_line8->cari_deffect_jam13();
        $data['deffect14'] = $this->Model_line8->cari_deffect_jam14();
        $data['deffect15'] = $this->Model_line8->cari_deffect_jam15();
        $data['deffect16'] = $this->Model_line8->cari_deffect_jam16();

        //deffect
        $data['rework7'] = $this->Model_line8->cari_rework_jam7();
        $data['rework8'] = $this->Model_line8->cari_rework_jam8();
        $data['rework9'] = $this->Model_line8->cari_rework_jam9();
        $data['rework10'] = $this->Model_line8->cari_rework_jam10();
        $data['rework11'] = $this->Model_line8->cari_rework_jam11();
        $data['rework13'] = $this->Model_line8->cari_rework_jam13();
        $data['rework14'] = $this->Model_line8->cari_rework_jam14();
        $data['rework15'] = $this->Model_line8->cari_rework_jam15();
        $data['rework16'] = $this->Model_line8->cari_rework_jam16();
        $data['target_menit'] = $this->Model_line8->cari_target_floor_menit();
        $data['smvl8'] = $this->Model_line8->cari_smv();
        $data['menpowerl8'] = $this->Model_line8->cari_menpower();


        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        $this->load->view('line8/landingpage2', $data);
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
        $data['user'] = 'Line 08 | End Line';
        $data['efficiency_line8'] = $this->Model_line8->cari_efficiency_line8();
        $data['defect_line8'] = $this->Model_line8->cari_defect_line8();
        $data['buyer'] = $this->Model_line8->getbuyer();
        $data['no_ws'] = $this->Model_line8->getno_ws();
        $data['actuall8'] = $this->Model_line8->cari_actual();
        $data['day_target8'] = $this->Model_line8->cari_day_target();
        $data['variance'] = $this->Model_line8->cari_variance();
        $data['deffectl8'] = $this->Model_line8->cari_deffect();
        $data['rework'] = $this->Model_line8->cari_rework();
        $data['target_floor'] = $this->Model_line8->cari_target_floor();
        $data['target_menit'] = $this->Model_line8->cari_target_floor_menit();
        $data['jamkerl8'] = $this->Model_line8->cari_jamker();
        $data['smvl8'] = $this->Model_line8->cari_smv();
        $data['menpowerl8'] = $this->Model_line8->cari_menpower();

        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        $this->load->view('line8/landingpage3', $data);
        $this->load->view('templates/footer', $data);
        // redirect('landingpage');
        // redirect('landingpage/index');
    }


     public function dashboard3()
    {

        // if (!$this->session->userdata('username')) {
        //     redirect('auth');
        //     log_message('error', 'Some variable did not contain a value.');

        // }

        $data['title'] = 'Dashboard WIP';
        $data['user'] = 'Line 08 | End Line';
        $data['efficiency_line8'] = $this->Model_line8->cari_efficiency_line8();
        $data['defect_line8'] = $this->Model_line8->cari_defect_line8();
        $data['buyer'] = $this->Model_line8->getbuyer();
        $data['no_ws'] = $this->Model_line8->getno_ws();
        $data['actuall8'] = $this->Model_line8->cari_actual();
        $data['day_target8'] = $this->Model_line8->cari_day_target();
        $data['variance'] = $this->Model_line8->cari_variance();
        $data['deffectl8'] = $this->Model_line8->cari_deffect();
        $data['rework'] = $this->Model_line8->cari_rework();
        $data['target_floor'] = $this->Model_line8->cari_target_floor();
        $data['target_menit'] = $this->Model_line8->cari_target_floor_menit();
        $data['jamkerl8'] = $this->Model_line8->cari_jamker();
        $data['smvl8'] = $this->Model_line8->cari_smv();
        $data['menpowerl8'] = $this->Model_line8->cari_menpower();
        $data['list_defect'] = $this->Model_line8->cari_listdefect();

        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        $this->load->view('line8/landingpage4', $data);
        $this->load->view('templates/footer', $data);
        // redirect('landingpage');
        // redirect('landingpage/index');
    }


    public function block_page()
    {
        $this->load->view('block_page/block_page');
    }
}
