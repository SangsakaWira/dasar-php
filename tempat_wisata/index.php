<?php

$lokasis = [
    [
        "nama" => "Green Bay",
        "kota" => "Banyuwangi",
        "provinsi" => "Jawa Timur",
        "img" => "https://www.nativeindonesia.com/wp-content/uploads/2015/03/pantai-teluk-hijau-banyuwangi.jpg"
    ],
    [
        "nama" => "Gunung Dempo",
        "kota" => "Pagaralam",
        "provinsi" => "Sumatera Selatan",
        "img" => "https://traverse.id/wp-content/uploads/2018/01/Gunung-Dempo.jpg"
    ],
    [
        "nama" => "Tangkuban Perahu",
        "kota" => "Pagaralam",
        "provinsi" => "Sumatera Selatan",
        "img" => "https://traverse.id/wp-content/uploads/2018/01/Gunung-Dempo.jpg"
    ],
    [
        "nama" => "Tegal Mas",
        "kota" => "Bandar Lampung",
        "provinsi" => "Lampung",
        "img" => "https://www.bobobox.co.id/blog/wp-content/uploads/2019/12/Untitled-7.png"
    ],
];

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><?php echo $lokasis[0]['nama']; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tambah.php">Tambah Lokasi</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container-fluid">
        <br>
        <div class="row row-cols-1 row-cols-md-2">
            <?php foreach ($lokasis as $lokasi) : ?>
                <div class="col mb-4">
                    <div class="card">
                        <img src=<?php echo $lokasi['img']; ?> class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $lokasi['nama']; ?></h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href="detail.php?img=<?php echo $lokasi['img']; ?>"><p class="card-text"><small class="text-muted">Detail</small></p></a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>