<?php
// AdminController

class AdminHeroController {

    protected $container;
    protected $view;
    protected $flash;
    protected $api;

    //Constructor
    public function __construct(Slim\Container $container) 
    {
        $this->container = $container;
        $this->view = $container['view'];
        $this->flash = $container['flash'];
        $this->api = $container['api'];
    }

    public function index($request, $response, $args) {
        $this->container->get('logger')->info("browsing ADMIN /hero");

        $data = array(
            'heros' =>  Hero::all(),
            'form_inputs' => array(
                array(
                    'name' => 'nickname',
                    'label' => 'Nickname',
                    'type' => 'text'
                ),
                array(
                    'name' => 'first_name',
                    'label' => 'First name',
                    'type' => 'text'
                ),
                array(
                    'name' => 'last_name',
                    'label' => 'Last name',
                    'type' => 'text'
                ),
                array(
                    'name' => 'description',
                    'label' => 'Description',
                    'type' => 'textarea'
                ),
                array(
                    'name' => 'created_by',
                    'label' => 'Created By (ID)',
                    'type' => 'select',
                    'values' => Creator::All()
                ),
                array(
                    'name' => 'species',
                    'label' => 'Species (ID)',
                    'type' => 'select',
                    'values' => Species::All(),
                )
            )
        );

        return $this->view->render($response, 'admin/hero.html.twig', $data);
    }

    public function create($request, $response, $args) {
        $this->container->get('logger')->info("browsing ADMIN /hero/create");

        $params = $request->getParsedBody();

        $hero = new Hero;

        $hero->nickname = $params['nickname'];
        $hero->first_name = $params['first_name'];
        $hero->last_name = $params['last_name'];
        $hero->description = $params['description'];
        $hero->created_by = $params['created_by'];
        $hero->species = $params['species'];

        $hero->save();

        return $response->withRedirect('/admin/hero', 301);
    }

    public function delete($request, $response, $args) {
        $this->container->get('logger')->info("browsing ADMIN /hero/delete with id : " + $args['id']);

        $hero = Hero::find($args['id']);
        $hero->delete();

        return $response->withRedirect('/admin/hero', 301);
    }
}
