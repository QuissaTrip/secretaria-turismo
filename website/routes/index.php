<?php
	// $params = $request->getQueryParams();

    $app->get('/', function ($request, $response, $args) {
        return $this->view->render($response, 'index.php');
    });
?>
