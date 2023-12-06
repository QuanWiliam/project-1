<?php
function themDonHang($total)
{
    $id_tk = $_SESSION['user']['id_tk'];
    $sql = "INSERT INTO `order`(id_tk, status, total) VALUES ($id_tk, 0, $total)";
    return pdo_execute_return_id_bill($sql);
}

function themChitietHD($idBill, $idSp, $soLuong)
{
    $sql = "INSERT INTO order_detail(id_order, id_sp, soluong) VALUES($idBill, $idSp, $soLuong)";
    pdo_execute($sql);
}
?>