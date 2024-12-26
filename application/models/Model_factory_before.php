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
                                     where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))
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
                                     where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))
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
                                     where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))
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
                                     where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))
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
                                     where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))
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
                                     where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))
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
                                     where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))
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
                                     where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))
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
                                     where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))
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
                                     where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))
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
(SELECT master_plan_id, count(a.id) actual from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))GROUP BY master_plan_id) b on b.master_plan_id = a.id) a inner join 
(SELECT sewing_line,man_power,jam_masuk,jam_sekarang, if(jam_kerja >= '6',jam_kerja -1,jam_kerja) jam_real, if(jam_kerja >= '6',menit_kerja -60,menit_kerja) menit_real from (SELECT sewing_line, MAX(man_power) man_power, CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00') jam_masuk,(select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) as jam_sekarang, TIMESTAMPDIFF(hour,CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00'),(select concat(tanggal,' ','23:00:00') Tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))) jam_kerja,TIMESTAMPDIFF(minute,CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00'),(select concat(tanggal,' ','23:00:00') Tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))) menit_kerja from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line order by sewing_line asc ) a) b on b.sewing_line = a.sewing_line GROUP BY a.sewing_line) a inner join
(SELECT sewing_line,COALESCE(sum(jam_kerja),0) as jam_kerja,COALESCE(sum(plan_target),0) as plan_target from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line) b on b.sewing_line = a.sewing_line) a) a left join 
(SELECT b.sewing_line,count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY b.sewing_line) b on b.sewing_line = a.sewing_line LEFT JOIN
(select sewing_line,(rft) rft from (select a.sewing_line,COALESCE(rft,0) rft, COALESCE(deffect,0) deffect from (SELECT b.sewing_line,count(a.id) rft from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and status = 'NORMAL' GROUP BY b.sewing_line) a left join
(SELECT b.sewing_line,- count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and a.defect_status = 'defect' GROUP BY b.sewing_line) b on b.sewing_line = a.sewing_line) a) c on c.sewing_line = a.sewing_line) a order by per_rft desc) b on b.sewing_line = line.username order by b.effi desc) a");
            foreach ($query->result() as $data) {
                $hasil = ($data->per_effi);
            }

        return $hasil;
    }

    function cari_data_effi()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT CONCAT('''',SUM(actual),'/' ,SUM(plan_target),'''') data_effi, ROUND(sum(min_prod) / sum(min_tersedia) * 100,2) per_effi from (select nama_line,COALESCE(effi,0) effi,COALESCE(per_rft,0) per_rft,COALESCE(per_defect,0) per_defect,min_prod,min_tersedia,actual,plan_target from (select username,SUBSTR(FullName FROM 8) nama_line from userpassword where Groupp = 'sewing' order by username asc
) line inner join 
(SELECT sewing_line,effi,per_rft,per_defect,min_prod,min_tersedia,actual,plan_target from (SELECT a.sewing_line,plan_target,actual,rft,COALESCE(deffect,0) deffect,effi,ROUND((rft / (COALESCE(deffect,0) + rft) * 100),2) per_rft, ROUND((COALESCE(deffect,0) / (COALESCE(deffect,0) + rft) * 100),2) per_defect,ROUND(min_prod,2) min_prod, ROUND(min_tersedia,2) min_tersedia, man_power,jam_kerja FROM (select sewing_line,min_prod,(man_power * menit_real) min_tersedia, actual,plan_target, ROUND((min_prod / (man_power * menit_real) * 100),2) effi,man_power,jam_kerja from (Select a.sewing_line,actual,min_prod,man_power,if(menit_real > (jam_kerja * 60),jam_kerja,jam_real) jam_real, if(menit_real > (jam_kerja * 60),(jam_kerja * 60),menit_real) menit_real, jam_kerja,plan_target from (SELECT a.sewing_line,sum(actual) actual,sum(min_prod) min_prod,man_power,jam_real,menit_real FROM (SELECT id,sewing_line,smv,actual,round(smv * actual,4) min_prod FROM (SELECT sewing_line,id,smv from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) ) a inner join 
(SELECT master_plan_id, count(a.id) actual from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))GROUP BY master_plan_id) b on b.master_plan_id = a.id) a inner join 
(SELECT sewing_line,man_power,jam_masuk,jam_sekarang, if(jam_kerja >= '6',jam_kerja -1,jam_kerja) jam_real, if(jam_kerja >= '6',menit_kerja -60,menit_kerja) menit_real from (SELECT sewing_line, MAX(man_power) man_power, CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00') jam_masuk,(select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) as jam_sekarang, TIMESTAMPDIFF(hour,CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00'),(select concat(tanggal,' ','23:00:00') Tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))) jam_kerja,TIMESTAMPDIFF(minute,CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00'),(select concat(tanggal,' ','23:00:00') Tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))) menit_kerja from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line order by sewing_line asc ) a) b on b.sewing_line = a.sewing_line GROUP BY a.sewing_line) a inner join
(SELECT sewing_line,COALESCE(sum(jam_kerja),0) as jam_kerja,COALESCE(sum(plan_target),0) as plan_target from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line) b on b.sewing_line = a.sewing_line) a) a left join 
(SELECT b.sewing_line,count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY b.sewing_line) b on b.sewing_line = a.sewing_line LEFT JOIN
(select sewing_line,(rft) rft from (select a.sewing_line,COALESCE(rft,0) rft, COALESCE(deffect,0) deffect from (SELECT b.sewing_line,count(a.id) rft from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and status = 'NORMAL' GROUP BY b.sewing_line) a left join
(SELECT b.sewing_line,- count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and a.defect_status = 'defect' GROUP BY b.sewing_line) b on b.sewing_line = a.sewing_line) a) c on c.sewing_line = a.sewing_line) a order by per_rft desc) b on b.sewing_line = line.username order by b.effi desc) a");
            foreach ($query->result() as $data) {
                $hasil = ($data->data_effi);
            }

        return $hasil;
    }


    function cari_sum_rft()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT ROUND((SUM(rft) / (SUM(rft) + sum(deffect)) * 100),2) per_rft from (select nama_line,COALESCE(effi,0) effi,if(COALESCE(per_rft,0) < 0,0,COALESCE(per_rft,0)) per_rft,COALESCE(per_defect,0) per_defect,rft,deffect from (select username,SUBSTR(FullName FROM 8) nama_line from userpassword where Groupp = 'sewing' order by username asc
) line inner join
(SELECT sewing_line,effi,per_rft,per_defect,rft,deffect from (SELECT a.sewing_line,plan_target,actual,rft,COALESCE(deffect,0) deffect,effi,ROUND((rft / (COALESCE(deffect,0) + rft) * 100),2) per_rft, ROUND((COALESCE(deffect,0) / (COALESCE(deffect,0) + rft) * 100),2) per_defect FROM (select sewing_line,min_prod,(man_power * menit_real) min_tersedia, actual,plan_target, ROUND((min_prod / (man_power * menit_real) * 100),2) effi from (Select a.sewing_line,actual,min_prod,man_power,if(menit_real > (jam_kerja * 60),jam_kerja,jam_real) jam_real, if(menit_real > (jam_kerja * 60),(jam_kerja * 60),menit_real) menit_real, jam_kerja,plan_target from (SELECT a.sewing_line,sum(actual) actual,sum(min_prod) min_prod,man_power,jam_real,menit_real FROM (SELECT id,sewing_line,smv,actual,round(smv * actual,4) min_prod FROM (SELECT sewing_line,id,smv from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) ) a inner join 
(SELECT master_plan_id, count(a.id) actual from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY master_plan_id) b on b.master_plan_id = a.id) a inner join 
(SELECT sewing_line,man_power,jam_masuk,jam_sekarang, if(jam_kerja >= '6',jam_kerja -1,jam_kerja) jam_real, if(jam_kerja >= '6',menit_kerja -60,menit_kerja) menit_real from (SELECT sewing_line, max(man_power) man_power, CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00') jam_masuk,(select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) as jam_sekarang, TIMESTAMPDIFF(hour,CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00'),(select concat(tanggal,' ','23:00:00') Tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))) jam_kerja,TIMESTAMPDIFF(minute,CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00'),(select concat(tanggal,' ','23:00:00') Tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))) menit_kerja from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line order by sewing_line asc ) a) b on b.sewing_line = a.sewing_line GROUP BY a.sewing_line) a inner join
(SELECT sewing_line,COALESCE(sum(jam_kerja),0) as jam_kerja,COALESCE(sum(plan_target),0) as plan_target from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line) b on b.sewing_line = a.sewing_line) a) a left join 
(SELECT b.sewing_line,count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY b.sewing_line) b on b.sewing_line = a.sewing_line LEFT JOIN
(select sewing_line,(rft) rft from (select a.sewing_line,COALESCE(rft,0) rft, COALESCE(deffect,0) deffect from (SELECT b.sewing_line,count(a.id) rft from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and status = 'NORMAL' GROUP BY b.sewing_line) a left join
(SELECT b.sewing_line,- count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and a.defect_status = 'defect' GROUP BY b.sewing_line) b on b.sewing_line = a.sewing_line) a) c on c.sewing_line = a.sewing_line) a order by per_rft desc) b on b.sewing_line = line.username order by b.effi desc ) a");
            foreach ($query->result() as $data) {
                $hasil = ($data->per_rft);
            }

        return $hasil;
    }


    function cari_data_rft()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT CONCAT('''',SUM(rft),'/' ,(SUM(rft) + sum(deffect)),'''') data_rft from (select nama_line,COALESCE(effi,0) effi,if(COALESCE(per_rft,0) < 0,0,COALESCE(per_rft,0)) per_rft,COALESCE(per_defect,0) per_defect,rft,deffect from (select username,SUBSTR(FullName FROM 8) nama_line from userpassword where Groupp = 'sewing' order by username asc
) line inner join
(SELECT sewing_line,effi,per_rft,per_defect,rft,deffect from (SELECT a.sewing_line,plan_target,actual,rft,COALESCE(deffect,0) deffect,effi,ROUND((rft / (COALESCE(deffect,0) + rft) * 100),2) per_rft, ROUND((COALESCE(deffect,0) / (COALESCE(deffect,0) + rft) * 100),2) per_defect FROM (select sewing_line,min_prod,(man_power * menit_real) min_tersedia, actual,plan_target, ROUND((min_prod / (man_power * menit_real) * 100),2) effi from (Select a.sewing_line,actual,min_prod,man_power,if(menit_real > (jam_kerja * 60),jam_kerja,jam_real) jam_real, if(menit_real > (jam_kerja * 60),(jam_kerja * 60),menit_real) menit_real, jam_kerja,plan_target from (SELECT a.sewing_line,sum(actual) actual,sum(min_prod) min_prod,man_power,jam_real,menit_real FROM (SELECT id,sewing_line,smv,actual,round(smv * actual,4) min_prod FROM (SELECT sewing_line,id,smv from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) ) a inner join 
(SELECT master_plan_id, count(a.id) actual from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY master_plan_id) b on b.master_plan_id = a.id) a inner join 
(SELECT sewing_line,man_power,jam_masuk,jam_sekarang, if(jam_kerja >= '6',jam_kerja -1,jam_kerja) jam_real, if(jam_kerja >= '6',menit_kerja -60,menit_kerja) menit_real from (SELECT sewing_line, max(man_power) man_power, CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00') jam_masuk,(select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) as jam_sekarang, TIMESTAMPDIFF(hour,CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00'),(select concat(tanggal,' ','23:00:00') Tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))) jam_kerja,TIMESTAMPDIFF(minute,CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00'),(select concat(tanggal,' ','23:00:00') Tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))) menit_kerja from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line order by sewing_line asc ) a) b on b.sewing_line = a.sewing_line GROUP BY a.sewing_line) a inner join
(SELECT sewing_line,COALESCE(sum(jam_kerja),0) as jam_kerja,COALESCE(sum(plan_target),0) as plan_target from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line) b on b.sewing_line = a.sewing_line) a) a left join 
(SELECT b.sewing_line,count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY b.sewing_line) b on b.sewing_line = a.sewing_line LEFT JOIN
(select sewing_line,(rft) rft from (select a.sewing_line,COALESCE(rft,0) rft, COALESCE(deffect,0) deffect from (SELECT b.sewing_line,count(a.id) rft from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and status = 'NORMAL' GROUP BY b.sewing_line) a left join
(SELECT b.sewing_line,- count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and a.defect_status = 'defect' GROUP BY b.sewing_line) b on b.sewing_line = a.sewing_line) a) c on c.sewing_line = a.sewing_line) a order by per_rft desc) b on b.sewing_line = line.username order by b.effi desc ) a");
            foreach ($query->result() as $data) {
                $hasil = ($data->data_rft);
            }

        return $hasil;
    }


    function cari_under5line()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT nama_line,CONCAT(UCASE(LEFT(defect_type, 1)),SUBSTRING(defect_type, 2)) defect_type,b.deffect FROM
