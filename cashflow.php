<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Boodyman | CashFlow</title>
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

<!--header-->
<?php include 'include/sidebar.php' ?>

<!--main menu-->
<div class="home_content">
    <div class="scroll">
        <div class="text">
            <h3 style="text-align: center;"><br>Cashflow </h3>

            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama </th>
                        <th>Tabungan Masuk</th>
                        <th>Tabungan Keluar</th>
                        <th>Saldo Akhir </th>
                        <th><i class="fas fa-cogs"></i></th>
                        <th><i class="fas fa-cogs"></i></th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "koneksi.php";
                    $no = 1;
                    $ambildata = mysqli_query($koneksi, "select * from cashflow");
                    while ($tampil = mysqli_fetch_array($ambildata)) {

                        $saldo_akhir = (int)$tampil['saldo_akhir'] + (int)$tampil['tabungan_masuk'] - (int)$tampil['tabungan_keluar'];

                        echo "
                        <tr>
                        <td>$no<?td>
                        <td>$tampil[nama]<?td>
                        <td>$tampil[tabungan_masuk]<?td>
                        <td>$tampil[tabungan_keluar]<?td>
                        <td>$saldo_akhir<?td>
                        </tr>
                        ";
                        $no++;
                    }


                    ?>


                    <!--
                    <script>
                        function penjumlahan() {

                            var bil1 = getElementById("bil1");
                            var bil2 = getElementById("bil2");
                            var akhir = akhir + bil1 - bil2;

                            document.getElementById("akhir").value = saldo_akhir;
                        }
                    </script>
                    -->

                    <!-- Footer-->
                    <?php include 'include/footer.php' ?>