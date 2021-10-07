<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan Anak Ayam</title>
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
                <h3>Perulangan Anak Ayam</h3>
            </div>
            <?php
                $jumlah = 8;
                echo "Anak Ayam Udin ada : ";
                echo $jumlah."<br>";

                while ($jumlah>1) {
                    $jmlkurang=$jumlah-1;
                    echo "<b>"."Anak Ayam Turun ";
                    echo $jumlah."</b><br>" ; 
                    echo "Mati Satu Tinggal ";
                    echo $jmlkurang."<br>";
                    $jumlah--;
                    if ($jumlah==1){
                        $jmlkurang = "Udin Galau :((";
                        echo "<b>"."Anak Ayam Turun ";
                        echo $jumlah."</b><br>";
                        echo "Mati Satu ";
                        echo $jmlkurang."<br>";
                    }
                }
                ?>	
        </div>
        <div class="footer bg-primary">
            <h5>&copy 2019</h5>
        </div>
    </div>
    
</body>
</html>