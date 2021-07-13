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

<?php
include "koneksi.php";
$sql = mysqli_query($koneksi, "select * from majelis where nama_majelis='$_GET[kode]'");
$data = mysqli_fetch_array($sql);
?>
<!--main menu-->
<div class="home_content">
    <div class="text">
        <h3>Form Ubah Majelis</h3>

        <form action="" method="POST">
            <div class="mb-3 col-3">
                <label for="nama majelis" class="form-label">Nama Majelis</label>
                <input type="text" name="nama_majelis" value="<?php echo $data['nama_majelis']; ?>"><br>
            </div>
            <div class="mb-3 col-3">
                <label for="desa" class="form-label">Desa</label>
                <input type="text" name="desa" value="<?php echo $data['desa']; ?>"><br>
            </div>
            <div class="mb-3 col-3">
                <label for="jadwal layanan" class="form-label">Jadwal Layanan</label>
                <input type="text" name="jadwal_layanan" value="<?php echo $data['jadwal_layanan']; ?>"><br>
            </div>
            <div class="mb-3 col-3">
                <label for="jumlah anggota" class="form-label">Jumlah Anggota</label>
                <input type="text" name="jumlah_anggota" value="<?php echo $data['jumlah_anggota']; ?>"><br>
            </div>
            <div class="ml-3">
                <button type="submit" name="proses" class="btn btn-primary">Simpan</button>
            </div>

        </form>
        <?php

        include "koneksi.php";
        if (isset($_POST['proses'])) {
            mysqli_query($koneksi, "update majelis set
        
        
        desa ='$_POST[desa]',
        jadwal_layanan      ='$_POST[jadwal_layanan]'
        jumlah_anggota      ='$_POST[jumlah_anggota]'
        where nama_majelis ='$_GET[kode]'
        
        ");
            echo "Data majelis telah diubah!";
            echo  "<meta http-equiv=refresh content=1;URL='majelis.php'>";
        }



        ?>



        <!--Footer-->
        <?php include 'include/footer.php' ?>