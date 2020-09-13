<?php

    // require "functions.php";

    $conn = mysqli_connect('localhost','root','root','karya_ibu');

    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $results = mysqli_query($conn,"SELECT * FROM users WHERE id_user=$id");
        $mhs = mysqli_fetch_assoc($results);
    }

    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $id = $_POST["id"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $role = (int)$_POST["role"];
        $nrp = $_POST["nrp"];
        $checkbox = $_POST["checkbox"];
    
        $query = "UPDATE users SET 
                username='$username',
                email='$email',
                password='$password',
                role=$role,
                nrp='$nrp' WHERE id_user=$id";
              
    mysqli_query($conn,$query);
    var_dump(mysqli_error($conn));
    header("Location: index.php");
    }

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
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="tambah.php">Tambah Mahasiswa <span class="sr-only">(current)</span></a>
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
        <h3 style="text-align: center;">Edit Mahasiswa</h3>
       <div style="width: 50%;margin:auto;">
       <form action="" method="post">
            <input hidden value="<?php echo $_GET['id']; ?>" name="id">
            <div class="form-group">
                <label for="username">Username</label>
                <input value="<?php echo $mhs['username']; ?>" name="username" type="text" class="form-control" id="username">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input value="<?php echo $mhs['email']; ?>" name="email" type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="nrp">NRP</label>
                <input value="<?php echo $mhs['nrp']; ?>" name="nrp" type="text" class="form-control" id="nrp">
            </div>

            <div class="form-group">
                <label for="nrp">Role</label>
                <select value="<?php echo $mhs['role']; ?>" name="role" class="form-control">
                    <option value="0">Mahasiswa Baru</option>
                    <option value="1">Mahasiswa Lama</option>
                </select>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input value="<?php echo $mhs['password']; ?>" name="password" type="password" class="form-control" id="password">
            </div>
            <button style="width: 100%;" name="submit" type="submit" class="btn btn-primary">Update</button>
        </form>
        <br>
        <a href="hapus.php?id=<?php echo $_GET['id'] ?>"><button style="width: 100%;" name="delete" class="btn btn-danger">Delete</button></a>
       </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>