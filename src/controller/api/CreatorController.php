<?php
class CreatorController extends AbstractController {

    public function get($request, $response, $args) {
        $this->container->get('logger')->info("browsing API /creator [GET]");

        $data = array(
            'creator' => 'get'
        );
        return $response->withJson($data, 201);
    }
}
