<?php


class Router
{
    public $routes =[
        'GET' => [],
        'POST' => []
    ];


    public static function load ($file)
    {
        $router = new static;
        require $file;

        return $router;
    }

    public function define ($routes)
    {
        $this -> routes = $routes;
        // de method basatd3eha 3ashan a3ml object mn el class w a7ot feha routes
    }


    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri)
    {

        if (array_key_exists($uri , $this -> routes)) {
            return $this -> routes[$uri];
        }

        throw new Exception('no routes defined for this uri');

        /*el method de 3ashan lama el user eroh l saf7a ba3ml check badwr fe el
        routes bta3ty el ana lesa 7attha fo2 law mwgoda bawdeh l el route dah w el route ywadeh l el controller
        w el controller twadeh l saf7t el view
        */
    }

}