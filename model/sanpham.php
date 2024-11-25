<?php
//-------------------ADMIN------------------//
function insert_sp($iddm, $name, $img, $img2, $img3, $gia, $gia_new, $mota, $soluong, $xuatxu, $kieumay)
{
    $sql = "INSERT INTO `sanpham`(`iddm`, `name`, `img`,`img2`,`img3`, `gia`, `gia_new`, `mota`, `soluong`, `xuatxu`, `kieumay`) VALUES 
    ('$iddm','$name','$img', '$img2', '$img3','$gia','$gia_new','$mota','$soluong','$xuatxu','$kieumay')";
    pdo_execute($sql);
}


function delete_sp($id)
{
    $sql = "DELETE FROM sanpham WHERE id = $id";
    pdo_execute($sql);
}

function update_sp($id, $iddm, $name, $img, $img2, $img3, $gia, $gia_new, $mota, $soluong, $xuatxu, $kieumay)
{
    $sql = "UPDATE `sanpham` SET 
        `iddm` = '$iddm',
        `name` = '$name',
        `img` = '$img',
        `img2` = '$img2',
        `img3` = '$img3',
        `gia` = '$gia',
        `gia_new` = '$gia_new',
        `mota` = '$mota',
        `soluong` = '$soluong',
        `xuatxu` = '$xuatxu',
        `kieumay` = '$kieumay'
        WHERE `id` = $id";
    pdo_execute($sql);
}
