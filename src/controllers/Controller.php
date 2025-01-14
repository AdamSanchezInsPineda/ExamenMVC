<?php
class Controller {
    protected function render($view, $data = [])
    {
        extract($data);
        $viewFile = "../src/views/$view.php";
        if (file_exists($viewFile)) {
            require $viewFile;
        } else {
            echo "View $view not found.";
        }
    }

    protected function checkSession(){
        session_start();
        if (!isset($_SESSION["matricula"])) {
            header('Location: /');
        }
    }

    protected function checkAdmin(){
        session_start();
        if (!isset($_SESSION["user"])) {
            header('Location: /');
            exit;
        }
    }
}
?>