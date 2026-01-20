<?php

namespace App\Core;

class Router
{
    public function dispatch(): void
    {
        $controllerName = isset($_GET['controller']) && $_GET['controller'] !== ''
            ? ucfirst(strtolower($_GET['controller'])) . 'Controller'
            : 'HomeController';

        $action = isset($_GET['action']) && $_GET['action'] !== ''
            ? $_GET['action']
            : 'index';

        $controllerClass = '\\App\\Controllers\\' . $controllerName;

        if (!class_exists($controllerClass)) {
            http_response_code(404);
            echo "Contrôleur introuvable : " . htmlspecialchars($controllerName);
            return;
        }

        $controller = new $controllerClass();

        if (!method_exists($controller, $action)) {
            http_response_code(404);
            echo "Action introuvable : " . htmlspecialchars($action);
            return;
        }

        $controller->$action();
    }
}


