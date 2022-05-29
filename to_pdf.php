<?php

//session check
session_start();
if (!isset($_SESSION["no_hp"])) {
    header('location: login.php ');
    exit;
}

use Mpdf\Mpdf;

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new Mpdf([
    'tempDir' => __DIR__ . '/tmp'
]);

require_once 'koneksi.php';
$query = "SELECT * FROM data_vaksin ORDER BY id DESC";
$result = mysqli_query($mysqli, $query);
$rows = $result->fetch_all(MYSQLI_ASSOC);

ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eksport Data</title>
</head>

<body>
    <style>
        .header {
            text-align: center;
        }

        th,
        td {
            padding: 5px;
        }
    </style>
    <div class="header">
        <h1>Daftar Peserta Vaksin Covid19</h1>
        <h3>Per <?= date('d M Y H:i:s') ?></h3>
    </div>
    <br>
    <table border="1" width="100%">
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
                    <td style="text-align: center ;"><?= $no ?></td>
                    <td><?= $row['faskes_name'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['nik'] ?></td>
                    <td style="text-align: center ;"><?= jkToStr($row['jk']) ?></td>
                    <td style="text-align: center ;"><?= $row['umur'] ?></td>
                    <td><?= $row['no_hp'] ?></td>
                </tr>
            <?php
                $no++;
            endforeach; ?>
        </tbody>
    </table>
    <br><br><br><br><br><br><br>
    <p style="text-align: center ;">
        export by <?= $_SESSION['nama'] ?>
    </p>
</body>

</html>
<?php
$html = ob_get_contents();
ob_end_clean();

$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output("test.pdf", 'I');
