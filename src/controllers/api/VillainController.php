<?php
class VillainController extends AbstractController {

    public function get($request, $response, $args) {
        $this->container->get('logger')->info("browsing API /villain [GET]");

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
