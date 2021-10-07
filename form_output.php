<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Form Output</title>
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
                <h3>Biodata Mahasiswa</h3>
            </div>
            <?php
                echo "<table>"."<tr>"."<td>"."NIM "."</td>";
                echo "<td>".":"."</td>"."<td>"."$_POST[nim]"."</tr>";
                echo "<tr>"."<td>"."Nama "."</td>"."<td>".":"."</td>"."<td>"."$_POST[nama]"."</td>"."</tr>";
                echo "<tr>"."<td>"."Tempat, Tanggal Lahir "."</td>"."<td>".":"."</td>"."<td>"."$_POST[tempat] $_POST[birthday]"."</td>"."</tr>";
                echo "<tr>"."<td>"."Alamat"."</td>"."<td>".":"."</td>"."<td>"."$_POST[alamat]"."</td>"."</tr>";
                echo "<tr>"."<td>"."Jenis Kelamin "."</td>"."<td>".":"."</td>"."<td>"."$_POST[jenkel]"."</td>"."</tr>";
                echo "<tr>"."<td>"."Agama"."</td>"."<td>".":"."</td>"."<td>"."$_POST[agama]"."</td>"."</tr>";
                echo "<tr>"."<td>"."Kuisnya Susah ? "."</td>"."<td>".":"."</td>"."<td>"."$_POST[kuis]"."</td>"."</tr>";
                echo "</table>";
                
            ?>
        </div>
        <div class="footer bg-primary">
            <h5>&copy 2019</h5>
        </div>
    </div>
    
</body>
</html>