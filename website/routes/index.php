<?php
	// $params = $request->getQueryParams();

    $app->get('/', function ($request, $response, $args) {
        return $this->view->render($response, 'index.php');
    });

    $app->get('/agenda', function ($request, $response, $args) {
        return $this->view->render($response, 'agenda.php');
    });

    $app->get('/rolezinhos', function ($request, $response, $args) {
        return $this->view->render($response, 'rolezinhos.php');
    });

    $app->get('/onde-ficar', function ($request, $response, $args) {
        return $this->view->render($response, 'lugares.php', array(
            "url" => "/commerces?category=2",
            "title" => "Lugares Onde Ficar"
        ));
    });

    $app->get('/servicos', function ($request, $response, $args) {
        return $this->view->render($response, 'lugares.php', array(
            "url" => "/commerces",
            "title" => "Serviços dentro do município"
        ));
    });

    $app->get('/onde-comer', function ($request, $response, $args) {
        return $this->view->render($response, 'lugares.php', array(
            "url" => "/commerces?category=1",
            "title" => "Lugares Onde Comer"
        ));
    });

    $app->get('/lugares', function ($request, $response, $args) {
        return $this->view->render($response, 'lugares.php', array(
            "url" => "/places",
            "title" => "Principais Lugares"
        ));
    });

    $app->get('/lugares/{ id }', function ($request, $response, $args) {
        $id = $request->getAttribute("route")->getArgument("id");
        $content = json_decode( file_get_contents(APP_URL . "/entity/" . $id) );

        return $this->view->render($response, 'lugar.php', array( "content" => $content ));
    });
?>
