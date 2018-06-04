<?php
    $URL = $data["url"];
    $TITLE = $data["title"];

    if ($URL == "/commerces") {
        $postos = json_decode( file_get_contents(APP_URL . $URL . "?category=3") );
        $diversao = json_decode( file_get_contents(APP_URL . $URL . "?category=4") );
        $bancos = json_decode( file_get_contents(APP_URL . $URL . "?category=6") );
        $places = array_merge($postos, $diversao, $bancos);
    } else {
        $places = json_decode( file_get_contents(APP_URL . $URL) );
    }
?>

<?php getHtmlHeader() ?>
    <?php getNavbar() ?>

    <section id="lugares" class="testimonials">
        <div class="container">
            <header class="text-center no-margin-bottom">
                <h2 style="margin-bottom: 50px"><?php echo $TITLE ?></h2>
            </header>
            <div class="row">
                <?php
                    foreach ($places as $place) { ?>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="card text-center">
                                <img class="background" data-src="<?php echo $place->image ?>" />
                                <div class="content">
                                    <h4><?php echo $place->name ?></h4>
                                    <a href="<?php echo LUGAR_LINK . $place->id ?>" class="btn btn-outline-white">Ver mais</a>
                                </div>
                            </div>
                        </div> <?php
                    }
                ?>
            </div>
        </div>
    </section>

    <?php scrollToTop() ?>
    <?php getFooter() ?>
<?php getScripts() ?>
