<?php

use SebastianBergmann\Environment\Console;

class Model_line1 extends CI_Model
{

    function cari_efficiency_line1()
    {
        $db_pg = $this->load->database('db_pg', TRUE);
        $query = $db_pg->query("SELECT count(kode_line) persen from master_line ");
            foreach ($query->result() as $percen) {
                $hasil = ($percen->persen);
            }

        return $hasil;
    }

    function cari_defect_line1()
    {
        $query = $this->db->query("SELECT 10.25 as persen");
            foreach ($query->result() as $percen) {
                $hasil = ($percen->persen);
            }

        return $hasil;
    }

    function getbuyer()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT GROUP_CONCAT(Supplier) buyer from (select mp.id_ws,ms.Supplier from master_plan mp 
inner join act_costing ac on mp.id_ws = ac.id
inner join mastersupplier ms on ms.Id_Supplier = ac.id_buyer
where mp.tgl_plan = CURRENT_DATE() and mp.sewing_line = 'line_01') a");
        foreach ($query->result() as $data) {
                $buyer = ($data->buyer);
            }
        return $buyer;
    }


    function getno_ws()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT GROUP_CONCAT(kpno) no_ws from (select mp.id_ws,ac.kpno from master_plan mp 
inner join act_costing ac on mp.id_ws = ac.id
where mp.tgl_plan = CURRENT_DATE() and mp.sewing_line = 'line_01') a ");
        foreach ($query->result() as $data) {
                $no_ws = ($data->no_ws);
            }
        return $no_ws;
    }

    function cari_actual()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(id) actual from output_rfts where DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() ");
            foreach ($query->result() as $data) {
                $hasil = ($data->actual);
            }

        return $hasil;
    }
    

    function cari_day_target()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT COALESCE(sum(plan_target),0) as day_target from master_plan where tgl_plan = CURRENT_DATE()");
            foreach ($query->result() as $data) {
                $hasil = ($data->day_target);
            }

        return $hasil;
    }

    function cari_jamker()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT COALESCE(sum(jam_kerja),0) as jam_kerja from master_plan where tgl_plan = CURRENT_DATE()");
            foreach ($query->result() as $data) {
                $hasil = ($data->jam_kerja);
            }

        return $hasil;
    }

    function cari_variance()
    {
        $query = $this->db->query("SELECT 117 as variance");
            foreach ($query->result() as $data) {
                $hasil = ($data->variance);
            }

        return $hasil;
    }


    function cari_deffect()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(id) deffect from output_defects where DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE()");
            foreach ($query->result() as $data) {
                $hasil = ($data->deffect);
            }

        return $hasil;
    }

    function cari_rework()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(id) rework from output_defects where DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and defect_status = 'reworked'");
            foreach ($query->result() as $data) {
                $hasil = ($data->rework);
            }

        return $hasil;
    }

    function cari_target_floor()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT FLOOR(COALESCE(plan_target,0)/COALESCE(jam_kerja,1)) target from (select * from (select tanggal from dim_date) a left join
(SELECT tgl_plan,sewing_line,plan_target,jam_kerja from master_plan where sewing_line = 'line_01') b on b.tgl_plan = a.tanggal where a.tanggal = CURRENT_DATE()) a");
            foreach ($query->result() as $target) {
                $hasil = ($target->target);
            }

        return $hasil;
    }

    function cari_target_floor_menit()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT COALESCE(plan_target,0)/COALESCE((jam_kerja * 60),1) target from (select * from (select tanggal from dim_date) a left join
(SELECT tgl_plan,sewing_line,plan_target,jam_kerja from master_plan where sewing_line = 'line_01') b on b.tgl_plan = a.tanggal where a.tanggal = CURRENT_DATE()) a");
            foreach ($query->result() as $target) {
                $hasil = ($target->target);
            }

        return $hasil;
    }


    function cari_target_floordom()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT (target + sisa) target from (select FLOOR(COALESCE(plan_target,0)/COALESCE(jam_kerja,1)) target, MOD(COALESCE(plan_target,0),COALESCE(jam_kerja,1)) sisa from (select * from (select tanggal from dim_date) a left join
(SELECT tgl_plan,sewing_line,plan_target,jam_kerja from master_plan where sewing_line = 'line_01') b on b.tgl_plan = a.tanggal where a.tanggal = CURRENT_DATE()) a) a");
            foreach ($query->result() as $target) {
                $hasil = ($target->target);
            }

        return $hasil;
    }

     function cari_output_jam7()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(id) jumlah from output_rfts where DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '07:00' and '08:00'");
            foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }

        return $hasil;
    }

     function cari_output_jam8()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(id) jumlah from output_rfts where DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '08:00' and '09:00'");
            foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }

        return $hasil;
    }

     function cari_output_jam9()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(id) jumlah from output_rfts where DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '09:00' and '10:00'");
            foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }

        return $hasil;
    }

     function cari_output_jam10()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(id) jumlah from output_rfts where DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '10:00' and '11:00'");
            foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }

        return $hasil;
    }

     function cari_output_jam11()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(id) jumlah from output_rfts where DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '11:00' and '12:00'");
            foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }

        return $hasil;
    }

     function cari_output_jam13()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(id) jumlah from output_rfts where DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '13:00' and '14:00'");
            foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }

        return $hasil;
    }

     function cari_output_jam14()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(id) jumlah from output_rfts where DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '14:00' and '15:00'");
            foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }

        return $hasil;
    }

     function cari_output_jam15()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(id) jumlah from output_rfts where DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '15:00' and '16:00'");
            foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }

        return $hasil;
    }

     function cari_output_jam16()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(id) jumlah from output_rfts where DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '16:00' and '17:00'");
            foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }

        return $hasil;
    }


    //deffect
    function cari_deffect_jam7()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(id) jumlah from output_defects where DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '07:00' and '08:00'");
            foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }

        return $hasil;
    }

     function cari_deffect_jam8()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(id) jumlah from output_defects where DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '08:00' and '09:00'");
            foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }

        return $hasil;
    }

     function cari_deffect_jam9()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(id) jumlah from output_defects where DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '09:00' and '10:00'");
            foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }

        return $hasil;
    }

     function cari_deffect_jam10()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(id) jumlah from output_defects where DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '10:00' and '11:00'");
            foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }

        return $hasil;
    }

     function cari_deffect_jam11()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(id) jumlah from output_defects where DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '11:00' and '12:00'");
            foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }

        return $hasil;
    }

     function cari_deffect_jam13()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(id) jumlah from output_defects where DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '13:00' and '14:00'");
            foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }

        return $hasil;
    }

     function cari_deffect_jam14()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(id) jumlah from output_defects where DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '14:00' and '15:00'");
            foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }

        return $hasil;
    }

     function cari_deffect_jam15()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(id) jumlah from output_defects where DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '15:00' and '16:00'");
            foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }

        return $hasil;
    }

     function cari_deffect_jam16()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(id) jumlah from output_defects where DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '16:00' and '17:00'");
            foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }

        return $hasil;
    }



}