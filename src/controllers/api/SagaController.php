<?php
class SagaController extends AbstractController {

    public function get($request, $response, $args) {
        $this->container->get('logger')->info("browsing API /saga [GET]");

        $data = array(
            'saga' => 'get'
        );
        return $response->withJson(Saga::all(), 201);
    }

    public function post($request, $response, $args) {
        $this->container->get('logger')->info("browsing API /saga [POST]");

        $data = array(
            'saga' => 'post'
        );
        return $response->withJson($data, 201);
    }
}
