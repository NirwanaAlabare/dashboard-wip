<?php
defined('BASEPATH') or exit('No direct script access allowed');

class line13 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard WIP';
        $data['user'] = 'Line 13 | End Line';
        $data['efficiency_line13'] = $this->Model_line13->cari_efficiency_line13();
        $data['defect_line13'] = $this->Model_line13->cari_defect_line13();
        $data['buyer'] = $this->Model_line13->getbuyer();
        $data['no_ws'] = $this->Model_line13->getno_ws();
        $data['actuall13'] = $this->Model_line13->cari_actual();
        $data['day_target13'] = $this->Model_line13->cari_day_target();
        $data['variance'] = $this->Model_line13->cari_variance();
        $data['deffectl13'] = $this->Model_line13->cari_deffect();
        $data['rework'] = $this->Model_line13->cari_rework();
        $data['target_floor'] = $this->Model_line13->cari_target_floor();
        $data['target_menit'] = $this->Model_line13->cari_target_floor_menit();
        $data['jamkerl13'] = $this->Model_line13->cari_jamker();
        $data['smvl13'] = $this->Model_line13->cari_smv();
        $data['menpowerl13'] = $this->Model_line13->cari_menpower();
        $data['rftsl13'] = $this->Model_line13->cari_rfts();

        $this->load->view('templates/header', $data);
        $this->load->view('line13/landingpage', $data);
        $this->load->view('templates/footer', $data);
    }

    public function dashboard1()
    {

        // if (!$this->session->userdata('username')) {
        //     redirect('auth');
        //     log_message('error', 'Some variable did not contain a value.');

        // }

        $data['setting'] = $this->Model_line13->getDashboardSetting();
        $data['title'] = 'Dashboard WIP';
        $data['user'] = 'Line 13 | End Line';
        $data['buyer'] = $this->Model_line13->getbuyer();
        $data['no_ws'] = $this->Model_line13->getno_ws();
        $data['target_floor'] = $this->Model_line13->cari_target_floor();
        $data['target_floordom'] = $this->Model_line13->cari_target_floordom();
        $data['jamkerl13'] = $this->Model_line13->cari_jamker();
        $data['actuall13'] = $this->Model_line13->cari_actual();
        $data['day_target13'] = $this->Model_line13->cari_day_target();
        $data['deffectl13'] = $this->Model_line13->cari_deffect();
        $data['output7'] = $this->Model_line13->cari_output_jam7();
        $data['output8'] = $this->Model_line13->cari_output_jam8();
        $data['output9'] = $this->Model_line13->cari_output_jam9();
        $data['output10'] = $this->Model_line13->cari_output_jam10();
        $data['output11'] = $this->Model_line13->cari_output_jam11();
        $data['output13'] = $this->Model_line13->cari_output_jam13();
        $data['output14'] = $this->Model_line13->cari_output_jam14();
        $data['output15'] = $this->Model_line13->cari_output_jam15();
        $data['output16'] = $this->Model_line13->cari_output_jam16();
        //deffect
        $data['deffect7'] = $this->Model_line13->cari_deffect_jam7();
        $data['deffect8'] = $this->Model_line13->cari_deffect_jam8();
        $data['deffect9'] = $this->Model_line13->cari_deffect_jam9();
        $data['deffect10'] = $this->Model_line13->cari_deffect_jam10();
        $data['deffect11'] = $this->Model_line13->cari_deffect_jam11();
        $data['deffect13'] = $this->Model_line13->cari_deffect_jam13();
        $data['deffect14'] = $this->Model_line13->cari_deffect_jam14();
        $data['deffect15'] = $this->Model_line13->cari_deffect_jam15();
        $data['deffect16'] = $this->Model_line13->cari_deffect_jam16();

        //deffect
        $data['rework7'] = $this->Model_line13->cari_rework_jam7();
        $data['rework8'] = $this->Model_line13->cari_rework_jam8();
        $data['rework9'] = $this->Model_line13->cari_rework_jam9();
        $data['rework10'] = $this->Model_line13->cari_rework_jam10();
        $data['rework11'] = $this->Model_line13->cari_rework_jam11();
        $data['rework13'] = $this->Model_line13->cari_rework_jam13();
        $data['rework14'] = $this->Model_line13->cari_rework_jam14();
        $data['rework15'] = $this->Model_line13->cari_rework_jam15();
        $data['rework16'] = $this->Model_line13->cari_rework_jam16();
        $data['target_menit'] = $this->Model_line13->cari_target_floor_menit();
        $data['smvl13'] = $this->Model_line13->cari_smv();
        $data['menpowerl13'] = $this->Model_line13->cari_menpower();
        //data
        $data['datajam7'] = $this->Model_line13->cari_datajam7();
        $data['datajam8'] = $this->Model_line13->cari_datajam8();
        $data['datajam9'] = $this->Model_line13->cari_datajam9();
        $data['datajam10'] = $this->Model_line13->cari_datajam10();
        $data['datajam11'] = $this->Model_line13->cari_datajam11();
        $data['datajam13'] = $this->Model_line13->cari_datajam13();
        $data['datajam14'] = $this->Model_line13->cari_datajam14();
        $data['datajam15'] = $this->Model_line13->cari_datajam15();
        // $data['datajam16'] = $this->Model_line13->cari_datajam16();

        $this->load->view('templates/header', $data);
        $html = $this->load->view('line13/landingpage2', $data, true);
        // $this->load->view('templates/sidebar', $data);
        $this->load->view('line13/landingpage2', $data);
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

        $data['setting'] = $this->Model_line13->getDashboardSetting();
        $data['title'] = 'Dashboard WIP';
        $data['user'] = 'Line 13 | End Line';
        $data['efficiency_line13'] = $this->Model_line13->cari_efficiency_line13();
        $data['defect_line13'] = $this->Model_line13->cari_defect_line13();
        $data['buyer'] = $this->Model_line13->getbuyer();
        $data['no_ws'] = $this->Model_line13->getno_ws();
        $data['actuall13'] = $this->Model_line13->cari_actual();
        $data['day_target13'] = $this->Model_line13->cari_day_target();
        $data['variance'] = $this->Model_line13->cari_variance();
        $data['deffectl13'] = $this->Model_line13->cari_deffect();
        $data['rework'] = $this->Model_line13->cari_rework();
        $data['target_floor'] = $this->Model_line13->cari_target_floor();
        $data['target_menit'] = $this->Model_line13->cari_target_floor_menit();
        $data['jamkerl13'] = $this->Model_line13->cari_jamker();
        $data['smvl13'] = $this->Model_line13->cari_smv();
        $data['menpowerl13'] = $this->Model_line13->cari_menpower();
        $data['rftsl13'] = $this->Model_line13->cari_rfts();

        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        $this->load->view('line13/landingpage3', $data);
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

        $data['setting'] = $this->Model_line13->getDashboardSetting();
        $data['title'] = 'Dashboard WIP';
        $data['user'] = 'Line 13 | End Line';
        $data['efficiency_line13'] = $this->Model_line13->cari_efficiency_line13();
        $data['defect_line13'] = $this->Model_line13->cari_defect_line13();
        $data['buyer'] = $this->Model_line13->getbuyer();
        $data['no_ws'] = $this->Model_line13->getno_ws();
        $data['actuall13'] = $this->Model_line13->cari_actual();
        $data['day_target13'] = $this->Model_line13->cari_day_target();
        $data['variance'] = $this->Model_line13->cari_variance();
        $data['deffectl13'] = $this->Model_line13->cari_deffect();
        $data['rework'] = $this->Model_line13->cari_rework();
        $data['target_floor'] = $this->Model_line13->cari_target_floor();
        $data['target_menit'] = $this->Model_line13->cari_target_floor_menit();
        $data['jamkerl13'] = $this->Model_line13->cari_jamker();
        $data['smvl13'] = $this->Model_line13->cari_smv();
        $data['menpowerl13'] = $this->Model_line13->cari_menpower();
        $data['list_defect'] = $this->Model_line13->cari_listdefect();
        $data['link_gambar'] = $this->Model_line13->cari_link_gambar();
        $data['link_gambar1'] = $this->Model_line13->cari_link_gambar1();
        $data['positiondefect'] = $this->Model_line13->cari_positiondefect();

        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        $this->load->view('line13/landingpage4', $data);
        $this->load->view('templates/footer', $data);
        // redirect('landingpage');
        // redirect('landingpage/index');
    }


    public function block_page()
    {
        $this->load->view('block_page/block_page');
    }
}
