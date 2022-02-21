<?php

use LDAP\Result;

 class Usermodel extends CI_Model  
 {  
    public function chartshow(){
        $chart_query = $this->db->query("SELECT '0-10' as age, SUM(CASE WHEN age < 10 THEN 1 ELSE 0 END) as people_count
        FROM charts
        UNION ALL
        SELECT '11-20', SUM(CASE WHEN age BETWEEN 11 AND 20 THEN 1 ELSE 0 END)
        FROM charts
        UNION ALL
        SELECT '21-30', SUM(CASE WHEN age BETWEEN 21 AND 30 THEN 1 ELSE 0 END)
        FROM charts
        UNION ALL
        SELECT '31-40', SUM(CASE WHEN age BETWEEN 31 AND 40 THEN 1 ELSE 0 END)
        FROM charts
        UNION ALL
        SELECT '41-50', SUM(CASE WHEN age BETWEEN 41 AND 50 THEN 1 ELSE 0 END)
        FROM charts
        UNION ALL
        SELECT '51-60', SUM(CASE WHEN age BETWEEN 51 AND 60 THEN 1 ELSE 0 END)
        FROM charts
        UNION ALL
        SELECT '61-70', SUM(CASE WHEN age BETWEEN 61 AND 70 THEN 1 ELSE 0 END)
        FROM charts
        UNION ALL
        SELECT '71-80', SUM(CASE WHEN age BETWEEN 71 AND 80 THEN 1 ELSE 0 END)
        FROM charts;");
    
        return $chart_query->result_array();

    }
}  