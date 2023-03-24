<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acro Cabos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/produtos.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
   <script src="https://kit.fontawesome.com/55d1d6210d.js" crossorigin="anonymous"></script>

</head>
<body>

    <?php 

        include 'bd.php';
        include 'global.php';
        include 'header.php';
        
    ?>

        <main class="container">

            <?php include 'menu_lateral.php'; ?>

            <div class="text-center mt-5">
                <h2>Produtos</h2>
            </div>
            <section class="products d-flex justify-content-around align-items-center mt-5 flex-wrap">
                <?php
                    foreach ($product as $value) {
            
                ?>
                    <div class="product-1 entry">
                        <a href="" class="nav-link">
                            <img src="<?php echo 'img/' . $value['img']; ?>" alt="">
                        </a>
                        <div class="text-center">
                            <span>
                                <?php
                                    echo $value['name'];
                                ?>
                            </span>
                        </div>
                    </div>
                <?php
                    }
                ?>
            </section>
        </main>

    <?php include 'footer.php';?>

    <script src="js/navigation__menu.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script src="js/intersection.js"></script>
</body>
</html>