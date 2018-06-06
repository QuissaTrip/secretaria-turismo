<?php
    $link = APP_URL . "/commerces?category=";
    $restaurants = json_decode( file_get_contents($link . "1") );
    $hotels = json_decode( file_get_contents($link . "2") );
    $services = json_decode( file_get_contents($link . "3") );
?>

<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <a href="#" class="brand">QuissaTrip</a>
                <ul class="contact-info list-unstyled">
                    <li><a href="mailto:quissatrip@gmail.com">quissatrip@gmail.com</a></li>
                    <li><a href="tel:022998410460">+55 22 99841-0460</a></li>
                </ul>
                <ul class="social-icons list-inline">
                    <li class="list-inline-item"><a href="#" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <h5>Onde Ficar?</h5>
                <ul class="links list-unstyled">
                    <?php
                        $limit = count($hotels);
                        $limit = ( $limit > 3 ) ? 3 : $limit;

                        for ($i=0; $i < $limit; $i++) {
                            $hotel = $hotels[$i]; ?>
                            <li><a href="<?php echo LUGAR_LINK . $hotel->id ?>"><?php echo $hotel->name ?></a></li> <?php
                        }
                    ?>
                    <li> <a href="<?php echo ONDE_FICAR_LINK ?>">Veja mais...</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <h5>Onde comer?</h5>
                <ul class="links list-unstyled">
                    <?php
                        $limit = count($restaurants);
                        $limit = ( $limit > 3 ) ? 3 : $limit;

                        for ($i=0; $i < $limit; $i++) {
                            $restaurant = $restaurants[$i]; ?>
                            <li><a href="<?php echo LUGAR_LINK . $restaurant->id ?>"><?php echo $restaurant->name ?></a></li> <?php
                        }
                    ?>
                    <li> <a href="<?php echo ONDE_COMER_LINK ?>">Veja mais...</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <h5>Serviços</h5>
                <ul class="links list-unstyled">
                    <?php
                        $limit = count($services);
                        $limit = ( $limit > 3 ) ? 3 : $limit;

                        for ($i=0; $i < $limit; $i++) {
                            $service = $services[$i]; ?>
                            <li><a href="<?php echo LUGAR_LINK . $service->id ?>"><?php echo $service->name ?></a></li> <?php
                        }
                    ?>
                    <li> <a href="<?php echo SERVICOS_LINK ?>">Veja mais...</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyrights">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <p>&copy; 2018 - Todos os direitos reservados</p>
                </div>
                <div class="col-md-5 text-right">
                    <p>Desenvolvido por <a href="#" class="external">Enterprise Solutions</a>  </p>
                </div>
            </div>
        </div>
    </div>
</footer>
