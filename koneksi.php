<?php
// host web server
$host = "localhost";
// user name untuk mengakses data base
$username = "root";
//password untuk mengakses data base abaikan jika tidak pakai password
$pass = "";
// data base yang digunakan
$database = "aplikasi-url";
// script untuk koneksi ke database
$koneksi = mysqli_connect($host, $username, $pass, $database);
