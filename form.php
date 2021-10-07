<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isi Form</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="header">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="home.php">Kuis</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" href="form.php">Form</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" href="anakayam.php">Perulangan</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="isi">
            <div class="judul">
                <h3>Form Biodata Mahasiswa</h3>
            </div>
            <form action="form_output.php" method="POST">
                <div class="row">
                    <div class="col-4"><p>NIM</p></div>
                    <div class="col-8"><input type="text" id="nim" name="nim" ></div>
                    
                </div>
                <div class="row">
                    <div class="col-4"><p>Nama</p></div>
                    <div class="col-8"><input type="text" id="nama" name="nama"></div>
                    
                </div>
                <div class="row">
                    <div class="col-4"><p>Tempat, Tanggal Lahir</p></div>
                    <div class="col-4"><input type="text" id="tempat" name="tempat"></div>
                    <div class="col-4"><input type="date" id="birthday" name="birthday"></div>
                </div>
                <div class="row">
                    <div class="col-4"><p>Alamat</p></div>
                    <div class="col-8"><textarea name="alamat" id="alamat" cols="70" rows="1"></textarea></div>
                    
                </div>
                <div class="row">
                    <div class="col-4"><p>Jenis Kelamin</p></div>
                    <div class="col-8"><input type="radio" id="laki-laki" name="jenkel" value="Laki-laki"><label for="laki-laki">Laki-laki</label>
                            <input type="radio" id="perempuan" name="jenkel" value="Perempuan"><label for="perempuan"> Perempuan</label></div>
                    
                </div>
                <div class="row">
                    <div class="col-4"><p>Agama</p></div>
                    <div class="col-8">
                        <select name="agama">
                            <option value="Islam">Islam</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-4"><p>Kuisnya susah ?</p></div>
                    <div class="col-8">
                        <input type="radio" name="kuis" value="Ya"><label for="Ya">Ya</label>
                        <input type="radio" name="kuis" value="Tidak"><label for="Tidak">Tidak</label>
                    </div>
                </div>
                <br><button class="btn-primary">Submit</button>
            </form>
        </div>
        <div class="footer bg-primary">
            <h5>&copy 2019</h5>
        </div>
    </div>
    
</body>
</html>