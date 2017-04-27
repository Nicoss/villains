<?php
class PhysicalDistinctionController extends AbstractController {

    public function get($request, $response, $args) {
        $this->container->get('logger')->info("browsing API /physical_distinction [GET]");

        $data = array(
            'physical_distinction' => 'get'
        );
        return $response->withJson(PhysicalDistinction::all(), 201);
    }

    public function post($request, $response, $args) {
        $this->container->get('logger')->info("browsing API /physical_distinction [POST]");

        $data = array(
            'physical_distinction' => 'post'
        );
        return $response->withJson($data, 201);
    }
}
