<?php

use SebastianBergmann\Environment\Console;

class Model_line9 extends CI_Model
{
    function getDashboardSetting()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("
            SELECT * FROM dashboard_line_set WHERE line_id = 9 LIMIT 1
        ");

        return $query->result_array();
    }

    function cari_efficiency_line9()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("
SELECT sum(actual) actual from (SELECT count(a.id) actual from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE()
union
SELECT count(a.id) defect from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE()
union
SELECT count(a.id) reject from output_rejects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE()
union
SELECT count(a.id) reworks from output_reworks a inner join output_defects c on c.id = a.defect_id inner join master_plan b on b.id = c.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(a.created_at, '%Y-%m-%d') = CURRENT_DATE()) a ");
        foreach ($query->result() as $data) {
            $hasil = ($data->actual);
        }

        return $hasil;
    }

    function cari_smv()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT smv from master_plan where tgl_plan = CURRENT_DATE() and sewing_line = 'line_09'");
        foreach ($query->result() as $data) {
            $smv = ($data->smv);
        }
        return $smv;
    }

    function cari_menpower()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT man_power from master_plan where tgl_plan = CURRENT_DATE() and sewing_line = 'line_09'");
        foreach ($query->result() as $data) {
            $man_power = ($data->man_power);
        }
        return $man_power;
    }

    function cari_defect_line9()
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
        $query = $db_sblokal->query("SELECT GROUP_CONCAT(Supplier) buyer from (select DISTINCT ms.Supplier from master_plan mp 
inner join act_costing ac on mp.id_ws = ac.id
inner join mastersupplier ms on ms.Id_Supplier = ac.id_buyer
where mp.tgl_plan = CURRENT_DATE() and mp.sewing_line = 'line_09') a");
        foreach ($query->result() as $data) {
            $buyer = ($data->buyer);
        }
        return $buyer;
    }

    function cari_link_gambar()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT gambar image from master_plan where sewing_line = 'line_09' and DATE_FORMAT(tgl_plan, '%Y-%m-%d') = CURRENT_DATE() group by gambar");
        return $query->result_array();
    }

    function cari_link_gambar1()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT gambar image from master_plan where sewing_line = 'line_09' and DATE_FORMAT(tgl_plan, '%Y-%m-%d') = CURRENT_DATE() group by gambar order by id asc limit 1");
        return $query->result_array();
    }

    function cari_positiondefect()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT a.defect_area_x, a.defect_area_y, a.defect_type_id, b.gambar image from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(a.created_at, '%Y-%m-%d') = CURRENT_DATE() ");
        return $query->result_array();
    }

    function getno_ws()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT GROUP_CONCAT(kpno) no_ws from (select DISTINCT ac.kpno from master_plan mp 
inner join act_costing ac on mp.id_ws = ac.id
where mp.tgl_plan = CURRENT_DATE() and mp.sewing_line = 'line_09') a ");
        foreach ($query->result() as $data) {
            $no_ws = ($data->no_ws);
        }
        return $no_ws;
    }

    function cari_actual()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) actual from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE()");
        foreach ($query->result() as $data) {
            $hasil = ($data->actual);
        }

        return $hasil;
    }

    function cari_rfts()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) actual from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and status = 'NORMAL'");
        foreach ($query->result() as $data) {
            $hasil = ($data->actual);
        }

        return $hasil;
    }


    function cari_day_target()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT COALESCE(sum(plan_target),0) as day_target from master_plan where tgl_plan = CURRENT_DATE() and sewing_line = 'line_09'");
        foreach ($query->result() as $data) {
            $hasil = ($data->day_target);
        }

        return $hasil;
    }

    function cari_jamker()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT COALESCE(sum(jam_kerja),0) as jam_kerja from master_plan where tgl_plan = CURRENT_DATE() and sewing_line = 'line_09'");
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
        $query = $db_sblokal->query("SELECT count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE()");
        foreach ($query->result() as $data) {
            $hasil = ($data->deffect);
        }

        return $hasil;
    }

    function cari_listdefect()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT  defect_type_id,defect_type,jml from (SELECT  a.defect_type_id,c.defect_type, COUNT( c.defect_type) jml from output_defects a inner join master_plan b on b.id = a.master_plan_id inner join output_defect_types c on c.id = a.defect_type_id where b.sewing_line = 'line_09' and DATE_FORMAT(a.created_at, '%Y-%m-%d') = CURRENT_DATE() GROUP BY c.defect_type ) a order by a.jml desc limit 5 ");
        return $query->result_array();
    }

    function cari_rework()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) rework from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and a.defect_status = 'reworked'");
        foreach ($query->result() as $data) {
            $hasil = ($data->rework);
        }

        return $hasil;
    }

    function cari_target_floor()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT FLOOR(COALESCE(plan_target,0)/COALESCE(jam_kerja,1)) target from (select sum(plan_target) plan_target, sum(jam_kerja) jam_kerja from (select tanggal from dim_date) a left join
(SELECT tgl_plan,sewing_line,plan_target,jam_kerja from master_plan where sewing_line = 'line_09') b on b.tgl_plan = a.tanggal where a.tanggal = CURRENT_DATE()) a");
        foreach ($query->result() as $target) {
            $hasil = ($target->target);
        }

        return $hasil;
    }

    function cari_target_floor_menit()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT COALESCE(plan_target,0)/COALESCE((jam_kerja * 60),1) target from (select sum(plan_target) plan_target, sum(jam_kerja) jam_kerja from (select tanggal from dim_date) a left join
(SELECT tgl_plan,sewing_line,plan_target,jam_kerja from master_plan where sewing_line = 'line_09') b on b.tgl_plan = a.tanggal where a.tanggal = CURRENT_DATE()) a");
        foreach ($query->result() as $target) {
            $hasil = ($target->target);
        }

        return $hasil;
    }


    function cari_target_floordom()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT (target + sisa) target from (select FLOOR(COALESCE(plan_target,0)/COALESCE(jam_kerja,1)) target, MOD(COALESCE(plan_target,0),COALESCE(jam_kerja,1)) sisa from (select sum(plan_target) plan_target, sum(jam_kerja) jam_kerja from (select tanggal from dim_date) a left join
(SELECT tgl_plan,sewing_line,plan_target,jam_kerja from master_plan where sewing_line = 'line_09') b on b.tgl_plan = a.tanggal where a.tanggal = CURRENT_DATE()) a) a");
        foreach ($query->result() as $target) {
            $hasil = ($target->target);
        }

        return $hasil;
    }


    function cari_output_jam7()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '07:00' and '08:00'");
        foreach ($query->result() as $jumlah) {
            $hasil = ($jumlah->jumlah);
        }

        return $hasil;
    }

    function cari_output_jam8()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '08:00' and '09:00'");
        foreach ($query->result() as $jumlah) {
            $hasil = ($jumlah->jumlah);
        }

        return $hasil;
    }

    function cari_output_jam9()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '09:00' and '10:00'");
        foreach ($query->result() as $jumlah) {
            $hasil = ($jumlah->jumlah);
        }

        return $hasil;
    }

    function cari_output_jam10()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '10:00' and '11:00'");
        foreach ($query->result() as $jumlah) {
            $hasil = ($jumlah->jumlah);
        }

        return $hasil;
    }

    function cari_output_jam11()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '11:00' and '12:00'");
        foreach ($query->result() as $jumlah) {
            $hasil = ($jumlah->jumlah);
        }

        return $hasil;
    }

    function cari_output_jam13()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '13:00' and '14:00'");
        foreach ($query->result() as $jumlah) {
            $hasil = ($jumlah->jumlah);
        }

        return $hasil;
    }

    function cari_output_jam14()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '14:00' and '15:00'");
        foreach ($query->result() as $jumlah) {
            $hasil = ($jumlah->jumlah);
        }

        return $hasil;
    }

    function cari_output_jam15()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '15:00' and '16:00'");
        foreach ($query->result() as $jumlah) {
            $hasil = ($jumlah->jumlah);
        }

        return $hasil;
    }

    function cari_output_jam16()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '16:00' and '17:00'");
        foreach ($query->result() as $jumlah) {
            $hasil = ($jumlah->jumlah);
        }

        return $hasil;
    }


    //deffect
    function cari_deffect_jam7()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '07:00' and '08:00'");
        foreach ($query->result() as $jumlah) {
            $hasil = ($jumlah->jumlah);
        }

        return $hasil;
    }

    function cari_deffect_jam8()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '08:00' and '09:00'");
        foreach ($query->result() as $jumlah) {
            $hasil = ($jumlah->jumlah);
        }

        return $hasil;
    }

    function cari_deffect_jam9()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '09:00' and '10:00'");
        foreach ($query->result() as $jumlah) {
            $hasil = ($jumlah->jumlah);
        }

        return $hasil;
    }

    function cari_deffect_jam10()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '10:00' and '11:00'");
        foreach ($query->result() as $jumlah) {
            $hasil = ($jumlah->jumlah);
        }

        return $hasil;
    }

    function cari_deffect_jam11()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '11:00' and '12:00'");
        foreach ($query->result() as $jumlah) {
            $hasil = ($jumlah->jumlah);
        }

        return $hasil;
    }

    function cari_deffect_jam13()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '13:00' and '14:00'");
        foreach ($query->result() as $jumlah) {
            $hasil = ($jumlah->jumlah);
        }

        return $hasil;
    }

    function cari_deffect_jam14()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '14:00' and '15:00'");
        foreach ($query->result() as $jumlah) {
            $hasil = ($jumlah->jumlah);
        }

        return $hasil;
    }

    function cari_deffect_jam15()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '15:00' and '16:00'");
        foreach ($query->result() as $jumlah) {
            $hasil = ($jumlah->jumlah);
        }

        return $hasil;
    }

    function cari_deffect_jam16()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '16:00' and '17:00'");
        foreach ($query->result() as $jumlah) {
            $hasil = ($jumlah->jumlah);
        }

        return $hasil;
    }


    //deffect
    function cari_rework_jam7()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_reworks a inner join output_defects c on c.id = a.defect_id inner join master_plan b on b.id = c.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(a.created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(a.created_at, '%H:%i') BETWEEN '07:00' and '08:00'");
        foreach ($query->result() as $jumlah) {
            $hasil = ($jumlah->jumlah);
        }

        return $hasil;
    }

    function cari_rework_jam8()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_reworks a inner join output_defects c on c.id = a.defect_id inner join master_plan b on b.id = c.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(a.created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(a.created_at, '%H:%i') BETWEEN '08:00' and '09:00'");
        foreach ($query->result() as $jumlah) {
            $hasil = ($jumlah->jumlah);
        }

        return $hasil;
    }

    function cari_rework_jam9()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_reworks a inner join output_defects c on c.id = a.defect_id inner join master_plan b on b.id = c.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(a.created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(a.created_at, '%H:%i') BETWEEN '09:00' and '10:00'");
        foreach ($query->result() as $jumlah) {
            $hasil = ($jumlah->jumlah);
        }

        return $hasil;
    }

    function cari_rework_jam10()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_reworks a inner join output_defects c on c.id = a.defect_id inner join master_plan b on b.id = c.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(a.created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(a.created_at, '%H:%i') BETWEEN '10:00' and '11:00'");
        foreach ($query->result() as $jumlah) {
            $hasil = ($jumlah->jumlah);
        }

        return $hasil;
    }

    function cari_rework_jam11()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_reworks a inner join output_defects c on c.id = a.defect_id inner join master_plan b on b.id = c.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(a.created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(a.created_at, '%H:%i') BETWEEN '11:00' and '12:00'");
        foreach ($query->result() as $jumlah) {
            $hasil = ($jumlah->jumlah);
        }

        return $hasil;
    }

    function cari_rework_jam13()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_reworks a inner join output_defects c on c.id = a.defect_id inner join master_plan b on b.id = c.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(a.created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(a.created_at, '%H:%i') BETWEEN '13:00' and '14:00'");
        foreach ($query->result() as $jumlah) {
            $hasil = ($jumlah->jumlah);
        }

        return $hasil;
    }

    function cari_rework_jam14()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_reworks a inner join output_defects c on c.id = a.defect_id inner join master_plan b on b.id = c.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(a.created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(a.created_at, '%H:%i') BETWEEN '14:00' and '15:00'");
        foreach ($query->result() as $jumlah) {
            $hasil = ($jumlah->jumlah);
        }

        return $hasil;
    }

    function cari_rework_jam15()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_reworks a inner join output_defects c on c.id = a.defect_id inner join master_plan b on b.id = c.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(a.created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(a.created_at, '%H:%i') BETWEEN '15:00' and '16:00'");
        foreach ($query->result() as $jumlah) {
            $hasil = ($jumlah->jumlah);
        }

        return $hasil;
    }

    function cari_rework_jam16()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_reworks a inner join output_defects c on c.id = a.defect_id inner join master_plan b on b.id = c.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(a.created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(a.created_at, '%H:%i') BETWEEN '16:00' and '17:00'");
        foreach ($query->result() as $jumlah) {
            $hasil = ($jumlah->jumlah);
        }

        return $hasil;
    }

    function cari_datajam7()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT jam_kerja,target target1, actual_sekarang output, (target - actual_sekarang) variation1,round(actual_sekarang / target * 100,2) efficiency1,round(defect / target * 100,2) defect_rate1, (target + sisa) target2, ((target + sisa) - actual_sekarang) variation2,round(actual_sekarang / (target + sisa) * 100,2) efficiency2,round(defect / (target + sisa) * 100,2) defect_rate2 from(SELECT plan_target,MOD((plan_target - actual_sebelum),(jam_kerja - 0)) sisa,actual_sekarang,actual_sebelum,jam_kerja,defect,FLOOR((plan_target - actual_sebelum)/(jam_kerja - 0)) target from (
            select COALESCE(sum(plan_target),0) plan_target, COALESCE(sum(jam_kerja),0) jam_kerja, COALESCE(sum(actual_sebelum),0) actual_sebelum,COALESCE(sum(actual_sekarang),0) actual_sekarang, COALESCE(sum(defect),0) defect from (select tanggal from dim_date) a left join
            (SELECT id,tgl_plan,sewing_line,plan_target,jam_kerja from master_plan where sewing_line = 'line_09') b on b.tgl_plan = a.tanggal left join
            (SELECT master_plan_id,count(a.id) actual_sekarang from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '07:00' and DATE_FORMAT(created_at, '%H:%i') <= '08:00') c on c.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) actual_sebelum from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') < '07:00') d on d.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) defect from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '07:00' and DATE_FORMAT(created_at, '%H:%i') <= '08:00') e on e.master_plan_id = b.id
            where a.tanggal = CURRENT_DATE())a) a");
        return $query->row_array();
    }

    function cari_datajam8()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT jam_kerja,target target1, actual_sekarang output, (target - actual_sekarang) variation1,round(actual_sekarang / target * 100,2) efficiency1,round(defect / target * 100,2) defect_rate1, (target + sisa) target2, ((target + sisa) - actual_sekarang) variation2,round(actual_sekarang / (target + sisa) * 100,2) efficiency2,round(defect / (target + sisa) * 100,2) defect_rate2 from(SELECT plan_target,MOD((plan_target - actual_sebelum),(jam_kerja - 1)) sisa,actual_sekarang,actual_sebelum,jam_kerja,defect,FLOOR((plan_target - actual_sebelum)/(jam_kerja - 1)) target from (
            select COALESCE(sum(plan_target),0) plan_target, COALESCE(sum(jam_kerja),0) jam_kerja, COALESCE(sum(actual_sebelum),0) actual_sebelum,COALESCE(sum(actual_sekarang),0) actual_sekarang, COALESCE(sum(defect),0) defect from (select tanggal from dim_date) a left join
            (SELECT id,tgl_plan,sewing_line,plan_target,jam_kerja from master_plan where sewing_line = 'line_09') b on b.tgl_plan = a.tanggal left join
            (SELECT master_plan_id,count(a.id) actual_sekarang from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '08:00' and DATE_FORMAT(created_at, '%H:%i') <= '09:00') c on c.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) actual_sebelum from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') < '08:00') d on d.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) defect from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '08:00' and DATE_FORMAT(created_at, '%H:%i') <= '09:00') e on e.master_plan_id = b.id
            where a.tanggal = CURRENT_DATE())a) a");
        return $query->row_array();
    }

    function cari_datajam9()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT jam_kerja,target target1, actual_sekarang output, (target - actual_sekarang) variation1,round(actual_sekarang / target * 100,2) efficiency1,round(defect / target * 100,2) defect_rate1, (target + sisa) target2, ((target + sisa) - actual_sekarang) variation2,round(actual_sekarang / (target + sisa) * 100,2) efficiency2,round(defect / (target + sisa) * 100,2) defect_rate2 from(SELECT plan_target,MOD((plan_target - actual_sebelum),(jam_kerja - 2)) sisa,actual_sekarang,actual_sebelum,jam_kerja,defect,FLOOR((plan_target - actual_sebelum)/(jam_kerja - 2)) target from (
            select COALESCE(sum(plan_target),0) plan_target, COALESCE(sum(jam_kerja),0) jam_kerja, COALESCE(sum(actual_sebelum),0) actual_sebelum,COALESCE(sum(actual_sekarang),0) actual_sekarang, COALESCE(sum(defect),0) defect from (select tanggal from dim_date) a left join
            (SELECT id,tgl_plan,sewing_line,plan_target,jam_kerja from master_plan where sewing_line = 'line_09') b on b.tgl_plan = a.tanggal left join
            (SELECT master_plan_id,count(a.id) actual_sekarang from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '09:00' and DATE_FORMAT(created_at, '%H:%i') <= '10:00') c on c.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) actual_sebelum from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') < '09:00') d on d.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) defect from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '09:00' and DATE_FORMAT(created_at, '%H:%i') <= '10:00') e on e.master_plan_id = b.id
            where a.tanggal = CURRENT_DATE())a) a");
        return $query->row_array();
    }

    function cari_datajam10()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT jam_kerja,target target1, actual_sekarang output, (target - actual_sekarang) variation1,round(actual_sekarang / target * 100,2) efficiency1,round(defect / target * 100,2) defect_rate1, (target + sisa) target2, ((target + sisa) - actual_sekarang) variation2,round(actual_sekarang / (target + sisa) * 100,2) efficiency2,round(defect / (target + sisa) * 100,2) defect_rate2 from(SELECT plan_target,MOD((plan_target - actual_sebelum),(jam_kerja - 3)) sisa,actual_sekarang,actual_sebelum,jam_kerja,defect,FLOOR((plan_target - actual_sebelum)/(jam_kerja - 3)) target from (
            select COALESCE(sum(plan_target),0) plan_target, COALESCE(sum(jam_kerja),0) jam_kerja, COALESCE(sum(actual_sebelum),0) actual_sebelum,COALESCE(sum(actual_sekarang),0) actual_sekarang, COALESCE(sum(defect),0) defect from (select tanggal from dim_date) a left join
            (SELECT id,tgl_plan,sewing_line,plan_target,jam_kerja from master_plan where sewing_line = 'line_09') b on b.tgl_plan = a.tanggal left join
            (SELECT master_plan_id,count(a.id) actual_sekarang from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '10:00' and DATE_FORMAT(created_at, '%H:%i') <= '11:00') c on c.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) actual_sebelum from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') < '10:00') d on d.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) defect from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '10:00' and DATE_FORMAT(created_at, '%H:%i') <= '11:00') e on e.master_plan_id = b.id
            where a.tanggal = CURRENT_DATE())a) a");
        return $query->row_array();
    }

    function cari_datajam11()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT jam_kerja,target target1, actual_sekarang output, (target - actual_sekarang) variation1,round(actual_sekarang / target * 100,2) efficiency1,round(defect / target * 100,2) defect_rate1, (target + sisa) target2, ((target + sisa) - actual_sekarang) variation2,round(actual_sekarang / (target + sisa) * 100,2) efficiency2,round(defect / (target + sisa) * 100,2) defect_rate2 from(SELECT plan_target,MOD((plan_target - actual_sebelum),(jam_kerja - 4)) sisa,actual_sekarang,actual_sebelum,jam_kerja,defect,FLOOR((plan_target - actual_sebelum)/(jam_kerja - 4)) target from (
            select COALESCE(sum(plan_target),0) plan_target, COALESCE(sum(jam_kerja),0) jam_kerja, COALESCE(sum(actual_sebelum),0) actual_sebelum,COALESCE(sum(actual_sekarang),0) actual_sekarang, COALESCE(sum(defect),0) defect from (select tanggal from dim_date) a left join
            (SELECT id,tgl_plan,sewing_line,plan_target,jam_kerja from master_plan where sewing_line = 'line_09') b on b.tgl_plan = a.tanggal left join
            (SELECT master_plan_id,count(a.id) actual_sekarang from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '11:00' and DATE_FORMAT(created_at, '%H:%i') <= '12:00') c on c.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) actual_sebelum from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') < '11:00') d on d.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) defect from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '11:00' and DATE_FORMAT(created_at, '%H:%i') <= '12:00') e on e.master_plan_id = b.id
            where a.tanggal = CURRENT_DATE())a) a");
        return $query->row_array();
    }

    function cari_datajam13()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT jam_kerja,target target1, actual_sekarang output, (target - actual_sekarang) variation1,round(actual_sekarang / target * 100,2) efficiency1,round(defect / target * 100,2) defect_rate1, (target + sisa) target2, ((target + sisa) - actual_sekarang) variation2,round(actual_sekarang / (target + sisa) * 100,2) efficiency2,round(defect / (target + sisa) * 100,2) defect_rate2 from(SELECT plan_target,MOD((plan_target - actual_sebelum),(jam_kerja - 5)) sisa,actual_sekarang,actual_sebelum,jam_kerja,defect,FLOOR((plan_target - actual_sebelum)/(jam_kerja - 5)) target from (
            select COALESCE(sum(plan_target),0) plan_target, COALESCE(sum(jam_kerja),0) jam_kerja, COALESCE(sum(actual_sebelum),0) actual_sebelum,COALESCE(sum(actual_sekarang),0) actual_sekarang, COALESCE(sum(defect),0) defect from (select tanggal from dim_date) a left join
            (SELECT id,tgl_plan,sewing_line,plan_target,jam_kerja from master_plan where sewing_line = 'line_09') b on b.tgl_plan = a.tanggal left join
            (SELECT master_plan_id,count(a.id) actual_sekarang from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '12:00' and DATE_FORMAT(created_at, '%H:%i') <= '14:00') c on c.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) actual_sebelum from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') < '12:00') d on d.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) defect from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '12:00' and DATE_FORMAT(created_at, '%H:%i') <= '14:00') e on e.master_plan_id = b.id
            where a.tanggal = CURRENT_DATE())a) a");
        return $query->row_array();
    }

    function cari_datajam14()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT jam_kerja,target target1, actual_sekarang output, (target - actual_sekarang) variation1,round(actual_sekarang / target * 100,2) efficiency1,round(defect / target * 100,2) defect_rate1, (target + sisa) target2, ((target + sisa) - actual_sekarang) variation2,round(actual_sekarang / (target + sisa) * 100,2) efficiency2,round(defect / (target + sisa) * 100,2) defect_rate2 from(SELECT plan_target,MOD((plan_target - actual_sebelum),(jam_kerja - 6)) sisa,actual_sekarang,actual_sebelum,jam_kerja,defect,FLOOR((plan_target - actual_sebelum)/(jam_kerja - 6)) target from (
            select COALESCE(sum(plan_target),0) plan_target, COALESCE(sum(jam_kerja),0) jam_kerja, COALESCE(sum(actual_sebelum),0) actual_sebelum,COALESCE(sum(actual_sekarang),0) actual_sekarang, COALESCE(sum(defect),0) defect from (select tanggal from dim_date) a left join
            (SELECT id,tgl_plan,sewing_line,plan_target,jam_kerja from master_plan where sewing_line = 'line_09') b on b.tgl_plan = a.tanggal left join
            (SELECT master_plan_id,count(a.id) actual_sekarang from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '14:00' and DATE_FORMAT(created_at, '%H:%i') <= '15:00') c on c.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) actual_sebelum from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') < '14:00') d on d.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) defect from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '14:00' and DATE_FORMAT(created_at, '%H:%i') <= '15:00') e on e.master_plan_id = b.id
            where a.tanggal = CURRENT_DATE())a) a");
        return $query->row_array();
    }

    function cari_datajam15()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT jam_kerja,target target1, actual_sekarang output, (target - actual_sekarang) variation1,round(actual_sekarang / target * 100,2) efficiency1,round(defect / target * 100,2) defect_rate1, (target + sisa) target2, ((target + sisa) - actual_sekarang) variation2,round(actual_sekarang / (target + sisa) * 100,2) efficiency2,round(defect / (target + sisa) * 100,2) defect_rate2 from(SELECT plan_target,MOD((plan_target - actual_sebelum),(jam_kerja - 7)) sisa,actual_sekarang,actual_sebelum,jam_kerja,defect,FLOOR((plan_target - actual_sebelum)/(jam_kerja - 7)) target from (
            select COALESCE(sum(plan_target),0) plan_target, COALESCE(sum(jam_kerja),0) jam_kerja, COALESCE(sum(actual_sebelum),0) actual_sebelum,COALESCE(sum(actual_sekarang),0) actual_sekarang, COALESCE(sum(defect),0) defect from (select tanggal from dim_date) a left join
            (SELECT id,tgl_plan,sewing_line,plan_target,jam_kerja from master_plan where sewing_line = 'line_09') b on b.tgl_plan = a.tanggal left join
            (SELECT master_plan_id,count(a.id) actual_sekarang from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '15:00' and DATE_FORMAT(created_at, '%H:%i') <= '16:00') c on c.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) actual_sebelum from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') < '15:00') d on d.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) defect from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = 'line_09' and DATE_FORMAT(created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '15:00' and DATE_FORMAT(created_at, '%H:%i') <= '16:00') e on e.master_plan_id = b.id
            where a.tanggal = CURRENT_DATE())a) a");
        return $query->row_array();
    }
}
