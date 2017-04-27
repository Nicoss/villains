<?php
class OrganizationController extends AbstractController {

    public function get($request, $response, $args) {
        $this->container->get('logger')->info("browsing API /organization [GET]");

        $data = array(
            'organization' => 'get'
        );
        return $response->withJson(Organization::all(), 201);
    }

    public function post($request, $response, $args) {
        $this->container->get('logger')->info("browsing API /organization [POST]");

        $data = array(
            'organization' => 'post'
        );
        return $response->withJson($data, 201);
    }
}
