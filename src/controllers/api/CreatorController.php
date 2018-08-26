<?php
class CreatorController extends AbstractController {

    public function get($request, $response, $args) {
        $this->container->get('logger')->info("browsing API /creator [GET]");

        return $response->withJson(Creator::all(), 200);
    }

    public function post($request, $response, $args) {
        $this->container->get('logger')->info("browsing API /creator [POST]");
        
        $data = array(
            'creator' => 'post'
        );
        return $response->withJson($data, 201);
    }
}
