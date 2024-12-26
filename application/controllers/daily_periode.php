<?php
defined('BASEPATH') or exit('No direct script access allowed');

class daily_periode extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //is_logged_in();
    }

    public function index()
    {


        $data['title'] = 'Dashboard WIP';
        $data['user'] = 'daily_periode';
        // $data['efficiency_daily_periode'] = $this->Model_daily_periode->cari_efficiency_daily_periode();
        $data['harikerja'] = $this->Model_daily_periode->cari_harikerja();
        $data['effi_factory'] = $this->Model_daily_periode->cari_effi_factory();
        $data['target_effi_factory'] = $this->Model_daily_periode->cari_target_effi_factory();
        $data['rft_factory'] = $this->Model_daily_periode->cari_rft_factory();
        // $data['jamker'] = $this->Model_daily_periode->cari_jamker();
        // $data['actual'] = $this->Model_daily_periode->cari_actual();
        // $data['smv'] = $this->Model_daily_periode->cari_smv();
        // $data['menpower'] = $this->Model_daily_periode->cari_menpower();

        $this->load->view('templates_daily_periode/header', $data);
        $this->load->view('daily_periode/landingpage', $data);
        $this->load->view('templates_daily_periode/footer', $data);
    }



    public function line_daily_periode($bulan = null, $tahun = null)
    {


        $data['title'] = 'Dashboard WIP';
        $data['user'] = 'chief1';
        $bulan = $bulan;
        $tahun = $tahun;
        // $data['efficiency_daily_periode'] = $this->Model_daily_periode->cari_efficiency_daily_periode();
        // $this->Model_daily_periode->call_get_rank();
        $data['harikerja'] = $this->Model_daily_periode->cari_harikerja($bulan, $tahun);
        $data['output_lead1'] = $this->Model_daily_periode->cari_output_lead1();
        $data['output_lead2'] = $this->Model_daily_periode->cari_output_lead2();
        $data['output_lead3'] = $this->Model_daily_periode->cari_output_lead3();
        $data['output_lead4'] = $this->Model_daily_periode->cari_output_lead4();
        $data['output_lead5'] = $this->Model_daily_periode->cari_output_lead5();
        $data['output_lead6'] = $this->Model_daily_periode->cari_output_lead6();
        $data['output_lead7'] = $this->Model_daily_periode->cari_output_lead7();
        $data['output_lead8'] = $this->Model_daily_periode->cari_output_lead8();
        $data['slide_lead'] = $this->Model_daily_periode->cari_slide_lead();
        $data['effi_line__'] = $this->Model_daily_periode->cari_effi_line('line___', $bulan, $tahun);
        $data['effi_line01'] = $this->Model_daily_periode->cari_effi_line('line_01', $bulan, $tahun);
        $data['effi_line02'] = $this->Model_daily_periode->cari_effi_line('line_02', $bulan, $tahun);
        $data['effi_line03'] = $this->Model_daily_periode->cari_effi_line('line_03', $bulan, $tahun);
        $data['effi_line04'] = $this->Model_daily_periode->cari_effi_line('line_04', $bulan, $tahun);
        $data['effi_line05'] = $this->Model_daily_periode->cari_effi_line('line_05', $bulan, $tahun);
        $data['effi_line06'] = $this->Model_daily_periode->cari_effi_line('line_06', $bulan, $tahun);
        $data['effi_line07'] = $this->Model_daily_periode->cari_effi_line('line_07', $bulan, $tahun);
        $data['effi_line08'] = $this->Model_daily_periode->cari_effi_line('line_08', $bulan, $tahun);
        $data['effi_line09'] = $this->Model_daily_periode->cari_effi_line('line_09', $bulan, $tahun);
        $data['effi_line10'] = $this->Model_daily_periode->cari_effi_line('line_10', $bulan, $tahun);
        $data['effi_line11'] = $this->Model_daily_periode->cari_effi_line('line_11', $bulan, $tahun);
        $data['effi_line12'] = $this->Model_daily_periode->cari_effi_line('line_12', $bulan, $tahun);
        $data['effi_line13'] = $this->Model_daily_periode->cari_effi_line('line_13', $bulan, $tahun);
        $data['effi_line14'] = $this->Model_daily_periode->cari_effi_line('line_14', $bulan, $tahun);
        $data['effi_line15'] = $this->Model_daily_periode->cari_effi_line('line_15', $bulan, $tahun);
        $data['effi_line16'] = $this->Model_daily_periode->cari_effi_line('line_16', $bulan, $tahun);
        $data['effi_line17'] = $this->Model_daily_periode->cari_effi_line('line_17', $bulan, $tahun);
        $data['effi_line18'] = $this->Model_daily_periode->cari_effi_line('line_18', $bulan, $tahun);
        $data['effi_line19'] = $this->Model_daily_periode->cari_effi_line('line_19', $bulan, $tahun);
        $data['effi_line20'] = $this->Model_daily_periode->cari_effi_line('line_20', $bulan, $tahun);
        $data['effi_line21'] = $this->Model_daily_periode->cari_effi_line('line_21', $bulan, $tahun);
        $data['effi_line22'] = $this->Model_daily_periode->cari_effi_line('line_22', $bulan, $tahun);
        $data['effi_line23'] = $this->Model_daily_periode->cari_effi_line('line_23', $bulan, $tahun);
        $data['effi_line24'] = $this->Model_daily_periode->cari_effi_line('line_24', $bulan, $tahun);
        $data['effi_line25'] = $this->Model_daily_periode->cari_effi_line('line_25', $bulan, $tahun);
        $data['effi_line26'] = $this->Model_daily_periode->cari_effi_line('line_26', $bulan, $tahun);
        $data['effi_line27'] = $this->Model_daily_periode->cari_effi_line('line_27', $bulan, $tahun);
        $data['effi_line28'] = $this->Model_daily_periode->cari_effi_line('line_28', $bulan, $tahun);
        $data['effi_line29'] = $this->Model_daily_periode->cari_effi_line('line_29', $bulan, $tahun);

        $data['rft_line__'] = $this->Model_daily_periode->cari_rft_line('line___', $bulan, $tahun);
        $data['rft_line01'] = $this->Model_daily_periode->cari_rft_line('line_01', $bulan, $tahun);
        $data['rft_line02'] = $this->Model_daily_periode->cari_rft_line('line_02', $bulan, $tahun);
        $data['rft_line03'] = $this->Model_daily_periode->cari_rft_line('line_03', $bulan, $tahun);
        $data['rft_line04'] = $this->Model_daily_periode->cari_rft_line('line_04', $bulan, $tahun);
        $data['rft_line05'] = $this->Model_daily_periode->cari_rft_line('line_05', $bulan, $tahun);
        $data['rft_line06'] = $this->Model_daily_periode->cari_rft_line('line_06', $bulan, $tahun);
        $data['rft_line07'] = $this->Model_daily_periode->cari_rft_line('line_07', $bulan, $tahun);
        $data['rft_line08'] = $this->Model_daily_periode->cari_rft_line('line_08', $bulan, $tahun);
        $data['rft_line09'] = $this->Model_daily_periode->cari_rft_line('line_09', $bulan, $tahun);
        $data['rft_line10'] = $this->Model_daily_periode->cari_rft_line('line_10', $bulan, $tahun);
        $data['rft_line11'] = $this->Model_daily_periode->cari_rft_line('line_11', $bulan, $tahun);
        $data['rft_line12'] = $this->Model_daily_periode->cari_rft_line('line_12', $bulan, $tahun);
        $data['rft_line13'] = $this->Model_daily_periode->cari_rft_line('line_13', $bulan, $tahun);
        $data['rft_line14'] = $this->Model_daily_periode->cari_rft_line('line_14', $bulan, $tahun);
        $data['rft_line15'] = $this->Model_daily_periode->cari_rft_line('line_15', $bulan, $tahun);
        $data['rft_line16'] = $this->Model_daily_periode->cari_rft_line('line_16', $bulan, $tahun);
        $data['rft_line17'] = $this->Model_daily_periode->cari_rft_line('line_17', $bulan, $tahun);
        $data['rft_line18'] = $this->Model_daily_periode->cari_rft_line('line_18', $bulan, $tahun);
        $data['rft_line19'] = $this->Model_daily_periode->cari_rft_line('line_19', $bulan, $tahun);
        $data['rft_line20'] = $this->Model_daily_periode->cari_rft_line('line_20', $bulan, $tahun);
        $data['rft_line21'] = $this->Model_daily_periode->cari_rft_line('line_21', $bulan, $tahun);
        $data['rft_line22'] = $this->Model_daily_periode->cari_rft_line('line_22', $bulan, $tahun);
        $data['rft_line23'] = $this->Model_daily_periode->cari_rft_line('line_23', $bulan, $tahun);
        $data['rft_line24'] = $this->Model_daily_periode->cari_rft_line('line_24', $bulan, $tahun);
        $data['rft_line25'] = $this->Model_daily_periode->cari_rft_line('line_25', $bulan, $tahun);
        $data['rft_line26'] = $this->Model_daily_periode->cari_rft_line('line_26', $bulan, $tahun);
        $data['rft_line27'] = $this->Model_daily_periode->cari_rft_line('line_27', $bulan, $tahun);
        $data['rft_line28'] = $this->Model_daily_periode->cari_rft_line('line_28', $bulan, $tahun);
        $data['rft_line29'] = $this->Model_daily_periode->cari_rft_line('line_29', $bulan, $tahun);

        $this->load->view('templates_daily_periode/header', $data);
        $this->load->view('daily_periode/landingpage4', $data);
        $this->load->view('templates_daily_periode/footer', $data);
    }


    public function chief_daily_periode($bulan = null, $tahun = null)
    {


        $data['title'] = 'Dashboard WIP';
        $data['user'] = 'chief_all';
        $bulan = $bulan;
        $tahun = $tahun;
        // $data['efficiency_daily_periode'] = $this->Model_daily_periode->cari_efficiency_daily_periode();
        // $this->Model_daily_periode->call_chief_effi();
        // $this->Model_daily_periode->call_chief_rft();
        $data['harikerja'] = $this->Model_daily_periode->cari_harikerja($bulan, $tahun);
        // $data['effi_factory'] = $this->Model_daily_periode->cari_effi_factory();
        // $data['target_effi_factory'] = $this->Model_daily_periode->cari_target_effi_factory();
        // $data['rft_factory'] = $this->Model_daily_periode->cari_rft_factory();
        // $data['effi_line07'] = $this->Model_daily_periode->cari_effi_line07();
        $data['effi_rudy'] = $this->Model_daily_periode->cari_effi_chiefline(1,$bulan, $tahun);
        $data['rft_rudy'] = $this->Model_daily_periode->cari_rft_chiefline(1,$bulan, $tahun);
        $data['effi_usup'] = $this->Model_daily_periode->cari_effi_chiefline(3,$bulan, $tahun);
        $data['rft_usup'] = $this->Model_daily_periode->cari_rft_chiefline(3,$bulan, $tahun);
        $data['effi_linda'] = $this->Model_daily_periode->cari_effi_chiefline(4,$bulan, $tahun);
        $data['rft_linda'] = $this->Model_daily_periode->cari_rft_chiefline(4,$bulan, $tahun);
        $data['effi_feri'] = $this->Model_daily_periode->cari_effi_chiefline(5,$bulan, $tahun);
        $data['rft_feri'] = $this->Model_daily_periode->cari_rft_chiefline(5,$bulan, $tahun);
        $data['effi_dadang'] = $this->Model_daily_periode->cari_effi_chiefline(2,$bulan, $tahun);
        $data['rft_dadang'] = $this->Model_daily_periode->cari_rft_chiefline(2,$bulan, $tahun);
        $data['output_chief1'] = $this->Model_daily_periode->cari_output_chief1();
        $data['output_chief2'] = $this->Model_daily_periode->cari_output_chief2();
        $data['output_chief3'] = $this->Model_daily_periode->cari_output_chief3();
        $data['slide_chief'] = $this->Model_daily_periode->cari_slide_chief();
        // $data['actual'] = $this->Model_daily_periode->cari_actual();
        // $data['smv'] = $this->Model_daily_periode->cari_smv();
        // $data['menpower'] = $this->Model_daily_periode->cari_menpower();

        $this->load->view('templates_daily_periode/header', $data);
        $this->load->view('daily_periode/landingpage3', $data);
        $this->load->view('templates_daily_periode/footer', $data);
    }

    public function factory_daily_periode($bulan = null, $tahun = null)
    {


        $data['title'] = 'Dashboard WIP';
        $data['user'] = 'daily_periode';
        $bulan = $bulan;
        $tahun = $tahun;
        // $data['efficiency_daily_periode'] = $this->Model_daily_periode->cari_efficiency_daily_periode();
        $data['harikerja'] = $this->Model_daily_periode->cari_harikerja($bulan, $tahun);
        $data['effi_factory'] = $this->Model_daily_periode->cari_effi_factory($bulan, $tahun);
        $data['target_effi_factory'] = $this->Model_daily_periode->cari_target_effi_factory($bulan, $tahun);
        $data['rft_factory'] = $this->Model_daily_periode->cari_rft_factory($bulan, $tahun);
        $data['bulan'] = $this->Model_daily_periode->cari_bulan($bulan, $tahun);
        // $data['jamker'] = $this->Model_daily_periode->cari_jamker();
        // $data['actual'] = $this->Model_daily_periode->cari_actual();
        // $data['smv'] = $this->Model_daily_periode->cari_smv();
        // $data['menpower'] = $this->Model_daily_periode->cari_menpower();

        $this->load->view('templates_daily_periode/header', $data);
        $this->load->view('daily_periode/landingpage5', $data);
        $this->load->view('templates_daily_periode/footer', $data);
    }


    public function block_page()
    {
        $this->load->view('block_page/block_page');
    }
}
