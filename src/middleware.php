<?php
// Application middleware

$app->add(new RequestModifier);

// basic auth from https://github.com/tuupola/slim-basic-auth/tree/2.x
$app->add(new \Slim\Middleware\HttpBasicAuthentication([
	"path" => ["/admin"],
    /* "passthrough" => ["/api/token", "/admin/ping"], */
    "secure" => true,
    "relaxed" => ["villain", "localhost", "127.0.0.1"],
    "realm" => "Protected",
	"users" => [
        "nicoss" => getenv("NICOSS_PASSWORD")
    ],
    "error" => function ($request, $response, $arguments) {
        $data = array(
            'status' => 'error',
            'message' => 'authentification failed',
            'tip' => 'My name is villain'
        );
        return $response->withJson($data, 401);
    }
]));
