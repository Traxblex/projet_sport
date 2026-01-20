<?php

namespace App\Core;

class Controller
{
    protected function render(string $view, array $data = []): void
    {
        extract($data);

        $viewFile = __DIR__ . '/../views/' . $view . '.php';

        if (!file_exists($viewFile)) {
            http_response_code(404);
            echo "Vue introuvable : " . htmlspecialchars($view);
            return;
        }

        include __DIR__ . '/../views/layout/header.php';
        include $viewFile;
        include __DIR__ . '/../views/layout/footer.php';
    }
}


