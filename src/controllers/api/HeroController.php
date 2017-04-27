<?php
class HeroController extends AbstractController {

    public function get($request, $response, $args) {
        $this->container->get('logger')->info("browsing API /hero [GET]");

        return $response->withJson(Hero::all(), 201);
    }

    public function post($request, $response, $args) {
        $this->container->get('logger')->info("browsing API /hero [POST]");

        $data = array(
            'hero' => 'post'
        );
        return $response->withJson($data, 201);
    }
}
