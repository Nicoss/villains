<?php
class VillainController extends AbstractController {

    public function get($request, $response, $args) {
        $this->container->get('logger')->info("browsing API /villain [GET]");

        $data = array(
            'villain' => 'get'
        );
        return $response->withJson($data, 201);
    }
}
