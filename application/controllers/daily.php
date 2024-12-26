<?php
defined('BASEPATH') or exit('No direct script access allowed');

class daily extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //is_logged_in();
    }

    public function index()
    {


        $data['title'] = 'Dashboard WIP';
        $data['user'] = 'daily';
        // $data['efficiency_daily'] = $this->Model_daily->cari_efficiency_daily();
        $data['harikerja'] = $this->Model_daily->cari_harikerja();
        $data['effi_factory'] = $this->Model_daily->cari_effi_factory();
        $data['target_effi_factory'] = $this->Model_daily->cari_target_effi_factory();
        $data['rft_factory'] = $this->Model_daily->cari_rft_factory();
        // $data['jamker'] = $this->Model_daily->cari_jamker();
        // $data['actual'] = $this->Model_daily->cari_actual();
        // $data['smv'] = $this->Model_daily->cari_smv();
        // $data['menpower'] = $this->Model_daily->cari_menpower();

        $this->load->view('templates_daily/header', $data);
        $this->load->view('daily/landingpage', $data);
        $this->load->view('templates_daily/footer', $data);
    }


    // public function chief_daily1()
    // {


    //     $data['title'] = 'Dashboard WIP';
    //     $data['user'] = 'chief1';
    //     // $data['efficiency_daily'] = $this->Model_daily->cari_efficiency_daily();
    //     $data['harikerja'] = $this->Model_daily->cari_harikerja();
    //     $data['effi_factory'] = $this->Model_daily->cari_effi_factory();
    //     $data['target_effi_factory'] = $this->Model_daily->cari_target_effi_factory();
    //     $data['rft_factory'] = $this->Model_daily->cari_rft_factory();
    //     $data['effi_line07'] = $this->Model_daily->cari_effi_line07();
    //     // $data['jamker'] = $this->Model_daily->cari_jamker();
    //     // $data['actual'] = $this->Model_daily->cari_actual();
    //     // $data['smv'] = $this->Model_daily->cari_smv();
    //     // $data['menpower'] = $this->Model_daily->cari_menpower();

    //     $this->load->view('templates_daily/header', $data);
    //     $this->load->view('daily/landingpage2', $data);
    //     $this->load->view('templates_daily/footer', $data);
    // }

    public function line_daily()
    {


        $data['title'] = 'Dashboard WIP';
        $data['user'] = 'chief1';
        // $data['efficiency_daily'] = $this->Model_daily->cari_efficiency_daily();
        // $this->Model_daily->call_get_rank();
        $data['harikerja'] = $this->Model_daily->cari_harikerja();
        $data['output_lead1'] = $this->Model_daily->cari_output_lead1();
        $data['output_lead2'] = $this->Model_daily->cari_output_lead2();
        $data['output_lead3'] = $this->Model_daily->cari_output_lead3();
        $data['output_lead4'] = $this->Model_daily->cari_output_lead4();
        $data['output_lead5'] = $this->Model_daily->cari_output_lead5();
        $data['output_lead6'] = $this->Model_daily->cari_output_lead6();
        $data['output_lead7'] = $this->Model_daily->cari_output_lead7();
        $data['slide_lead'] = $this->Model_daily->cari_slide_lead();
        $data['effi_line__'] = $this->Model_daily->cari_effi_line('line___');
        $data['effi_line01'] = $this->Model_daily->cari_effi_line('line_01');
        $data['effi_line02'] = $this->Model_daily->cari_effi_line('line_02');
        $data['effi_line03'] = $this->Model_daily->cari_effi_line('line_03');
        $data['effi_line04'] = $this->Model_daily->cari_effi_line('line_04');
        $data['effi_line05'] = $this->Model_daily->cari_effi_line('line_05');
        $data['effi_line06'] = $this->Model_daily->cari_effi_line('line_06');
        $data['effi_line07'] = $this->Model_daily->cari_effi_line('line_07');
        $data['effi_line08'] = $this->Model_daily->cari_effi_line('line_08');
        $data['effi_line09'] = $this->Model_daily->cari_effi_line('line_09');
        $data['effi_line10'] = $this->Model_daily->cari_effi_line('line_10');
        $data['effi_line11'] = $this->Model_daily->cari_effi_line('line_11');
        $data['effi_line12'] = $this->Model_daily->cari_effi_line('line_12');
        $data['effi_line13'] = $this->Model_daily->cari_effi_line('line_13');
        $data['effi_line14'] = $this->Model_daily->cari_effi_line('line_14');
        $data['effi_line15'] = $this->Model_daily->cari_effi_line('line_15');
        $data['effi_line16'] = $this->Model_daily->cari_effi_line('line_16');
        $data['effi_line17'] = $this->Model_daily->cari_effi_line('line_17');
        $data['effi_line18'] = $this->Model_daily->cari_effi_line('line_18');
        $data['effi_line19'] = $this->Model_daily->cari_effi_line('line_19');
        $data['effi_line20'] = $this->Model_daily->cari_effi_line('line_20');
        $data['effi_line21'] = $this->Model_daily->cari_effi_line('line_21');
        $data['effi_line22'] = $this->Model_daily->cari_effi_line('line_22');
        $data['effi_line23'] = $this->Model_daily->cari_effi_line('line_23');
        $data['effi_line24'] = $this->Model_daily->cari_effi_line('line_24');
        $data['effi_line25'] = $this->Model_daily->cari_effi_line('line_25');
        $data['effi_line26'] = $this->Model_daily->cari_effi_line('line_26');
        $data['effi_line27'] = $this->Model_daily->cari_effi_line('line_27');
        $data['effi_line28'] = $this->Model_daily->cari_effi_line('line_28');
        $data['effi_line29'] = $this->Model_daily->cari_effi_line('line_29');

        $data['rft_line__'] = $this->Model_daily->cari_rft_line('line___');
        $data['rft_line01'] = $this->Model_daily->cari_rft_line('line_01');
        $data['rft_line02'] = $this->Model_daily->cari_rft_line('line_02');
        $data['rft_line03'] = $this->Model_daily->cari_rft_line('line_03');
        $data['rft_line04'] = $this->Model_daily->cari_rft_line('line_04');
        $data['rft_line05'] = $this->Model_daily->cari_rft_line('line_05');
        $data['rft_line06'] = $this->Model_daily->cari_rft_line('line_06');
        $data['rft_line07'] = $this->Model_daily->cari_rft_line('line_07');
        $data['rft_line08'] = $this->Model_daily->cari_rft_line('line_08');
        $data['rft_line09'] = $this->Model_daily->cari_rft_line('line_09');
        $data['rft_line10'] = $this->Model_daily->cari_rft_line('line_10');
        $data['rft_line11'] = $this->Model_daily->cari_rft_line('line_11');
        $data['rft_line12'] = $this->Model_daily->cari_rft_line('line_12');
        $data['rft_line13'] = $this->Model_daily->cari_rft_line('line_13');
        $data['rft_line14'] = $this->Model_daily->cari_rft_line('line_14');
        $data['rft_line15'] = $this->Model_daily->cari_rft_line('line_15');
        $data['rft_line16'] = $this->Model_daily->cari_rft_line('line_16');
        $data['rft_line17'] = $this->Model_daily->cari_rft_line('line_17');
        $data['rft_line18'] = $this->Model_daily->cari_rft_line('line_18');
        $data['rft_line19'] = $this->Model_daily->cari_rft_line('line_19');
        $data['rft_line20'] = $this->Model_daily->cari_rft_line('line_20');
        $data['rft_line21'] = $this->Model_daily->cari_rft_line('line_21');
        $data['rft_line22'] = $this->Model_daily->cari_rft_line('line_22');
        $data['rft_line23'] = $this->Model_daily->cari_rft_line('line_23');
        $data['rft_line24'] = $this->Model_daily->cari_rft_line('line_24');
        $data['rft_line25'] = $this->Model_daily->cari_rft_line('line_25');
        $data['rft_line26'] = $this->Model_daily->cari_rft_line('line_26');
        $data['rft_line27'] = $this->Model_daily->cari_rft_line('line_27');
        $data['rft_line28'] = $this->Model_daily->cari_rft_line('line_28');
        $data['rft_line29'] = $this->Model_daily->cari_rft_line('line_29');

        $this->load->view('templates_daily/header', $data);
        $this->load->view('daily/landingpage4', $data);
        $this->load->view('templates_daily/footer', $data);
    }


    public function chief_daily()
    {


        $data['title'] = 'Dashboard WIP';
        $data['user'] = 'chief_all';
        // $data['efficiency_daily'] = $this->Model_daily->cari_efficiency_daily();
        // $this->Model_daily->call_chief_effi();
        // $this->Model_daily->call_chief_rft();
        $data['harikerja'] = $this->Model_daily->cari_harikerja();
        // $data['effi_factory'] = $this->Model_daily->cari_effi_factory();
        // $data['target_effi_factory'] = $this->Model_daily->cari_target_effi_factory();
        // $data['rft_factory'] = $this->Model_daily->cari_rft_factory();
        // $data['effi_line07'] = $this->Model_daily->cari_effi_line07();
        $data['effi_rudy'] = $this->Model_daily->cari_effi_chiefline(1);
        $data['rft_rudy'] = $this->Model_daily->cari_rft_chiefline(1);
        $data['effi_usup'] = $this->Model_daily->cari_effi_chiefline(3);
        $data['rft_usup'] = $this->Model_daily->cari_rft_chiefline(3);
        $data['effi_linda'] = $this->Model_daily->cari_effi_chiefline(4);
        $data['rft_linda'] = $this->Model_daily->cari_rft_chiefline(4);
        $data['effi_feri'] = $this->Model_daily->cari_effi_chiefline(5);
        $data['rft_feri'] = $this->Model_daily->cari_rft_chiefline(5);
        $data['effi_dadang'] = $this->Model_daily->cari_effi_chiefline(2);
        $data['rft_dadang'] = $this->Model_daily->cari_rft_chiefline(2);
        $data['output_chief1'] = $this->Model_daily->cari_output_chief1();
        $data['output_chief2'] = $this->Model_daily->cari_output_chief2();
        $data['output_chief3'] = $this->Model_daily->cari_output_chief3();
        $data['slide_chief'] = $this->Model_daily->cari_slide_chief();
        // $data['actual'] = $this->Model_daily->cari_actual();
        // $data['smv'] = $this->Model_daily->cari_smv();
        // $data['menpower'] = $this->Model_daily->cari_menpower();

        $this->load->view('templates_daily/header', $data);
        $this->load->view('daily/landingpage3', $data);
        $this->load->view('templates_daily/footer', $data);
    }

    public function factory_daily()
    {


        $data['title'] = 'Dashboard WIP';
        $data['user'] = 'daily';
        // $data['efficiency_daily'] = $this->Model_daily->cari_efficiency_daily();
        $data['harikerja'] = $this->Model_daily->cari_harikerja();
        $data['effi_factory'] = $this->Model_daily->cari_effi_factory();
        $data['target_effi_factory'] = $this->Model_daily->cari_target_effi_factory();
        $data['rft_factory'] = $this->Model_daily->cari_rft_factory();
        // $data['jamker'] = $this->Model_daily->cari_jamker();
        // $data['actual'] = $this->Model_daily->cari_actual();
        // $data['smv'] = $this->Model_daily->cari_smv();
        // $data['menpower'] = $this->Model_daily->cari_menpower();

        $this->load->view('templates_daily/header', $data);
        $this->load->view('daily/landingpage5', $data);
        $this->load->view('templates_daily/footer', $data);
    }


    public function block_page()
    {
        $this->load->view('block_page/block_page');
    }
}
