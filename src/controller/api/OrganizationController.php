<?php
class OrganizationController extends AbstractController {

    public function get($request, $response, $args) {
        $this->container->get('logger')->info("browsing API /organization [GET]");

        $data = array(
            'organization' => 'get'
        );
        return $response->withJson($data, 201);
    }
}