(select username,SUBSTR(FullName FROM 8) nama_line from userpassword where Groupp = 'sewing' order by username asc
) line left join 
(SELECT * from (SELECT b.sewing_line,count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY b.sewing_line) a order by a.deffect desc) a on a.sewing_line = line.username inner join 
(select * from (select a.sewing_line,defect_type_id,deffect from 
(
select concat(sewing_line, '_', defect_type_id,'_',deffect)id,sewing_line,defect_type_id,deffect  from
(
select b.sewing_line, a.defect_type_id,count(a.id) deffect from output_defects a
inner join master_plan b on b.id = a.master_plan_id 
where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))
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
where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))
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
        $query = $db_sblokal->query("SELECT nama_line,COALESCE(effi,0) effi,COALESCE(per_rft,0) per_rft,COALESCE(per_defect,0) per_defect,actual,deffect from (select username,SUBSTR(FullName FROM 8) nama_line from userpassword where Groupp = 'sewing' order by username asc
) line left join 
(SELECT sewing_line,effi,per_rft,per_defect,actual,deffect from (SELECT a.sewing_line,plan_target,actual,rft,COALESCE(deffect,0) deffect,effi,ROUND((rft / (COALESCE(deffect,0) + rft) * 100),2) per_rft, ROUND((COALESCE(deffect,0) / (COALESCE(deffect,0) + rft) * 100),2) per_defect FROM (select sewing_line,min_prod,(man_power * menit_real) min_tersedia, actual,plan_target, ROUND((min_prod / (man_power * menit_real) * 100),2) effi from (Select a.sewing_line,actual,min_prod,man_power,if(menit_real > (jam_kerja * 60),jam_kerja,jam_real) jam_real, if(menit_real > (jam_kerja * 60),(jam_kerja * 60),menit_real) menit_real, jam_kerja,plan_target from (SELECT a.sewing_line,sum(actual) actual,sum(min_prod) min_prod,man_power,jam_real,menit_real FROM (SELECT id,sewing_line,smv,actual,round(smv * actual,4) min_prod FROM (SELECT sewing_line,id,smv from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) ) a inner join 
(SELECT master_plan_id, count(a.id) actual from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY master_plan_id) b on b.master_plan_id = a.id) a inner join 
(SELECT sewing_line,man_power,jam_masuk,jam_sekarang, if(jam_kerja >= '6',jam_kerja -1,jam_kerja) jam_real, if(jam_kerja >= '6',menit_kerja -60,menit_kerja) menit_real from (SELECT sewing_line, max(man_power) man_power, CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00') jam_masuk,(select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) as jam_sekarang, TIMESTAMPDIFF(hour,CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00'),(select concat(tanggal,' ','23:00:00') Tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))) jam_kerja,TIMESTAMPDIFF(minute,CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00'),(select concat(tanggal,' ','23:00:00') Tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))) menit_kerja from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line order by sewing_line asc ) a) b on b.sewing_line = a.sewing_line GROUP BY a.sewing_line) a inner join
(SELECT sewing_line,COALESCE(sum(jam_kerja),0) as jam_kerja,COALESCE(sum(plan_target),0) as plan_target from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line) b on b.sewing_line = a.sewing_line) a) a left join 
(SELECT b.sewing_line,count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY b.sewing_line) b on b.sewing_line = a.sewing_line LEFT JOIN
(select sewing_line,(rft) rft from (select a.sewing_line,COALESCE(rft,0) rft, COALESCE(deffect,0) deffect from (SELECT b.sewing_line,count(a.id) rft from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and status = 'NORMAL' GROUP BY b.sewing_line) a left join
(SELECT b.sewing_line,- count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and a.defect_status = 'defect' GROUP BY b.sewing_line) b on b.sewing_line = a.sewing_line) a) c on c.sewing_line = a.sewing_line) a order by per_rft desc) b on b.sewing_line = line.username order by b.effi desc limit 5");
        return $query->result_array();
    }


    function cari_output_factory()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT a.sewing_line,kpno,styleno,rft,defect_val,rework,reject,per_rft,per_defect,per_reject,actual,target_min,effi,jml_ws,nama_line FROM (
select *, COALESCE(ROUND((rft / (rft + (defect_val + rework) + reject) * 100),2),0) per_rft, COALESCE(ROUND(((defect_val + rework) / (rft + (defect_val + rework) + reject) * 100),2),0) per_defect, COALESCE(ROUND((reject / (rft + (defect_val + rework) + reject) * 100),2),0) per_reject, (rft + rework) actual  from (select a.sewing_line,a.id_ws,kpno,styleno,COALESCE(rft,0) rft,COALESCE(defect_val,0) defect_val, COALESCE(rework,0) rework, COALESCE(reject,0) reject from (select sewing_line,id_ws,kpno, styleno from (select a.id,tgl_plan,sewing_line,id_ws,a.color,b.kpno,b.styleno from master_plan a inner join act_costing b on b.id =  a. id_ws where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and a.cancel != 'Y' order by a.id ASC) a GROUP BY a.sewing_line,a.id_ws order by a.sewing_line asc ) a inner join
(SELECT b.sewing_line,b.id_ws,MAX(updated_at) last_input, count(a.id) rft from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and status = 'NORMAL' GROUP BY b.sewing_line,b.id_ws) b on b.id_ws = a.id_ws and b.sewing_line = a.sewing_line left join
(SELECT b.sewing_line,b.id_ws,count(a.id) defect_val from output_defects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and defect_status = 'defect' GROUP BY b.sewing_line,b.id_ws) c on c.id_ws = a.id_ws and c.sewing_line = a.sewing_line left join
(SELECT b.sewing_line,b.id_ws,count(a.id) rework from output_defects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and defect_status != 'defect' GROUP BY b.sewing_line,b.id_ws) d on d.id_ws = a.id_ws and d.sewing_line = a.sewing_line left join
(SELECT b.sewing_line,b.id_ws,count(a.id) reject from output_rejects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY b.sewing_line,b.id_ws) e on e.id_ws = a.id_ws and e.sewing_line = a.sewing_line) a limit 0,13) a left JOIN
(select sewing_line, ROUND((min_prod / (man_power * menit_real) * 100),2) effi, if(jam_real > jam_kerja,plan_target,ROUND((target_min * menit_real),0)) target_min from (Select a.sewing_line,actual,min_prod,man_power,if(menit_real > (jam_kerja * 60),jam_kerja,jam_real) jam_real, if(menit_real > (jam_kerja * 60),(jam_kerja * 60),menit_real) menit_real, jam_kerja,plan_target, (plan_target / (jam_kerja * 60)) target_min from (SELECT a.sewing_line,sum(actual) actual,sum(min_prod) min_prod,man_power,jam_real,menit_real FROM (SELECT id,sewing_line,smv,actual,round(smv * actual,4) min_prod FROM (SELECT sewing_line,id,smv from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) ) a inner join 
(SELECT master_plan_id, count(a.id) actual from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY master_plan_id) b on b.master_plan_id = a.id) a inner join 
(SELECT sewing_line,man_power,jam_masuk,jam_sekarang, if(jam_kerja >= '6',jam_kerja -1,jam_kerja) jam_real, if(jam_kerja >= '6',menit_kerja -60,menit_kerja) menit_real from (SELECT sewing_line, max(man_power) man_power, CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00') jam_masuk,(select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) as jam_sekarang, TIMESTAMPDIFF(hour,CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00'),(select concat(tanggal,' ','23:00:00') Tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))) jam_kerja,TIMESTAMPDIFF(minute,CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00'),(select concat(tanggal,' ','23:00:00') Tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))) menit_kerja from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line order by sewing_line asc ) a) b on b.sewing_line = a.sewing_line GROUP BY a.sewing_line) a inner join
(SELECT sewing_line,COALESCE(sum(jam_kerja),0) as jam_kerja,COALESCE(sum(plan_target),0) as plan_target from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line) b on b.sewing_line = a.sewing_line) a) b on b.sewing_line = a.sewing_line INNER JOIN
(select sewing_line,COUNT(sewing_line) jml_ws from (select * from (select DISTINCT a.sewing_line,a.id_ws,kpno,styleno,(COALESCE(b.id,0) + COALESCE(c.id,0)) filter from (select sewing_line,id_ws,kpno, styleno from (select a.id,tgl_plan,sewing_line,id_ws,a.color,b.kpno,b.styleno from master_plan a inner join act_costing b on b.id =  a. id_ws where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and a.cancel != 'Y' order by a.id ASC) a GROUP BY a.sewing_line,a.id_ws order by a.sewing_line asc) a left JOIN
(select a.id,b.sewing_line,b.id_ws from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line,id_ws order by b.sewing_line asc) b on a.id_ws = b.id_ws and a.sewing_line = b.sewing_line left join
(select a.id,b.sewing_line,b.id_ws from output_defects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line,id_ws order by b.sewing_line asc) c on a.id_ws = c.id_ws and a.sewing_line = c.sewing_line) a where a.filter != 0 limit 0,13) a GROUP BY sewing_line) c on c.sewing_line = a.sewing_line LEFT JOIN
(select username,SUBSTR(FullName FROM 8) nama_line from userpassword where Groupp = 'sewing' order by username asc) d on d.username = a.sewing_line");
        return $query->result_array();
    }

    function cari_output_factory2()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT a.sewing_line,kpno,styleno,rft,defect_val,rework,reject,per_rft,per_defect,per_reject,actual,target_min,effi,jml_ws,nama_line FROM (
select *, COALESCE(ROUND((rft / (rft + (defect_val + rework) + reject) * 100),2),0) per_rft, COALESCE(ROUND(((defect_val + rework) / (rft + (defect_val + rework) + reject) * 100),2),0) per_defect, COALESCE(ROUND((reject / (rft + (defect_val + rework) + reject) * 100),2),0) per_reject, (rft + rework) actual  from (select a.sewing_line,a.id_ws,kpno,styleno,COALESCE(rft,0) rft,COALESCE(defect_val,0) defect_val, COALESCE(rework,0) rework, COALESCE(reject,0) reject from (select sewing_line,id_ws,kpno, styleno from (select a.id,tgl_plan,sewing_line,id_ws,a.color,b.kpno,b.styleno from master_plan a inner join act_costing b on b.id =  a. id_ws where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and a.cancel != 'Y' order by a.id ASC) a GROUP BY a.sewing_line,a.id_ws order by a.sewing_line asc ) a inner join
(SELECT b.sewing_line,b.id_ws,MAX(updated_at) last_input, count(a.id) rft from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and status = 'NORMAL' GROUP BY b.sewing_line,b.id_ws) b on b.id_ws = a.id_ws and b.sewing_line = a.sewing_line left join
(SELECT b.sewing_line,b.id_ws,count(a.id) defect_val from output_defects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and defect_status = 'defect' GROUP BY b.sewing_line,b.id_ws) c on c.id_ws = a.id_ws and c.sewing_line = a.sewing_line left join
(SELECT b.sewing_line,b.id_ws,count(a.id) rework from output_defects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and defect_status != 'defect' GROUP BY b.sewing_line,b.id_ws) d on d.id_ws = a.id_ws and d.sewing_line = a.sewing_line left join
(SELECT b.sewing_line,b.id_ws,count(a.id) reject from output_rejects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY b.sewing_line,b.id_ws) e on e.id_ws = a.id_ws and e.sewing_line = a.sewing_line) a limit 13,13) a left JOIN
(select sewing_line, ROUND((min_prod / (man_power * menit_real) * 100),2) effi, if(jam_real > jam_kerja,plan_target,ROUND((target_min * menit_real),0)) target_min from (Select a.sewing_line,actual,min_prod,man_power,if(menit_real > (jam_kerja * 60),jam_kerja,jam_real) jam_real, if(menit_real > (jam_kerja * 60),(jam_kerja * 60),menit_real) menit_real, jam_kerja,plan_target, (plan_target / (jam_kerja * 60)) target_min from (SELECT a.sewing_line,sum(actual) actual,sum(min_prod) min_prod,man_power,jam_real,menit_real FROM (SELECT id,sewing_line,smv,actual,round(smv * actual,4) min_prod FROM (SELECT sewing_line,id,smv from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) ) a inner join 
(SELECT master_plan_id, count(a.id) actual from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY master_plan_id) b on b.master_plan_id = a.id) a inner join 
(SELECT sewing_line,man_power,jam_masuk,jam_sekarang, if(jam_kerja >= '6',jam_kerja -1,jam_kerja) jam_real, if(jam_kerja >= '6',menit_kerja -60,menit_kerja) menit_real from (SELECT sewing_line, max(man_power) man_power, CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00') jam_masuk,(select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) as jam_sekarang, TIMESTAMPDIFF(hour,CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00'),(select concat(tanggal,' ','23:00:00') Tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))) jam_kerja,TIMESTAMPDIFF(minute,CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00'),(select concat(tanggal,' ','23:00:00') Tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))) menit_kerja from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line order by sewing_line asc ) a) b on b.sewing_line = a.sewing_line GROUP BY a.sewing_line) a inner join
(SELECT sewing_line,COALESCE(sum(jam_kerja),0) as jam_kerja,COALESCE(sum(plan_target),0) as plan_target from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line) b on b.sewing_line = a.sewing_line) a) b on b.sewing_line = a.sewing_line INNER JOIN
(select sewing_line,COUNT(sewing_line) jml_ws from (select * from (select DISTINCT a.sewing_line,a.id_ws,kpno,styleno,(COALESCE(b.id,0) + COALESCE(c.id,0)) filter from (select sewing_line,id_ws,kpno, styleno from (select a.id,tgl_plan,sewing_line,id_ws,a.color,b.kpno,b.styleno from master_plan a inner join act_costing b on b.id =  a. id_ws where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and a.cancel != 'Y' order by a.id ASC) a GROUP BY a.sewing_line,a.id_ws order by a.sewing_line asc) a left JOIN
(select a.id,b.sewing_line,b.id_ws from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line,id_ws order by b.sewing_line asc) b on a.id_ws = b.id_ws and a.sewing_line = b.sewing_line left join
(select a.id,b.sewing_line,b.id_ws from output_defects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line,id_ws order by b.sewing_line asc) c on a.id_ws = c.id_ws and a.sewing_line = c.sewing_line) a where a.filter != 0 limit 13,13) a GROUP BY sewing_line) c on c.sewing_line = a.sewing_line LEFT JOIN
(select username,SUBSTR(FullName FROM 8) nama_line from userpassword where Groupp = 'sewing' order by username asc) d on d.username = a.sewing_line");
        return $query->result_array();
    }

    function cari_output_factory3()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT a.sewing_line,kpno,styleno,rft,defect_val,rework,reject,per_rft,per_defect,per_reject,actual,target_min,effi,jml_ws,nama_line FROM (
select *, COALESCE(ROUND((rft / (rft + (defect_val + rework) + reject) * 100),2),0) per_rft, COALESCE(ROUND(((defect_val + rework) / (rft + (defect_val + rework) + reject) * 100),2),0) per_defect, COALESCE(ROUND((reject / (rft + (defect_val + rework) + reject) * 100),2),0) per_reject, (rft + rework) actual  from (select a.sewing_line,a.id_ws,kpno,styleno,COALESCE(rft,0) rft,COALESCE(defect_val,0) defect_val, COALESCE(rework,0) rework, COALESCE(reject,0) reject from (select sewing_line,id_ws,kpno, styleno from (select a.id,tgl_plan,sewing_line,id_ws,a.color,b.kpno,b.styleno from master_plan a inner join act_costing b on b.id =  a. id_ws where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and a.cancel != 'Y' order by a.id ASC) a GROUP BY a.sewing_line,a.id_ws order by a.sewing_line asc ) a inner join
(SELECT b.sewing_line,b.id_ws,MAX(updated_at) last_input, count(a.id) rft from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and status = 'NORMAL' GROUP BY b.sewing_line,b.id_ws) b on b.id_ws = a.id_ws and b.sewing_line = a.sewing_line left join
(SELECT b.sewing_line,b.id_ws,count(a.id) defect_val from output_defects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and defect_status = 'defect' GROUP BY b.sewing_line,b.id_ws) c on c.id_ws = a.id_ws and c.sewing_line = a.sewing_line left join
(SELECT b.sewing_line,b.id_ws,count(a.id) rework from output_defects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and defect_status != 'defect' GROUP BY b.sewing_line,b.id_ws) d on d.id_ws = a.id_ws and d.sewing_line = a.sewing_line left join
(SELECT b.sewing_line,b.id_ws,count(a.id) reject from output_rejects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY b.sewing_line,b.id_ws) e on e.id_ws = a.id_ws and e.sewing_line = a.sewing_line) a limit 26,13) a left JOIN
(select sewing_line, ROUND((min_prod / (man_power * menit_real) * 100),2) effi, if(jam_real > jam_kerja,plan_target,ROUND((target_min * menit_real),0)) target_min from (Select a.sewing_line,actual,min_prod,man_power,if(menit_real > (jam_kerja * 60),jam_kerja,jam_real) jam_real, if(menit_real > (jam_kerja * 60),(jam_kerja * 60),menit_real) menit_real, jam_kerja,plan_target, (plan_target / (jam_kerja * 60)) target_min from (SELECT a.sewing_line,sum(actual) actual,sum(min_prod) min_prod,man_power,jam_real,menit_real FROM (SELECT id,sewing_line,smv,actual,round(smv * actual,4) min_prod FROM (SELECT sewing_line,id,smv from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) ) a inner join 
(SELECT master_plan_id, count(a.id) actual from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY master_plan_id) b on b.master_plan_id = a.id) a inner join 
(SELECT sewing_line,man_power,jam_masuk,jam_sekarang, if(jam_kerja >= '6',jam_kerja -1,jam_kerja) jam_real, if(jam_kerja >= '6',menit_kerja -60,menit_kerja) menit_real from (SELECT sewing_line, max(man_power) man_power, CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00') jam_masuk,(select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) as jam_sekarang, TIMESTAMPDIFF(hour,CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00'),(select concat(tanggal,' ','23:00:00') Tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))) jam_kerja,TIMESTAMPDIFF(minute,CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00'),(select concat(tanggal,' ','23:00:00') Tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))) menit_kerja from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line order by sewing_line asc ) a) b on b.sewing_line = a.sewing_line GROUP BY a.sewing_line) a inner join
(SELECT sewing_line,COALESCE(sum(jam_kerja),0) as jam_kerja,COALESCE(sum(plan_target),0) as plan_target from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line) b on b.sewing_line = a.sewing_line) a) b on b.sewing_line = a.sewing_line INNER JOIN
(select sewing_line,COUNT(sewing_line) jml_ws from (select * from (select DISTINCT a.sewing_line,a.id_ws,kpno,styleno,(COALESCE(b.id,0) + COALESCE(c.id,0)) filter from (select sewing_line,id_ws,kpno, styleno from (select a.id,tgl_plan,sewing_line,id_ws,a.color,b.kpno,b.styleno from master_plan a inner join act_costing b on b.id =  a. id_ws where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and a.cancel != 'Y' order by a.id ASC) a GROUP BY a.sewing_line,a.id_ws order by a.sewing_line asc) a left JOIN
(select a.id,b.sewing_line,b.id_ws from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line,id_ws order by b.sewing_line asc) b on a.id_ws = b.id_ws and a.sewing_line = b.sewing_line left join
(select a.id,b.sewing_line,b.id_ws from output_defects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line,id_ws order by b.sewing_line asc) c on a.id_ws = c.id_ws and a.sewing_line = c.sewing_line) a where a.filter != 0 limit 26,13) a GROUP BY sewing_line) c on c.sewing_line = a.sewing_line LEFT JOIN
(select username,SUBSTR(FullName FROM 8) nama_line from userpassword where Groupp = 'sewing' order by username asc) d on d.username = a.sewing_line");
        return $query->result_array();
    }

    function cari_output_factory4()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT a.sewing_line,kpno,styleno,rft,defect_val,rework,reject,per_rft,per_defect,per_reject,actual,target_min,effi,jml_ws,nama_line FROM (
select *, COALESCE(ROUND((rft / (rft + (defect_val + rework) + reject) * 100),2),0) per_rft, COALESCE(ROUND(((defect_val + rework) / (rft + (defect_val + rework) + reject) * 100),2),0) per_defect, COALESCE(ROUND((reject / (rft + (defect_val + rework) + reject) * 100),2),0) per_reject, (rft + rework) actual  from (select a.sewing_line,a.id_ws,kpno,styleno,COALESCE(rft,0) rft,COALESCE(defect_val,0) defect_val, COALESCE(rework,0) rework, COALESCE(reject,0) reject from (select sewing_line,id_ws,kpno, styleno from (select a.id,tgl_plan,sewing_line,id_ws,a.color,b.kpno,b.styleno from master_plan a inner join act_costing b on b.id =  a. id_ws where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and a.cancel != 'Y' order by a.id ASC) a GROUP BY a.sewing_line,a.id_ws order by a.sewing_line asc ) a inner join
(SELECT b.sewing_line,b.id_ws,MAX(updated_at) last_input, count(a.id) rft from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and status = 'NORMAL' GROUP BY b.sewing_line,b.id_ws) b on b.id_ws = a.id_ws and b.sewing_line = a.sewing_line left join
(SELECT b.sewing_line,b.id_ws,count(a.id) defect_val from output_defects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and defect_status = 'defect' GROUP BY b.sewing_line,b.id_ws) c on c.id_ws = a.id_ws and c.sewing_line = a.sewing_line left join
(SELECT b.sewing_line,b.id_ws,count(a.id) rework from output_defects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and defect_status != 'defect' GROUP BY b.sewing_line,b.id_ws) d on d.id_ws = a.id_ws and d.sewing_line = a.sewing_line left join
(SELECT b.sewing_line,b.id_ws,count(a.id) reject from output_rejects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY b.sewing_line,b.id_ws) e on e.id_ws = a.id_ws and e.sewing_line = a.sewing_line) a limit 39,13) a left JOIN
(select sewing_line, ROUND((min_prod / (man_power * menit_real) * 100),2) effi, if(jam_real > jam_kerja,plan_target,ROUND((target_min * menit_real),0)) target_min from (Select a.sewing_line,actual,min_prod,man_power,if(menit_real > (jam_kerja * 60),jam_kerja,jam_real) jam_real, if(menit_real > (jam_kerja * 60),(jam_kerja * 60),menit_real) menit_real, jam_kerja,plan_target, (plan_target / (jam_kerja * 60)) target_min from (SELECT a.sewing_line,sum(actual) actual,sum(min_prod) min_prod,man_power,jam_real,menit_real FROM (SELECT id,sewing_line,smv,actual,round(smv * actual,4) min_prod FROM (SELECT sewing_line,id,smv from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) ) a inner join 
(SELECT master_plan_id, count(a.id) actual from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY master_plan_id) b on b.master_plan_id = a.id) a inner join 
(SELECT sewing_line,man_power,jam_masuk,jam_sekarang, if(jam_kerja >= '6',jam_kerja -1,jam_kerja) jam_real, if(jam_kerja >= '6',menit_kerja -60,menit_kerja) menit_real from (SELECT sewing_line, max(man_power) man_power, CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00') jam_masuk,(select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) as jam_sekarang, TIMESTAMPDIFF(hour,CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00'),(select concat(tanggal,' ','23:00:00') Tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))) jam_kerja,TIMESTAMPDIFF(minute,CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00'),(select concat(tanggal,' ','23:00:00') Tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))) menit_kerja from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line order by sewing_line asc ) a) b on b.sewing_line = a.sewing_line GROUP BY a.sewing_line) a inner join
(SELECT sewing_line,COALESCE(sum(jam_kerja),0) as jam_kerja,COALESCE(sum(plan_target),0) as plan_target from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line) b on b.sewing_line = a.sewing_line) a) b on b.sewing_line = a.sewing_line INNER JOIN
(select sewing_line,COUNT(sewing_line) jml_ws from (select * from (select DISTINCT a.sewing_line,a.id_ws,kpno,styleno,(COALESCE(b.id,0) + COALESCE(c.id,0)) filter from (select sewing_line,id_ws,kpno, styleno from (select a.id,tgl_plan,sewing_line,id_ws,a.color,b.kpno,b.styleno from master_plan a inner join act_costing b on b.id =  a. id_ws where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and a.cancel != 'Y' order by a.id ASC) a GROUP BY a.sewing_line,a.id_ws order by a.sewing_line asc) a left JOIN
(select a.id,b.sewing_line,b.id_ws from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line,id_ws order by b.sewing_line asc) b on a.id_ws = b.id_ws and a.sewing_line = b.sewing_line left join
(select a.id,b.sewing_line,b.id_ws from output_defects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line,id_ws order by b.sewing_line asc) c on a.id_ws = c.id_ws and a.sewing_line = c.sewing_line) a where a.filter != 0 limit 39,13) a GROUP BY sewing_line) c on c.sewing_line = a.sewing_line LEFT JOIN
(select username,SUBSTR(FullName FROM 8) nama_line from userpassword where Groupp = 'sewing' order by username asc) d on d.username = a.sewing_line");
        return $query->result_array();
    }

    function cari_output_factory5()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT a.sewing_line,kpno,styleno,rft,defect_val,rework,reject,per_rft,per_defect,per_reject,actual,target_min,effi,jml_ws,nama_line FROM (
select *, COALESCE(ROUND((rft / (rft + (defect_val + rework) + reject) * 100),2),0) per_rft, COALESCE(ROUND(((defect_val + rework) / (rft + (defect_val + rework) + reject) * 100),2),0) per_defect, COALESCE(ROUND((reject / (rft + (defect_val + rework) + reject) * 100),2),0) per_reject, (rft + rework) actual  from (select a.sewing_line,a.id_ws,kpno,styleno,COALESCE(rft,0) rft,COALESCE(defect_val,0) defect_val, COALESCE(rework,0) rework, COALESCE(reject,0) reject from (select sewing_line,id_ws,kpno, styleno from (select a.id,tgl_plan,sewing_line,id_ws,a.color,b.kpno,b.styleno from master_plan a inner join act_costing b on b.id =  a. id_ws where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and a.cancel != 'Y' order by a.id ASC) a GROUP BY a.sewing_line,a.id_ws order by a.sewing_line asc ) a inner join
(SELECT b.sewing_line,b.id_ws,MAX(updated_at) last_input, count(a.id) rft from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and status = 'NORMAL' GROUP BY b.sewing_line,b.id_ws) b on b.id_ws = a.id_ws and b.sewing_line = a.sewing_line left join
(SELECT b.sewing_line,b.id_ws,count(a.id) defect_val from output_defects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and defect_status = 'defect' GROUP BY b.sewing_line,b.id_ws) c on c.id_ws = a.id_ws and c.sewing_line = a.sewing_line left join
(SELECT b.sewing_line,b.id_ws,count(a.id) rework from output_defects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and defect_status != 'defect' GROUP BY b.sewing_line,b.id_ws) d on d.id_ws = a.id_ws and d.sewing_line = a.sewing_line left join
(SELECT b.sewing_line,b.id_ws,count(a.id) reject from output_rejects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY b.sewing_line,b.id_ws) e on e.id_ws = a.id_ws and e.sewing_line = a.sewing_line) a limit 52,13) a left JOIN
(select sewing_line, ROUND((min_prod / (man_power * menit_real) * 100),2) effi, if(jam_real > jam_kerja,plan_target,ROUND((target_min * menit_real),0)) target_min from (Select a.sewing_line,actual,min_prod,man_power,if(menit_real > (jam_kerja * 60),jam_kerja,jam_real) jam_real, if(menit_real > (jam_kerja * 60),(jam_kerja * 60),menit_real) menit_real, jam_kerja,plan_target, (plan_target / (jam_kerja * 60)) target_min from (SELECT a.sewing_line,sum(actual) actual,sum(min_prod) min_prod,man_power,jam_real,menit_real FROM (SELECT id,sewing_line,smv,actual,round(smv * actual,4) min_prod FROM (SELECT sewing_line,id,smv from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) ) a inner join 
(SELECT master_plan_id, count(a.id) actual from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY master_plan_id) b on b.master_plan_id = a.id) a inner join 
(SELECT sewing_line,man_power,jam_masuk,jam_sekarang, if(jam_kerja >= '6',jam_kerja -1,jam_kerja) jam_real, if(jam_kerja >= '6',menit_kerja -60,menit_kerja) menit_real from (SELECT sewing_line, max(man_power) man_power, CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00') jam_masuk,(select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) as jam_sekarang, TIMESTAMPDIFF(hour,CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00'),(select concat(tanggal,' ','23:00:00') Tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))) jam_kerja,TIMESTAMPDIFF(minute,CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00'),(select concat(tanggal,' ','23:00:00') Tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))) menit_kerja from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line order by sewing_line asc ) a) b on b.sewing_line = a.sewing_line GROUP BY a.sewing_line) a inner join
(SELECT sewing_line,COALESCE(sum(jam_kerja),0) as jam_kerja,COALESCE(sum(plan_target),0) as plan_target from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line) b on b.sewing_line = a.sewing_line) a) b on b.sewing_line = a.sewing_line INNER JOIN
(select sewing_line,COUNT(sewing_line) jml_ws from (select * from (select DISTINCT a.sewing_line,a.id_ws,kpno,styleno,(COALESCE(b.id,0) + COALESCE(c.id,0)) filter from (select sewing_line,id_ws,kpno, styleno from (select a.id,tgl_plan,sewing_line,id_ws,a.color,b.kpno,b.styleno from master_plan a inner join act_costing b on b.id =  a. id_ws where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and a.cancel != 'Y' order by a.id ASC) a GROUP BY a.sewing_line,a.id_ws order by a.sewing_line asc) a left JOIN
(select a.id,b.sewing_line,b.id_ws from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line,id_ws order by b.sewing_line asc) b on a.id_ws = b.id_ws and a.sewing_line = b.sewing_line left join
(select a.id,b.sewing_line,b.id_ws from output_defects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line,id_ws order by b.sewing_line asc) c on a.id_ws = c.id_ws and a.sewing_line = c.sewing_line) a where a.filter != 0 limit 52,13) a GROUP BY sewing_line) c on c.sewing_line = a.sewing_line LEFT JOIN
(select username,SUBSTR(FullName FROM 8) nama_line from userpassword where Groupp = 'sewing' order by username asc) d on d.username = a.sewing_line");
        return $query->result_array();
    }

    function cari_output_factory6()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT a.sewing_line,kpno,styleno,rft,defect_val,rework,reject,per_rft,per_defect,per_reject,actual,target_min,effi,jml_ws,nama_line FROM (
select *, COALESCE(ROUND((rft / (rft + (defect_val + rework) + reject) * 100),2),0) per_rft, COALESCE(ROUND(((defect_val + rework) / (rft + (defect_val + rework) + reject) * 100),2),0) per_defect, COALESCE(ROUND((reject / (rft + (defect_val + rework) + reject) * 100),2),0) per_reject, (rft + rework) actual  from (select a.sewing_line,a.id_ws,kpno,styleno,COALESCE(rft,0) rft,COALESCE(defect_val,0) defect_val, COALESCE(rework,0) rework, COALESCE(reject,0) reject from (select sewing_line,id_ws,kpno, styleno from (select a.id,tgl_plan,sewing_line,id_ws,a.color,b.kpno,b.styleno from master_plan a inner join act_costing b on b.id =  a. id_ws where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and a.cancel != 'Y' order by a.id ASC) a GROUP BY a.sewing_line,a.id_ws order by a.sewing_line asc ) a inner join
(SELECT b.sewing_line,b.id_ws,MAX(updated_at) last_input, count(a.id) rft from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and status = 'NORMAL' GROUP BY b.sewing_line,b.id_ws) b on b.id_ws = a.id_ws and b.sewing_line = a.sewing_line left join
(SELECT b.sewing_line,b.id_ws,count(a.id) defect_val from output_defects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and defect_status = 'defect' GROUP BY b.sewing_line,b.id_ws) c on c.id_ws = a.id_ws and c.sewing_line = a.sewing_line left join
(SELECT b.sewing_line,b.id_ws,count(a.id) rework from output_defects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and defect_status != 'defect' GROUP BY b.sewing_line,b.id_ws) d on d.id_ws = a.id_ws and d.sewing_line = a.sewing_line left join
(SELECT b.sewing_line,b.id_ws,count(a.id) reject from output_rejects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY b.sewing_line,b.id_ws) e on e.id_ws = a.id_ws and e.sewing_line = a.sewing_line) a limit 65,13) a left JOIN
(select sewing_line, ROUND((min_prod / (man_power * menit_real) * 100),2) effi, if(jam_real > jam_kerja,plan_target,ROUND((target_min * menit_real),0)) target_min from (Select a.sewing_line,actual,min_prod,man_power,if(menit_real > (jam_kerja * 60),jam_kerja,jam_real) jam_real, if(menit_real > (jam_kerja * 60),(jam_kerja * 60),menit_real) menit_real, jam_kerja,plan_target, (plan_target / (jam_kerja * 60)) target_min from (SELECT a.sewing_line,sum(actual) actual,sum(min_prod) min_prod,man_power,jam_real,menit_real FROM (SELECT id,sewing_line,smv,actual,round(smv * actual,4) min_prod FROM (SELECT sewing_line,id,smv from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) ) a inner join 
(SELECT master_plan_id, count(a.id) actual from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY master_plan_id) b on b.master_plan_id = a.id) a inner join 
(SELECT sewing_line,man_power,jam_masuk,jam_sekarang, if(jam_kerja >= '6',jam_kerja -1,jam_kerja) jam_real, if(jam_kerja >= '6',menit_kerja -60,menit_kerja) menit_real from (SELECT sewing_line, max(man_power) man_power, CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00') jam_masuk,(select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) as jam_sekarang, TIMESTAMPDIFF(hour,CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00'),(select concat(tanggal,' ','23:00:00') Tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))) jam_kerja,TIMESTAMPDIFF(minute,CONCAT((select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())),' ','07:00:00'),(select concat(tanggal,' ','23:00:00') Tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE()))) menit_kerja from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line order by sewing_line asc ) a) b on b.sewing_line = a.sewing_line GROUP BY a.sewing_line) a inner join
(SELECT sewing_line,COALESCE(sum(jam_kerja),0) as jam_kerja,COALESCE(sum(plan_target),0) as plan_target from master_plan where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line) b on b.sewing_line = a.sewing_line) a) b on b.sewing_line = a.sewing_line INNER JOIN
(select sewing_line,COUNT(sewing_line) jml_ws from (select * from (select DISTINCT a.sewing_line,a.id_ws,kpno,styleno,(COALESCE(b.id,0) + COALESCE(c.id,0)) filter from (select sewing_line,id_ws,kpno, styleno from (select a.id,tgl_plan,sewing_line,id_ws,a.color,b.kpno,b.styleno from master_plan a inner join act_costing b on b.id =  a. id_ws where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and a.cancel != 'Y' order by a.id ASC) a GROUP BY a.sewing_line,a.id_ws order by a.sewing_line asc) a left JOIN
(select a.id,b.sewing_line,b.id_ws from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line,id_ws order by b.sewing_line asc) b on a.id_ws = b.id_ws and a.sewing_line = b.sewing_line left join
(select a.id,b.sewing_line,b.id_ws from output_defects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) GROUP BY sewing_line,id_ws order by b.sewing_line asc) c on a.id_ws = c.id_ws and a.sewing_line = c.sewing_line) a where a.filter != 0 limit 65,13) a GROUP BY sewing_line) c on c.sewing_line = a.sewing_line LEFT JOIN
(select username,SUBSTR(FullName FROM 8) nama_line from userpassword where Groupp = 'sewing' order by username asc) d on d.username = a.sewing_line");
        return $query->result_array();
    }

    function cari_jmlslide()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT CEIL(COUNT(sewing_line)/13) jml from (select sewing_line,id_ws,kpno, styleno from (select a.id,tgl_plan,sewing_line,id_ws,a.color,b.kpno,b.styleno from master_plan a inner join act_costing b on b.id =  a. id_ws where tgl_plan = (select tanggal from dim_date where kode_tanggal = (select MAX(kode_tanggal) from dim_date where status_prod = 'KERJA' and tanggal < CURRENT_DATE())) and a.cancel != 'Y' order by a.id ASC) a GROUP BY a.sewing_line,a.id_ws order by a.sewing_line asc) a");
            foreach ($query->result() as $data) {
                $hasil = ($data->jml);
            }

        return $hasil;
    }



}