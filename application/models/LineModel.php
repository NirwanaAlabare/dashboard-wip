<?php

use SebastianBergmann\Environment\Console;

class LineModel extends CI_Model
{
    function getDashboardSetting($line)
    {
        $line_id = preg_replace('/[^1-9]/', '', $line);
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("
            SELECT * FROM dashboard_line_set WHERE line_id = ".$line_id." LIMIT 1
        ");

        return $query->result_array();
    }

    function cari_efficiency_line($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("
SELECT sum(actual) actual from (SELECT count(a.id) actual from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE()
union
SELECT count(a.id) defect from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE()
union
SELECT count(a.id) reject from output_rejects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE()
union
SELECT count(a.id) reworks from output_reworks a inner join output_defects c on c.id = a.defect_id inner join master_plan b on b.id = c.master_plan_id where b.sewing_line = '".$line."' and DATE_FORMAT(a.created_at, '%Y-%m-%d') = CURRENT_DATE()) a ");
if ($query->result()) {            
foreach ($query->result() as $data) {
                $hasil = ($data->actual);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

    function cari_smv($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT smv from master_plan where tgl_plan = CURRENT_DATE() and sewing_line = '".$line."'");
        if ($query->result()) {
        foreach ($query->result() as $data) {
                $smv = ($data->smv);
            }
        } else {
            $smv = 0;
        }
        return $smv;
    }

    function cari_menpower($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT man_power from master_plan where tgl_plan = CURRENT_DATE() and sewing_line = '".$line."' and man_power > 0 and cancel = 'N'");
        if ($query->result()) {
        foreach ($query->result() as $data) {
                $man_power = ($data->man_power);
            }
        } else {
            $man_power = 0;
        }
        return $man_power;
    }

    function cari_defect_line($line)
    {
        $query = $this->db->query("SELECT 10.25 as persen");
        if ($query->result()) {    
        foreach ($query->result() as $percen) {
                $hasil = ($percen->persen);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

    function getbuyer($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT GROUP_CONCAT(Supplier) buyer from (select DISTINCT ms.Supplier from master_plan mp 
inner join act_costing ac on mp.id_ws = ac.id
inner join mastersupplier ms on ms.Id_Supplier = ac.id_buyer
where mp.cancel != 'Y' and mp.tgl_plan = CURRENT_DATE() and mp.sewing_line = '".$line."') a");
        if ($query->result()) {
        foreach ($query->result() as $data) {
                $buyer = ($data->buyer);
            }
        } else {
            $buyer = 0;
        }
        return $buyer;
    }

function cari_link_gambar($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT gambar image from master_plan where cancel != 'Y' and sewing_line = '".$line."' and DATE_FORMAT(tgl_plan, '%Y-%m-%d') = CURRENT_DATE() group by gambar");
        return $query->result_array();
    }

    function cari_link_gambar1($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT gambar image from master_plan where cancel != 'Y' and sewing_line = '".$line."' and DATE_FORMAT(tgl_plan, '%Y-%m-%d') = CURRENT_DATE() group by gambar order by id asc limit 1");
        return $query->result_array();
    }

    function cari_positiondefect($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT a.defect_area_x, a.defect_area_y, a.defect_type_id, b.gambar image from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and DATE_FORMAT(a.created_at, '%Y-%m-%d') = CURRENT_DATE() ");
            return $query->result_array();
    }

    function getno_ws($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT GROUP_CONCAT(kpno) no_ws from (select DISTINCT ac.kpno from master_plan mp 
inner join act_costing ac on mp.id_ws = ac.id
where mp.cancel != 'Y' and mp.tgl_plan = CURRENT_DATE() and mp.sewing_line = '".$line."') a ");
        if ($query->result()) {
        foreach ($query->result() as $data) {
                $no_ws = ($data->no_ws);
            }
        } else {
            $no_ws = 0;
        }
        return $no_ws;
    }

    function cari_actual($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) actual from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE()");
        if ($query->result()) {    
        foreach ($query->result() as $data) {
                $hasil = ($data->actual);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

    function cari_rfts($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("select sum(actual) rft from (SELECT count(a.id) actual from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and status = 'NORMAL'
        union
        SELECT - count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and a.defect_status = 'defect') a");
        if ($query->result()) {    
        foreach ($query->result() as $data) {
                $hasil = ($data->rft);
        }
    } else {}
        $hasil = 0;

        return $hasil;
    }
    
    function cari_per_rft($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("
            SELECT per_rft from (SELECT nama_line,username,COALESCE(effi,0) effi,COALESCE(per_rft,0) per_rft,COALESCE(per_defect,0) per_defect from (select username,SUBSTR(FullName FROM 8) nama_line from userpassword where Groupp = 'sewing' order by username asc
            ) line left join 
            (SELECT sewing_line,effi,per_rft,per_defect from (SELECT a.sewing_line,plan_target,actual,rft,deffect,effi,ROUND((rft / (rft + deffect) * 100),2) per_rft, ROUND((deffect / (rft + deffect) * 100),2) per_defect FROM (select sewing_line,min_prod,(man_power * menit_real) min_tersedia, actual,plan_target, ROUND((min_prod / (man_power * menit_real) * 100),2) effi from (Select a.sewing_line,actual,min_prod,man_power,if(menit_real > (jam_kerja * 60),jam_kerja,jam_real) jam_real, if(menit_real > (jam_kerja * 60),(jam_kerja * 60),menit_real) menit_real, jam_kerja,plan_target from (SELECT a.sewing_line,sum(actual) actual,sum(min_prod) min_prod,man_power,jam_real,menit_real FROM (SELECT id,sewing_line,smv,actual,round(smv * actual,4) min_prod FROM (SELECT sewing_line,id,smv from master_plan where tgl_plan = CURRENT_DATE() ) a inner join 
            (SELECT master_plan_id, count(a.id) actual from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.tgl_plan = CURRENT_DATE() GROUP BY master_plan_id) b on b.master_plan_id = a.id) a inner join 
            (SELECT sewing_line,man_power,jam_masuk,jam_sekarang, if(jam_kerja >= '6',jam_kerja -1,jam_kerja) jam_real, if(jam_kerja >= '6',menit_kerja -60,menit_kerja) menit_real from (SELECT sewing_line, man_power, CONCAT(CURRENT_DATE,' ','07:00:00') jam_masuk,CURRENT_DATE() as jam_sekarang, TIMESTAMPDIFF(hour,CONCAT(CURRENT_DATE,' ','07:00:00'),CURRENT_TIMESTAMP) jam_kerja,TIMESTAMPDIFF(minute,CONCAT(CURRENT_DATE,' ','07:00:00'),CURRENT_TIMESTAMP) menit_kerja from master_plan where tgl_plan = CURRENT_DATE() GROUP BY sewing_line order by sewing_line asc ) a) b on b.sewing_line = a.sewing_line GROUP BY a.sewing_line) a inner join
            (SELECT sewing_line,COALESCE(sum(jam_kerja),0) as jam_kerja,COALESCE(sum(plan_target),0) as plan_target from master_plan where tgl_plan = CURRENT_DATE() GROUP BY sewing_line) b on b.sewing_line = a.sewing_line) a) a left join 
            (SELECT b.sewing_line,count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.tgl_plan = CURRENT_DATE() GROUP BY b.sewing_line) b on b.sewing_line = a.sewing_line LEFT JOIN
            (select sewing_line,(rft) rft from (select a.sewing_line,COALESCE(rft,0) rft, COALESCE(deffect,0) deffect from (SELECT b.sewing_line,count(a.id) rft from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.tgl_plan = CURRENT_DATE() and status = 'NORMAL' GROUP BY b.sewing_line) a left join
            (SELECT b.sewing_line,- count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.tgl_plan = CURRENT_DATE() and a.defect_status = 'defect' GROUP BY b.sewing_line) b on b.sewing_line = a.sewing_line) a) c on c.sewing_line = a.sewing_line) a order by per_rft desc) b on b.sewing_line = line.username order by b.effi desc) a 
            where username = '".$line."'");
        if ($query->result()) {
            foreach ($query->result() as $data) {
            $hasil = ($data->per_rft);
        }
    } else {
        $hasil = 0;
    }

        return $hasil;
    }
    
    function cari_per_defect($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("
            SELECT per_defect from (SELECT nama_line,username,COALESCE(effi,0) effi,COALESCE(per_rft,0) per_rft,COALESCE(per_defect,0) per_defect from (select username,SUBSTR(FullName FROM 8) nama_line from userpassword where Groupp = 'sewing' order by username asc
            ) line left join 
            (SELECT sewing_line,effi,per_rft,per_defect from (SELECT a.sewing_line,plan_target,actual,rft,deffect,effi,ROUND((rft / (rft + deffect) * 100),2) per_rft, ROUND((deffect / (rft + deffect) * 100),2) per_defect FROM (select sewing_line,min_prod,(man_power * menit_real) min_tersedia, actual,plan_target, ROUND((min_prod / (man_power * menit_real) * 100),2) effi from (Select a.sewing_line,actual,min_prod,man_power,if(menit_real > (jam_kerja * 60),jam_kerja,jam_real) jam_real, if(menit_real > (jam_kerja * 60),(jam_kerja * 60),menit_real) menit_real, jam_kerja,plan_target from (SELECT a.sewing_line,sum(actual) actual,sum(min_prod) min_prod,man_power,jam_real,menit_real FROM (SELECT id,sewing_line,smv,actual,round(smv * actual,4) min_prod FROM (SELECT sewing_line,id,smv from master_plan where tgl_plan = CURRENT_DATE() ) a inner join 
            (SELECT master_plan_id, count(a.id) actual from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.tgl_plan = CURRENT_DATE() GROUP BY master_plan_id) b on b.master_plan_id = a.id) a inner join 
            (SELECT sewing_line,man_power,jam_masuk,jam_sekarang, if(jam_kerja >= '6',jam_kerja -1,jam_kerja) jam_real, if(jam_kerja >= '6',menit_kerja -60,menit_kerja) menit_real from (SELECT sewing_line, man_power, CONCAT(CURRENT_DATE,' ','07:00:00') jam_masuk,CURRENT_DATE() as jam_sekarang, TIMESTAMPDIFF(hour,CONCAT(CURRENT_DATE,' ','07:00:00'),CURRENT_TIMESTAMP) jam_kerja,TIMESTAMPDIFF(minute,CONCAT(CURRENT_DATE,' ','07:00:00'),CURRENT_TIMESTAMP) menit_kerja from master_plan where tgl_plan = CURRENT_DATE() GROUP BY sewing_line order by sewing_line asc ) a) b on b.sewing_line = a.sewing_line GROUP BY a.sewing_line) a inner join
            (SELECT sewing_line,COALESCE(sum(jam_kerja),0) as jam_kerja,COALESCE(sum(plan_target),0) as plan_target from master_plan where tgl_plan = CURRENT_DATE() GROUP BY sewing_line) b on b.sewing_line = a.sewing_line) a) a left join 
            (SELECT b.sewing_line,count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.tgl_plan = CURRENT_DATE() GROUP BY b.sewing_line) b on b.sewing_line = a.sewing_line LEFT JOIN
            (select sewing_line,(rft) rft from (select a.sewing_line,COALESCE(rft,0) rft, COALESCE(deffect,0) deffect from (SELECT b.sewing_line,count(a.id) rft from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.tgl_plan = CURRENT_DATE() and status = 'NORMAL' GROUP BY b.sewing_line) a left join
            (SELECT b.sewing_line,- count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.tgl_plan = CURRENT_DATE() and a.defect_status = 'defect' GROUP BY b.sewing_line) b on b.sewing_line = a.sewing_line) a) c on c.sewing_line = a.sewing_line) a order by per_rft desc) b on b.sewing_line = line.username order by b.effi desc) a 
            where username = '".$line."'");
        if ($query->result()) {
            foreach ($query->result() as $data) {
            $hasil = ($data->per_defect);
        }
    } else {
        $hasil = 0;
    }

        return $hasil;
    }

    function cari_day_target($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT COALESCE(sum(plan_target),0) as day_target from master_plan where cancel != 'Y' and tgl_plan = CURRENT_DATE() and sewing_line = '".$line."'");
        if ($query->result()) {    
        foreach ($query->result() as $data) {
                $hasil = ($data->day_target);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

    function cari_jamker($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT COALESCE(sum(jam_kerja),0) as jam_kerja from master_plan where cancel != 'Y' and tgl_plan = CURRENT_DATE() and sewing_line = '".$line."'");
        if ($query->result()) {    
        foreach ($query->result() as $data) {
                $hasil = ($data->jam_kerja);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

    function cari_variance($line)
    {
        $query = $this->db->query("SELECT 117 as variance");
        if ($query->result()) {    
        foreach ($query->result() as $data) {
                $hasil = ($data->variance);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }


    function cari_deffect($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE()");
        if ($query->result()) {    
        foreach ($query->result() as $data) {
                $hasil = ($data->deffect);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

    function cari_listdefect($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT defect_type_id, defect_type,jml from (SELECT a.defect_type_id, c.defect_type, COUNT( c.defect_type) jml from output_defects a inner join master_plan b on b.id = a.master_plan_id inner join output_defect_types c on c.id = a.defect_type_id where b.sewing_line = '".$line."' and DATE_FORMAT(a.created_at, '%Y-%m-%d') = CURRENT_DATE() GROUP BY c.defect_type ) a order by a.jml desc limit 5 ");
            return $query->result_array();
    }

    function cari_rework($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) rework from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and a.defect_status = 'reworked'");
        if ($query->result()) {    
        foreach ($query->result() as $data) {
                $hasil = ($data->rework);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

        function cari_target_floor($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT FLOOR(COALESCE(plan_target,0)/COALESCE(jam_kerja,1)) target from (select sum(plan_target) plan_target, sum(jam_kerja) jam_kerja from (select tanggal from dim_date) a left join
(SELECT tgl_plan,sewing_line,plan_target,jam_kerja from master_plan where cancel != 'Y' and sewing_line = '".$line."') b on b.tgl_plan = a.tanggal where a.tanggal = CURRENT_DATE()) a");
            if ($query->result()) {
            foreach ($query->result() as $target) {
                $hasil = ($target->target);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

    function cari_target_floor_menit($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT COALESCE(plan_target,0)/COALESCE((jam_kerja * 60),1) target from (select sum(plan_target) plan_target, sum(jam_kerja) jam_kerja from (select tanggal from dim_date) a left join
(SELECT tgl_plan,sewing_line,plan_target,jam_kerja from master_plan where cancel != 'Y' and sewing_line = '".$line."') b on b.tgl_plan = a.tanggal where a.tanggal = CURRENT_DATE()) a");
            if ($query->result()) {
            foreach ($query->result() as $target) {
                $hasil = ($target->target);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }


    function cari_target_floordom($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT (target + sisa) target from (select FLOOR(COALESCE(plan_target,0)/COALESCE(jam_kerja,1)) target, MOD(COALESCE(plan_target,0),COALESCE(jam_kerja,1)) sisa from (select sum(plan_target) plan_target, sum(jam_kerja) jam_kerja from (select tanggal from dim_date) a left join
(SELECT tgl_plan,sewing_line,plan_target,jam_kerja from master_plan where cancel != 'Y' and sewing_line = '".$line."') b on b.tgl_plan = a.tanggal where a.tanggal = CURRENT_DATE()) a) a");
            if ($query->result()) {
            foreach ($query->result() as $target) {
                $hasil = ($target->target);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }


     function cari_output_jam7($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '07:00' and '08:00'");
        if ($query->result()) {    
        foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

     function cari_output_jam8($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '08:00' and '09:00'");
        if ($query->result()) {    
        foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

     function cari_output_jam9($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '09:00' and '10:00'");
        if ($query->result()) {    
        foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

     function cari_output_jam10($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '10:00' and '11:00'");
        if ($query->result()) {    
        foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

     function cari_output_jam11($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '11:00' and '12:00'");
        if ($query->result()) {    
        foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

     function cari_output_jam13($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '13:00' and '14:00'");
        if ($query->result()) {    
        foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

     function cari_output_jam14($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '14:00' and '15:00'");
        if ($query->result()) {    
        foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

     function cari_output_jam15($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '15:00' and '16:00'");
        if ($query->result()) {    
        foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

     function cari_output_jam16($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '16:00' and '17:00'");
        if ($query->result()) {    
        foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }


    //deffect
    function cari_deffect_jam7($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '07:00' and '08:00'");
        if ($query->result()) {    
        foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

     function cari_deffect_jam8($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '08:00' and '09:00'");
        if ($query->result()) {    
        foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

     function cari_deffect_jam9($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '09:00' and '10:00'");
        if ($query->result()) {    
        foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

     function cari_deffect_jam10($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '10:00' and '11:00'");
        if ($query->result()) {    
        foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

     function cari_deffect_jam11($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '11:00' and '12:00'");
        if ($query->result()) {    
        foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

     function cari_deffect_jam13($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '13:00' and '14:00'");
        if ($query->result()) {    
        foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

     function cari_deffect_jam14($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '14:00' and '15:00'");
        if ($query->result()) {    
        foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

     function cari_deffect_jam15($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '15:00' and '16:00'");
        if ($query->result()) {    
        foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

     function cari_deffect_jam16($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') BETWEEN '16:00' and '17:00'");
        if ($query->result()) {    
        foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }


    //deffect
    function cari_rework_jam7($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_reworks a inner join output_defects c on c.id = a.defect_id inner join master_plan b on b.id = c.master_plan_id where b.sewing_line = '".$line."' and DATE_FORMAT(a.created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(a.created_at, '%H:%i') BETWEEN '07:00' and '08:00'");
        if ($query->result()) {    
        foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

     function cari_rework_jam8($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_reworks a inner join output_defects c on c.id = a.defect_id inner join master_plan b on b.id = c.master_plan_id where b.sewing_line = '".$line."' and DATE_FORMAT(a.created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(a.created_at, '%H:%i') BETWEEN '08:00' and '09:00'");
        if ($query->result()) {    
        foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

     function cari_rework_jam9($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_reworks a inner join output_defects c on c.id = a.defect_id inner join master_plan b on b.id = c.master_plan_id where b.sewing_line = '".$line."' and DATE_FORMAT(a.created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(a.created_at, '%H:%i') BETWEEN '09:00' and '10:00'");
        if ($query->result()) {    
        foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

     function cari_rework_jam10($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_reworks a inner join output_defects c on c.id = a.defect_id inner join master_plan b on b.id = c.master_plan_id where b.sewing_line = '".$line."' and DATE_FORMAT(a.created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(a.created_at, '%H:%i') BETWEEN '10:00' and '11:00'");
        if ($query->result()) {    
        foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

     function cari_rework_jam11($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_reworks a inner join output_defects c on c.id = a.defect_id inner join master_plan b on b.id = c.master_plan_id where b.sewing_line = '".$line."' and DATE_FORMAT(a.created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(a.created_at, '%H:%i') BETWEEN '11:00' and '12:00'");
        if ($query->result()) {    
        foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

     function cari_rework_jam13($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_reworks a inner join output_defects c on c.id = a.defect_id inner join master_plan b on b.id = c.master_plan_id where b.sewing_line = '".$line."' and DATE_FORMAT(a.created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(a.created_at, '%H:%i') BETWEEN '13:00' and '14:00'");
        if ($query->result()) {    
        foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

     function cari_rework_jam14($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_reworks a inner join output_defects c on c.id = a.defect_id inner join master_plan b on b.id = c.master_plan_id where b.sewing_line = '".$line."' and DATE_FORMAT(a.created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(a.created_at, '%H:%i') BETWEEN '14:00' and '15:00'");
        if ($query->result()) {    
        foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

     function cari_rework_jam15($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_reworks a inner join output_defects c on c.id = a.defect_id inner join master_plan b on b.id = c.master_plan_id where b.sewing_line = '".$line."' and DATE_FORMAT(a.created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(a.created_at, '%H:%i') BETWEEN '15:00' and '16:00'");
        if ($query->result()) {    
        foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

     function cari_rework_jam16($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT count(a.id) jumlah from output_reworks a inner join output_defects c on c.id = a.defect_id inner join master_plan b on b.id = c.master_plan_id where b.sewing_line = '".$line."' and DATE_FORMAT(a.created_at, '%Y-%m-%d') = CURRENT_DATE() and DATE_FORMAT(a.created_at, '%H:%i') BETWEEN '16:00' and '17:00'");
        if ($query->result()) {    
        foreach ($query->result() as $jumlah) {
                $hasil = ($jumlah->jumlah);
            }
        } else {
            $hasil = 0;
        }

        return $hasil;
    }

    function cari_datajam7($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT jam_kerja,target target1, actual_sekarang output, (target - actual_sekarang) variation1,round(min_prod / (man_power * 60) * 100,2) efficiency1,round(defect / target * 100,2) defect_rate1, (target + sisa) target2, ((target + sisa) - actual_sekarang) variation2,round(min_prod / (man_power * 60) * 100,2) efficiency2,round(defect / (target + sisa) * 100,2) defect_rate2 from(SELECT plan_target,MOD((plan_target - actual_sebelum),(jam_kerja - 0)) sisa,actual_sekarang,actual_sebelum,jam_kerja,defect,FLOOR((plan_target - actual_sebelum)/(jam_kerja - 0)) target, min_prod, man_power from (
            select COALESCE(sum(plan_target),0) plan_target, COALESCE(sum(jam_kerja),0) jam_kerja, COALESCE(sum(actual_sebelum),0) actual_sebelum,COALESCE(sum(actual_sekarang),0) actual_sekarang, COALESCE(sum(defect),0) defect, max(man_power) man_power, COALESCE(sum(smv * actual_sekarang),0) min_prod from (select tanggal from dim_date) a left join
            (SELECT id,tgl_plan,sewing_line,plan_target,jam_kerja, man_power, smv from master_plan where sewing_line = '".$line."' and tgl_plan = CURRENT_DATE()) b on b.tgl_plan = a.tanggal left join
            (SELECT master_plan_id,count(a.id) actual_sekarang from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '00:00' and DATE_FORMAT(created_at, '%H:%i') < '08:00') c on c.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) actual_sebelum from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') < '06:00') d on d.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) defect from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '07:00' and DATE_FORMAT(created_at, '%H:%i') < '08:00') e on e.master_plan_id = b.id
            where a.tanggal = CURRENT_DATE())a) a");
        return $query->row_array();
    }

    function cari_datajam8($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        // $query = $db_sblokal->query("SELECT jam_kerja,target target1, actual_sekarang output, (target - actual_sekarang) variation1,round(actual_sekarang / target * 100,2) efficiency1,round(defect / target * 100,2) defect_rate1, (target + sisa) target2, ((target + sisa) - actual_sekarang) variation2,round(actual_sekarang / (target + sisa) * 100,2) efficiency2,round(defect / (target + sisa) * 100,2) defect_rate2 from(SELECT plan_target,MOD((plan_target - actual_sebelum),(jam_kerja - 1)) sisa,actual_sekarang,actual_sebelum,jam_kerja,defect,FLOOR((plan_target - actual_sebelum)/(jam_kerja - 1)) target from (
        //     select COALESCE(sum(plan_target),0) plan_target, COALESCE(sum(jam_kerja),0) jam_kerja, COALESCE(sum(actual_sebelum),0) actual_sebelum,COALESCE(sum(actual_sekarang),0) actual_sekarang, COALESCE(sum(defect),0) defect from (select tanggal from dim_date) a left join
        //     (SELECT id,tgl_plan,sewing_line,plan_target,jam_kerja from master_plan where sewing_line = '".$line."') b on b.tgl_plan = a.tanggal left join
        //     (SELECT master_plan_id,count(a.id) actual_sekarang from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '08:00' and DATE_FORMAT(created_at, '%H:%i') <= '09:00') c on c.master_plan_id = b.id
        //     left join
        //     (SELECT master_plan_id,count(a.id) actual_sebelum from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') < '08:00') d on d.master_plan_id = b.id
        //     left join
        //     (SELECT master_plan_id,count(a.id) defect from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '08:00' and DATE_FORMAT(created_at, '%H:%i') <= '09:00') e on e.master_plan_id = b.id
        //     where a.tanggal = CURRENT_DATE())a) a");

        $query = $db_sblokal->query("SELECT jam_kerja,target target1, actual_sekarang output, (target - actual_sekarang) variation1,round(min_prod / (man_power * 60) * 100,2) efficiency1,round(defect / target * 100,2) defect_rate1, (target + sisa) target2, ((target + sisa) - actual_sekarang) variation2,round(min_prod / (man_power * 60) * 100,2) efficiency2,round(defect / (target + sisa) * 100,2) defect_rate2 from(SELECT plan_target,MOD((plan_target - actual_sebelum),(jam_kerja - 0)) sisa,actual_sekarang,actual_sebelum,jam_kerja,defect,FLOOR((plan_target - actual_sebelum)/(jam_kerja - 0)) target, min_prod, man_power from (
            select COALESCE(sum(plan_target),0) plan_target, COALESCE(sum(jam_kerja),0) jam_kerja, COALESCE(sum(actual_sebelum),0) actual_sebelum,COALESCE(sum(actual_sekarang),0) actual_sekarang, COALESCE(sum(defect),0) defect, max(man_power) man_power, COALESCE(sum(smv * actual_sekarang),0) min_prod from (select tanggal from dim_date) a left join
            (SELECT id,tgl_plan,sewing_line,plan_target,jam_kerja, man_power, smv from master_plan where sewing_line = 'line_07' and tgl_plan = CURRENT_DATE()) b on b.tgl_plan = a.tanggal left join
            (SELECT master_plan_id,count(a.id) actual_sekarang from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '08:00' and DATE_FORMAT(created_at, '%H:%i') < '09:00') c on c.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) actual_sebelum from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') < '08:00') d on d.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) defect from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '08:00' and DATE_FORMAT(created_at, '%H:%i') < '09:00') e on e.master_plan_id = b.id
            where a.tanggal = CURRENT_DATE())a) a");
        return $query->row_array();
    }

    function cari_datajam9($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT jam_kerja,target target1, actual_sekarang output, (target - actual_sekarang) variation1,round(min_prod / (man_power * 60) * 100,2) efficiency1,round(defect / target * 100,2) defect_rate1, (target + sisa) target2, ((target + sisa) - actual_sekarang) variation2,round(min_prod / (man_power * 60) * 100,2) efficiency2,round(defect / (target + sisa) * 100,2) defect_rate2 from(SELECT plan_target,MOD((plan_target - actual_sebelum),(jam_kerja - 0)) sisa,actual_sekarang,actual_sebelum,jam_kerja,defect,FLOOR((plan_target - actual_sebelum)/(jam_kerja - 0)) target, min_prod, man_power from (
            select COALESCE(sum(plan_target),0) plan_target, COALESCE(sum(jam_kerja),0) jam_kerja, COALESCE(sum(actual_sebelum),0) actual_sebelum,COALESCE(sum(actual_sekarang),0) actual_sekarang, COALESCE(sum(defect),0) defect, max(man_power) man_power, COALESCE(sum(smv * actual_sekarang),0) min_prod from (select tanggal from dim_date) a left join
            (SELECT id,tgl_plan,sewing_line,plan_target,jam_kerja, man_power, smv from master_plan where sewing_line = 'line_07' and tgl_plan = CURRENT_DATE()) b on b.tgl_plan = a.tanggal left join
            (SELECT master_plan_id,count(a.id) actual_sekarang from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '09:00' and DATE_FORMAT(created_at, '%H:%i') < '10:00') c on c.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) actual_sebelum from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') < '09:00') d on d.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) defect from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '09:00' and DATE_FORMAT(created_at, '%H:%i') < '10:00') e on e.master_plan_id = b.id
            where a.tanggal = CURRENT_DATE())a) a");
        return $query->row_array();
    }

    function cari_datajam10($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT jam_kerja,target target1, actual_sekarang output, (target - actual_sekarang) variation1,round(actual_sekarang / target * 100,2) efficiency1,round(defect / target * 100,2) defect_rate1, (target + sisa) target2, ((target + sisa) - actual_sekarang) variation2,round(actual_sekarang / (target + sisa) * 100,2) efficiency2,round(defect / (target + sisa) * 100,2) defect_rate2 from(SELECT plan_target,MOD((plan_target - actual_sebelum),(jam_kerja - 3)) sisa,actual_sekarang,actual_sebelum,jam_kerja,defect,FLOOR((plan_target - actual_sebelum)/(jam_kerja - 3)) target from (
            select COALESCE(sum(plan_target),0) plan_target, COALESCE(sum(jam_kerja),0) jam_kerja, COALESCE(sum(actual_sebelum),0) actual_sebelum,COALESCE(sum(actual_sekarang),0) actual_sekarang, COALESCE(sum(defect),0) defect from (select tanggal from dim_date) a left join
            (SELECT id,tgl_plan,sewing_line,plan_target,jam_kerja from master_plan where sewing_line = '".$line."') b on b.tgl_plan = a.tanggal left join
            (SELECT master_plan_id,count(a.id) actual_sekarang from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '10:00' and DATE_FORMAT(created_at, '%H:%i') <= '11:00') c on c.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) actual_sebelum from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') < '10:00') d on d.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) defect from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '10:00' and DATE_FORMAT(created_at, '%H:%i') <= '11:00') e on e.master_plan_id = b.id
            where a.tanggal = CURRENT_DATE())a) a");
        return $query->row_array();
    }

    function cari_datajam11($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT jam_kerja,target target1, actual_sekarang output, (target - actual_sekarang) variation1,round(actual_sekarang / target * 100,2) efficiency1,round(defect / target * 100,2) defect_rate1, (target + sisa) target2, ((target + sisa) - actual_sekarang) variation2,round(actual_sekarang / (target + sisa) * 100,2) efficiency2,round(defect / (target + sisa) * 100,2) defect_rate2 from(SELECT plan_target,MOD((plan_target - actual_sebelum),(jam_kerja - 4)) sisa,actual_sekarang,actual_sebelum,jam_kerja,defect,FLOOR((plan_target - actual_sebelum)/(jam_kerja - 4)) target from (
            select COALESCE(sum(plan_target),0) plan_target, COALESCE(sum(jam_kerja),0) jam_kerja, COALESCE(sum(actual_sebelum),0) actual_sebelum,COALESCE(sum(actual_sekarang),0) actual_sekarang, COALESCE(sum(defect),0) defect from (select tanggal from dim_date) a left join
            (SELECT id,tgl_plan,sewing_line,plan_target,jam_kerja from master_plan where sewing_line = '".$line."') b on b.tgl_plan = a.tanggal left join
            (SELECT master_plan_id,count(a.id) actual_sekarang from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '11:00' and DATE_FORMAT(created_at, '%H:%i') <= '12:00') c on c.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) actual_sebelum from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') < '11:00') d on d.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) defect from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '11:00' and DATE_FORMAT(created_at, '%H:%i') <= '12:00') e on e.master_plan_id = b.id
            where a.tanggal = CURRENT_DATE())a) a");
        return $query->row_array();
    }

    function cari_datajam13($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT jam_kerja,target target1, actual_sekarang output, (target - actual_sekarang) variation1,round(actual_sekarang / target * 100,2) efficiency1,round(defect / target * 100,2) defect_rate1, (target + sisa) target2, ((target + sisa) - actual_sekarang) variation2,round(actual_sekarang / (target + sisa) * 100,2) efficiency2,round(defect / (target + sisa) * 100,2) defect_rate2 from(SELECT plan_target,MOD((plan_target - actual_sebelum),(jam_kerja - 5)) sisa,actual_sekarang,actual_sebelum,jam_kerja,defect,FLOOR((plan_target - actual_sebelum)/(jam_kerja - 5)) target from (
            select COALESCE(sum(plan_target),0) plan_target, COALESCE(sum(jam_kerja),0) jam_kerja, COALESCE(sum(actual_sebelum),0) actual_sebelum,COALESCE(sum(actual_sekarang),0) actual_sekarang, COALESCE(sum(defect),0) defect from (select tanggal from dim_date) a left join
            (SELECT id,tgl_plan,sewing_line,plan_target,jam_kerja from master_plan where sewing_line = '".$line."') b on b.tgl_plan = a.tanggal left join
            (SELECT master_plan_id,count(a.id) actual_sekarang from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '12:00' and DATE_FORMAT(created_at, '%H:%i') <= '14:00') c on c.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) actual_sebelum from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') < '12:00') d on d.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) defect from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '12:00' and DATE_FORMAT(created_at, '%H:%i') <= '14:00') e on e.master_plan_id = b.id
            where a.tanggal = CURRENT_DATE())a) a");
        return $query->row_array();
    }

    function cari_datajam14($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT jam_kerja,target target1, actual_sekarang output, (target - actual_sekarang) variation1,round(actual_sekarang / target * 100,2) efficiency1,round(defect / target * 100,2) defect_rate1, (target + sisa) target2, ((target + sisa) - actual_sekarang) variation2,round(actual_sekarang / (target + sisa) * 100,2) efficiency2,round(defect / (target + sisa) * 100,2) defect_rate2 from(SELECT plan_target,MOD((plan_target - actual_sebelum),(jam_kerja - 6)) sisa,actual_sekarang,actual_sebelum,jam_kerja,defect,FLOOR((plan_target - actual_sebelum)/(jam_kerja - 6)) target from (
            select COALESCE(sum(plan_target),0) plan_target, COALESCE(sum(jam_kerja),0) jam_kerja, COALESCE(sum(actual_sebelum),0) actual_sebelum,COALESCE(sum(actual_sekarang),0) actual_sekarang, COALESCE(sum(defect),0) defect from (select tanggal from dim_date) a left join
            (SELECT id,tgl_plan,sewing_line,plan_target,jam_kerja from master_plan where sewing_line = '".$line."') b on b.tgl_plan = a.tanggal left join
            (SELECT master_plan_id,count(a.id) actual_sekarang from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '14:00' and DATE_FORMAT(created_at, '%H:%i') <= '15:00') c on c.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) actual_sebelum from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') < '14:00') d on d.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) defect from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '14:00' and DATE_FORMAT(created_at, '%H:%i') <= '15:00') e on e.master_plan_id = b.id
            where a.tanggal = CURRENT_DATE())a) a");
        return $query->row_array();
    }

    function cari_datajam15($line)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT jam_kerja,target target1, actual_sekarang output, (target - actual_sekarang) variation1,round(actual_sekarang / target * 100,2) efficiency1,round(defect / target * 100,2) defect_rate1, (target + sisa) target2, ((target + sisa) - actual_sekarang) variation2,round(actual_sekarang / (target + sisa) * 100,2) efficiency2,round(defect / (target + sisa) * 100,2) defect_rate2 from(SELECT plan_target,MOD((plan_target - actual_sebelum),(jam_kerja - 7)) sisa,actual_sekarang,actual_sebelum,jam_kerja,defect,FLOOR((plan_target - actual_sebelum)/(jam_kerja - 7)) target from (
            select COALESCE(sum(plan_target),0) plan_target, COALESCE(sum(jam_kerja),0) jam_kerja, COALESCE(sum(actual_sebelum),0) actual_sebelum,COALESCE(sum(actual_sekarang),0) actual_sekarang, COALESCE(sum(defect),0) defect from (select tanggal from dim_date) a left join
            (SELECT id,tgl_plan,sewing_line,plan_target,jam_kerja from master_plan where sewing_line = '".$line."') b on b.tgl_plan = a.tanggal left join
            (SELECT master_plan_id,count(a.id) actual_sekarang from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '15:00' and DATE_FORMAT(created_at, '%H:%i') <= '16:00') c on c.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) actual_sebelum from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') < '15:00') d on d.master_plan_id = b.id
            left join
            (SELECT master_plan_id,count(a.id) defect from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.sewing_line = '".$line."' and b.tgl_plan = CURRENT_DATE() and DATE_FORMAT(created_at, '%H:%i') >= '15:00' and DATE_FORMAT(created_at, '%H:%i') <= '16:00') e on e.master_plan_id = b.id
            where a.tanggal = CURRENT_DATE())a) a");
        return $query->row_array();
    }

}