<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>

<body>

    <!--Pembuka Container-->
    <div class="container">
        <h1 class="text-center">Update Data</h1>

        <!--Pembuka Card-->
        <div class="card">
            <div class="card-header bg-warning">
                Masukkan Data
            </div>
            <!--Isi Card-->
            <div class="card-body">
                <div class="card-body">
                    <form action="<?= base_url('home/update/') . $data['id_user'] ?>" method="post">
                        <div class="form-group">

                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>"
                                placeholder=" Masukan Nama Anda" required>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" value="<?= $data['email'] ?>"
                                placeholder=" Masukan Email Anda" required>
                        </div>

                        <div class="form-group">
                            <label>Jabatan</label>
                            <select class="form-control" name="jabatan" value="<?= $data['jabatan'] ?>">
                                <option></option>
                                <option value=" Mentor">Mentor</option>
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
                            <input value="<?= $data['alamat'] ?>" class="form-control" name="alamat" placeholder="
                                Masukan Alamat Anda"></input>
                        </div>
                        <br>

                        <button class="btn btn-success" type="submit" name="bsimpan">Simpan</button>
                    </form>
                </div>
            </div>
            <!--Penutup Isi Card-->
        </div>
        <!--Penutup Card-->




    </div>
    <!--Penutup Container-->

</body>

</html>