<?php 
    require "functions.php";
     if(isset($_GET["id"])){
        $id = $_GET["id"];
        $results = mysqli_query($conn,"DELETE FROM users WHERE id_user=$id");
        $mhs = mysqli_fetch_assoc($results);
        header("Location: index.php");
    }
?>