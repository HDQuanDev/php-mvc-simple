<?php
//đăng ký 1 hàm autoload để load file controller
spl_autoload_register(function ($class_name) {
    $file = 'App/Controller/' . $class_name . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

$controller = isset($_GET['controller']) ? $_GET['controller'] . 'Controller' : 'BaseController';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

if (class_exists($controller)) { //kiểm tra xem class có tồn tại không
    $object = new $controller;
    if (method_exists($object, $action)) { //kiểm tra xem phương thức có tồn tại không
        if ($id !== null) {
            $object->$action($id);
        } else {
            $object->$action();
        }
    } else {
        echo "Action không tồn tại. Các phương thức có sẵn: " . implode(', ', get_class_methods($object));
    }
} else {
    echo "Controller không tồn tại";
}
