<?php
class HeroController extends AbstractController {

    public function get($request, $response, $args) {
        $this->container->get('logger')->info("browsing API /hero [GET]");

        $data = array(
            'hero' => 'get'
        );
        return $response->withJson($data, 201);
    }
}
