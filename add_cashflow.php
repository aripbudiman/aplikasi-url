<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Boodyman | Tambah Cashflow</title>
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
        <h3>Form Input Cashflow</h3>
        <div class="container ml-3">


            <form action="" method="POST">
                <div class="mb-3 col-md-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama"><br>
                </div>
                <div class="mb-3 col-md-3">
                    <label for="tabungan masuk" class="form-label">Tabungan Masuk</label>
                    <input type="text" name="tabungan_masuk"><br>
                </div>
                <div class="mb-3 col-md-3">
                    <label for="tabungan keluar" class="form-label">Tabungan Keluar</label>
                    <input type="text" name="tabungan_keluar"><br>
                </div>
                <div class="ml-3">
                    <button type="submit" name="proses" class="btn btn-primary">Simpan</button>
                </div>
        </div>
        </form>
        <?php

        include "koneksi.php";
        if (isset($_POST['proses'])) {
            mysqli_query($koneksi, "insert into cashflow set

        nama ='$_POST[nama]',
        tabungan_masuk ='$_POST[tabungan_masuk]',
        tabungan_keluar ='$_POST[tabungan_keluar]'

        ");
            echo "Cashflow baru telah tersimpan!";
        }



        ?>





        <!--Footer-->
        <?php include 'include/footer.php' ?>