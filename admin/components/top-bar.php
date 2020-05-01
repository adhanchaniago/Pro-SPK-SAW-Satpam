<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mt-2 mt-lg-0">
            <li class="nav-item ">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <?php if ($_SESSION['akun']->user_level == 1) : ?>
                <li class="nav-item ">
                    <a class="nav-link" href="index.php?page=pages/user/index">Data User</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="index.php?page=pages/peserta/index">Data Calon Peserta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=pages/analisa/index">Data Analisa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=pages/hasil/index">Data Hasil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" target="blank" href="pages/laporan/index.php">Laporan</a>
                </li>
            <?php endif ?>
            <?php if ($_SESSION['akun']->user_level == 2) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=pages/hasil/index">Data Hasil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" target="blank" href="pages/laporan/index.php">Laporan</a>
                </li>
            <?php endif ?>
        </ul>
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item ">
                <a class="nav-link" href="index.php?page=pages/logout/index">Logout</a>
            </li>
        </ul>
    </div>
</nav>