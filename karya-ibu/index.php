<?php
    $nama = "Sangsaka Wira";
?>

<html>
    <head>
    </head>

    <body>
        <h1><?php echo "Halo nama saya adalah $nama" ?></h1>
        <?php
            for ($x = 0; $x <= 10; $x++) {
            echo "The number is: $x <br>";
            }
            
        ?>
        <?php 
            $mantap = "String";
            echo var_dump($mantap);
        
        ?>
        <?php
            $array1 = ['Sangsaka Wira','Devita Rachmat','Mustika Rahayu','Mira Faujiah'];
            echo $array1[0];
        ?>
        <?php for($x = 0; $x <= count($array1); $x++) { ?>
            <h1><?php echo $array1[$x] ?></h1>
            <h4><?php echo time(); ?></h4>
            <h4><?php echo date("F j, Y, g:i a"); ?></h4>
        <?php } ?>

    </body>
</html>