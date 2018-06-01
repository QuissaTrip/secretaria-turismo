<?php
	/*
		$response = file_get_contents(APP_URL . "/places");
		var_dump($response);
	*/

	define('PARTIALS_URL', '../../website/template/partials/');


	function getHtmlHeader($data = null) {
		$title = ( isset( $data["title"] ) ) ? $data["title"] : APP_NAME;
		require PARTIALS_URL . "header.php";
	}

	function getNavbar() {
		require PARTIALS_URL . "navbar.php";
	}

	function scrollToTop() { ?>
	    <div id="scrollTop">
	      	<div class="d-flex align-items-center justify-content-end"><i class="fa fa-long-arrow-up"></i>&nbsp;&nbsp;&nbsp; Topo</div>
	    </div> <?php
	}

	function getFooter() {
		require PARTIALS_URL . "footer.php";
	}

	function getScripts() {
		require PARTIALS_URL . "scripts.php";
	}
?>
