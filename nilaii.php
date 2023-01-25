<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <!-- Form -->

    <!-- Biodata -->
    <form action="absen.php" method="post" name="form">
    <h2 style="text-align:center"><b>Biodata Siswa</b></h2><hr>

    <div class="form-group row">
        <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
        <input type="text" class="form-control" id="inputNama" placeholder="Nama" name="Nama">
            </div>
    </div>

    <div class="form-group row">
        <label for="inputNIS" class="col-sm-2 col-form-label">NIS</label>
            <div class="col-sm-10">
        <input type="number" class="form-control" id="inputNIS" placeholder="NIS" name="Nis">
            </div>
    </div>

    <div class="form-group row">
        <label for="inputRombel" class="col-sm-2 col-form-label">Rombel</label>
            <div class="col-sm-10">
        <input type="text" class="form-control" id="inputRombel" placeholder="Rombel" name="Rombel">
            </div>
    </div>


    <br>
    <button type="submit" class="btn btn-primary mb-2">Masukan Data</button>
    </form>

    <hr>
    <h1 style="text-align: center;">Bio Siswa</h1>
    <table class="table table-striped">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Nis</th>
            <th scope="col">Rombel</th>
        </tr>
        <?php
        $con = mysqli_connect('localhost','root', '', 'enak');

        $no = 1;
        $data = mysqli_query($con, "select * from nikmat");

        while ($r = mysqli_fetch_array($data)) {
            $nama = $r['nikmat_nama'];
            $nis = $r['nikmat_nis'];
            $rombel = $r['nikmat_rombel'];
        ?>

        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $nama; ?></td>
            <td><?php echo $nis; ?></td>
            <td><?php echo $rombel; ?></td>
        </tr>
        <?php
        }
        ?>
    </table>

    <h1 style="text-align:center">Kelompok Arfan</h1>
        <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
        Arfan Hashif Hairuman
        <span class="badge badge-primary badge-pill">PPLG-X4</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
        Kevin Ilpalazzo
        <span class="badge badge-primary badge-pill">PPLG-X4</span>
        </li>
            </div>
        </div>
    </div>
</div>

</body>
</html>
<!-- Form END -->