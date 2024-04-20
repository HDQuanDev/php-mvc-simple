<?php
class BaseController
{
    protected function render($view, $data = [])
    {
        extract($data); //Chuyển các phần tử của mảng thành các biến độc lập với giá trị là giá trị của phần tử đó trong mảng
        require_once __DIR__ . '/../View/' . $view . '.php';
    }

    protected function redirect($url)
    {
        header('Location: ' . $url);
        exit;
    }
    public function index()
    {
        $this->render('Home');
        return;
    }
}
