<?php
defined('BASEPATH') or exit('No direct script access allowed');

class lineSummary extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($line)
    {
        // if (!$this->session->userdata('username')) {
        //     redirect('auth');
        //     log_message('error', 'Some variable did not contain a value.');
        // }
        
        $lineName = ucfirst(str_replace("_", " ", $line));

        $data['line'] = $line;
        $data['lineName'] = $lineName;

        if ($this->LineModel->getno_ws($line)) {
            $data['setting'] = $this->LineModel->getDashboardSetting($line);
            $data['title'] = 'Dashboard WIP';
            $data['user'] = $lineName.' | End Line';
            $data['buyer'] = $this->LineModel->getbuyer($line);
            $data['no_ws'] = $this->LineModel->getno_ws($line);
            $data['target_floor'] = $this->LineModel->cari_target_floor($line);
            $data['target_floordom'] = $this->LineModel->cari_target_floordom($line);
            $data['jamker'] = $this->LineModel->cari_jamker($line);
            $data['actual'] = $this->LineModel->cari_actual($line);
            $data['day_target'] = $this->LineModel->cari_day_target($line);
            $data['deffect'] = $this->LineModel->cari_deffect($line);
            $data['output7'] = $this->LineModel->cari_output_jam7($line);
            $data['output8'] = $this->LineModel->cari_output_jam8($line);
            $data['output9'] = $this->LineModel->cari_output_jam9($line);
            $data['output10'] = $this->LineModel->cari_output_jam10($line);
            $data['output11'] = $this->LineModel->cari_output_jam11($line);
            $data['output13'] = $this->LineModel->cari_output_jam13($line);
            $data['output14'] = $this->LineModel->cari_output_jam14($line);
            $data['output15'] = $this->LineModel->cari_output_jam15($line);
            $data['output16'] = $this->LineModel->cari_output_jam16($line);
            //deffect
            $data['deffect7'] = $this->LineModel->cari_deffect_jam7($line);
            $data['deffect8'] = $this->LineModel->cari_deffect_jam8($line);
            $data['deffect9'] = $this->LineModel->cari_deffect_jam9($line);
            $data['deffect10'] = $this->LineModel->cari_deffect_jam10($line);
            $data['deffect11'] = $this->LineModel->cari_deffect_jam11($line);
            $data['deffect13'] = $this->LineModel->cari_deffect_jam13($line);
            $data['deffect14'] = $this->LineModel->cari_deffect_jam14($line);
            $data['deffect15'] = $this->LineModel->cari_deffect_jam15($line);
            $data['deffect16'] = $this->LineModel->cari_deffect_jam16($line);

            //deffect
            $data['rework7'] = $this->LineModel->cari_rework_jam7($line);
            $data['rework8'] = $this->LineModel->cari_rework_jam8($line);
            $data['rework9'] = $this->LineModel->cari_rework_jam9($line);
            $data['rework10'] = $this->LineModel->cari_rework_jam10($line);
            $data['rework11'] = $this->LineModel->cari_rework_jam11($line);
            $data['rework13'] = $this->LineModel->cari_rework_jam13($line);
            $data['rework14'] = $this->LineModel->cari_rework_jam14($line);
            $data['rework15'] = $this->LineModel->cari_rework_jam15($line);
            $data['rework16'] = $this->LineModel->cari_rework_jam16($line);
            $data['target_menit'] = $this->LineModel->cari_target_floor_menit($line);
            $data['smv'] = $this->LineModel->cari_smv($line);
            $data['menpower'] = $this->LineModel->cari_menpower($line);
            //data
            $data['datajam7'] = $this->LineModel->cari_datajam7($line);
            $data['datajam8'] = $this->LineModel->cari_datajam8($line);
            $data['datajam9'] = $this->LineModel->cari_datajam9($line);
            $data['datajam10'] = $this->LineModel->cari_datajam10($line);
            $data['datajam11'] = $this->LineModel->cari_datajam11($line);
            $data['datajam13'] = $this->LineModel->cari_datajam13($line);
            $data['datajam14'] = $this->LineModel->cari_datajam14($line);
            $data['datajam15'] = $this->LineModel->cari_datajam15($line);
            // $data['datajam16'] = $this->LineModel->cari_datajam16($line);
        
            $this->load->view('templates/header', $data);
            $html = $this->load->view('lineTest/landingpage2', $data, true);
            // $this->load->view('templates/sidebar', $data);
            $this->load->view('lineTest/landingpage2', $data);
            $this->load->view('templates/footer', $data);
            // redirect('landingpage');
            // redirect('landingpage/index');
        } else {
            $html = $this->load->view('block_page/block_page', $data, true);
            // $this->load->view('templates/sidebar', $data);
            $this->load->view('zero_master_plan', $data);
        }
    }

    public function dashboard1($line)
    {
        // if (!$this->session->userdata('username')) {
        //     redirect('auth');
        //     log_message('error', 'Some variable did not contain a value.');
        // }
        
        $lineName = ucfirst(str_replace("_", " ", $line));

        $data['line'] = $line;
        $data['lineName'] = $lineName;

        if ($this->LineModel->getno_ws($line)) {
            $data['setting'] = $this->LineModel->getDashboardSetting($line);
            $data['title'] = 'Dashboard WIP';
            $data['user'] = $lineName.' | End Line';
            $data['buyer'] = $this->LineModel->getbuyer($line);
            $data['no_ws'] = $this->LineModel->getno_ws($line);
            $data['target_floor'] = $this->LineModel->cari_target_floor($line);
            $data['target_floordom'] = $this->LineModel->cari_target_floordom($line);
            $data['jamker'] = $this->LineModel->cari_jamker($line);
            $data['actual'] = $this->LineModel->cari_actual($line);
            $data['day_target'] = $this->LineModel->cari_day_target($line);
            $data['deffect'] = $this->LineModel->cari_deffect($line);
            $data['output7'] = $this->LineModel->cari_output_jam7($line);
            $data['output8'] = $this->LineModel->cari_output_jam8($line);
            $data['output9'] = $this->LineModel->cari_output_jam9($line);
            $data['output10'] = $this->LineModel->cari_output_jam10($line);
            $data['output11'] = $this->LineModel->cari_output_jam11($line);
            $data['output13'] = $this->LineModel->cari_output_jam13($line);
            $data['output14'] = $this->LineModel->cari_output_jam14($line);
            $data['output15'] = $this->LineModel->cari_output_jam15($line);
            $data['output16'] = $this->LineModel->cari_output_jam16($line);
            //deffect
            $data['deffect7'] = $this->LineModel->cari_deffect_jam7($line);
            $data['deffect8'] = $this->LineModel->cari_deffect_jam8($line);
            $data['deffect9'] = $this->LineModel->cari_deffect_jam9($line);
            $data['deffect10'] = $this->LineModel->cari_deffect_jam10($line);
            $data['deffect11'] = $this->LineModel->cari_deffect_jam11($line);
            $data['deffect13'] = $this->LineModel->cari_deffect_jam13($line);
            $data['deffect14'] = $this->LineModel->cari_deffect_jam14($line);
            $data['deffect15'] = $this->LineModel->cari_deffect_jam15($line);
            $data['deffect16'] = $this->LineModel->cari_deffect_jam16($line);

            //deffect
            $data['rework7'] = $this->LineModel->cari_rework_jam7($line);
            $data['rework8'] = $this->LineModel->cari_rework_jam8($line);
            $data['rework9'] = $this->LineModel->cari_rework_jam9($line);
            $data['rework10'] = $this->LineModel->cari_rework_jam10($line);
            $data['rework11'] = $this->LineModel->cari_rework_jam11($line);
            $data['rework13'] = $this->LineModel->cari_rework_jam13($line);
            $data['rework14'] = $this->LineModel->cari_rework_jam14($line);
            $data['rework15'] = $this->LineModel->cari_rework_jam15($line);
            $data['rework16'] = $this->LineModel->cari_rework_jam16($line);
            $data['target_menit'] = $this->LineModel->cari_target_floor_menit($line);
            $data['smv'] = $this->LineModel->cari_smv($line);
            $data['menpower'] = $this->LineModel->cari_menpower($line);
            //data
            $data['datajam7'] = $this->LineModel->cari_datajam7($line);
            $data['datajam8'] = $this->LineModel->cari_datajam8($line);
            $data['datajam9'] = $this->LineModel->cari_datajam9($line);
            $data['datajam10'] = $this->LineModel->cari_datajam10($line);
            $data['datajam11'] = $this->LineModel->cari_datajam11($line);
            $data['datajam13'] = $this->LineModel->cari_datajam13($line);
            $data['datajam14'] = $this->LineModel->cari_datajam14($line);
            $data['datajam15'] = $this->LineModel->cari_datajam15($line);
            // $data['datajam16'] = $this->LineModel->cari_datajam16($line);
        
            $this->load->view('templates/header', $data);
            $html = $this->load->view('lineTest/landingpage2', $data, true);
            // $this->load->view('templates/sidebar', $data);
            $this->load->view('lineTest/landingpage2', $data);
            $this->load->view('templates/footer', $data);
            // redirect('landingpage');
            // redirect('landingpage/index');
        } else {
            $html = $this->load->view('block_page/block_page', $data, true);
            // $this->load->view('templates/sidebar', $data);
            $this->load->view('zero_master_plan', $data);
        }
    }


    public function dashboard2($line)
    {
        $lineName = ucfirst(str_replace("_", " ", $line));

        $data['line'] = $line;
        $data['lineName'] = $lineName;

        if ($this->LineModel->getno_ws($line)) {
            $data['setting'] = $this->LineModel->getDashboardSetting($line);
            $data['title'] = 'Dashboard WIP';
            $data['user'] = 'Nirwana Alabare Garment';
            $data['efficiency_line'] = $this->LineSummaryModel->cari_efficiency_line($line);
            $data['defect_line'] = $this->LineModel->cari_defect_line($line);
            $data['buyer'] = $this->LineModel->getbuyer($line);
            $data['no_ws'] = $this->LineModel->getno_ws($line);
            $data['actual'] = $this->LineSummaryModel->cari_actual($line);
            $data['day_target'] = $this->LineSummaryModel->cari_day_target($line);
            $data['variance'] = $this->LineModel->cari_variance($line);
            $data['deffect'] = $this->LineModel->cari_deffect($line);
            $data['rework'] = $this->LineModel->cari_rework($line);
            $data['target_floor'] = $this->LineModel->cari_target_floor($line);
            $data['target_menit'] = $this->LineModel->cari_target_floor_menit($line);
            $data['jamker'] = $this->LineModel->cari_jamker($line);
            $data['smv'] = $this->LineModel->cari_smv($line);
            $data['menpower'] = $this->LineModel->cari_menpower($line);
            $data['rfts'] = $this->LineModel->cari_rfts($line);

            $this->load->view('templates/header', $data);
            // $this->load->view('templates/sidebar', $data);
            $this->load->view('lineSummary/statistics', $data);
            $this->load->view('templates/footer', $data);
            // redirect('landingpage');
            // redirect('landingpage/index');
        } else {
            $html = $this->load->view('block_page/block_page', $data, true);
            // $this->load->view('templates/sidebar', $data);
            $this->load->view('zero_master_plan', $data);
        }
    }


    public function dashboard3($line)
    {

        // if (!$this->session->userdata('username')) {
        //     redirect('auth');
        //     log_message('error', 'Some variable did not contain a value.');

        // }

        $lineName = ucfirst(str_replace("_", " ", $line));

        $data['line'] = $line;
        $data['lineName'] = $lineName;

        if ($this->LineModel->getno_ws($line)) {
            $data['setting'] = $this->LineModel->getDashboardSetting($line);
            $data['title'] = 'Dashboard WIP';
            $data['user'] = $lineName.'| End Line';
            $data['efficiency_line'] = $this->LineModel->cari_efficiency_line($line);
            $data['defect_line'] = $this->LineModel->cari_defect_line($line);
            $data['buyer'] = $this->LineModel->getbuyer($line);
            $data['no_ws'] = $this->LineModel->getno_ws($line);
            $data['actual'] = $this->LineModel->cari_actual($line);
            $data['day_target'] = $this->LineModel->cari_day_target($line);
            $data['variance'] = $this->LineModel->cari_variance($line);
            $data['deffect'] = $this->LineModel->cari_deffect($line);
            $data['rework'] = $this->LineModel->cari_rework($line);
            $data['target_floor'] = $this->LineModel->cari_target_floor($line);
            $data['target_menit'] = $this->LineModel->cari_target_floor_menit($line);
            $data['jamker'] = $this->LineModel->cari_jamker($line);
            $data['smv'] = $this->LineModel->cari_smv($line);
            $data['menpower'] = $this->LineModel->cari_menpower($line);
            $data['list_defect'] = $this->LineModel->cari_listdefect($line);
            $data['link_gambar'] = $this->LineModel->cari_link_gambar($line);
            $data['link_gambar1'] = $this->LineModel->cari_link_gambar1($line);
            $data['positiondefect'] = $this->LineModel->cari_positiondefect($line);

            $this->load->view('templates/header', $data);
            // $this->load->view('templates/sidebar', $data);
            $this->load->view('lineTest/landingpage4', $data);
            $this->load->view('templates/footer', $data);
            // redirect('landingpage');
            // redirect('landingpage/index');
        } else {
            $html = $this->load->view('block_page/block_page', $data, true);
            // $this->load->view('templates/sidebar', $data);
            $this->load->view('zero_master_plan', $data);
        }
    }

    // public function dashboard4($line)
    // {
    //     // if (!$this->session->userdata('username')) {
    //     //     redirect('auth');
    //     //     log_message('error', 'Some variable did not contain a value.');
    //     // }
            
    //     $lineName = ucfirst(str_replace("_", " ", $line));

    //     $data['line'] = $line;
    //     $data['lineName'] = $lineName;
    //     $data['setting'] = $this->LineModel->getDashboardSetting($line);
    //     $data['title'] = 'Dashboard WIP';
    //     $data['user'] = $lineName.' | End Line';
    //     $data['buyer'] = $this->LineModel->getbuyer($line);
    //     $data['no_ws'] = $this->LineModel->getno_ws($line);

    //     if ($data['no_ws']) {
    //         $data['target_floor'] = $this->LineModel->cari_target_floor($line);
    //         $data['target_floordom'] = $this->LineModel->cari_target_floordom($line);
    //         $data['jamker'] = $this->LineModel->cari_jamker($line);
    //         $data['actual'] = $this->LineModel->cari_actual($line);
    //         $data['day_target'] = $this->LineModel->cari_day_target($line);
    //         $data['deffect'] = $this->LineModel->cari_deffect($line);
    //         $data['output7'] = $this->LineModel->cari_output_jam7($line);
    //         $data['output8'] = $this->LineModel->cari_output_jam8($line);
    //         $data['output9'] = $this->LineModel->cari_output_jam9($line);
    //         $data['output10'] = $this->LineModel->cari_output_jam10($line);
    //         $data['output11'] = $this->LineModel->cari_output_jam11($line);
    //         $data['output13'] = $this->LineModel->cari_output_jam13($line);
    //         $data['output14'] = $this->LineModel->cari_output_jam14($line);
    //         $data['output15'] = $this->LineModel->cari_output_jam15($line);
    //         $data['output16'] = $this->LineModel->cari_output_jam16($line);
    //         //deffect
    //         $data['deffect7'] = $this->LineModel->cari_deffect_jam7($line);
    //         $data['deffect8'] = $this->LineModel->cari_deffect_jam8($line);
    //         $data['deffect9'] = $this->LineModel->cari_deffect_jam9($line);
    //         $data['deffect10'] = $this->LineModel->cari_deffect_jam10($line);
    //         $data['deffect11'] = $this->LineModel->cari_deffect_jam11($line);
    //         $data['deffect13'] = $this->LineModel->cari_deffect_jam13($line);
    //         $data['deffect14'] = $this->LineModel->cari_deffect_jam14($line);
    //         $data['deffect15'] = $this->LineModel->cari_deffect_jam15($line);
    //         $data['deffect16'] = $this->LineModel->cari_deffect_jam16($line);

    //         //deffect
    //         $data['rework7'] = $this->LineModel->cari_rework_jam7($line);
    //         $data['rework8'] = $this->LineModel->cari_rework_jam8($line);
    //         $data['rework9'] = $this->LineModel->cari_rework_jam9($line);
    //         $data['rework10'] = $this->LineModel->cari_rework_jam10($line);
    //         $data['rework11'] = $this->LineModel->cari_rework_jam11($line);
    //         $data['rework13'] = $this->LineModel->cari_rework_jam13($line);
    //         $data['rework14'] = $this->LineModel->cari_rework_jam14($line);
    //         $data['rework15'] = $this->LineModel->cari_rework_jam15($line);
    //         $data['rework16'] = $this->LineModel->cari_rework_jam16($line);
    //         $data['target_menit'] = $this->LineModel->cari_target_floor_menit($line);
    //         $data['smv'] = $this->LineModel->cari_smv($line);
    //         $data['menpower'] = $this->LineModel->cari_menpower($line);
    //         //data
    //         $data['datajam7'] = $this->LineModel->cari_datajam7($line);
    //         $data['datajam8'] = $this->LineModel->cari_datajam8($line);
    //         $data['datajam9'] = $this->LineModel->cari_datajam9($line);
    //         $data['datajam10'] = $this->LineModel->cari_datajam10($line);
    //         $data['datajam11'] = $this->LineModel->cari_datajam11($line);
    //         $data['datajam13'] = $this->LineModel->cari_datajam13($line);
    //         $data['datajam14'] = $this->LineModel->cari_datajam14($line);
    //         $data['datajam15'] = $this->LineModel->cari_datajam15($line);
    //         // $data['datajam16'] = $this->LineModel->cari_datajam16($line);
            
    //         $this->load->view('templates/header', $data);
    //         $html = $this->load->view('lineTest/landingpage2', $data, true);
    //         // $this->load->view('templates/sidebar', $data);
    //         $this->load->view('lineTest/landingpage2', $data);
    //         $this->load->view('templates/footer', $data);
    //     } 

    //     if ($data['no_ws']) {
    //         $this->load->view('templates/header', $data);
    //         $html = $this->load->view('lineTest/landingpage2', $data, true);
    //         // $this->load->view('templates/sidebar', $data);
    //         $this->load->view('lineTest/landingpage2', $data);
    //         $this->load->view('templates/footer', $data);
    //         // redirect('landingpage');
    //         // redirect('landingpage/index');
    //     } else {
    //         $html = $this->load->view('zero-mxaster-plan', $data['lineName'], true);
    //     }
    // }

    public function block_page()
    {
        $this->load->view('block_page/block_page');
    }
}
