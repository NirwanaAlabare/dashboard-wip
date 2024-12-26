<?php

use SebastianBergmann\Environment\Console;

class Model_factory_before extends CI_Model
{

    

    // function cari_efficiency_factory()
    // {
    //     $db_pg = $this->load->database('db_pg', TRUE);
    //     $query = $db_pg->query("SELECT 'kata' persen from master_line ");
    //         foreach ($query->result() as $percen) {
    //             $hasil = ($percen->persen);
    //         }

    //     return $hasil;
    // }


    function cari_defectno1()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT defect_type from (select id,CONCAT(UCASE(LEFT(defect_type, 1)),SUBSTRING(defect_type, 2)) defect_type ,deffect from (select                         a.defect_type_id,count(a.id) deffect from output_defects a
                                     inner join master_plan b on b.id = a.master_plan_id 
                                     where DATE_FORMAT(created_at, '%Y-%m-%d') = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))
                                     GROUP BY a.defect_type_id) a inner join
                                     (select id,defect_type from output_defect_types) b on b.id = a.defect_type_id order by deffect desc, id asc limit 5) a limit 0,1 
                                    ");
        foreach ($query->result() as $defect) {
            $hasil = ($defect->defect_type);
            $hasil2 = '-';
        if ($query->num_rows() > 0) {
            return $hasil;
        }else{
            return $hasil2;
        }
        }
    }

    function cari_val_defectno1()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT deffect from (select id,CONCAT(UCASE(LEFT(defect_type, 1)),SUBSTRING(defect_type, 2)) defect_type ,deffect from (select                         a.defect_type_id,count(a.id) deffect from output_defects a
                                     inner join master_plan b on b.id = a.master_plan_id 
                                     where DATE_FORMAT(created_at, '%Y-%m-%d') = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))
                                     GROUP BY a.defect_type_id) a inner join
                                     (select id,defect_type from output_defect_types) b on b.id = a.defect_type_id order by deffect desc, id asc limit 5) a limit 0,1 
                                    ");
        foreach ($query->result() as $defect) {
            $hasil = ($defect->deffect);
            $hasil2 = 0;
        if ($query->num_rows() > 0) {
            return $hasil;
        }else{
            return $hasil2;
        }
    }
    }

    function cari_defectno2()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT defect_type from (select id,CONCAT(UCASE(LEFT(defect_type, 1)),SUBSTRING(defect_type, 2)) defect_type ,deffect from (select                         a.defect_type_id,count(a.id) deffect from output_defects a
                                     inner join master_plan b on b.id = a.master_plan_id 
                                     where DATE_FORMAT(created_at, '%Y-%m-%d') = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))
                                     GROUP BY a.defect_type_id) a inner join
                                     (select id,defect_type from output_defect_types) b on b.id = a.defect_type_id order by deffect desc, id asc limit 5) a limit 1,1 
                                    ");
        foreach ($query->result() as $defect) {
            $hasil = ($defect->defect_type);
            $hasil2 = '-';
        if ($query->num_rows() > 0) {
            return $hasil;
        }else{
            return $hasil2;
        }
        }
    }

    function cari_val_defectno2()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT deffect from (select id,CONCAT(UCASE(LEFT(defect_type, 1)),SUBSTRING(defect_type, 2)) defect_type ,deffect from (select                         a.defect_type_id,count(a.id) deffect from output_defects a
                                     inner join master_plan b on b.id = a.master_plan_id 
                                     where DATE_FORMAT(created_at, '%Y-%m-%d') = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))
                                     GROUP BY a.defect_type_id) a inner join
                                     (select id,defect_type from output_defect_types) b on b.id = a.defect_type_id order by deffect desc, id asc limit 5) a limit 1,1 
                                    ");
        foreach ($query->result() as $defect) {
            $hasil = ($defect->deffect);
            $hasil2 = 0;
        if ($query->num_rows() > 0) {
            return $hasil;
        }else{
            return $hasil2;
        }
    }
    }

    function cari_defectno3()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT defect_type from (select id,CONCAT(UCASE(LEFT(defect_type, 1)),SUBSTRING(defect_type, 2)) defect_type ,deffect from (select                         a.defect_type_id,count(a.id) deffect from output_defects a
                                     inner join master_plan b on b.id = a.master_plan_id 
                                     where DATE_FORMAT(created_at, '%Y-%m-%d') = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))
                                     GROUP BY a.defect_type_id) a inner join
                                     (select id,defect_type from output_defect_types) b on b.id = a.defect_type_id order by deffect desc, id asc limit 5) a limit 2,1 
                                    ");
        foreach ($query->result() as $defect) {
            $hasil = ($defect->defect_type);
            $hasil2 = '-';
        if ($query->num_rows() > 0) {
            return $hasil;
        }else{
            return $hasil2;
        }
        }
    }

    function cari_val_defectno3()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT deffect from (select id,CONCAT(UCASE(LEFT(defect_type, 1)),SUBSTRING(defect_type, 2)) defect_type ,deffect from (select                         a.defect_type_id,count(a.id) deffect from output_defects a
                                     inner join master_plan b on b.id = a.master_plan_id 
                                     where DATE_FORMAT(created_at, '%Y-%m-%d') = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))
                                     GROUP BY a.defect_type_id) a inner join
                                     (select id,defect_type from output_defect_types) b on b.id = a.defect_type_id order by deffect desc, id asc limit 5) a limit 2,1 
                                    ");
        foreach ($query->result() as $defect) {
            $hasil = ($defect->deffect);
            $hasil2 = 0;
        if ($query->num_rows() > 0) {
            return $hasil;
        }else{
            return $hasil2;
        }
    }
    }

    function cari_defectno4()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT defect_type from (select id,CONCAT(UCASE(LEFT(defect_type, 1)),SUBSTRING(defect_type, 2)) defect_type ,deffect from (select                         a.defect_type_id,count(a.id) deffect from output_defects a
                                     inner join master_plan b on b.id = a.master_plan_id 
                                     where DATE_FORMAT(created_at, '%Y-%m-%d') = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))
                                     GROUP BY a.defect_type_id) a inner join
                                     (select id,defect_type from output_defect_types) b on b.id = a.defect_type_id order by deffect desc, id asc limit 5) a limit 3,1 
                                    ");
        foreach ($query->result() as $defect) {
            $hasil = ($defect->defect_type);
            $hasil2 = '-';
        if ($query->num_rows() > 0) {
            return $hasil;
        }else{
            return $hasil2;
        }
        }
    }

    function cari_val_defectno4()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT deffect from (select id,CONCAT(UCASE(LEFT(defect_type, 1)),SUBSTRING(defect_type, 2)) defect_type ,deffect from (select                         a.defect_type_id,count(a.id) deffect from output_defects a
                                     inner join master_plan b on b.id = a.master_plan_id 
                                     where DATE_FORMAT(created_at, '%Y-%m-%d') = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))
                                     GROUP BY a.defect_type_id) a inner join
                                     (select id,defect_type from output_defect_types) b on b.id = a.defect_type_id order by deffect desc, id asc limit 5) a limit 3,1 
                                    ");
        foreach ($query->result() as $defect) {
            $hasil = ($defect->deffect);
            $hasil2 = 0;
        if ($query->num_rows() > 0) {
            return $hasil;
        }else{
            return $hasil2;
        }
    }
    }

    function cari_defectno5()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT defect_type from (select id,CONCAT(UCASE(LEFT(defect_type, 1)),SUBSTRING(defect_type, 2)) defect_type ,deffect from (select                         a.defect_type_id,count(a.id) deffect from output_defects a
                                     inner join master_plan b on b.id = a.master_plan_id 
                                     where DATE_FORMAT(created_at, '%Y-%m-%d') = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))
                                     GROUP BY a.defect_type_id) a inner join
                                     (select id,defect_type from output_defect_types) b on b.id = a.defect_type_id order by deffect desc, id asc limit 5) a limit 4,1 
                                    ");
        foreach ($query->result() as $defect) {
            $hasil = ($defect->defect_type);
            $hasil2 = '-';
        if ($query->num_rows() > 0) {
            return $hasil;
        }else{
            return $hasil2;
        }
        }
    }

    function cari_val_defectno5()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT deffect from (select id,CONCAT(UCASE(LEFT(defect_type, 1)),SUBSTRING(defect_type, 2)) defect_type ,deffect from (select                         a.defect_type_id,count(a.id) deffect from output_defects a
                                     inner join master_plan b on b.id = a.master_plan_id 
                                     where DATE_FORMAT(created_at, '%Y-%m-%d') = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))
                                     GROUP BY a.defect_type_id) a inner join
                                     (select id,defect_type from output_defect_types) b on b.id = a.defect_type_id order by deffect desc, id asc limit 5) a limit 4,1 
                                    ");
        foreach ($query->result() as $defect) {
            $hasil = ($defect->deffect);
            $hasil2 = 0;
        if ($query->num_rows() > 0) {
            return $hasil;
        }else{
            return $hasil2;
        }
    }

    }


    function cari_tanggal()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT DATE_FORMAT(tanggal,'%d %M %Y') tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())");
            foreach ($query->result() as $data) {
                $hasil = ($data->tanggal);
            }

        return $hasil;
    }


    function cari_sum_effi()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT ROUND(sum(min_prod) / sum(min_tersedia) * 100,2) per_effi from (select nama_line,COALESCE(effi,0) effi,COALESCE(per_rft,0) per_rft,COALESCE(per_defect,0) per_defect,min_prod,min_tersedia from (select username,SUBSTR(FullName FROM 8) nama_line from userpassword where Groupp = 'sewing' order by username asc
) line inner join 
(SELECT sewing_line,effi,per_rft,per_defect,min_prod,min_tersedia from (SELECT a.sewing_line,plan_target,actual,rft,COALESCE(deffect,0) deffect,effi,ROUND((rft / (COALESCE(deffect,0) + rft) * 100),2) per_rft, ROUND((COALESCE(deffect,0) / (COALESCE(deffect,0) + rft) * 100),2) per_defect,ROUND(min_prod,2) min_prod, ROUND(min_tersedia,2) min_tersedia, man_power,jam_kerja FROM (select sewing_line,min_prod,(man_power * menit_real) min_tersedia, actual,plan_target, ROUND((min_prod / (man_power * menit_real) * 100),2) effi,man_power,jam_kerja from (Select a.sewing_line,actual,min_prod,man_power,if(menit_real > (jam_kerja * 60),jam_kerja,jam_real) jam_real, if(menit_real > (jam_kerja * 60),(jam_kerja * 60),menit_real) menit_real, jam_kerja,plan_target from (SELECT a.sewing_line,sum(actual) actual,sum(min_prod) min_prod,man_power,jam_real,menit_real FROM (SELECT id,sewing_line,smv,actual,round(smv * actual,4) min_prod FROM (SELECT sewing_line,id,smv from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) ) a inner join 
(SELECT master_plan_id, count(a.id) actual from output_rfts a inner join master_plan b on b.id = a.master_plan_id where DATE_FORMAT(created_at, '%Y-%m-%d') = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))GROUP BY master_plan_id) b on b.master_plan_id = a.id) a inner join 
(SELECT sewing_line,man_power,jam_masuk,jam_sekarang, if(jam_kerja >= '6',jam_kerja -1,jam_kerja) jam_real, if(jam_kerja >= '6',menit_kerja -60,menit_kerja) menit_real from (SELECT sewing_line, MAX(man_power) man_power, CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00') jam_masuk,(select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) as jam_sekarang, TIMESTAMPDIFF(hour,CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00'),(select concat(tanggal,' ','23:00:00') Tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))) jam_kerja,TIMESTAMPDIFF(minute,CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00'),(select concat(tanggal,' ','23:00:00') Tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))) menit_kerja from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line order by sewing_line asc ) a) b on b.sewing_line = a.sewing_line GROUP BY a.sewing_line) a inner join
(SELECT sewing_line,COALESCE(sum(jam_kerja),0) as jam_kerja,COALESCE(sum(plan_target),0) as plan_target from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line) b on b.sewing_line = a.sewing_line) a) a left join 
(SELECT b.sewing_line,count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id where DATE_FORMAT(created_at, '%Y-%m-%d') = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY b.sewing_line) b on b.sewing_line = a.sewing_line LEFT JOIN
(select sewing_line,(rft) rft from (select a.sewing_line,COALESCE(rft,0) rft, COALESCE(deffect,0) deffect from (SELECT b.sewing_line,count(a.id) rft from output_rfts a inner join master_plan b on b.id = a.master_plan_id where DATE_FORMAT(created_at, '%Y-%m-%d') = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and status = 'NORMAL' GROUP BY b.sewing_line) a left join
(SELECT b.sewing_line,- count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id where DATE_FORMAT(created_at, '%Y-%m-%d') = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and a.defect_status = 'defect' GROUP BY b.sewing_line) b on b.sewing_line = a.sewing_line) a) c on c.sewing_line = a.sewing_line) a order by per_rft desc) b on b.sewing_line = line.username order by b.effi desc) a");
            foreach ($query->result() as $data) {
                $hasil = ($data->per_effi);
            }

        return $hasil;
    }


    function cari_sum_rft()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT ROUND((SUM(rft) / (SUM(rft) + sum(deffect)) * 100),2) per_rft from (select nama_line,COALESCE(effi,0) effi,if(COALESCE(per_rft,0) < 0,0,COALESCE(per_rft,0)) per_rft,COALESCE(per_defect,0) per_defect,rft,deffect from (select username,SUBSTR(FullName FROM 8) nama_line from userpassword where Groupp = 'sewing' order by username asc
) line inner join
(SELECT sewing_line,effi,per_rft,per_defect,rft,deffect from (SELECT a.sewing_line,plan_target,actual,rft,COALESCE(deffect,0) deffect,effi,ROUND((rft / (COALESCE(deffect,0) + rft) * 100),2) per_rft, ROUND((COALESCE(deffect,0) / (COALESCE(deffect,0) + rft) * 100),2) per_defect FROM (select sewing_line,min_prod,(man_power * menit_real) min_tersedia, actual,plan_target, ROUND((min_prod / (man_power * menit_real) * 100),2) effi from (Select a.sewing_line,actual,min_prod,man_power,if(menit_real > (jam_kerja * 60),jam_kerja,jam_real) jam_real, if(menit_real > (jam_kerja * 60),(jam_kerja * 60),menit_real) menit_real, jam_kerja,plan_target from (SELECT a.sewing_line,sum(actual) actual,sum(min_prod) min_prod,man_power,jam_real,menit_real FROM (SELECT id,sewing_line,smv,actual,round(smv * actual,4) min_prod FROM (SELECT sewing_line,id,smv from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) ) a inner join 
(SELECT master_plan_id, count(a.id) actual from output_rfts a inner join master_plan b on b.id = a.master_plan_id where DATE_FORMAT(created_at, '%Y-%m-%d') = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY master_plan_id) b on b.master_plan_id = a.id) a inner join 
(SELECT sewing_line,man_power,jam_masuk,jam_sekarang, if(jam_kerja >= '6',jam_kerja -1,jam_kerja) jam_real, if(jam_kerja >= '6',menit_kerja -60,menit_kerja) menit_real from (SELECT sewing_line, max(man_power) man_power, CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00') jam_masuk,(select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) as jam_sekarang, TIMESTAMPDIFF(hour,CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00'),(select concat(tanggal,' ','23:00:00') Tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))) jam_kerja,TIMESTAMPDIFF(minute,CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00'),(select concat(tanggal,' ','23:00:00') Tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))) menit_kerja from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line order by sewing_line asc ) a) b on b.sewing_line = a.sewing_line GROUP BY a.sewing_line) a inner join
(SELECT sewing_line,COALESCE(sum(jam_kerja),0) as jam_kerja,COALESCE(sum(plan_target),0) as plan_target from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line) b on b.sewing_line = a.sewing_line) a) a left join 
(SELECT b.sewing_line,count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id where DATE_FORMAT(created_at, '%Y-%m-%d') = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY b.sewing_line) b on b.sewing_line = a.sewing_line LEFT JOIN
(select sewing_line,(rft) rft from (select a.sewing_line,COALESCE(rft,0) rft, COALESCE(deffect,0) deffect from (SELECT b.sewing_line,count(a.id) rft from output_rfts a inner join master_plan b on b.id = a.master_plan_id where DATE_FORMAT(created_at, '%Y-%m-%d') = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and status = 'NORMAL' GROUP BY b.sewing_line) a left join
(SELECT b.sewing_line,- count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id where DATE_FORMAT(created_at, '%Y-%m-%d') = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and a.defect_status = 'defect' GROUP BY b.sewing_line) b on b.sewing_line = a.sewing_line) a) c on c.sewing_line = a.sewing_line) a order by per_rft desc) b on b.sewing_line = line.username order by b.effi desc ) a");
            foreach ($query->result() as $data) {
                $hasil = ($data->per_rft);
            }

        return $hasil;
    }


    function cari_under5line()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT nama_line,CONCAT(UCASE(LEFT(defect_type, 1)),SUBSTRING(defect_type, 2)) defect_type,b.deffect FROM
