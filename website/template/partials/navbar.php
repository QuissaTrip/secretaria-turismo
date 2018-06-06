<?php
    $link = "";
    if (isset( $data["is_index"] ) == false and $data["is_index"] !== true) {
        $link = "/website/";
    }
?>

<!-- navbar-->
<header class="header">
    <nav class="navbar navbar-expand-lg fixed-top">
        <a href="/website" class="navbar-brand">
            <img src="/website/assets/img/quissatrip.png"/>
        </a>
        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><span></span><span></span><span></span></button>
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto align-items-start align-items-lg-center">
                <li class="nav-item"><a href="<?php echo $link ?>#sobre" class="nav-link link-scroll">Sobre</a></li>
                <li class="nav-item"><a href="<?php echo LUGARES_LINK ?>" class="nav-link link-scroll">Lugares</a></li>
                <li class="nav-item"><a href="<?php echo ONDE_FICAR_LINK ?>" class="nav-link link-scroll">Onde Ficar</a></li>
                <li class="nav-item"><a href="<?php echo ONDE_COMER_LINK ?>" class="nav-link link-scroll">Onde Comer</a></li>
                <li class="nav-item"><a href="<?php echo SERVICOS_LINK ?>" class="nav-link link-scroll">Serviços</a></li>
            </ul>
            <div class="navbar-text">
                <a href="<?php echo ROLEZINHOS_LINK ?>" class="btn btn-primary navbar-btn btn-shadow btn-gradient">Rolezinhos</a>
            </div>
        </div>
    </nav>
</header>
