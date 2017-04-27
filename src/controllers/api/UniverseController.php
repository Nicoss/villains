<?php
class UniverseController extends AbstractController {

    public function get($request, $response, $args) {
        $this->container->get('logger')->info("browsing API /universe [GET]");

        $data = array(
            'universe' => 'get'
        );
        return $response->withJson(Universe::all(), 201);
    }

    public function post($request, $response, $args) {
        $this->container->get('logger')->info("browsing API /universe [POST]");

        $data = array(
            'universe' => 'post'
        );
        return $response->withJson($data, 201);
    }
}
