<?php
	define('PARTIALS_URL', '../../website/template/partials/');

	function getServices() {
		$URL = "/commerces";
        $postos = json_decode( file_get_contents(APP_URL . $URL . "?category=3") );
        $diversao = json_decode( file_get_contents(APP_URL . $URL . "?category=4") );
        $bancos = json_decode( file_get_contents(APP_URL . $URL . "?category=6") );

        return array_merge($postos, $diversao, $bancos);
	}

	function getHtmlHeader($data = null) {
		$title = ( isset( $data["title"] ) ) ? $data["title"] : APP_NAME;
		$description = "Quissamã na palma da sua mão. Aderindo as tendências do século 21, Quissamã agora possui também um aplicativo de turismo. Nele é possível encontrar todos os comércios, hotéis, pousadas, restaurantes e serviços cadastrados.";
		$description = ( isset( $data["description"] ) ) ? $data["description"] : $description;

		$icon = IMAGE_URL . "/quissatrip.png";
		$fb = IMAGE_URL . "/facebook-share.png";

		require PARTIALS_URL . "header.php";
	}

	function getNavbar($data = null) {
		require PARTIALS_URL . "navbar.php";
	}

	function scrollToTop() { ?>
	    <div id="scrollTop">
	      	<div class="d-flex align-items-center justify-content-end"><i class="fa fa-long-arrow-up"></i>&nbsp;&nbsp; Topo &nbsp;</div>
	    </div> <?php
	}

	function getFooter() {
		require PARTIALS_URL . "footer.php";
	}

	function getScripts($data = null) {
		$is_single = ( isset( $data["title"] ) ) ? true : false;
		require PARTIALS_URL . "scripts.php";
	}
?>
