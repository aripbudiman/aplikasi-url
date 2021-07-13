<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Boodyman | Data Petugas</title>
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
$sql = mysqli_query($koneksi, "select * from petugas where nama_petugas='$_GET[kode]'");
$data = mysqli_fetch_array($sql);
?>
<!--main menu-->
<div class="home_content">
    <div class="text">
        <h3>Form Tambah Petugas</h3>

        <form action="" method="POST">
            <div class="mb-3 col-3">
                <label for="nama petugas" class="form-label">Nama Petugas</label>
                <input type="text" name="nama_petugas" value="<?php echo $data['nama_petugas']; ?>"><br>
            </div>
            <div class="mb-3 col-3">
                <label for="nama petugas" class="form-label">Alamat</label>
                <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"><br>
            </div>
            <div class="mb-3 col-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" name="jabatan" value="<?php echo $data['jabatan']; ?>"><br>
            </div>
            <div class="ml-3">
                <button type="submit" name="proses" class="btn btn-primary">Simpan</button>
            </div>
        </form>
        <?php

        include "koneksi.php";
        if (isset($_POST['proses'])) {
            mysqli_query($koneksi, "update petugas set
        
        
        alamat ='$_POST[alamat]',
        jabatan      ='$_POST[jabatan]'
        where nama_petugas ='$_GET[kode]'
        
        ");
            echo "Data Petugas telah diubah!";
            echo  "<meta http-equiv=refresh content=1;URL='petugas.php'>";
        }



        ?>





        <!--Footer-->
        <?php include 'include/footer.php' ?>