<div class="menu">
<ul>
    <?php
    //pemeriksaan session
    if (isset($_SESSION['login'])) { //jika sudah login
    //menampilkan isi session
    $username = $_SESSION['login'];
    }

    include 'conn.php';
    $hasil = $koneksi->prepare("SELECT * FROM tb_user ORDER BY username='$username'");
    $hasil->execute();
    $data = $hasil->fetchAll();

    foreach ($data as $koreksi) {
        $hak = $koreksi['hak'];
    }
    if ($hak == 1) {
            echo "<li><a href='index.php?p=home'>Home</a></li>
            <li><a href='index.php?p=sekolah'>Sekolah</a></li>
            <li><a href='../logout.php'>Logout</a></li>";
        } else {
            echo "<li><a href='index.php?p=home'>Home</a></li>
            <li><a href='../logout.php'>Logout</a></li>";
        }
    ?>

</ul>
</div>
