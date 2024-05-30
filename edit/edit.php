<?php
include '../koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM kudus WHERE id='" . $id . "'");
    while ($user_data = mysqli_fetch_assoc($result)) {
        $kecamatan = $user_data['kecamatan'];
        $jml_kematian_bayi = $user_data['jml_kematian_bayi'];
        $stunting = $user_data['stunting'];
        $jml_kematian_ibu = $user_data['jml_kematian_ibu'];
        $jml_kematian_balita = $user_data['jml_kematian_balita'];
        $jml_ttl = $user_data['jml_ttl'];
    }
}
?>
<html>

<head>
    <title>Form Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

</head>

<body>
    <div class="container px-5 my-5">
        <div class="text-center mb-3">
            <h1>EDIT</h1>
            <a href="tabel.php">
                <button class="btn btn-primary">Back</button>
            </a>
        </div>
        <form name="forminput" action="uedit.php" method="post" autocomplete="off" id="forminput">
            <div class="form-floating mb-3">
                <input type="hidden" name="xkecamatan" value="<?php echo $kecamatan; ?>">
                <input name="kecamatan" class="form-control" id="kecamatan" type="text" disabled
                    value="<?php echo $kecamatan; ?>" />
                <label for="kecamatan">Kecamatan</label>
            </div>
            <div class="form-floating mb-3">
                <input name="jml_kematian_bayi" class="form-control" id="jml_kematian_bayi" type="text"
                    placeholder="Jumlah Kematian Bayi" value="<?php echo $jml_kematian_bayi; ?>" />
                <label for="jml_kematian_bayi">Jumlah Kematian Bayi</label>
            </div>
            <div class="form-floating mb-3">
                <input name="stunting" class="form-control" id="stunting" type="text" placeholder="Stunting"
                    value="<?php echo $stunting; ?>" value="<?php echo $stunting; ?>" />
                <label for="stunting">Stunting</label>
            </div>
            <div class="form-floating mb-3">
                <input name="jml_kematian_ibu" class="form-control" id="jml_kematian_ibu" type="text"
                    placeholder="Jumlah Kematian Ibu" value="<?php echo $jml_kematian_ibu; ?>" />
                <label for="jml_kematian_ibu">Jumlah Kematian Ibu</label>
            </div>
            <div class="form-floating mb-3">
                <input name="jml_kematian_balita" class="form-control" id="jml_kematian_balita" type="text"
                    placeholder="Jumlah Kematian Balita" value="<?php echo $jml_kematian_balita; ?>" />
                <label for="jml_kematian_balita">Jumlah Kematian Balita</label>
            </div>
            <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="submit" value="update">Simpan</button>
                <button class="btn btn-primary disable" type="reset">Reset</button>
            </div>
        </form>
    </div>
</body>

</html>