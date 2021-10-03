<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS BACKEND</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>

<body>


    <!--Pembuka Container-->
    <div class="container">
        <br>
        <h1 class="text-center">SELAMAT DATANG</h1>
        <h5 class="text-center">Form Penginputan Data</h5>
        <br>

        <!--Pembuka Card-->
        <div class="card">
            <div class="card-header bg-success text-white text-center">
                Masukkan Data
            </div>
            <!--Isi Card-->
            <div class="card-body">
                <div class="card-body">
                    <form method="POST" action="<?= base_url('home/tambah') ?>">
                        <div class="form-group">

                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Anda"
                                required>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Masukan Email Anda"
                                required>
                        </div>

                        <div class="form-group">
                            <label>Jabatan</label>
                            <select class="form-control" name="jabatan">
                                <option></option>
                                <option value="Mentor">Mentor</option>
                                <option value="Trainer">Trainer</option>
                                <option value="Aster">Aster</option>
                                <option value="Media">Media</option>
                                <option value="Pendamping KKD">Pendamping KKD</option>
                                <option value="Pendamping MLS">Pendamping MLS</option>
                                <option value="Desain Produk">Desain Produk</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat" placeholder="Masukan Alamat Anda"></textarea>
                        </div>
                        <br>

                        <button class="btn btn-success" type="submit" name="bsimpan">Simpan</button>
                        <button class="btn btn-danger" type="reset">Reset</button>
                    </form>
                </div>
            </div>
            <!--Penutup Isi Card-->
        </div>
        <!--Penutup Card-->



        <!--Pembuka Tabel-->
        <div class="card mt-4">
            <div class="card-header bg-primary text-white text-center">
                Data Tersimpan
            </div>
            <!--Pembuka Isi Tabel-->
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jabatan</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>

                    <?php

                    $no = 1;
                    foreach ($data->result_array() as $key) {

                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $key['nama'] ?></td>
                        <td><?= $key['email'] ?></td>
                        <td><?= $key['jabatan'] ?></td>
                        <td><?= $key['alamat'] ?></td>
                        <td>


                            <form action="<?= base_url('home/halaman_update/') . $key['id_user'] ?>">
                                <button type="submit" class="btn btn-warning">Edit</button>
                            </form>
                            <br>
                            <form action="<?= base_url('home/delete/') . $key['id_user'] ?>">
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>


                        </td>
                    </tr>

                    <?php } ?>
                </table>
            </div>
            <!--Penutup Isi Tabel-->
        </div>
        <!--Penutup Card-->





    </div>
    <!--Penutup Container-->

</body>

</html>