(select username,SUBSTR(FullName FROM 8) nama_line from userpassword where Groupp = 'sewing' order by username asc
) line left join 
(SELECT * from (SELECT b.sewing_line,count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id where DATE_FORMAT(created_at, '%Y-%m-%d') = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY b.sewing_line) a order by a.deffect desc) a on a.sewing_line = line.username inner join 
(select * from (select a.sewing_line,defect_type_id,deffect from 
(
select concat(sewing_line, '_', defect_type_id,'_',deffect)id,sewing_line,defect_type_id,deffect  from
(
select b.sewing_line, a.defect_type_id,count(a.id) deffect from output_defects a
inner join master_plan b on b.id = a.master_plan_id 
where DATE_FORMAT(created_at, '%Y-%m-%d') = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))
GROUP BY a.defect_type_id,b.sewing_line order by b.sewing_line asc 
) data_def
order by deffect desc
) a
inner join 
(
select sewing_line,max(cast(SUBSTRING_INDEX(id,'_',-1) as int)) max from 
(
select concat(sewing_line, '_', defect_type_id,'_',deffect)id,sewing_line,defect_type_id,deffect  from
(
select b.sewing_line, a.defect_type_id,count(a.id) deffect from output_defects a
inner join master_plan b on b.id = a.master_plan_id 
where DATE_FORMAT(created_at, '%Y-%m-%d') = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))
GROUP BY a.defect_type_id,b.sewing_line order by b.sewing_line asc 
) data_def
order by deffect desc
) data_def_1
group by sewing_line
) b on a.sewing_line = b.sewing_line and a.deffect = b.max) a inner join
(select id,defect_type from output_defect_types) b on b.id = a. defect_type_id) b on b.sewing_line = a.sewing_line order by a.deffect desc limit 5");
        return $query->result_array();
    }



    function cari_top5line()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT nama_line,COALESCE(effi,0) effi,COALESCE(per_rft,0) per_rft,COALESCE(per_defect,0) per_defect from (select username,SUBSTR(FullName FROM 8) nama_line from userpassword where Groupp = 'sewing' order by username asc
) line left join 
(SELECT sewing_line,effi,per_rft,per_defect from (SELECT a.sewing_line,plan_target,actual,rft,COALESCE(deffect,0) deffect,effi,ROUND((rft / (COALESCE(deffect,0) + rft) * 100),2) per_rft, ROUND((COALESCE(deffect,0) / (COALESCE(deffect,0) + rft) * 100),2) per_defect FROM (select sewing_line,min_prod,(man_power * menit_real) min_tersedia, actual,plan_target, ROUND((min_prod / (man_power * menit_real) * 100),2) effi from (Select a.sewing_line,actual,min_prod,man_power,if(menit_real > (jam_kerja * 60),jam_kerja,jam_real) jam_real, if(menit_real > (jam_kerja * 60),(jam_kerja * 60),menit_real) menit_real, jam_kerja,plan_target from (SELECT a.sewing_line,sum(actual) actual,sum(min_prod) min_prod,man_power,jam_real,menit_real FROM (SELECT id,sewing_line,smv,actual,round(smv * actual,4) min_prod FROM (SELECT sewing_line,id,smv from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) ) a inner join 
(SELECT master_plan_id, count(a.id) actual from output_rfts a inner join master_plan b on b.id = a.master_plan_id where DATE_FORMAT(created_at, '%Y-%m-%d') = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY master_plan_id) b on b.master_plan_id = a.id) a inner join 
(SELECT sewing_line,man_power,jam_masuk,jam_sekarang, if(jam_kerja >= '6',jam_kerja -1,jam_kerja) jam_real, if(jam_kerja >= '6',menit_kerja -60,menit_kerja) menit_real from (SELECT sewing_line, max(man_power) man_power, CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00') jam_masuk,(select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) as jam_sekarang, TIMESTAMPDIFF(hour,CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00'),(select concat(tanggal,' ','23:00:00') Tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))) jam_kerja,TIMESTAMPDIFF(minute,CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00'),(select concat(tanggal,' ','23:00:00') Tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))) menit_kerja from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line order by sewing_line asc ) a) b on b.sewing_line = a.sewing_line GROUP BY a.sewing_line) a inner join
(SELECT sewing_line,COALESCE(sum(jam_kerja),0) as jam_kerja,COALESCE(sum(plan_target),0) as plan_target from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line) b on b.sewing_line = a.sewing_line) a) a left join 
(SELECT b.sewing_line,count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id where DATE_FORMAT(created_at, '%Y-%m-%d') = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY b.sewing_line) b on b.sewing_line = a.sewing_line LEFT JOIN
(select sewing_line,(rft) rft from (select a.sewing_line,COALESCE(rft,0) rft, COALESCE(deffect,0) deffect from (SELECT b.sewing_line,count(a.id) rft from output_rfts a inner join master_plan b on b.id = a.master_plan_id where DATE_FORMAT(created_at, '%Y-%m-%d') = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and status = 'NORMAL' GROUP BY b.sewing_line) a left join
(SELECT b.sewing_line,- count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id where DATE_FORMAT(created_at, '%Y-%m-%d') = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and a.defect_status = 'defect' GROUP BY b.sewing_line) b on b.sewing_line = a.sewing_line) a) c on c.sewing_line = a.sewing_line) a order by per_rft desc) b on b.sewing_line = line.username order by b.effi desc limit 5");
        return $query->result_array();
    }



}