<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0099ff" fill-opacity="1" d="M0,96L48,90.7C96,85,192,75,288,96C384,117,480,171,576,170.7C672,171,768,117,864,112C960,107,1056,149,1152,154.7C1248,160,1344,128,1392,112L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
    </svg>

    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Rekam.Medis</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Featured</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Creator</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="row align-items-start">
            <div class="col-6">
                <img src="style/dokter.webp" class="img-fluid" alt="...">
            </div>
            <div class="col-1"></div>
            <div class="col-5">
                <h2>
                    Rekam.Medis
                    <br>
                    <small class="text-body-secondary">
                        <h5>
                            Aplikasi khusus untuk orang tidak sehat
                        </h5>
                    </small>
                </h2>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="addon-wrapping">
                        <i class="bi bi-person"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="addon-wrapping">
                        <i class="bi bi-key"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping">
                </div>
                <div class="row">
                    <div class="col-2">
                        <a class="btn btn-primary" href="#" role="button">Register</a>
                    </div>
                    <div class="col-4">
                        <a class="btn btn-success" href="#" role="button">Login</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col">
                Fitur 1 : 
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Laporan Penyakit</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                Fitur 2 : 
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Manajemen Pasien</h5>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                Fitur 3 : 
                <div class="card" style="width: 18rem;">
                    <img src="style/cek.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Cek Kesehatan</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                Fitur 4 : 
                <div class="card" style="width: 18rem;">
                    <img src="style/laporan.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Cetak Laporan</h5>
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <img src="style/Medical care-rafiki.png" class="img-fluid rounded-circle" alt="...">
            </div>
            <div class="col-9">
                <h1>Judul</h1>
                <small>Lorem ipsum dolor sit amet consectetur adipisicing elit.<p>Lorem ipsum dolor sit.</p></small>
            </div>
        </div>

    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0099ff" fill-opacity="1" d="M0,96L48,90.7C96,85,192,75,288,96C384,117,480,171,576,170.7C672,171,768,117,864,112C960,107,1056,149,1152,154.7C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>