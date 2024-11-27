<?php
function list_binhluan () {
    $sql ="SELECT * FROM `binhluan` ";
    return pdo_query($sql);
}

?>