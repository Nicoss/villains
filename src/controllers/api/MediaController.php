<?php
class MediaController extends AbstractController {

    public function get($request, $response, $args) {
        $this->container->get('logger')->info("browsing API /media [GET]");

        $data = array(
            'media' => 'get'
        );
        return $response->withJson(Media::all(), 201);
    }

    public function post($request, $response, $args) {
        $this->container->get('logger')->info("browsing API /media [POST]");

        $data = array(
            'media' => 'post'
        );
        return $response->withJson($data, 201);
    }
}
