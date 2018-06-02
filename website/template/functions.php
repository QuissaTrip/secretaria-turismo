<?php
	define('PARTIALS_URL', '../../website/template/partials/');

	function getHtmlHeader($data = null) {
		$title = ( isset( $data["title"] ) ) ? $data["title"] : APP_NAME;
		$description = "Quissamã na palma da sua mão. Aderindo as tendências do século 21, Quissamã agora possui também um aplicativo de turismo. Nele é possível encontrar todos os comércios, hotéis, pousadas, restaurantes e serviços cadastrados.";
		$description = ( isset( $data["description"] ) ) ? $data["description"] : $description;
		$icon = BASE_URL . "/website/assets/img/quissatrip.png";
		$fb = BASE_URL . "/website/assets/img/facebbok-share.png";
		require PARTIALS_URL . "header.php";
	}

	function getNavbar() {
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

	function getScripts() {
		require PARTIALS_URL . "scripts.php";
	}
?>
