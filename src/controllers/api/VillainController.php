<?php
class VillainController extends AbstractController {

    public function get($request, $response, $args) {
        $this->container->get('logger')->info("browsing API /villain [GET]");

        // $creators = $app->get('/', \CreatorController::class . ':get');
        // $app->get('/creator', \CreatorController::class . ':get');
        // var_dump($this->container->get('app'));

        $data = array(
            'villain' => 'get'
        );
        return $response->withJson(Villain::all(), 201);
    }

    public function post($request, $response, $args) {
        $this->container->get('logger')->info("browsing API /villain [POST]");

        $data = array(
            'villain' => 'post'
        );
        return $response->withJson($data, 201);
    }
}
