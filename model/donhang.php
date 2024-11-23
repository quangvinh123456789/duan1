<?php
function list_donhang () {
    $sql ="SELECT * FROM `donhang` ";
    return pdo_query($sql);
}

?>