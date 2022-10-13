<?php
include('php/menu.php');
?>

<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bt.css">
    <link rel="stylesheet" href="css/content.css">
    <link rel="stylesheet" href="css/services.css">
</head>

<div class="container">
    <div class="row m-0">
        <div class="col-md-6 col-12 justify-self-start" id="logo-image">
            <img src="images/IMG1.png" alt="" class="img-fluid">
        </div>
        <div class="col-md-6 col-12 my-2" id="content">
            <h1 class="h1 text-center">Systec Ango</h1>
            <p class="p text-center">Reduzimos a complexidade para maior e melhor entendimento entre humanos e sistemas</p>
            <h1 class="h3 sm-6">Para garantir soluções adequadas a: Pequenas, Medias e Grandes empresas</h1>
            <div class="row py-5">
                <div class="col-6 col-sm-6 text-center">
                    <a href="more_about.php"  id="saber-mais">Saber mais</a>
                </div>
                <div class="col-6 col-sm-6 text-center">
                    <a href="#servicos" id="link-servicos">Serviços</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-12">
            <img src="images/5872147.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-md-6 col-12">
            <h1 class="h1 text-center">Missão e valores...</h1>
            <p class="text-secundary text-center">Optamos por uma missão de valores eticos e desenvolvimento humano</p>
            <h1 class="h3 sm-6">Para garantir soluções adequadas a: Pequenas, Medias e Grandes empresas</h1>
        </div>
    </div>
    <div class="row gy-4" id="servicos">
        <h1 class="main-title text-center">Nossos Serviços</h1>
        <p class="p text-center">Agregamos serviços que vão deixar a sua empresa com uma optima tecnologia</p>
        <div class="col-md-3 col-6">
            <div class="card text-center cards" id="card-mobile">
                <img src="images/mobile-removebg-preview.png" class="card-img-fluid card-img-top card-img-center img-fluid" alt="mobile-foto" height="230">
                <div class="card-body">
                    <h5 class="card-title">desenvolvimento Mobile</h5>
                    <p class="card-text text-center">tenha aplicativos mobile e acelere o processo da sua empresa</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="card cards justify-self-center" id="card-website">
                <img src="images/website-removebg-preview.png" class="card-fluid-center card-img-center card-img-center img-fluid" alt="website-foto" height="230">
                <div class="card-body">
                    <h5 class="card-title text-center">WebSite</h5>
                    <p class="card-text text-center">Construa Websites e tenha uma presença online activa</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="card cards" id="card-ecommerce">
                <img src="images/ecommerce-removebg-preview.png" class="card-img-fluid card-img-top card-img-center img-fluid" alt="ecommerce-foto" height="230">
                <div class="card-body">
                    <h5 class="card-title text-center">ecommerce</h5>
                    <p class="card-text text-center">Tenha ecommerce e crie conexões com seus clienter</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="card cards" id="card-streaming">
                <img src="images/streaming-removebg-preview.png" class="card-img-fluid card-img-top card-img-center img-fluid" alt="streaming-foto" height="230">
                <div class="card-body justify-self-end">
                    <h5 class="card-title text-center">Streaming</h5>
                    <p class="card-text text-center">Conquiste mais público com uma plataforma de streaming</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="card cards" id="card-software">
                <img src="images/software-removebg-preview.png" class="card-img-fluid card-img-top card-img-center" alt="software-foto" height="230">
                <div class="card-body b-5">
                    <h5 class="card-title text-center">desenvolvimento de Softwares</h5>
                    <p class="card-text text-center">Automatize todo trabalho da sua empresa com um software</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="card cards" id="card-marketing">
                <img src="images/marketing-removebg-preview.png" class="card-img-fluid card-img-fluid card-img-top card-img-center img-fluid" alt="marketing-foto" height="230">
                <div class="card-body">
                    <h5 class="card-title text-center">Formação de marketing</h5>
                    <p class="card-text text-center">melhore suas técnicas de vendas fazendo uma formação de marketing digital</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="card cards" id="card-design">
                <img src="images/design-removebg-preview.png" class="card-img-fluid card-img-top card-img-center img-fluid" width="" alt="design-foto" height="230">
                <div class="card-body">
                    <h5 class="card-title text-center">Formação de marketing</h5>
                    <p class="card-text text-center">melhore suas técnicas de vendas fazendo uma formação de marketing digital</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include('php/footer.php');
?>
<script src="js/bootstrap.bundle.min.js">
</script>