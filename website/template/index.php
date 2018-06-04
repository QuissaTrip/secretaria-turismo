<?php
    $places = json_decode( file_get_contents(APP_URL . "/places") );
?>

<?php getHtmlHeader() ?>
    <?php getNavbar( array('is_index' => true) ) ?>
    <section id="hero" class="hero hero-home bg-gray">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-6 text order-2 order-lg-1">
                    <h1><b>QuissaTrip</b><br>Quissamã na palma da sua mão</h1>
                    <p class="hero-text">Aderindo as tendências do século 21, Quissamã agora possui também um aplicativo de turismo. Nele é possível encontrar todos os comércios, hotéis, pousadas, restaurantes e serviços cadastrados.</p>
                    <div class="CTA">
                        <a href="<?php echo PLAYSTORE_LINK ?>" class="btn btn-primary btn-shadow btn-gradient link-scroll">Baixar agora</a>
                        <a href="#sobre" class="btn btn-outline-primary link-scroll">Saiba mais</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="<?php echo IMAGE_URL ?>/phone.png" alt="QuissaTrip - Phone" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section id="lugares" class="testimonials">
        <div class="container">
            <header class="text-center no-margin-bottom">
                <h2>Principais Lugares</h2>
                <p class="lead" style="color: rgba(0,0,0,0.6)">Clique <a href="<?php echo LUGARES_LINK ?>">aqui</a> para ver todos os lugares cadastrados</p>
            </header>
            <div class="owl-carousel owl-theme testimonials-slider">
                <?php
                    $limit = count($places);
                    $limit = ( $limit > 4 ) ? 4 : $limit;

                    for ($i=0; $i < $limit; $i++) {
                        $place = $places[$i]; ?>
                        <div class="card text-center">
                            <img class="background" src="<?php echo $place->image ?>" />
                            <div class="content">
                                <h4><?php echo $place->name ?></h4>
                                <a href="<?php echo LUGAR_LINK . $place->id ?>" class="btn btn-outline-white">Ver mais</a>
                            </div>
                        </div> <?php
                    }
                ?>
            </div>
        </div>
    </section>

    <section id="sobre" class="features bg-gray">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="text col-lg-6 order-2 order-lg-1">
                    <div class="icon">
                        <img src="<?php echo IMAGE_URL ?>/camera.png" alt="..." class="img-fluid">
                    </div>
                    <h4>Compartilhe seus momentos pelo aplicativo</h4>
                    <p>Nossos chamados rolezinhos, permitem que você e seus amigos possam compartilhar suas experiências pelos pontos turísticos da cidade.</p>
                    <a href="<?php echo ROLEZINHOS_LINK ?>" class="btn btn-primary btn-shadow btn-gradient">Veja os rolezinhos</a>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2">
                    <img src="<?php echo IMAGE_URL ?>/rolezinho.png" alt="QuissaTrip - Rolezinho" class="img-fluid phone-image-feature">
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="image col-lg-6">
                    <img src="<?php echo IMAGE_URL ?>/agenda.png" alt="QuissaTrip - Agenda" class="img-fluid phone-image-feature">
                </div>
                <div class="text col-lg-6">
                    <div class="icon">
                        <img src="<?php echo IMAGE_URL ?>/calendar.png" alt="..." class="img-fluid">
                    </div>
                    <h4>Agenda oficial do município</h4>
                    <p>Tenha no seu bolso, a agenda completa e atualizada de todos os eventos, festividades e feriados que o município reconhece</p>
                    <a href="<?php echo AGENDA_LINK ?>" class="btn btn-primary btn-shadow btn-gradient">Ver agenda</a>
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="text col-lg-6 order-2 order-lg-1">
                    <div class="icon">
                        <img src="<?php echo IMAGE_URL ?>/search-icon.png" alt="..." class="img-fluid">
                    </div>
                    <h4>Pesquisa atualizada com filtros</h4>
                    <p>Pesquisa qualquer coisa que precisar no nosso banco de dados constantemente atualizado. Qualquer coisa que precisar, é só digitar.</p>
                    <a href="<?php echo PLAYSTORE_LINK ?>" class="btn btn-primary btn-shadow btn-gradient">Baixar o aplicativo</a>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2">
                    <img src="<?php echo IMAGE_URL ?>/search.png" alt="QuissaTrip - Rolezinho" class="img-fluid phone-image-feature">
                </div>
            </div>
        </div>
    </section>
    <?php scrollToTop() ?>
    <?php getFooter() ?>
<?php getScripts() ?>
