<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Responsive Sidebar Menu | Arip Budiman </title>
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <!--Font awesome-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <i class='bx bxl-android'></i>
                <div class="logo_name">BUDIMAN app</div>
            </div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav_list">
            <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Search...">
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-tachometer-alt"></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="petugas.php">
                    <i class="fas fa-user"></i>
                    <span class="links_name">Petugas</span>
                </a>
                <span class="tooltip">Data Petugas</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-chat'></i>
                    <span class="links_name">Majelis</span>
                </a>
                <span class="tooltip">Majelis</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Jadwal Pelayanan</span>
                </a>
                <span class="tooltip">Jadwal Pelayanan</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-folder'></i>
                    <span class="links_name">Cashflow</span>
                </a>
                <span class="tooltip">Cashflow</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cart-alt'></i>
                    <span class="links_name">Laporan</span>
                </a>
                <span class="tooltip">Laporan</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-heart'></i>
                    <span class="links_name">Kontak</span>
                </a>
                <span class="tooltip">Kontak</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Setting</span>
                </a>
                <span class="tooltip">Setting</span>
            </li>
        </ul>
        <div class="profile_content">
            <div class="profile">
                <div class="profile_details">
                    <img src="profile.jpg" alt="">
                    <div class="name_job">
                        <div class="name">Arip Budiman</div>
                        <div class="job">Web Designer</div>
                    </div>
                </div>
                <i class='bx bx-log-out' id="log_out"></i>
            </div>
        </div>
    </div>