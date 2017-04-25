<?php
class SpeciesController extends AbstractController {

    public function get($request, $response, $args) {
        $this->container->get('logger')->info("browsing API /species [GET]");

        $data = array(
            'species' => 'get'
        );
        return $response->withJson($data, 201);
    }
}
