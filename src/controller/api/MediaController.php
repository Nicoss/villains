<?php
class MediaController extends AbstractController {

    public function get($request, $response, $args) {
        $this->container->get('logger')->info("browsing API /media [GET]");

        $data = array(
            'media' => 'get'
        );
        return $response->withJson($data, 201);
    }
}
