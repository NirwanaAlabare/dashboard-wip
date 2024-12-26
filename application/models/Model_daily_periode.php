<?php

use SebastianBergmann\Environment\Console;

class Model_daily_periode extends CI_Model
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


    function cari_harikerja($bulan, $tahun)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT GROUP_CONCAT(tanggal) tanggal from (select SUBSTR(tanggal,9,2) tanggal from dim_date where bulan_text = '$bulan' and status_prod = 'KERJA' and tahun = '$tahun') a");
            foreach ($query->result() as $data) {
                $hasil = ($data->tanggal);
            }

        return $hasil;
    }

    function cari_effi_factory($bulan, $tahun)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT '',a.id,effi,target_effy,per_rft, CURRENT_TIMESTAMP() tgl FROM (SELECT 'dsb' id,GROUP_CONCAT(effi) effi from (SELECT IF(effi is null,'''''',effi) effi from (select SUBSTR(tanggal,9,2) tanggal_s, tanggal from dim_date where bulan_text = '$bulan' and status_prod = 'KERJA' and tahun = '$tahun') a
left join
(select a.tgl_plan, Round((min_prod/if(a.tgl_plan = CURRENT_DATE(),min_tersedia_now,min_tersedia) * 100),2) effi from (select tgl_plan, SUM(min_prod) min_prod from (SELECT tgl_plan, master_plan_id,smv, count(a.id) actual, ROUND((count(a.id) * smv),4) min_prod from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan BETWEEN (select tgl_awal from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') and (select tgl_akhir from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') GROUP BY master_plan_id) a GROUP BY a.tgl_plan) a left join
(select tgl_plan, sum(min_tersedia) min_tersedia from (select tgl_plan,ROUND((jam_kerja * 60) * man_power,2) min_tersedia from (select tgl_plan, id_ws,sum(jam_kerja) jam_kerja, MAX(man_power) man_power from master_plan where tgl_plan BETWEEN (select tgl_awal from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') and (select tgl_akhir from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') GROUP BY tgl_plan,sewing_line) a) a GROUP BY a.tgl_plan) b on b.tgl_plan = a.tgl_plan
left join 
(select CURRENT_DATE() tgl_plan,sum((man_power * menit_real)) min_tersedia_now from (Select man_power,if(menit_real > (jam_kerja * 60),jam_kerja,jam_real) jam_real, if(menit_real > (jam_kerja * 60),(jam_kerja * 60),menit_real) menit_real, jam_kerja from (SELECT a.sewing_line,sum(actual) actual,sum(min_prod) min_prod,man_power,jam_real,menit_real FROM (SELECT id,sewing_line,smv,actual,round(smv * actual,4) min_prod FROM (SELECT sewing_line,id,smv from master_plan where tgl_plan = CURRENT_DATE() ) a inner join 
(SELECT master_plan_id, count(a.id) actual from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = CURRENT_DATE() GROUP BY master_plan_id) b on b.master_plan_id = a.id) a inner join 
(SELECT sewing_line,man_power,jam_masuk,jam_sekarang, if(jam_kerja >= '6',jam_kerja -1,jam_kerja) jam_real, if(jam_kerja >= '6',menit_kerja -60,menit_kerja) menit_real from (SELECT sewing_line, MAX(man_power) man_power, CONCAT(CURRENT_DATE,' ','07:00:00') jam_masuk,CURRENT_DATE() as jam_sekarang, TIMESTAMPDIFF(hour,CONCAT(CURRENT_DATE,' ','07:00:00'),CURRENT_TIMESTAMP) jam_kerja,TIMESTAMPDIFF(minute,CONCAT(CURRENT_DATE,' ','07:00:00'),CURRENT_TIMESTAMP) menit_kerja from master_plan where tgl_plan = CURRENT_DATE() GROUP BY sewing_line order by sewing_line asc ) a) b on b.sewing_line = a.sewing_line GROUP BY a.sewing_line) a inner join
(SELECT sewing_line,COALESCE(sum(jam_kerja),0) as jam_kerja,COALESCE(sum(plan_target),0) as plan_target from master_plan where tgl_plan = CURRENT_DATE() GROUP BY sewing_line) b on b.sewing_line = a.sewing_line) a) c on c.tgl_plan = a.tgl_plan) b on b.tgl_plan = a.tanggal) a) a INNER JOIN
(SELECT 'dsb' id,GROUP_CONCAT(target_effy) target_effy from (SELECT IF(target_effy is null,'''''',target_effy) target_effy from (select SUBSTR(tanggal,9,2) tanggal_s, tanggal from dim_date where bulan_text = '$bulan' and status_prod = 'KERJA' and tahun = '$tahun') a
left join
(select tgl_plan,target_effy from master_plan where tgl_plan BETWEEN (select tgl_awal from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') and (select tgl_akhir from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') GROUP BY tgl_plan) b on b.tgl_plan = a.tanggal) a) b on b.id = a.id INNER JOIN
(SELECT 'dsb' id,GROUP_CONCAT(per_rft) per_rft from (SELECT IF(per_rft is null,'''''',per_rft) per_rft from (select SUBSTR(tanggal,9,2) tanggal_s, tanggal from dim_date where bulan_text = '$bulan' and status_prod = 'KERJA' and tahun = '$tahun') a
left join
(SELECT tgl_plan, round((rft / actual * 100),2) per_rft from (SELECT a.tgl_plan, COALESCE(rft,0) rft ,(COALESCE(rft,0) + COALESCE(deffect,0)) actual, COALESCE(deffect,0) defect from (SELECT b.tgl_plan, count(a.id) rft from output_rfts a inner join master_plan b on b.id = a.master_plan_id where a.status = 'NORMAL' and b.tgl_plan BETWEEN (select tgl_awal from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') and (select tgl_akhir from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') GROUP BY b.tgl_plan) a left join 
(SELECT b.tgl_plan, count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.tgl_plan BETWEEN (select tgl_awal from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') and (select tgl_akhir from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') GROUP BY b.tgl_plan) b on b.tgl_plan = a.tgl_plan) a) b on b.tgl_plan = a.tanggal) a) c on c.id = a.id");
            foreach ($query->result() as $data) {
                $hasil = ($data->effi);
            }

        return $hasil;
    }

    function cari_target_effi_factory($bulan, $tahun)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT '',a.id,effi,target_effy,per_rft, CURRENT_TIMESTAMP() tgl FROM (SELECT 'dsb' id,GROUP_CONCAT(effi) effi from (SELECT IF(effi is null,'''''',effi) effi from (select SUBSTR(tanggal,9,2) tanggal_s, tanggal from dim_date where bulan_text = '$bulan' and status_prod = 'KERJA' and tahun = '$tahun') a
left join
(select a.tgl_plan, Round((min_prod/if(a.tgl_plan = CURRENT_DATE(),min_tersedia_now,min_tersedia) * 100),2) effi from (select tgl_plan, SUM(min_prod) min_prod from (SELECT tgl_plan, master_plan_id,smv, count(a.id) actual, ROUND((count(a.id) * smv),4) min_prod from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan BETWEEN (select tgl_awal from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') and (select tgl_akhir from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') GROUP BY master_plan_id) a GROUP BY a.tgl_plan) a left join
(select tgl_plan, sum(min_tersedia) min_tersedia from (select tgl_plan,ROUND((jam_kerja * 60) * man_power,2) min_tersedia from (select tgl_plan, id_ws,sum(jam_kerja) jam_kerja, MAX(man_power) man_power from master_plan where tgl_plan BETWEEN (select tgl_awal from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') and (select tgl_akhir from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') GROUP BY tgl_plan,sewing_line) a) a GROUP BY a.tgl_plan) b on b.tgl_plan = a.tgl_plan
left join 
(select CURRENT_DATE() tgl_plan,sum((man_power * menit_real)) min_tersedia_now from (Select man_power,if(menit_real > (jam_kerja * 60),jam_kerja,jam_real) jam_real, if(menit_real > (jam_kerja * 60),(jam_kerja * 60),menit_real) menit_real, jam_kerja from (SELECT a.sewing_line,sum(actual) actual,sum(min_prod) min_prod,man_power,jam_real,menit_real FROM (SELECT id,sewing_line,smv,actual,round(smv * actual,4) min_prod FROM (SELECT sewing_line,id,smv from master_plan where tgl_plan = CURRENT_DATE() ) a inner join 
(SELECT master_plan_id, count(a.id) actual from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = CURRENT_DATE() GROUP BY master_plan_id) b on b.master_plan_id = a.id) a inner join 
(SELECT sewing_line,man_power,jam_masuk,jam_sekarang, if(jam_kerja >= '6',jam_kerja -1,jam_kerja) jam_real, if(jam_kerja >= '6',menit_kerja -60,menit_kerja) menit_real from (SELECT sewing_line, MAX(man_power) man_power, CONCAT(CURRENT_DATE,' ','07:00:00') jam_masuk,CURRENT_DATE() as jam_sekarang, TIMESTAMPDIFF(hour,CONCAT(CURRENT_DATE,' ','07:00:00'),CURRENT_TIMESTAMP) jam_kerja,TIMESTAMPDIFF(minute,CONCAT(CURRENT_DATE,' ','07:00:00'),CURRENT_TIMESTAMP) menit_kerja from master_plan where tgl_plan = CURRENT_DATE() GROUP BY sewing_line order by sewing_line asc ) a) b on b.sewing_line = a.sewing_line GROUP BY a.sewing_line) a inner join
(SELECT sewing_line,COALESCE(sum(jam_kerja),0) as jam_kerja,COALESCE(sum(plan_target),0) as plan_target from master_plan where tgl_plan = CURRENT_DATE() GROUP BY sewing_line) b on b.sewing_line = a.sewing_line) a) c on c.tgl_plan = a.tgl_plan) b on b.tgl_plan = a.tanggal) a) a INNER JOIN
(SELECT 'dsb' id,GROUP_CONCAT(target_effy) target_effy from (SELECT IF(target_effy is null,'''''',target_effy) target_effy from (select SUBSTR(tanggal,9,2) tanggal_s, tanggal from dim_date where bulan_text = '$bulan' and status_prod = 'KERJA' and tahun = '$tahun') a
left join
(select tgl_plan,target_effy from master_plan where tgl_plan BETWEEN (select tgl_awal from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') and (select tgl_akhir from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') GROUP BY tgl_plan) b on b.tgl_plan = a.tanggal) a) b on b.id = a.id INNER JOIN
(SELECT 'dsb' id,GROUP_CONCAT(per_rft) per_rft from (SELECT IF(per_rft is null,'''''',per_rft) per_rft from (select SUBSTR(tanggal,9,2) tanggal_s, tanggal from dim_date where bulan_text = '$bulan' and status_prod = 'KERJA' and tahun = '$tahun') a
left join
(SELECT tgl_plan, round((rft / actual * 100),2) per_rft from (SELECT a.tgl_plan, COALESCE(rft,0) rft ,(COALESCE(rft,0) + COALESCE(deffect,0)) actual, COALESCE(deffect,0) defect from (SELECT b.tgl_plan, count(a.id) rft from output_rfts a inner join master_plan b on b.id = a.master_plan_id where a.status = 'NORMAL' and b.tgl_plan BETWEEN (select tgl_awal from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') and (select tgl_akhir from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') GROUP BY b.tgl_plan) a left join 
(SELECT b.tgl_plan, count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.tgl_plan BETWEEN (select tgl_awal from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') and (select tgl_akhir from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') GROUP BY b.tgl_plan) b on b.tgl_plan = a.tgl_plan) a) b on b.tgl_plan = a.tanggal) a) c on c.id = a.id");
            foreach ($query->result() as $data) {
                $hasil = ($data->target_effy);
            }

        return $hasil;
    }


    function cari_chief()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT nama_line,COALESCE(effi,0) effi,COALESCE(per_rft,0) per_rft,COALESCE(per_defect,0) per_defect,actual,deffect from (select username,SUBSTR(FullName FROM 8) nama_line from userpassword where Groupp = 'sewing' order by username asc
) line left join 
(SELECT sewing_line,effi,per_rft,per_defect,actual,deffect from (SELECT a.sewing_line,plan_target,actual,rft,COALESCE(deffect,0) deffect,effi,ROUND((rft / (COALESCE(deffect,0) + rft) * 100),2) per_rft, ROUND((COALESCE(deffect,0) / (COALESCE(deffect,0) + rft) * 100),2) per_defect FROM (select sewing_line,min_prod,(man_power * menit_real) min_tersedia, actual,plan_target, ROUND((min_prod / (man_power * menit_real) * 100),2) effi from (Select a.sewing_line,actual,min_prod,man_power,if(menit_real > (jam_kerja * 60),jam_kerja,jam_real) jam_real, if(menit_real > (jam_kerja * 60),(jam_kerja * 60),menit_real) menit_real, jam_kerja,plan_target from (SELECT a.sewing_line,sum(actual) actual,sum(min_prod) min_prod,man_power,jam_real,menit_real FROM (SELECT id,sewing_line,smv,actual,round(smv * actual,4) min_prod FROM (SELECT sewing_line,id,smv from master_plan where tgl_plan = CURRENT_DATE() ) a inner join 
(SELECT master_plan_id, count(a.id) actual from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = CURRENT_DATE() GROUP BY master_plan_id) b on b.master_plan_id = a.id) a inner join 
(SELECT sewing_line,man_power,jam_masuk,jam_sekarang, if(jam_kerja >= '6',jam_kerja -1,jam_kerja) jam_real, if(jam_kerja >= '6',menit_kerja -60,menit_kerja) menit_real from (SELECT sewing_line, man_power, CONCAT(CURRENT_DATE,' ','07:00:00') jam_masuk,CURRENT_DATE() as jam_sekarang, TIMESTAMPDIFF(hour,CONCAT(CURRENT_DATE,' ','07:00:00'),CURRENT_TIMESTAMP) jam_kerja,TIMESTAMPDIFF(minute,CONCAT(CURRENT_DATE,' ','07:00:00'),CURRENT_TIMESTAMP) menit_kerja from master_plan where tgl_plan = CURRENT_DATE() GROUP BY sewing_line order by sewing_line asc ) a) b on b.sewing_line = a.sewing_line GROUP BY a.sewing_line) a inner join
(SELECT sewing_line,COALESCE(sum(jam_kerja),0) as jam_kerja,COALESCE(sum(plan_target),0) as plan_target from master_plan where tgl_plan = CURRENT_DATE() GROUP BY sewing_line) b on b.sewing_line = a.sewing_line) a) a left join 
(SELECT b.sewing_line,count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = CURRENT_DATE() GROUP BY b.sewing_line) b on b.sewing_line = a.sewing_line LEFT JOIN
(select sewing_line,(rft) rft from (select a.sewing_line,COALESCE(rft,0) rft, COALESCE(deffect,0) deffect from (SELECT b.sewing_line,count(a.id) rft from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = CURRENT_DATE() and status = 'NORMAL' GROUP BY b.sewing_line) a left join
(SELECT b.sewing_line,- count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = CURRENT_DATE() GROUP BY b.sewing_line) b on b.sewing_line = a.sewing_line) a) c on c.sewing_line = a.sewing_line) a order by per_rft desc) b on b.sewing_line = line.username order by b.effi desc limit 5");
        return $query->result_array();
    }


    function cari_rft_factory($bulan, $tahun)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT '',a.id,effi,target_effy,per_rft, CURRENT_TIMESTAMP() tgl FROM (SELECT 'dsb' id,GROUP_CONCAT(effi) effi from (SELECT IF(effi is null,'''''',effi) effi from (select SUBSTR(tanggal,9,2) tanggal_s, tanggal from dim_date where bulan_text = '$bulan' and status_prod = 'KERJA' and tahun = '$tahun') a
left join
(select a.tgl_plan, Round((min_prod/if(a.tgl_plan = CURRENT_DATE(),min_tersedia_now,min_tersedia) * 100),2) effi from (select tgl_plan, SUM(min_prod) min_prod from (SELECT tgl_plan, master_plan_id,smv, count(a.id) actual, ROUND((count(a.id) * smv),4) min_prod from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan BETWEEN (select tgl_awal from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') and (select tgl_akhir from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') GROUP BY master_plan_id) a GROUP BY a.tgl_plan) a left join
(select tgl_plan, sum(min_tersedia) min_tersedia from (select tgl_plan,ROUND((jam_kerja * 60) * man_power,2) min_tersedia from (select tgl_plan, id_ws,sum(jam_kerja) jam_kerja, MAX(man_power) man_power from master_plan where tgl_plan BETWEEN (select tgl_awal from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') and (select tgl_akhir from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') GROUP BY tgl_plan,sewing_line) a) a GROUP BY a.tgl_plan) b on b.tgl_plan = a.tgl_plan
left join 
(select CURRENT_DATE() tgl_plan,sum((man_power * menit_real)) min_tersedia_now from (Select man_power,if(menit_real > (jam_kerja * 60),jam_kerja,jam_real) jam_real, if(menit_real > (jam_kerja * 60),(jam_kerja * 60),menit_real) menit_real, jam_kerja from (SELECT a.sewing_line,sum(actual) actual,sum(min_prod) min_prod,man_power,jam_real,menit_real FROM (SELECT id,sewing_line,smv,actual,round(smv * actual,4) min_prod FROM (SELECT sewing_line,id,smv from master_plan where tgl_plan = CURRENT_DATE() ) a inner join 
(SELECT master_plan_id, count(a.id) actual from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = CURRENT_DATE() GROUP BY master_plan_id) b on b.master_plan_id = a.id) a inner join 
(SELECT sewing_line,man_power,jam_masuk,jam_sekarang, if(jam_kerja >= '6',jam_kerja -1,jam_kerja) jam_real, if(jam_kerja >= '6',menit_kerja -60,menit_kerja) menit_real from (SELECT sewing_line, MAX(man_power) man_power, CONCAT(CURRENT_DATE,' ','07:00:00') jam_masuk,CURRENT_DATE() as jam_sekarang, TIMESTAMPDIFF(hour,CONCAT(CURRENT_DATE,' ','07:00:00'),CURRENT_TIMESTAMP) jam_kerja,TIMESTAMPDIFF(minute,CONCAT(CURRENT_DATE,' ','07:00:00'),CURRENT_TIMESTAMP) menit_kerja from master_plan where tgl_plan = CURRENT_DATE() GROUP BY sewing_line order by sewing_line asc ) a) b on b.sewing_line = a.sewing_line GROUP BY a.sewing_line) a inner join
(SELECT sewing_line,COALESCE(sum(jam_kerja),0) as jam_kerja,COALESCE(sum(plan_target),0) as plan_target from master_plan where tgl_plan = CURRENT_DATE() GROUP BY sewing_line) b on b.sewing_line = a.sewing_line) a) c on c.tgl_plan = a.tgl_plan) b on b.tgl_plan = a.tanggal) a) a INNER JOIN
(SELECT 'dsb' id,GROUP_CONCAT(target_effy) target_effy from (SELECT IF(target_effy is null,'''''',target_effy) target_effy from (select SUBSTR(tanggal,9,2) tanggal_s, tanggal from dim_date where bulan_text = '$bulan' and status_prod = 'KERJA' and tahun = '$tahun') a
left join
(select tgl_plan,target_effy from master_plan where tgl_plan BETWEEN (select tgl_awal from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') and (select tgl_akhir from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') GROUP BY tgl_plan) b on b.tgl_plan = a.tanggal) a) b on b.id = a.id INNER JOIN
(SELECT 'dsb' id,GROUP_CONCAT(per_rft) per_rft from (SELECT IF(per_rft is null,'''''',per_rft) per_rft from (select SUBSTR(tanggal,9,2) tanggal_s, tanggal from dim_date where bulan_text = '$bulan' and status_prod = 'KERJA' and tahun = '$tahun') a
left join
(SELECT tgl_plan, round((rft / actual * 100),2) per_rft from (SELECT a.tgl_plan, COALESCE(rft,0) rft ,(COALESCE(rft,0) + COALESCE(deffect,0)) actual, COALESCE(deffect,0) defect from (SELECT b.tgl_plan, count(a.id) rft from output_rfts a inner join master_plan b on b.id = a.master_plan_id where a.status = 'NORMAL' and b.tgl_plan BETWEEN (select tgl_awal from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') and (select tgl_akhir from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') GROUP BY b.tgl_plan) a left join 
(SELECT b.tgl_plan, count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.tgl_plan BETWEEN (select tgl_awal from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') and (select tgl_akhir from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') GROUP BY b.tgl_plan) b on b.tgl_plan = a.tgl_plan) a) b on b.tgl_plan = a.tanggal) a) c on c.id = a.id");
            foreach ($query->result() as $data) {
                $hasil = ($data->per_rft);
            }

        return $hasil;
    }


    function cari_bulan($bulan, $tahun)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("select DISTINCT nama_bulan from dim_date where bulan_text = '$bulan'");
            foreach ($query->result() as $data) {
                $hasil = ($data->nama_bulan);
            }

        return $hasil;
    }


    function cari_effi_chiefline($id,$bulan, $tahun)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT GROUP_CONCAT(effi) effi_line  from (SELECT IF(effi is null,'''''',effi) effi ,id_chief from (select SUBSTR(tanggal,9,2) tanggal_s, tanggal from dim_date where bulan_text = '$bulan' and status_prod = 'KERJA' and tahun = '$tahun') a
left join
(select id_chief,a.tgl_plan, Round((min_prod/if(a.tgl_plan = CURRENT_DATE(),min_tersedia_now,min_tersedia) * 100),2) effi from (select tgl_plan,id_chief, SUM(min_prod) min_prod from (SELECT c.id_chief,tgl_plan, master_plan_id,smv, count(a.id) actual, ROUND((count(a.id) * smv),4) min_prod from output_rfts a inner join master_plan b on b.id = a.master_plan_id inner join master_lead_line c on c.sewing_line  = b.sewing_line where tgl_plan BETWEEN (select tgl_awal from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') and (select tgl_akhir from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') and c.id_chief = '$id' GROUP BY master_plan_id
) a GROUP BY a.tgl_plan) a left join
(select tgl_plan, sum(min_tersedia) min_tersedia from (select tgl_plan,ROUND((jam_kerja * 60) * man_power,2) min_tersedia from (select tgl_plan, id_ws,sum(jam_kerja) jam_kerja, MAX(man_power) man_power from master_plan a inner join master_lead_line b on b.sewing_line  = a.sewing_line where tgl_plan BETWEEN (select tgl_awal from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') and (select tgl_akhir from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') and b.id_chief = '$id' GROUP BY tgl_plan,a.sewing_line) a) a GROUP BY a.tgl_plan) b on b.tgl_plan = a.tgl_plan
left join 
(select CURRENT_DATE() tgl_plan,sum((man_power * menit_real)) min_tersedia_now from (Select man_power,if(menit_real > (jam_kerja * 60),jam_kerja,jam_real) jam_real, if(menit_real > (jam_kerja * 60),(jam_kerja * 60),menit_real) menit_real, jam_kerja from (SELECT a.sewing_line,sum(actual) actual,sum(min_prod) min_prod,man_power,jam_real,menit_real FROM (SELECT id,sewing_line,smv,actual,round(smv * actual,4) min_prod FROM (SELECT a.sewing_line,a.id,smv from master_plan a inner join master_lead_line b on b.sewing_line  = a.sewing_line where tgl_plan = CURRENT_DATE() and b.id_chief = '$id' ) a inner join 
(SELECT master_plan_id, count(a.id) actual from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan = CURRENT_DATE() GROUP BY master_plan_id) b on b.master_plan_id = a.id) a inner join 
(SELECT sewing_line,man_power,jam_masuk,jam_sekarang, if(jam_kerja >= '6',jam_kerja -1,jam_kerja) jam_real, if(jam_kerja >= '6',menit_kerja -60,menit_kerja) menit_real from (SELECT a.sewing_line, MAX(man_power) man_power, CONCAT(CURRENT_DATE,' ','07:00:00') jam_masuk,CURRENT_DATE() as jam_sekarang, TIMESTAMPDIFF(hour,CONCAT(CURRENT_DATE,' ','07:00:00'),CURRENT_TIMESTAMP) jam_kerja,TIMESTAMPDIFF(minute,CONCAT(CURRENT_DATE,' ','07:00:00'),CURRENT_TIMESTAMP) menit_kerja from master_plan a inner join master_lead_line b on b.sewing_line  = a.sewing_line where tgl_plan = CURRENT_DATE() and b.id_chief = '$id' GROUP BY a.sewing_line order by a.sewing_line asc ) a) b on b.sewing_line = a.sewing_line GROUP BY a.sewing_line) a inner join
(SELECT sewing_line,COALESCE(sum(jam_kerja),0) as jam_kerja,COALESCE(sum(plan_target),0) as plan_target from master_plan where tgl_plan = CURRENT_DATE() GROUP BY sewing_line) b on b.sewing_line = a.sewing_line) a) c on c.tgl_plan = a.tgl_plan) b on b.tgl_plan = a.tanggal) a");
            foreach ($query->result() as $data) {
                $hasil = ($data->effi_line);
            }

        return $hasil;
    }


    function cari_rft_chiefline($id,$bulan, $tahun)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT GROUP_CONCAT(per_rft) per_rft_line from (SELECT id_chief,IF(per_rft is null,'''''',per_rft) per_rft from (select SUBSTR(tanggal,9,2) tanggal_s, tanggal from dim_date where bulan_text = '$bulan' and status_prod = 'KERJA' and tahun = '$tahun') a
left join
(SELECT id_chief,tgl_plan, round((rft / actual * 100),2) per_rft from (SELECT id_chief,a.tgl_plan, COALESCE(rft,0) rft ,(COALESCE(rft,0) + COALESCE(deffect,0)) actual, COALESCE(deffect,0) defect from (SELECT c.id_chief,b.tgl_plan, count(a.id) rft from output_rfts a inner join master_plan b on b.id = a.master_plan_id inner join master_lead_line c on c.sewing_line  = b.sewing_line where a.status = 'NORMAL' and b.tgl_plan BETWEEN (select tgl_awal from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') and (select tgl_akhir from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') and c.id_chief = '$id' GROUP BY b.tgl_plan) a left join 
(SELECT b.tgl_plan, count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id inner join master_lead_line c on c.sewing_line  = b.sewing_line where b.tgl_plan BETWEEN (select tgl_awal from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') and (select tgl_akhir from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') and c.id_chief = '$id' GROUP BY b.tgl_plan) b on b.tgl_plan = a.tgl_plan) a) b on b.tgl_plan = a.tanggal) a");
            foreach ($query->result() as $data) {
                $hasil = ($data->per_rft_line);
            }

        return $hasil;
    }


    function cari_effi_rudy()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT effi effi_line from dsb_effi_all_chief where id_chief = '1'");
            foreach ($query->result() as $data) {
                $hasil = ($data->effi_line);
            }

        return $hasil;
    }

    function cari_rft_rudy()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT rft per_rft_line from dsb_rft_all_chief where id_chief = '1'");
            foreach ($query->result() as $data) {
                $hasil = ($data->per_rft_line);
            }

        return $hasil;
    }


    function cari_effi_dadang()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT effi effi_line from dsb_effi_all_chief where id_chief = '2'");
            foreach ($query->result() as $data) {
                $hasil = ($data->effi_line);
            }

        return $hasil;
    }


    function cari_rft_dadang()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT rft per_rft_line from dsb_rft_all_chief where id_chief = '2'");
            foreach ($query->result() as $data) {
                $hasil = ($data->per_rft_line);
            }

        return $hasil;
    }

     function cari_effi_usup()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT effi effi_line from dsb_effi_all_chief where id_chief = '3'");
            foreach ($query->result() as $data) {
                $hasil = ($data->effi_line);
            }

        return $hasil;
    }


    function cari_rft_usup()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT rft per_rft_line from dsb_rft_all_chief where id_chief = '3'");
            foreach ($query->result() as $data) {
                $hasil = ($data->per_rft_line);
            }

        return $hasil;
    }


    function cari_effi_linda()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT effi effi_line from dsb_effi_all_chief where id_chief = '4'");
            foreach ($query->result() as $data) {
                $hasil = ($data->effi_line);
            }

        return $hasil;
    }


    function cari_rft_linda()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT rft per_rft_line from dsb_rft_all_chief where id_chief = '4'");
            foreach ($query->result() as $data) {
                $hasil = ($data->per_rft_line);
            }

        return $hasil;
    }


    function cari_effi_feri()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT effi effi_line from dsb_effi_all_chief where id_chief = '5'");
            foreach ($query->result() as $data) {
                $hasil = ($data->effi_line);
            }

        return $hasil;
    }


    function cari_rft_feri()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT rft per_rft_line from dsb_rft_all_chief where id_chief = '5'");
            foreach ($query->result() as $data) {
                $hasil = ($data->per_rft_line);
            }

        return $hasil;
    }


    function cari_slide_chief()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT CEIL(COUNT(id_chief) /3) jml from (select a.id_chief,a.chief_name,effi_before,rft_before,effi_yesterday,rft_yesterday,effi_today,rft_today from dsb_rft_chief a inner join dsb_effi_chief b on b.id_chief = a.id_chief inner join master_chief_line c on c.id = b.id_chief where c.status = 'Aktif' order by c.id) a");
            foreach ($query->result() as $data) {
                $hasil = ($data->jml);
            }

        return $hasil;
    }

    function cari_slide_lead()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT CEIL(COUNT(a.id)/4) jml_slide from (select a.id,a.sewing_line,a.sewing_name,leader_name,short_name from master_lead_line a inner join master_plan b on b.sewing_line = a.sewing_line where a.status = 'Aktif' and b.cancel != 'Y' GROUP BY a.sewing_line order by a.id asc) a");
            foreach ($query->result() as $data) {
                $hasil = ($data->jml_slide);
            }

        return $hasil;
    }

    function call_chief_effi()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("CALL chief_all_effi() ");
        return $query;
    }

    function call_chief_rft()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("CALL chief_all_data() ");
        return $query;
    }

    function call_get_rank()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("CALL get_effi_rank() ");
        return $query;
    }


     function cari_output_chief1()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT a.id_chief,a.chief_name, c.short_name,effi_before,rft_before,effi_yesterday,rft_yesterday,effi_today,rft_today from dsb_rft_chief a inner join dsb_effi_chief b on b.id_chief = a.id_chief inner join master_chief_line c on c.id = b.id_chief where c.status = 'Aktif' order by effi_today desc limit 0,3");
        return $query->result_array();
    }

    function cari_output_chief2()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT a.id_chief,a.chief_name, c.short_name,effi_before,rft_before,effi_yesterday,rft_yesterday,effi_today,rft_today from dsb_rft_chief a inner join dsb_effi_chief b on b.id_chief = a.id_chief inner join master_chief_line c on c.id = b.id_chief where c.status = 'Aktif' order by effi_today desc limit 3,3");
        return $query->result_array();
    }

    function cari_output_chief3()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT a.id_chief,a.chief_name, c.short_name,effi_before,rft_before,effi_yesterday,rft_yesterday,effi_today,rft_today from dsb_rft_chief a inner join dsb_effi_chief b on b.id_chief = a.id_chief inner join master_chief_line c on c.id = b.id_chief where c.status = 'Aktif' order by effi_today desc limit 6,3");
        return $query->result_array();
    }

    function cari_output_lead1()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT b.id,a.id_line,a.sewing_line,b.sewing_name,a.leader_name,a.short_name,rank_factory,rank_section,a.chief_name,b.pict_leader from dsb_rank_effi a left join master_lead_line b on b.sewing_line = a.sewing_line order by id asc limit 0,4");
        return $query->result_array();
    }

    function cari_output_lead2()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT b.id,a.id_line,a.sewing_line,b.sewing_name,a.leader_name,a.short_name,rank_factory,rank_section,a.chief_name,b.pict_leader from dsb_rank_effi a left join master_lead_line b on b.sewing_line = a.sewing_line order by id asc limit 4,4");
        return $query->result_array();
    }

    function cari_output_lead3()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT b.id,a.id_line,a.sewing_line,b.sewing_name,a.leader_name,a.short_name,rank_factory,rank_section,a.chief_name,b.pict_leader from dsb_rank_effi a left join master_lead_line b on b.sewing_line = a.sewing_line order by id asc limit 8,4");
        return $query->result_array();
    }

    function cari_output_lead4()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT b.id,a.id_line,a.sewing_line,b.sewing_name,a.leader_name,a.short_name,rank_factory,rank_section,a.chief_name,b.pict_leader from dsb_rank_effi a left join master_lead_line b on b.sewing_line = a.sewing_line order by id asc limit 12,4");
        return $query->result_array();
    }

    function cari_output_lead5()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT b.id,a.id_line,a.sewing_line,b.sewing_name,a.leader_name,a.short_name,rank_factory,rank_section,a.chief_name,b.pict_leader from dsb_rank_effi a left join master_lead_line b on b.sewing_line = a.sewing_line order by id asc limit 16,4");
        return $query->result_array();
    }

    function cari_output_lead6()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT b.id,a.id_line,a.sewing_line,b.sewing_name,a.leader_name,a.short_name,rank_factory,rank_section,a.chief_name,b.pict_leader from dsb_rank_effi a left join master_lead_line b on b.sewing_line = a.sewing_line order by id asc limit 20,4");
        return $query->result_array();
    }

    function cari_output_lead7()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT b.id,a.id_line,a.sewing_line,b.sewing_name,a.leader_name,a.short_name,rank_factory,rank_section,a.chief_name,b.pict_leader from dsb_rank_effi a left join master_lead_line b on b.sewing_line = a.sewing_line order by id asc limit 24,4");
        return $query->result_array();
    }

    function cari_output_lead8()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT b.id,a.id_line,a.sewing_line,b.sewing_name,a.leader_name,a.short_name,rank_factory,rank_section,a.chief_name,b.pict_leader from dsb_rank_effi a left join master_lead_line b on b.sewing_line = a.sewing_line order by id asc limit 28,4");
        return $query->result_array();
    }

    function call_line_effi()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("CALL effi_all_line() ");
        return $query;
    }

    function call_line_rft()
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("CALL rft_all_line() ");
        return $query;
    }


    function cari_rft_line($line, $bulan, $tahun)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT sewing_line,GROUP_CONCAT(per_rft) per_rft_line from (SELECT IF(per_rft is null,'''''',per_rft) per_rft,sewing_line from (select SUBSTR(tanggal,9,2) tanggal_s, tanggal from dim_date where bulan_text = '$bulan' and status_prod = 'KERJA' and tahun = '$tahun') a
left join
(SELECT sewing_line,tgl_plan, round((rft / actual * 100),2) per_rft from (SELECT sewing_line,a.tgl_plan, COALESCE(rft,0) rft ,(COALESCE(rft,0) + COALESCE(deffect,0)) actual, COALESCE(deffect,0) defect from (SELECT sewing_line,b.tgl_plan, count(a.id) rft from output_rfts a inner join master_plan b on b.id = a.master_plan_id where a.status = 'NORMAL' and b.tgl_plan BETWEEN (select tgl_awal from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') and (select tgl_akhir from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') and b.sewing_line = '$line' GROUP BY b.tgl_plan) a left join 
(SELECT b.tgl_plan, count(a.id) deffect from output_defects a inner join master_plan b on b.id = a.master_plan_id where b.tgl_plan BETWEEN (select tgl_awal from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') and (select tgl_akhir from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') and b.sewing_line = '$line' GROUP BY b.tgl_plan) b on b.tgl_plan = a.tgl_plan) a) b on b.tgl_plan = a.tanggal) a");
            foreach ($query->result() as $data) {
                $hasil = ($data->per_rft_line);
            }

        return $hasil;
    }


    function cari_effi_line($line,$bulan,$tahun)
    {
        $db_sblokal = $this->load->database('db_sblokal', TRUE);
        $query = $db_sblokal->query("SELECT sewing_line,GROUP_CONCAT(effi) effi_line from (SELECT IF(effi is null,'''''',effi) effi,sewing_line from (select SUBSTR(tanggal,9,2) tanggal_s, tanggal from dim_date where bulan_text = '$bulan' and status_prod = 'KERJA' and tahun = '$tahun') a
left join
(select sewing_line,a.tgl_plan, Round((min_prod/if(a.tgl_plan = CURRENT_DATE(),min_tersedia_now,min_tersedia) * 100),2) effi from (select sewing_line,tgl_plan, SUM(min_prod) min_prod from (SELECT sewing_line,tgl_plan, master_plan_id,smv, count(a.id) actual, ROUND((count(a.id) * smv),4) min_prod from output_rfts a inner join master_plan b on b.id = a.master_plan_id where tgl_plan BETWEEN (select tgl_awal from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') and (select tgl_akhir from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') and b.sewing_line = '$line' GROUP BY master_plan_id) a GROUP BY a.tgl_plan) a left join
(select tgl_plan, sum(min_tersedia) min_tersedia from (select tgl_plan,ROUND((jam_kerja * 60) * man_power,2) min_tersedia from (select tgl_plan, id_ws,sum(jam_kerja) jam_kerja, MAX(man_power) man_power from master_plan where tgl_plan BETWEEN (select tgl_awal from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') and (select tgl_akhir from tbl_tgl_tb where bulan = '$bulan' and tahun = '$tahun') and sewing_line = '$line' GROUP BY tgl_plan,sewing_line) a) a GROUP BY a.tgl_plan) b on b.tgl_plan = a.tgl_plan
left join 
(select CURRENT_DATE() tgl_plan,sum((man_power * menit_real)) min_tersedia_now from (Select man_power,if(menit_real > (jam_kerja * 60),jam_kerja,jam_real) jam_real, if(menit_real > (jam_kerja * 60),(jam_kerja * 60),menit_real) menit_real, jam_kerja from (SELECT a.sewing_line,sum(actual) actual,sum(min_prod) min_prod,man_power,jam_real,menit_real FROM (SELECT id,sewing_line,smv,actual,round(smv * actual,4) min_prod FROM (SELECT sewing_line,id,smv from master_plan where tgl_plan = CURRENT_DATE() and sewing_line = '$line' ) a inner join 
(SELECT master_plan_id, count(a.id) actual from output_rfts a inner join master_plan b on b.id = a.master_plan_id where b.tgl_plan = CURRENT_DATE() GROUP BY master_plan_id) b on b.master_plan_id = a.id) a inner join 
(SELECT sewing_line,man_power,jam_masuk,jam_sekarang, if(jam_kerja >= '6',jam_kerja -1,jam_kerja) jam_real, if(jam_kerja >= '6',menit_kerja -60,menit_kerja) menit_real from (SELECT sewing_line, MAX(man_power) man_power, CONCAT(CURRENT_DATE,' ','07:00:00') jam_masuk,CURRENT_DATE() as jam_sekarang, TIMESTAMPDIFF(hour,CONCAT(CURRENT_DATE,' ','07:00:00'),CURRENT_TIMESTAMP) jam_kerja,TIMESTAMPDIFF(minute,CONCAT(CURRENT_DATE,' ','07:00:00'),CURRENT_TIMESTAMP) menit_kerja from master_plan where tgl_plan = CURRENT_DATE() and sewing_line = '$line' GROUP BY sewing_line order by sewing_line asc ) a) b on b.sewing_line = a.sewing_line GROUP BY a.sewing_line) a inner join
(SELECT sewing_line,COALESCE(sum(jam_kerja),0) as jam_kerja,COALESCE(sum(plan_target),0) as plan_target from master_plan where tgl_plan = CURRENT_DATE() GROUP BY sewing_line) b on b.sewing_line = a.sewing_line) a) c on c.tgl_plan = a.tgl_plan) b on b.tgl_plan = a.tanggal) a");
            foreach ($query->result() as $data) {
                $hasil = ($data->effi_line);
            }

        return $hasil;
    }

    
}