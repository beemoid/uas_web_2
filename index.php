<!doctype html>
<html lang="en">
<?php
session_start();
if (!isset($_SESSION["no_hp"])) {
    header('location: login.php');
}
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>APLIKASI PENDAFTARAN VAKSIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css"> -->
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">APLIKASI PENDAFTARAN VAKSIN</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <!-- <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="#">Features</a>
                        <a class="nav-link" href="#">Pricing</a>
                        <a class="nav-link disabled">Disabled</a> -->
                    </div>
                </div>
                <p>Welcome <?= $_SESSION['nama'] ?></p>
            </div>
            <a href="logout.php">Logout</a>
        </nav>
        <div class="content  p-4">
            <div class="header">
                <h1>Daftar Vaksin</h1>
            </div>
            <div class="body">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDataModal">Tambah Data</button>
                <!-- <a href="tambah_data_vaksin.php" class="btn btn-primary">Tambah Data</a> -->
                <a href="index.php" class="btn btn-secondary">Refresh</a>
                <a href="to_pdf.php" class="btn btn-danger">PDF</a>

                <div class="text-center mt-3 mb-3">
                    <h4>Daftar Peserta Vaksinasi Covid19</h4>
                    <h5>Per <?= date('d M Y H:i:s') ?></h5>
                </div>
                <?php
                include_once 'koneksi.php';

                $query = "SELECT * FROM data_vaksin ORDER BY id DESC";
                $result = mysqli_query($mysqli, $query);
                $rows = $result->fetch_all(MYSQLI_ASSOC);
                // var_dump($rows);
                ?>
                <table id="dataVaksin" class="table table-bordered table-striped table-sm table-fit">
                    <?php
                    if (isset($_GET['success'])) {
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">' .
                            $_GET['success'] .
                            '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' .
                            "</div>";
                    }
                    if (isset($_GET['error'])) {
                        echo '<div class="alert alert-danger" role="alert">' .
                            $_GET['error'] .
                            "</div>";
                    }
                    ?>
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th>Nama Faskes</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">NIK</th>
                            <th class="text-center">Kelamin</th>
                            <th class="text-center">Umur</th>
                            <th class="text-center">No. Hp</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        function jkToStr($str)
                        {
                            if ($str == "L") return $temp = "Laki-Laki";
                            return $temp = "Perempuan";
                        }
                        foreach ($rows as $row) : ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $row['faskes_name'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['nik'] ?></td>
                                <td><?= jkToStr($row['jk']) ?></td>
                                <td><?= $row['umur'] ?></td>
                                <td><?= $row['no_hp'] ?></td>
                                <td class="text-center">
                                    <div class="btn-group" role="group">
                                        <!-- make delete form as delete btn -->
                                        <a href="edit_data_vaksin.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-success">Edit</a>
                                        <!-- <a href="hapus_data_vaksin.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger">Hapus</a> -->
                                        <form action="proses.php" method="post">
                                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                            <button type="submit" onclick="return confirm('Yakin ingin menghapus data <?= $row['nama'] ?>');" name="hapusData" class="btn btn-danger btn-sm" name="delete">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php
                            $no++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include_once 'modal_tambah_data.php'; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    

    <script>
        $(document).ready(function() {
            $('#dataVaksin').DataTable({
                "lengthMenu" : [[5, 10, 15, -1], [5, 10, 15, 'All']]
            })
        })
    </script>
</body>

</html>