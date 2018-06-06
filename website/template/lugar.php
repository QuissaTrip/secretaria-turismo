<?php
    $place = $data["content"];

    $address = $place->address;
    $open = $place->open;
    $close = $place->close;
    $headerDescription = "";

    if (strlen($place->address_extra) > 0)
        $address .= " - " . $place->address_extra;

    if ($open == "00:00" && $close == "23:59")
        $time = "Aberto Sempre";
    else
        $time = "Aberto de " . $open . " até " . $close;

    if (null !== $place->description and $place->description !== "") {
        $headerDescription = $place->description;
    } else {
        if (null !== $place->info and $place->info !== "") {
            $headerDescription = $place->info;
        }
    }
?>

<?php getHtmlHeader(array(
    'title' => $place->name . " - QuissaTrip",
    'description' => strip_tags(trim(preg_replace("/\n/", ", ", $headerDescription)))
)) ?>
    <?php getNavbar() ?>

    <section class="single-header">
        <div class="single-bg"></div>

        <div class="content">
            <div>
                <h2><?php echo $place->name ?></h2>
                <h4><?php echo $place->address ?></h4>
                <h6><?php echo $time ?></h6>
            </div>
        </div>
    </section>

    <section class="single-body">
        <?php if (null !== $place->info and $place->info !== "") { ?>
            <div>
                <span class="title">Informações</span>
                <?php echo $place->info ?>
            </div> <?php
        } ?>

        <?php if (null !== $place->description and $place->description !== "") { ?>
            <div>
                <span class="title">Descrição</span>
                <?php echo $place->description ?>
            </div> <?php
        } ?>

        <?php if ((null === $place->description or $place->description == "") and (null == $place->info or $place->info == "")) { ?>
            <div>
                <h3>Nenhuma informações a ser exibida</h3>
            </div> <?php
        } ?>

        <?php
            if (null !== $place->images and count( $place->images ) > 0) { ?>
                <div class="image-slider">
                    <h3>Imagens</h3>
                    <div class="owl-carousel owl-theme testimonials-slider">
                        <?php
                            foreach ($place->images as $image) { ?>
                                <div class="card">
                                    <a href="<?php echo $image ?>" class="glightbox">
                                        <img src="<?php echo $image ?>" alt="image">
                                    </a>
                                </div> <?php
                            }
                        ?>
                    </div>
                </div> <?php
            }
        ?>
    </section>

    <style>
        .single-bg {
            background-image: url(<?php echo $place->images[0] ?>);
        }
    </style>

    <?php scrollToTop() ?>
    <?php getFooter() ?>
<?php getScripts( array("title" => true) ) ?>
