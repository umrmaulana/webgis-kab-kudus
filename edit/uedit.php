<?php
include '../koneksi.php';
if (isset($_POST)) {
    $jml_ttl = $_POST['jml_kematian_bayi'] + $_POST['jml_kematian_ibu'] + $_POST['jml_kematian_balita'] + $_POST['stunting'];
    $update = "UPDATE kudus SET jml_kematian_bayi='$_POST[jml_kematian_bayi]', stunting='$_POST[stunting]',
     jml_kematian_ibu='$_POST[jml_kematian_ibu]', jml_kematian_balita='$_POST[jml_kematian_balita]', jml_ttl=$jml_ttl WHERE kecamatan='$_POST[xkecamatan]'";
    $query = mysqli_query($conn, $update);
}

if (isset($query)) {
    echo '<script>alert("Berhasil update data");</script>';
    echo '<script>window.location="tabel.php";</script>';
} else {
    echo '<script>alert("Gagal update data");</script>';
    echo '<script>window.location="tabel.php";</script>';
}
?>