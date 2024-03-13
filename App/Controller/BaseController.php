<?php
class BaseController
{
    protected function render($view, $data = [])
    {
        extract($data);
        require_once __DIR__ . '/../View/' . $view . '.php';
    }

    protected function redirect($url)
    {
        header('Location: ' . $url);
        exit;
    }
    public function default()
    {
        echo "Base Controller";
    }
}
