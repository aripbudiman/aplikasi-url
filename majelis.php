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
    <link rel="stylesheet" href="assets/DataTables/DataTables-1.10.25/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/DataTables/Buttons-1.7.1/css/buttons.bootstrap4.min.css">

</head>
</head>

<!--sidebar menu-->
<?php include 'include/sidebar.php' ?>

<!--main menu-->
<div class="home_content">
    <div class="text">
        <h3>Halaman Majelis</h3>
        <h4 style="text-align: center;">Data Majelis</h4>
        <a class="btn btn-primary" href="add_majelis.php" role="button" style="margin-bottom: 5px;"><i class="fas fa-plus"></i>Add</a>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Majelis</th>
                    <th>Desa</th>
                    <th>Jadwal Layanan</th>
                    <th>Jumlah Anggota</th>
                    <th><i class="fas fa-cogs"></i></th>
                    <th><i class="fas fa-cogs"></i></th>

                </tr>
            </thead>
            <tbody>
                <?php

                include "koneksi.php";
                $no = 1;
                $ambildata = mysqli_query($koneksi, "SELECT * from majelis");
                while ($tampil = mysqli_fetch_array($ambildata)) {
                    echo "

    <tr>
        <td>$no</td>
        <td>$tampil[nama_majelis]</td>
        <td>$tampil[desa]</td>
        <td>$tampil[jadwal_layanan]</td>
        <td>$tampil[jumlah_anggota]</td>
        <td><a href='?kode=$tampil[no]'>Hapus</a></td>
        <td><a href='majelis-ubah.php?kode=$tampil[nama_majelis]'> Ubah </a></td>
     </tr>";
                    $no++;
                }

                ?>
            </tbody>
        </table>
        <?php
        if (isset($_GET['kode'])) {

            mysqli_query($koneksi, "delete from majelis where no='$_GET[kode]'");

            echo "Data telah terhapus";
            echo  "<meta http-equiv=refresh content=2;URL='majelis.php'>";
        }
        ?>

    </div>


    <?php include 'include/footer.php' ?>