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

function load_all_donhang()
{
    $sql = "SELECT * FROM `order` WHERE 1";
    $list = pdo_query($sql);
    return $list;
}

function load_one_donhang($id)
{
    $sql = "SELECT * FROM `order` WHERE id_order = $id";
    $list = pdo_query_one($sql);
    return $list;
}

function update_donhang($status, $id_order)
{
    $sql = "UPDATE `order` SET `status` = $status WHERE `order`.`id_order` = $id_order";
    pdo_execute($sql);
}

function delete_donhang($id_order)
{
    $sql = "DELETE FROM `order` WHERE `id_order` = $id_order ";
    pdo_execute($sql);
}
?>