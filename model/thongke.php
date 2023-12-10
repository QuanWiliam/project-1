<?php

function thongkedonhang($subday, $now)
{
    $sql = "SELECT DATE_FORMAT(date, '%d/%m/%Y') 
    AS month_year, SUM(total) 
    AS total_amount FROM `order` 
    WHERE date BETWEEN '$subday' AND '$now' 
    GROUP BY month_year order by month_year ";
    $listthongke = pdo_query($sql);
    return $listthongke;
}



?>