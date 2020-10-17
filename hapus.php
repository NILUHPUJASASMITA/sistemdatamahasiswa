<?php
include "../koneksi.php";
if (isset($_GET['id'])){
    $deleteSql = mysqli_query($conf, "DELETE FROM mhs WHERE id_mhs= '$_GET[id]'");
    if ($deleteSql){
        echo "<script type='text/javascript'>alert('Data berhasil dihapus...!'); location.href=\"home.php\" ;</script>";              
    }
}
?>