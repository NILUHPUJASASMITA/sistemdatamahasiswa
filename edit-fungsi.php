<?php

include "../koneksi.php";
if (isset($_POST['edit'])) {
    $updateSql = mysqli_query($conf, "UPDATE mhs SET nm_mhs = '$_POST[nm_mhs]' ,nim= '$_POST[nim]', jk='$_POST[jk]', id_kelas='$_POST[id_kelas]', email='$_POST[email]' WHERE id_mhs='$_POST[id_mhs]' ");
if ($updateSql) {
    echo "<script type='text/javascript'>alert('Data berhasil disimpan...!'); location.href=\"home.php\" ;</script>";              
    }
}

?>