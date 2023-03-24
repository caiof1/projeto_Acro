<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acro Cabos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
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
        <!-- Diferenciais -->
        <section class="diferenciais w-100 d-flex justify-content-around align-items-center">
            <div class="produto_certificado">
                <span>Produto Certificados</span>
            </div>
            <div class="qualidade">
                <span>Qualidade</span>
            </div>
            <div class="departamento_engenharia">
                <span>Departamento de Engenharia</span>
            </div>
        </section>   
        <!-- Fim Diferenciais -->

        <!-- Banner -->
        <section class="banner">
            <div class="servico_especializado w-100 bg-white entry">
                <div class="title p-4">
                    <h3>SERVIÇO ESPECIALIZADO</h3>
                    <div class="text_servico p-3">
                        <span>
                            Na ACRO, você não assume riscos desnecessarios. Contrate quem realmente sabe trabalhar para que não tenha sua operação paralisada.
                        </span>
                        <br></br>
                        <span>
                            Sabendo disso, criamos uma nova operação chamada “Acro Services”, para trabalhar com serviços especializados para a sua operação
                        </span>
                    </div>
                    <div class="p-3">
                        <button type="button" class="">
                            <a href="" class="nav-link">Saiba Mais</a>
                        </button>
                    </div>
                </div>
                
            </div>

        </section>
        <!-- Fim Banner -->

        <?php include 'menu_lateral.php';?>

        <div class="politica__qualidade pt-3">
            <div class="text__politica entry">
                <h3>Política de qualidade</h3>
            </div>
            <div class="qualidades__text d-flex justify-content-around align-items-center my-4">
                <div class="missao entry">
                    <span>
                        <img src="img/icone-missao.webp"  alt="">
                    </span>
                    <span>
                        Oferecer soluções para seus clientes nas operações de elevação, amarração e movimentação de cargas através de conhecimentos técnicos
                    </span>
                </div>
                <div class="visao entry">
                    <span>
                        <img src="img/icone-visao.webp" alt="">
                    </span>
                    <span>
                        Manter-se referência nacional em soluções para elevação, amarração e movimentação de cargas e expandir seus negócios para o mercado internacional.
                    </span>
                </div>
                <div class="valores entry">
                    <span>
                        <img src="img/icone-valores.webp" alt="">
                    </span>
                    <span>
                        • Integridade e Ética • Trabalho em Equipe • Compromisso com o Cliente • Qualidade • Respeito aos Colaboradores • Inovação • Foco em resultados
                    </span>
                </div>
            </div>
        </div>

        <section class="products d-flex justify-content-around align-items-center mt-5">
            <?php
                for($i = 0; $i < 4; $i++) {
                    
            ?>
                <div class="product-1 entry">
                    <a href="" class="nav-link">
                        <img src="<?php echo 'img/' . $product[$i]['img']; ?>" alt="">
                    </a>
                    <div class="text-center">
                        <span>
                            <?php
                                echo $product[$i]['name'];
                            ?>
                        </span>
                    </div>
                </div>

            <?php
                }
            ?>
           
            
        </section>

        <section class="entry button__ver__mais text-center mt-4">
            <a href="produtos.php">
                <button>
                    <span>Ver produtos</span>
                </button>
            </a>
        </section>

        <section class="entry contatos d-flex align-items-center justify-content-around my-5">
            <span>
                <i class="fa-solid fa-map-location-dot"></i>
                Rua Nilton C de Andrade, 1326 - Jardim Andarai
            </span>
            <span>
                <i class="fa-solid fa-phone"></i>
                (11) 4750-1996
            </span>
            <span>
                <i class="fa-solid fa-phone"></i>
                (11) 3299-5400
            </span>
            <span>
                <i class="fa-regular fa-envelope"></i>
                acrocabo?acrocabo.com.br
            </span>
        </section>
        
        <section class="certificacoes py-5">
            <div class="text-center mb-5">
                <h2>Certificações</h2>
            </div>
            <div class="img__certificados d-flex justify-content-around align-items-center">
                <div class="entry">
                    <img src="img/certificado-1.webp" alt="Petrobras">
                </div>
                <div class="entry">
                    <img src="img/certificado-2.webp" alt="Onip">
                </div>
                <div class="entry">
                    <img src="img/certificado-3.webp" alt="D.U.N.S Registered">
                </div>
                <div class="entry">
                    <img src="img/certificado-4.webp" alt="ISO">
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php';?>

    <script src="js/navigation__menu.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script src="js/intersection.js"></script>
</body>
</html>