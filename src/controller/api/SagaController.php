<?php
class SagaController extends AbstractController {

    public function get($request, $response, $args) {
        $this->container->get('logger')->info("browsing API /saga [GET]");

        $data = array(
            'saga' => 'get'
        );
        return $response->withJson($data, 201);
    }
}
