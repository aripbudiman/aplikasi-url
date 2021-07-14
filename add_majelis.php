<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Boodyman | Data Majelis</title>
    <link rel="stylesheet" href="style.css">
    <!--Font awesome dan box icons-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!--bootstrap 4.6-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<!--sidebar menu-->
<?php include 'include/sidebar.php' ?>


<!--main menu-->
<div class="home_content">
    <div class="text">
        <h3>Form Tambah Majelis</h3>

        <form action="" method="POST" onSubmit="validasi()">
            <div class="mb-3 col-md-3">
                <label for="nama petugas" class="form-label">Nama Majelis</label>
                <input type="text" name="nama_majelis" id="namaMajelis"><br>
            </div>
            <div class="mb-3 col-md-3">
                <label for="nama petugas" class="form-label">Wilayah/Desa</label>
                <input type="text" name="desa" id="wilayahDesa"><br>
            </div>
            <div class="mb-3 col-md-3">
                <label for="jabatan" class="form-label">Jadwal Layanan</label>
                <input type="text" name="jadwal_layanan" id="jadwalLayanan"><br>
            </div>
            <div class="mb-3 col-md-3">
                <label for="jabatan" class="form-label">Jumlah Anggota</label>
                <input type="text" name="jumlah_anggota" id="jumlahAnggota"><br>
            </div>
            <div class="ml-3">
                <button type="submit" name="proses" class="btn btn-primary">Simpan</button>
            </div>
        </form>
        <?php

        include "koneksi.php";
        if (isset($_POST['proses'])) {
            mysqli_query($koneksi, "insert into majelis set

        nama_majelis ='$_POST[nama_majelis]',
        desa ='$_POST[desa]',
        jadwal_layanan ='$_POST[jadwal_layanan]',
        jumlah_anggota ='$_POST[jumlah_anggota]'

        ");
            echo "Data Majelis Baru Telah Tersimpan!";
            echo  "<meta http-equiv=refresh content=1;URL='majelis.php'>";
        }



        ?>

        <script type="text/javascript">
            function validasi() {

                var namaMajelis = document.getElementById("nama_majelis").value;
                var wilayahDesa = document.getElementById("desa").value;
                var jadwalLayanan = document.getElementById("jadwal_layanan").value;
                var jumlahAnggota = document.getElementById("jumlah_anggota").value;

                if (namaMajelis != "" && wilayahDesa != "" && jadwalLayanan != "" && jumlahAnggota != "") {
                    return true;
                } else {
                    alert('Anda harus mengisi form dengan lengkap!');
                }


            }
        </script>



        <!--Footer-->
        <?php include 'include/footer.php' ?>